$(window).load(function() {
    $('#contenedorBanners').cycle({
		fx:      'scrollHorz',
        timeout:  10000,
        pager:   '#botoneraBanners',
        pagerAnchorBuilder: pagerFactory
	});
	
    function pagerFactory(idx, slide) {

        var s = idx > 2 ? ' style="display:none"' : '';
        return '<li'+s+'><div class="fondoSelector"></div></li>';

    };
});