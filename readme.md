# **乐搭服务器部署文档**

**环境资源**

\*

| 云服务商 | 资源类型 | 模块说明 | CPU核数 | 内存容量 | 磁盘容量 | 外网IP需求 | 资源数量 | 带宽 | 操作系统 |
| --- | --- | --- | --- | --- | --- | --- | --- | --- | --- |
| 腾讯云 | 云主机 | web模块 | 2 | 4G | | 是 | 1 | 100M | Centos 7 |
| 腾讯云 | redis | redis缓存 | 2 | 2G | 　 | 否 | 1 | 　 | redis 标准版 4.0 |
| 腾讯云 | mysql | 数据库 | 2 | 4G | 200G | 否 | 1 | 　 | mysql 5.7 |

**部署需求**

每台web机，安装Nginx+PHP5.3+mysql扩展

\*

| 扩展名称 | 下载地址及编译注意事项 |
| --- | --- |
| Php-fpm.conf 配置 | pm = static pm.max\_children = 150 |

**乐搭后台**** API ****部署步骤：**

1. git clone http://git.ids111.com/idreamsky/platform/frontend/idfe-leda-backend.git

2. 更新官网dgc\_comm数据库，执行leda.sql，见末尾附件

3. cp app/Config/database.php.default app/Config/database.php 修改leda数据库的配置

4. nginx 的 server\_name 是 : api.leda.uu.cc

5. chmod -R 777 app/tmp

**乐搭官网前端展示部署**

1.git clone http://git.ids111.com/idreamsky/platform/frontend/idfe-leda-backend.git

2. nginx 的 server\_name 是网站的域名 : leda.uu.cc等等

**Nginx**  **配置示例**

##ledaApi.conf

server {

listen 80;

server\_name api.leda.uu.cc ;

root /data/wwwroot/leda/app/webroot;

index index.html index.htm index.php;

access\_log /data/wwwlogs/leda.access.log;

error\_log /data/wwwlogs/leda.error.log;

location / {

try\_files $uri $uri/ /index.php?$query\_string;

}

location ~ /(\.ht|\.git|\.svn) {

deny all;

}

}
