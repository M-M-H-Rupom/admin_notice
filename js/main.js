;(function($){
    $(document).ready(function(){
        $('body').on('click',"#notice_ninja .notice-dismiss",function(){
            console.log('clicked');
            setCookie('nn-close','1',60);
        });
    });
})(jQuery);

function setCookie(cookiename,cookievalue,expiresecond){
    var expiry = new Date();
    expiry.setTime(expiry.getTime() + 1000 * expiresecond);
    document.cookie = cookiename + "=" + escape(cookievalue)
    + ";expires=" + expiry.toGMTString() + "; path=/";
}