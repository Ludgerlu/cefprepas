(function($) {
	'use strict';

	$( '.bb-ultimate-carousel' ).each( function() {
		var _self = $(this),
		$slider = _self.find('.bb-ultimate-carousel-slider'),
		options = {},
		preSettings = {
			customPaging: function(slider, i) {
				return $('<a href="javascript:;"></a>').text(i + 1);
			}
		};
		
		options = $slider.data('settings');
		
		$.extend( true , options, preSettings );
		
		$slider.slick(options);
		
		_self.find('.bb-ultimate-carousel-filter li a').click(function(){
			var filtering = $(this).attr('data-bbultimatecarousel-filter'),
			$parent = $(this).closest('li');
			if(filtering == '.bbuc-filter-*') {
				_self.find('.bb-ultimate-carousel-slider').slick('slickUnfilter');
			} else {
				_self.find('.bb-ultimate-carousel-slider').slick('slickUnfilter');
				_self.find('.bb-ultimate-carousel-slider').slick('slickFilter', filtering );
			}
			$parent.addClass('active').siblings().removeClass('active');
		});
		
		if(_self.find('.bb-ultimate-carousel-filter li.active a').length > 0) {
			_self.find('.bb-ultimate-carousel-filter li.active a').trigger('click');
		}
		
	} );
	
}(window.jQuery));
