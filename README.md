# 乐游（Leyou）

乐游是一套基于 **ThinkPHP** 开发的综合娱乐平台源码，包含用户前台、管理后台、开奖采集、在线客服等模块，适用于学习研究与二次开发。

> **版本说明**：前台版本 V5.21

## 功能模块

| 目录 | 说明 |
|------|------|
| `wwwroot/qt` | 用户前台（PC 端 / 移动端 / 支付模块） |
| `wwwroot/ht` | 管理后台（会员、彩票、财务、统计等） |
| `wwwroot/kj` | 开奖采集与计划任务（采集、开奖、定时任务） |
| `wwwroot/kefu` | 在线客服系统（ThinkPHP 5） |
| `wwwroot/appdown` | APP 下载页 |
| `sql` | 数据库脚本 |

## 技术栈

- **语言**：PHP >= 5.3
- **框架**：ThinkPHP 3.x / ThinkPHP 5.x（客服模块）
- **数据库**：MySQL 5.5+
- **Web 服务器**：Apache / Nginx（需支持 URL 重写）

## 目录结构

```
leyou/
├── sql/
│   └── leyou.sql          # 数据库初始化脚本
└── wwwroot/
    ├── qt/                # 用户前台
    ├── ht/                # 管理后台
    ├── kj/                # 开奖采集
    ├── kefu/              # 在线客服
    └── appdown/           # APP 下载
```

## 环境要求

- PHP >= 5.3（推荐 PHP 7.x）
- MySQL >= 5.5
- 扩展：mysqli、pdo_mysql、curl、gd、mbstring、json
- Apache 需开启 `mod_rewrite`，或 Nginx 配置伪静态规则

## 快速部署

### 1. 克隆项目

```bash
git clone https://github.com/kuolijiwa888/leyou.git
cd leyou
```

### 2. 导入数据库

```bash
mysql -u root -p leyou < sql/leyou.sql
```

创建数据库（若尚未创建）：

```sql
CREATE DATABASE leyou DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### 3. 配置数据库连接

修改以下文件中的数据库连接信息（主机、库名、用户名、密码）：

- `wwwroot/qt/app/Common/Conf/db.php`
- `wwwroot/ht/app/Common/Conf/db.php`
- `wwwroot/kj/app/Common/Conf/db.php`

默认配置示例：

```php
'DB_HOST'   => '127.0.0.1',
'DB_NAME'   => 'leyou',
'DB_USER'   => 'root',
'DB_PWD'    => '123456',
'DB_PREFIX' => 'caipiao_',
'DB_PORT'   => '3306',
```

### 4. 配置 Web 站点

将各模块目录分别配置为独立站点（或虚拟主机），入口文件如下：

| 模块 | 入口文件 | 建议本地域名 |
|------|----------|--------------|
| 用户前台 PC | `wwwroot/qt/index.php` | `127.0.0.1` |
| 用户前台移动端 | `wwwroot/qt/index.php` | `127.0.0.2` |
| 管理后台 | `wwwroot/ht/start.php` | 自行配置 |
| 开奖采集 | `wwwroot/kj/start.php` | 自行配置 |
| 在线客服 | `wwwroot/kefu/public/index.php` | 自行配置 |

### 5. 配置域名绑定（前台）

编辑 `wwwroot/qt/app/Common/Conf/domain.php`，将子域名规则改为你的实际域名：

```php
'APP_SUB_DOMAIN_RULES' => array(
    'your-pc-domain.com'     => 'Home',    // PC 端
    'your-mobile-domain.com' => 'Mobile',  // 移动端
),
```

本地开发可使用：

- `127.0.0.1` → PC 端（Home）
- `127.0.0.2` → 移动端（Mobile）

### 6. 目录权限

确保以下目录具有写入权限：

- `wwwroot/qt/Runtime/`
- `wwwroot/ht/Runtime/`
- `wwwroot/kj/Runtime/`
- `wwwroot/kj/JIHUADATA/`
- `wwwroot/kefu/runtime/`

### 7. 计划任务（开奖模块）

开奖采集模块需配置定时任务，定期访问以下脚本：

```bash
# 计划任务检查
php /path/to/wwwroot/kj/jihuarenwu.php

# API 采集
php /path/to/wwwroot/kj/apicaiji.php
```

建议通过 crontab 或 Windows 计划任务每分钟执行一次。

## 注意事项

1. **生产环境**请将各模块 `APP_DEBUG` 设置为 `false`，并修改默认数据库密码。
2. 部署前请检查 `webconfig.php`、`domain.php` 等配置文件中的域名与业务参数。
3. 本项目包含第三方依赖（ThinkPHP、Workerman 等），其各自遵循原有开源协议。
4. **法律合规**：本软件仅供学习与技术研究使用。在您的司法管辖区内，运营博彩、彩票等相关业务可能受到法律限制，使用者须自行承担全部法律责任，作者不对任何违法使用行为负责。

## 参与贡献

欢迎提交 Issue 或 Pull Request：

1. Fork 本仓库
2. 创建特性分支（`git checkout -b feature/xxx`）
3. 提交更改（`git commit -m '添加某某功能'`）
4. 推送分支（`git push origin feature/xxx`）
5. 发起 Pull Request

## 开源协议

本项目采用 [MIT 协议](LICENSE) 开源。

### MIT 协议摘要（简体中文）

MIT 协议是一种宽松的开源许可证，允许您：

- ✅ 自由使用、复制、修改、合并、发布、分发、再授权及销售本软件
- ✅ 将本软件用于商业用途

唯一要求：

- 在所有副本或重要部分中保留**版权声明**和**许可声明**

免责声明：

- 本软件按「原样」提供，不提供任何明示或暗示的担保，包括但不限于适销性、特定用途适用性及非侵权性的担保。作者或版权持有人不对因使用本软件而产生的任何索赔、损害或其他责任负责。

完整协议文本请参阅 [LICENSE](LICENSE) 文件。

---

Copyright © 2024 kuolijiwa888
