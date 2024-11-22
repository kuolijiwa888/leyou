ALTER TABLE `wolive_wechat_platform`
ADD `wx_id` varchar(60) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '公众号原始id' AFTER `business_id`,
CHANGE `app_id` `app_id` varchar(255) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '公众号appid' AFTER `wx_id`,
CHANGE `app_secret` `app_secret` varchar(255) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '公众号appsecret' AFTER `app_id`;
ALTER TABLE `wolive_wechat_platform`
ADD `wx_token` varchar(120) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '公众号token' AFTER `app_secret`,
ADD `wx_aeskey` varchar(120) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '消息加解密密钥(EncodingAESKey)' AFTER `wx_token`;
ALTER TABLE `wolive_question`
ADD `status` tinyint unsigned NOT NULL DEFAULT '1' COMMENT '1显示 0不显示',
COMMENT='常见问题表';
ALTER TABLE `wolive_group`
CHANGE `business_id` `business_id` int(11) unsigned NOT NULL DEFAULT '0' AFTER `groupname`,
ADD `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序';

ALTER TABLE `wolive_visiter`
ADD `extends` text NOT NULL DEFAULT '' COMMENT '浏览器扩展' AFTER `comment`;