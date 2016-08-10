	function openWifi_set(){
		if(plus.os.name == 'Android'){//android 弹出wifi设置页面
			var Intent = plus.android.importClass("android.content.Intent");
            var Settings = plus.android.importClass("android.provider.Settings");
            var settings = new Settings();
            var main = plus.android.runtimeMainActivity();
            var wifiset = new Intent(settings.ACTION_WIFI_SETTINGS);
            main.startActivityForResult(wifiset, 0);
		}else if(plus.os.name =='iOS'){
			plus.runtime.openURL("prefs:root=WIFI");
		}
    }
	
	function check987(data){//检测登陆状态
		if(data.ret == 999){//登陆超时
			mui.toast(data.res);
			mui.openWindow({
				url:"/view/sign_in/login.html",
				id:"login",
				show:{
    				duration:200
				}
    		});
    		return false;
		}if(data.ret == 888){//重设初始密码
			mui.toast(data.res);
			mui.openWindow({
				url:"/view/set_system/reset_password.html",
				id:"reset_password",
				show:{
    				duration:200
				}
    		});
    		return false;
		}if(data.ret == 777){//设备升级
			mui.toast('请使用PC端连接路由器进行升级');
			
		}
	}