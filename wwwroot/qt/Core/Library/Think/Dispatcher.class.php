<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Think;
/**
 * ThinkPHP内置的Dispatcher类
 * 完成URL解析、路由和调度
 */
class Dispatcher {

    /**
     * URL映射到控制器
     * @access public
     * @return void
     */
    static public function dispatch() {
        $varPath        =   C('VAR_PATHINFO');
        $varAddon       =   C('VAR_ADDON');
        $varModule      =   C('VAR_MODULE');
        $varController  =   C('VAR_CONTROLLER');
        $varAction      =   C('VAR_ACTION');
        $urlCase        =   C('URL_CASE_INSENSITIVE');
        if(isset($_GET[$varPath])) { // 判断URL里面是否有兼容模式参数
            $_SERVER['PATH_INFO'] = $_GET[$varPath];
            unset($_GET[$varPath]);
        }elseif(IS_CLI){ // CLI模式下 index.php module/controller/action/params/...
            $_SERVER['PATH_INFO'] = isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : '';
        }

        // 开启子域名部署
        if(C('APP_SUB_DOMAIN_DEPLOY')) {
            $rules      = C('APP_SUB_DOMAIN_RULES');
            if(isset($rules[$_SERVER['HTTP_HOST']])) { // 完整域名或者IP配置
                define('APP_DOMAIN',$_SERVER['HTTP_HOST']); // 当前完整域名
                $rule = $rules[APP_DOMAIN];
            }else{
                if(strpos(C('APP_DOMAIN_SUFFIX'),'.')){ // com.cn net.cn 
                    $domain = array_slice(explode('.', $_SERVER['HTTP_HOST']), 0, -3);
                }else{
                    $domain = array_slice(explode('.', $_SERVER['HTTP_HOST']), 0, -2);                    
                }
                if(!empty($domain)) {
                    $subDomain = implode('.', $domain);
                    define('SUB_DOMAIN',$subDomain); // 当前完整子域名
                    $domain2   = array_pop($domain); // 二级域名
                    if($domain) { // 存在三级域名
                        $domain3 = array_pop($domain);
                    }
                    if(isset($rules[$subDomain])) { // 子域名
                        $rule = $rules[$subDomain];
                    }elseif(isset($rules['*.' . $domain2]) && !empty($domain3)){ // 泛三级域名
                        $rule = $rules['*.' . $domain2];
                        $panDomain = $domain3;
                    }elseif(isset($rules['*']) && !empty($domain2) && 'www' != $domain2 ){ // 泛二级域名
                        $rule      = $rules['*'];
                        $panDomain = $domain2;
                    }
                }                
            }

            if(!empty($rule)) {
                // 子域名部署规则 '子域名'=>array('模块名[/控制器名]','var1=a&var2=b');
                if(is_array($rule)){
                    list($rule,$vars) = $rule;
                }
                $array      =   explode('/',$rule);
                // 模块绑定
                define('BIND_MODULE',array_shift($array));
                // 控制器绑定         
                if(!empty($array)) {
                    $controller  =   array_shift($array);
                    if($controller){
                        define('BIND_CONTROLLER',$controller);
                    }
                }
                if(isset($vars)) { // 传入参数
                    parse_str($vars,$parms);
                    if(isset($panDomain)){
                        $pos = array_search('*', $parms);
                        if(false !== $pos) {
                            // 泛域名作为参数
                            $parms[$pos] = $panDomain;
                        }                         
                    }                   
                    $_GET   =  array_merge($_GET,$parms);
                }
            }
        }
        // 分析PATHINFO信息
        if(!isset($_SERVER['PATH_INFO'])) {
            $types   =  explode(',',C('URL_PATHINFO_FETCH'));
            foreach ($types as $type){
                if(0===strpos($type,':')) {// 支持函数判断
                    $_SERVER['PATH_INFO'] =   call_user_func(substr($type,1));
                    break;
                }elseif(!empty($_SERVER[$type])) {
                    $_SERVER['PATH_INFO'] = (0 === strpos($_SERVER[$type],$_SERVER['SCRIPT_NAME']))?
                        substr($_SERVER[$type], strlen($_SERVER['SCRIPT_NAME']))   :  $_SERVER[$type];
                    break;
                }
            }
        }

        $depr = C('URL_PATHINFO_DEPR');
        define('MODULE_PATHINFO_DEPR',  $depr);

        if(empty($_SERVER['PATH_INFO'])) {
            $_SERVER['PATH_INFO'] = '';
            define('__INFO__','');
            define('__EXT__','');
        }else{
            define('__INFO__',trim($_SERVER['PATH_INFO'],'/'));
            // URL后缀
            define('__EXT__', strtolower(pathinfo($_SERVER['PATH_INFO'],PATHINFO_EXTENSION)));
            $_SERVER['PATH_INFO'] = __INFO__;     
            if(!defined('BIND_MODULE') && (!C('URL_ROUTER_ON') || !Route::check())){
                if (__INFO__ && C('MULTI_MODULE')){ // 获取模块名
                    $paths      =   explode($depr,__INFO__,2);
                    $allowList  =   C('MODULE_ALLOW_LIST'); // 允许的模块列表
                    $module     =   preg_replace('/\.' . __EXT__ . '$/i', '',$paths[0]);
                    if( empty($allowList) || (is_array($allowList) && in_array_case($module, $allowList))){
                        $_GET[$varModule]       =   $module;
                        $_SERVER['PATH_INFO']   =   isset($paths[1])?$paths[1]:'';
                    }
                }
            }             
        }

        // URL常量
        define('__SELF__',strip_tags($_SERVER[C('URL_REQUEST_URI')]));

        // 获取模块名称
        define('MODULE_NAME', defined('BIND_MODULE')? BIND_MODULE : self::getModule($varModule));
        
        // 检测模块是否存在
        if( MODULE_NAME && (defined('BIND_MODULE') || !in_array_case(MODULE_NAME,C('MODULE_DENY_LIST')) ) && is_dir(APP_PATH.MODULE_NAME)){
            // 定义当前模块路径
            define('MODULE_PATH', APP_PATH.MODULE_NAME.'/');
            // 定义当前模块的模版缓存路径
            C('CACHE_PATH',CACHE_PATH.MODULE_NAME.'/');
            // 定义当前模块的日志目录
	        C('LOG_PATH',  realpath(LOG_PATH).'/'.MODULE_NAME.'/');

            // 模块检测
            Hook::listen('module_check');

            // 加载模块配置文件
            if(is_file(MODULE_PATH.'Conf/config'.CONF_EXT))
                C(load_config(MODULE_PATH.'Conf/config'.CONF_EXT));
            // 加载应用模式对应的配置文件
            if('common' != APP_MODE && is_file(MODULE_PATH.'Conf/config_'.APP_MODE.CONF_EXT))
                C(load_config(MODULE_PATH.'Conf/config_'.APP_MODE.CONF_EXT));
            // 当前应用状态对应的配置文件
            if(APP_STATUS && is_file(MODULE_PATH.'Conf/'.APP_STATUS.CONF_EXT))
                C(load_config(MODULE_PATH.'Conf/'.APP_STATUS.CONF_EXT));

            // 加载模块别名定义
            if(is_file(MODULE_PATH.'Conf/alias.php'))
                Think::addMap(include MODULE_PATH.'Conf/alias.php');
            // 加载模块tags文件定义
            if(is_file(MODULE_PATH.'Conf/tags.php'))
                Hook::import(include MODULE_PATH.'Conf/tags.php');
            // 加载模块函数文件
            if(is_file(MODULE_PATH.'Common/function.php'))
                include MODULE_PATH.'Common/function.php';
            
            $urlCase        =   C('URL_CASE_INSENSITIVE');
            // 加载模块的扩展配置文件
            load_ext_file(MODULE_PATH);
        }else{
            E(L('_MODULE_NOT_EXIST_').':'.MODULE_NAME);
			header("Location: /404.html");
			exit();
        }

        if(!defined('__APP__')){
	        $urlMode        =   C('URL_MODEL');
	        if($urlMode == URL_COMPAT ){// 兼容模式判断
	            define('PHP_FILE',_PHP_FILE_.'?'.$varPath.'=');
	        }elseif($urlMode == URL_REWRITE ) {
	            $url    =   dirname(_PHP_FILE_);
	            if($url == '/' || $url == '\\')
	                $url    =   '';
	            define('PHP_FILE',$url);
	        }else {
	            define('PHP_FILE',_PHP_FILE_);
	        }
	        // 当前应用地址
	        define('__APP__',strip_tags(PHP_FILE));
	    }
        // 模块URL地址
        $moduleName    =   defined('MODULE_ALIAS')? MODULE_ALIAS : MODULE_NAME;
        define('__MODULE__',(defined('BIND_MODULE') || !C('MULTI_MODULE'))? __APP__ : __APP__.'/'.($urlCase ? strtolower($moduleName) : $moduleName));

        if('' != $_SERVER['PATH_INFO'] && (!C('URL_ROUTER_ON') ||  !Route::check()) ){   // 检测路由规则 如果没有则按默认规则调度URL
            Hook::listen('path_info');
            // 检查禁止访问的URL后缀
            if(C('URL_DENY_SUFFIX') && preg_match('/\.('.trim(C('URL_DENY_SUFFIX'),'.').')$/i', $_SERVER['PATH_INFO'])){
                send_http_status(404);
                exit;
            }
            // 去除URL后缀
            $_SERVER['PATH_INFO'] = preg_replace(C('URL_HTML_SUFFIX')? '/\.('.trim(C('URL_HTML_SUFFIX'),'.').')$/i' : '/\.'.__EXT__.'$/i', '', $_SERVER['PATH_INFO']);
			//var_dump($_SERVER['PATH_INFO']);die;
            $depr   =   C('URL_PATHINFO_DEPR');
            $paths  =   explode($depr,trim($_SERVER['PATH_INFO'],$depr));

            if(!defined('BIND_CONTROLLER')) {// 获取控制器
                if(C('CONTROLLER_LEVEL')>1){// 控制器层次
                    $_GET[$varController]   =   implode('/',array_slice($paths,0,C('CONTROLLER_LEVEL')));
                    $paths  =   array_slice($paths, C('CONTROLLER_LEVEL'));
                }else{
                    $_GET[$varController]   =   array_shift($paths);
                }
            }
            // 获取操作
            if(!defined('BIND_ACTION')){
                $_GET[$varAction]  =   array_shift($paths);
            }
            // 解析剩余的URL参数
            $var  =  array();
            if(C('URL_PARAMS_BIND') && 1 == C('URL_PARAMS_BIND_TYPE')){
                // URL参数按顺序绑定变量
                $var    =   $paths;
            }else{
                preg_replace_callback('/(\w+)\/([^\/]+)/', function($match) use(&$var){$var[$match[1]]=strip_tags($match[2]);}, implode('/',$paths));
            }
            $_GET   =  array_merge($var,$_GET);
        }
        // 获取控制器的命名空间（路径）
        define('CONTROLLER_PATH',   self::getSpace($varAddon,$urlCase));
        // 获取控制器和操作名
        define('CONTROLLER_NAME',   defined('BIND_CONTROLLER')? BIND_CONTROLLER : self::getController($varController,$urlCase));
        define('ACTION_NAME',       defined('BIND_ACTION')? BIND_ACTION : self::getAction($varAction,$urlCase));

        // 当前控制器的UR地址
        $controllerName    =   defined('CONTROLLER_ALIAS')? CONTROLLER_ALIAS : CONTROLLER_NAME;
        define('__CONTROLLER__',__MODULE__.$depr.(defined('BIND_CONTROLLER')? '': ( $urlCase ? parse_name($controllerName) : $controllerName )) );

        // 当前操作的URL地址
        define('__ACTION__',__CONTROLLER__.$depr.(defined('ACTION_ALIAS')?ACTION_ALIAS:ACTION_NAME));

        //保证$_REQUEST正常取值
        $_REQUEST = array_merge($_POST,$_GET,$_COOKIE);	// -- 加了$_COOKIE.  保证哦..
    }

    /**
     * 获得控制器的命名空间路径 便于插件机制访问
     */
    static private function getSpace($var,$urlCase) {
        $space  =   !empty($_GET[$var])?strip_tags($_GET[$var]):'';
        unset($_GET[$var]);
        return $space;
    }

    /**
     * 获得实际的控制器名称
     */
    static private function getController($var,$urlCase) {
        $controller = (!empty($_GET[$var])? $_GET[$var]:C('DEFAULT_CONTROLLER'));
        unset($_GET[$var]);
        if($maps = C('URL_CONTROLLER_MAP')) {
            if(isset($maps[strtolower($controller)])) {
                // 记录当前别名
                define('CONTROLLER_ALIAS',strtolower($controller));
                // 获取实际的控制器名
                return   ucfirst($maps[CONTROLLER_ALIAS]);
            }elseif(array_search(strtolower($controller),$maps)){
                // 禁止访问原始控制器
                return   '';
            }
        }
        if($urlCase) {
            // URL地址不区分大小写
            // 智能识别方式 user_type 识别到 UserTypeController 控制器
            $controller = parse_name($controller,1);
        }
        return strip_tags(ucfirst($controller));
    }

    /**
     * 获得实际的操作名称
     */
    static private function getAction($var,$urlCase) {
        $action   = !empty($_POST[$var]) ?
            $_POST[$var] :
            (!empty($_GET[$var])?$_GET[$var]:C('DEFAULT_ACTION'));
        unset($_POST[$var],$_GET[$var]);
        if($maps = C('URL_ACTION_MAP')) {
            if(isset($maps[strtolower(CONTROLLER_NAME)])) {
                $maps =   $maps[strtolower(CONTROLLER_NAME)];
                if(isset($maps[strtolower($action)])) {
                    // 记录当前别名
                    define('ACTION_ALIAS',strtolower($action));
                    // 获取实际的操作名
                    if(is_array($maps[ACTION_ALIAS])){
                        parse_str($maps[ACTION_ALIAS][1],$vars);
                        $_GET   =   array_merge($_GET,$vars);
                        return $maps[ACTION_ALIAS][0];
                    }else{
                        return $maps[ACTION_ALIAS];
                    }
                    
                }elseif(array_search(strtolower($action),$maps)){
                    // 禁止访问原始操作
                    return   '';
                }
            }
        }
        return strip_tags( $urlCase? strtolower($action) : $action );
    }

    /**
     * 获得实际的模块名称
     */
    static private function getModule($var) {
        $module   = (!empty($_GET[$var])?$_GET[$var]:C('DEFAULT_MODULE'));
        unset($_GET[$var]);
        if($maps = C('URL_MODULE_MAP')) {
            if(isset($maps[strtolower($module)])) {
                // 记录当前别名
                define('MODULE_ALIAS',strtolower($module));
                // 获取实际的模块名
                return   ucfirst($maps[MODULE_ALIAS]);
            }elseif(array_search(strtolower($module),$maps)){
                // 禁止访问原始模块
                return   '';
            }
        }
        return strip_tags(ucfirst($module));
    }

}
