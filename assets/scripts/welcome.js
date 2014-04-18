var appInfo = {
    APPNAME: "showoffer",
    APPID: "266551"
};
var uiOpts = {
    url: "http://graph.renren.com/oauth/authorize",
    display: "iframe",
    params: {
        "response_type": "token",
        "client_id": appInfo.APPID,
        "scope":'create_album photo_upload'
    },
    onSuccess: function(r) {
        top.location = "http://apps.renren.com/" + appInfo.APPNAME + "/home.php";
    },
    onFailure: function(r) {}
};
var EventUtil = {
    addHandler: function (element, type, handler) {
        if (element.addEventListener) {
            element.addEventListener(type, handler, false);
        } else if (element.attachEvent) { // 兼容IE
            element.attachEvent("on" + type, handler);
        } else {
            element["on" + type] = handler;
        }
    },
    removeHandler: function(element,type,handler) {
	    if(element.removeEventListener) {
	    	element.removeEventListener(type,handler,false);
	    } else if(element.detachEvent) {
		    element.detachEvent("on" + type,handler);
	    } else {
		    element["on" + type] = handler;
	    }
    }
};
var eventType = document.doScroll ? 'readystatechange' : 'DOMContentLoaded';//IE 兼容
if(document.addEventListener) {// Webkit 535+ 目前主流浏览器 兼容
	EventUtil.addHandler(document, eventType, function (event) {
		EventUtil.removeHandler(document,eventType,arguments.callee);
		var _targetDom = document.getElementById('login');
	    EventUtil.addHandler(_targetDom,"click",function(event) {
		    Renren.ui(uiOpts);
	    });
	});
} else if (document.attachEvent) {// IE 兼容
	EventUtil.addHandler(document, eventType, function (event) {
		if(/complete|loaded/.test(document.readyState)) {
			EventUtil.removeHandler(document,eventType,arguments.callee);
			var _targetDom = document.getElementById('login');
		    EventUtil.addHandler(_targetDom,"click",function(event) {
			    Renren.ui(uiOpts);
		    });
		}
	});
}
// Prevent from unexpected situation

EventUtil.addHandler(window,"load",function(){
	var _targetDom = document.getElementById('login');
    EventUtil.addHandler(_targetDom,"click",function(event) {
	    Renren.ui(uiOpts);
    });
});
