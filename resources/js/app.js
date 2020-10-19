require('./bootstrap');
(function ($) {
    initTheme();

    // dark mode switch
    $("#theme-switch").on('change', function () {
        console.log(this.checked)
        if(this.checked){
            $('html').attr('theme', 'dark-theme');
            $(this).attr('checked', 'checked');
            localStorage.setItem('theme', 'dark-theme');
        }else {
            $('html').attr('theme', '');
            $(this).attr('checked', '');
            localStorage.removeItem('theme');
        }
    });

    function initTheme(){
        const isDarkThemeSelected = (localStorage.getItem('theme') !== null && localStorage.getItem('theme') === 'dark-theme');
        console.log(isDarkThemeSelected)
        if(isDarkThemeSelected){
            $('html').attr('theme', 'dark-theme');
            $('#theme-switch').attr('checked', 'checked');
        }else{
            $('html').attr('theme', '');
        }
    }

})($);
