<script type="text/javascript">
	jQuery.validator.addMethod("ipCheck", function(value,element) {  
	if (value.length > 0) {
		var exp = /^(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$/;
		var reg = value.match(exp);
		if (reg != null){
			return true;
		}else {
			return false;
		}
	}else {
		return true;
	}
 }, "IP地址格式错误.");
</script>
<?php
/*
*author:yct
*
 * 一键设置 -> ADSL    			 		账号密码   非空
 * 
 * 一键设置-> 静态IP    			 		所有框   为ip验证规则
 * 
 * 一键设置->下一步后的 WIFI设置      		两次密码一致  非空   必须包含数字字母和特殊字符
 * 		
 * 网络设置-> WIFI设置     			 		两次密码一致  非空   必须包含数字字母和特殊字符
 * 
 * 网络设置->外网设置          		 		和一键设置中验证规则一致
 * 
 * 网络设置->内网设置				 		两个框  非空  ip规则验证
 * 
 * 网络设置->DHCP设置				 		ip范围两个框  整数  1-255   前框值大于后框值   租用期限 两个框都是整数
 * 
 * 网络设置->静态分配IP->右上角添加    		名称非空   IP   mac 非空
 * 
 * 网络设置->免认证->右上角添加	 		mac  非空
 * 
 * 系统设置->修改密码						原密码   非空    新密码   不能为admin    重复新密码  和  新密码  一致  非空
 * 
 * 
*/
?>