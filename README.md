# Web-Control-Raspberry-Light

## 实现PHP控制树莓派的继电器，继而控制灯等家电

### 1.电路连接
 - 继电器的VCC，GED和IN分别用杜邦线链接到树莓派的4，6和7号端口
 - 继电器的常开端和公共端当成开关接上灯或者家用小电器
 
### 2.软件安装
 - 安装和配置WEB服务在这就不赘述了，不懂的自己百度
 - root用户下编辑'/etc/sudoers'文件，在'root ALL=(ALL) ALL'下面一行加上'www-data ALL=(root) NOPASSWD: ALL'
 - 下载上面的三个文件，放在网站根目录中，然后在浏览器中访问即可实现控制
