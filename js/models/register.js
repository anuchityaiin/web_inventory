function register(){
    var self = this;
}

register.prototype.submitRegister = function(info){
    var re=null;
    $.ajax({
        type: "POST",
        data: { info: info},
        url: ev_url.register.url,
        cache: false,
        async: false
    }).done(function( d ) {
        re = JSON.parse(d);
    });
    return re;
};