<?php
/*
*author:yct
*  
*/


/*
 * AP_manager  /plus/njs.html 中有wifi状态判断的js代码
 * 接口具体参数看视图
 * 
 * 
 * 设置向导显示页面接口  http://192.168.188.1/s/wifi/navigationwan_itf
 * 
 * 静态ip  http://192.168.188.1/s/wifi/wanstatic_itf
 * 
 * ADSL设置  http://192.168.188.1/s/wifi/wanpppoe_itf
 * 
 * 动态IP   http://192.168.188.1/s/wifi/wandhcp
 * 
 * 一键设置接口   http：//192.168.188.1/s/wifi/oneset_itf
 * 
 * 
 * 路由状态接口    http://192.168.188.1/s/wifi/sysstatusasyn_itf
 * 
 * 路由器登陆接口 http://192.168.188.1/s/start/index_itf     
 * 
 * 
 * 网络设置  认证设置接口  http://192.168.188.1/s/wifi/usrauth_itf
 * 
 * 网络设置  删除认证设置接口 http://192.168.188.1/s/wifi/delUsrAuth_itf?usrMac=
 * 
 * 
 * 网络设置DHCP 提交填写参数接口   http://192.168.188.1/s/wifi/advdhcpconfig_itf
 * 
 * 网络设置DHCP  开关获取ip段前缀接口   http://192.168.188.1/s/wifi/advDhcpOn_itf
 * 
 * 网络设置 添加静态分配IP显示列表接口  http://192.168.188.1/s/wifi/lanstatic_itf
 * 
 * 网络设置 添加静态分配IP接口  http://192.168.188.1/s/wifi/lanstaticadd_itf
 * 
 * 网络设置  静态分配IP接口 操作中  删除接口    http://192.168.188.1/s/wifi/lanstaticdel_itf?pcname="+pcname+"&ip="+ip+"&mac="+mac
 * 
 * 
 * 网络设置   显示DHCP客户端列表接口    http://192.168.188.1/s/wifi/dhcpclient_itf
 * 
 * 网络设置   下线  http://192.168.188.1/s/wifi/offline_itf
 * 
 * 网络设置   免认证   http://192.168.188.1/s/wifi/setwhitemac_itf
 * 
 * 网络设置  显示lan设置 页面接口  http://192.168.188.1/s/wifi/advlan_itf
 * 
 * 网络设置  lan设置 保存接口  http://192.168.188.1/s/wifi/advlanConfig_itf
 * 
 * 
 * 无线设置 显示页面接口   http://192.168.188.1/s/wifi/basicwifi_itf
 * 
 * 无线设置接口   http://192.168.188.1/s/wifi/wificonfig_itf 
 * 
 * 重启路由器接口   http://192.168.188.1/s/wifi/sysreboot_itf
 * 
 * 修改路由器密码接口   http://192.168.188.1/s/wifi/basicpasswd_itf
 * 
 * 
 * 恢复出厂设置接口  http://192.168.188.1/s/wifi/factoryconfig_itf
 * 
 * 
 * 退出接口  http://192.168.188.1/s/wifi/logout_itf
 * 
 * 
 */


?>