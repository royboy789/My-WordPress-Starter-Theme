var my_theme = my_theme || {};

(function($) {
	my_theme.run = function(theme) {

        $(document).ready(function(){

            $('body').on('click', '.menu-toggle', theme.menu_toggle);

        });

        theme.menu_toggle = function(e) {
        	e.preventDefault();
        	$('body').toggleClass('menu-on');
		};

		return theme;
    }(my_theme.run || {});
}(jQuery));