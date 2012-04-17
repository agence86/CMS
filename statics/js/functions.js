

var my_ajax = function(url, datas, callback)
{
    datas.ajax=true;
    $.ajax({
            url: url,
            type: 'post',
            data : vars,
            success : function(e,d)
            {
                callback(e,d);
                init_ui();
            }
    })  
};

$(document).ready(function(){
    init_ui();
     init_ui();
     init_menu();
});

var init_menu = function()
{
    $('#nav li ul').parent().addClass('sub');
    
    $('#nav li').hover(function(){
        $(this).addClass('sfhover');
    },
    function()
    {
        $(this).removeClass('sfhover');
    })
}

var init_ui = function()
{
    $('.custom_tf').custom_tf();
};

(function($){ 
   $.fn.custom_tf = function(options) {
        $(this).each(function(){
            if(!$(this).data('custom_init'))
            {
                $(this).removeClass('custom_tf');
                var elem_wrap= $('<div class="custom_tf">');
                elem_wrap.append('<div class="bl"></div>');
                elem_wrap.append($(this).clone());
                elem_wrap.append('<div class="br">');
                $(this).replaceWith(elem_wrap);
                $(elem_wrap).children('input').defaultValue();
                elem_wrap.data('custom_init',true);
            }
        });
   } 
})(jQuery);