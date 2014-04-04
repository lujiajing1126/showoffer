var appInfo = {
    APPNAME: "showoffer",
    APPID: "266551"
};
var uiOpts = {
    url: "http://graph.renren.com/oauth/authorize",
    display: "iframe",
    params: {
        "response_type": "token",
        "client_id": appInfo.APPID
    },
    onSuccess: function(r) {
        top.location = "http://apps.renren.com/" + appInfo.APPNAME + "/home.php";
    },
    onFailure: function(r) {}
};
$(document).ready(function() {
    $(document).on('click.auth', '.btn', function() {
        Renren.ui(uiOpts);
    });
});