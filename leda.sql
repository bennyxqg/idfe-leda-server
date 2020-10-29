CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `site_id` varchar(50) NOT NULL,
  `role_id` int(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态  1=启用  0=禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '网站名称',
  `title` varchar(100) NOT NULL COMMENT '网站title',
  `keywords` varchar(150) NOT NULL COMMENT '网站关键字',
  `description` varchar(200) NOT NULL COMMENT '网站描述',
  `domain_name` varchar(50) NOT NULL COMMENT '网站域名',
  `directory_name` varchar(50) NOT NULL COMMENT '映射的目录',
  `status` smallint(6) NOT NULL COMMENT '网站状态1 正常开放 0 维护',
  `created` int(11) NOT NULL COMMENT '创建时间',
  `updated` int(11) NOT NULL COMMENT '更新时间',
  `ios_stat_key` varchar(64) NOT NULL DEFAULT '',
  `android_stat_key` varchar(64) NOT NULL DEFAULT '',
  `token` varchar(64) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL DEFAULT '' COMMENT '游戏的图标',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '游戏分类 1=休闲/竞技  2=角色扮演 3=其他',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排名',
  `tag` tinyint(4) NOT NULL DEFAULT '0' COMMENT '标签 0=没有 1=hot 2=new',
  `is_show_navigation` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否显示在游戏导航栏   0=不显示 1=显示 ',
  `is_template_site` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否模板化  1=是 0=不是',
  `game_id` varchar(20) NOT NULL DEFAULT '' COMMENT '数据上报id',
  `game_key` varchar(100) NOT NULL DEFAULT '' COMMENT '数据上报key',
  `game_ico` varchar(255) NOT NULL DEFAULT '' COMMENT '游戏ico',
  `website_name` varchar(50) NOT NULL DEFAULT '' COMMENT '网站名称',
  `website_seo` varchar(1000) NOT NULL DEFAULT '' COMMENT '网站seo',
  `website_desc` varchar(1000) NOT NULL COMMENT '网站描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='站点基本信息表';

CREATE TABLE `website_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL,
  `config_json_pre` text NOT NULL COMMENT '预发布的配置的json',
  `config_json` text NOT NULL COMMENT '正式配置的json',
  `type` tinyint(255) NOT NULL DEFAULT '0' COMMENT '页面类型  0=页面  1=弹窗',
  `identifer` varchar(20) NOT NULL DEFAULT '' COMMENT '标识',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '页面名称',
  `desc` varchar(20) NOT NULL DEFAULT '' COMMENT '描述',
  `created` int(255) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx1` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '区块标题',
  `site_id` int(11) NOT NULL COMMENT '站点id',
  `content` text NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `Abbr` varchar(30) DEFAULT NULL COMMENT '区块的类型取值的作为key',
  `type` int(4) NOT NULL DEFAULT '0' COMMENT '0:text;1:image;2:file',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '新闻标题',
  `decription` varchar(200) DEFAULT NULL COMMENT '描述',
  `content` longtext COMMENT '新闻内容',
  `news_categories_id` int(11) NOT NULL COMMENT '新闻类别ID',
  `clicks` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `small_url` varchar(150) DEFAULT NULL COMMENT '小图',
  `big_url` varchar(100) NOT NULL COMMENT '大图',
  `site_id` int(11) NOT NULL COMMENT '站点id',
  `home` int(11) NOT NULL,
  `sort` int(4) NOT NULL DEFAULT '0',
  `tags` varchar(256) NOT NULL DEFAULT '',
  `outer_link` varchar(160) NOT NULL DEFAULT '',
  `isTop` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否置顶  0=未置顶 1=已置顶',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `updated` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL COMMENT '站点id',
  `parent_id` int(11) DEFAULT NULL COMMENT '0 表示顶级栏目 其他表示父类id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='新闻分类';

CREATE TABLE `news_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `third_user_id` int(11) NOT NULL,
  `third_user_name` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '评论人的昵称',
  `third_user_avatar` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '评论人的头像',
  `extend_1` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `to_id` int(11) NOT NULL DEFAULT '0',
  `delete_reason` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '删除的原因',
  `status` tinyint(255) NOT NULL DEFAULT '0' COMMENT '评论状态  -1=已删除  0=未审核  1=已通过 2=已置顶',
  `hot` int(255) unsigned NOT NULL DEFAULT '0' COMMENT '热度',
  `created` int(255) NOT NULL,
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx1` (`news_id`),
  KEY `idx2` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `blog_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `user_avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像',
  `message` text NOT NULL COMMENT '消息内容',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '评论状态 -1=审核未通过  0=未审核  1=已通过',
  `delete_reason` varchar(100) NOT NULL DEFAULT '' COMMENT '未通过的原因',
  `reply_info` text NOT NULL COMMENT '回复内容',
  `extend_1` varchar(255) NOT NULL DEFAULT '' COMMENT '玩家预约的顺序',
  `extend_2` varchar(255) NOT NULL DEFAULT '' COMMENT '玩家阵营',
  `created` int(11) NOT NULL DEFAULT '0',
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idx_1` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='博客用户消息表';


CREATE TABLE `blog_users_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `site_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '消息类型：1=点赞  2=回复评论 3=评论被删 4=评论通过 5=留言上墙',
  `message` text NOT NULL COMMENT '消息内容',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '消息状态  1=已读  0=未读',
  `news_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `comment_id` int(11) NOT NULL DEFAULT '0' COMMENT '关联的评论id',
  `comment_message` text NOT NULL COMMENT '评论的内容',
  `reply_id` int(11) NOT NULL DEFAULT '0',
  `reply_message` text NOT NULL COMMENT '回复的内容',
  `reply_user_id` int(11) NOT NULL,
  `reply_user_name` varchar(100) NOT NULL,
  `reply_user_avatar` varchar(255) NOT NULL,
  `praise_user_name` text NOT NULL COMMENT '点赞人的昵称',
  `praise_user_avatar` text NOT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `updated` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `idx_1` (`user_id`) USING BTREE,
  KEY `idx_2` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='博客用户消息表';

CREATE TABLE `pic_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL DEFAULT '0' COMMENT '网站id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '分组名称',
  `identifer` varchar(50) NOT NULL DEFAULT '' COMMENT '分组标识',
  `status` tinyint(10) NOT NULL DEFAULT '1' COMMENT '状态  1=正常 0=删除',
  `created` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='轮播图分组表';


CREATE TABLE `pic_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL DEFAULT '0' COMMENT '网站id',
  `group_id` varchar(200) NOT NULL DEFAULT '0' COMMENT '分组id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '图片描述',
  `jump_url` varchar(255) NOT NULL DEFAULT '' COMMENT '跳转地址',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '图片地址',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '图片描述',
  `status` tinyint(10) NOT NULL DEFAULT '1' COMMENT '状态   1=正常  0=删除',
  `created` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='轮播图信息表';

CREATE TABLE `video_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL DEFAULT '0' COMMENT '网站id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '视频标题',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '视频url',
  `cover` varchar(255) NOT NULL DEFAULT '' COMMENT '视频封面',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '视频描述',
  `status` tinyint(255) NOT NULL DEFAULT '1' COMMENT '状态   1=正常  0=删除',
  `created` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `updated` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='视频信息表';



INSERT INTO `users` (`id`, `name`, `password`, `site_id`, `role_id`, `status`) VALUES ('1', 'admin', '4b6779ec2fc9963fa1a7416e4171e909', 'all', '1', '1');

ALTER TABLE `users`
ADD COLUMN `phone`  varchar(20) NOT NULL DEFAULT '' AFTER `status`,
ADD COLUMN `email`  varchar(50) NOT NULL DEFAULT '' AFTER `phone`;