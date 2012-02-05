$(function() {
	/* Begin: Sidebar Standard Adv images lazy loading */
	$("img.ads").show().lazyload({
		threshold:200,
		effect:"fadeIn"
	});
	/* End: Sidebar Standard Adv images lazy loading */

	/* Begin: Login dropdown in header */
    $(".signin").mouseover(function(e) {
        e.preventDefault();
        $("fieldset#signin_menu").show();
        $("fieldset#cart_menu").hide();
    });
    $("fieldset#signin_menu").mouseup(function() {
        return false;
    });
    $(document).mouseup(function(e) {
        if($(e.target).parent("div.signin").length==0) {
            $("fieldset#signin_menu").hide();
        }
    });
    /* End: Login dropdown in header */

    /* Begin: Cart dropdown in header */
    $(".cartin").mouseover(function(e) {
        e.preventDefault();
        $("fieldset#cart_menu").show();
        $("fieldset#signin_menu").hide();
    });
    $("fieldset#cart_menu").mouseup(function() {
        return false;
    });
    $(document).mouseup(function(e) {
        if($(e.target).parent("div.cartin").length==0) {
            $("fieldset#cart_menu").hide();
        }
    });
    /* End: Cart dropdown in header */

	/* Begin: Banner Slider */
    $('#banner1').anythingSlider();
    /* End: Banner Slider */

    /*Add here*/

});

/*Cufon.now();*/