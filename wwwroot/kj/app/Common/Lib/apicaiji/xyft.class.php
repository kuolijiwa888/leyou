<?php
namespace Lib\apicaiji;

class xyft
{
	public $source;
	public $name;
	public $title;
	public $url;

	function __construct($url)
	{
		$this->source = 'Soft';
		$this->name = 'xyft';
		$this->title = '幸运飞艇';
		$this->url = $url;
	}

	function getopencode()
	{
		$name = $this->name;
		$title = $this->title;
		$source = $this->source;
		$url = $this->url;

		// 获取数据
		$co = file_get_contents($url);
		$RES = json_decode($co, true);

		// 检查是否成功获取数据
		if (!$RES["data"]) {
			return '未抓取到开奖数据：' . $url;
		}

		// 直接使用 RES["data"]
		$data = $RES["data"];

		// 准备插入数据库的数据
		$data['title'] = $title;
		$data['name'] = $name;
		$data['addtime'] = time();
		$data['isdraw'] = 0;

		// 将时间字段转换为时间戳
		if (isset($data['opentime'])) {
			$data['opentime'] = date('Y-m-d H:i:s', $data['opentime']);
		}

		if (!$data['expect']) {
			return;
		}

		// 检查是否已经存在
		$temp = M('kaijiang')->where("name='{$name}' and expect='{$data['expect']}'")->find();
		if (!$temp) {
			$_int = M('kaijiang')->data($data)->add();
			if ($_int) {
				return '采集成功-' . $data['expect'] . ':' . $data['opencode'];
			}
		} else if ($temp && $temp->opencode != $data['opencode'] && $temp->source == 'Soft') {
			$temp['opencode'] = $data['opencode'];
			M('kaijiang')->where('id = ' . $temp['id'])->field('opencode')->save($data);
		}

		return '没有新数据-' . $data['expect'] . ':' . $data['opencode'];
	}
}
?>