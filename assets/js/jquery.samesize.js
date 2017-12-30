$.fn.sameSize = function( width, max ) {
	var prop = width ? 'width' : 'height',
		size = Math.max.apply( null, $.map( this, function( elem ) {
			return $( elem )[ prop ]();
		})),
		max = size < max ? size : max;
	return this[ prop ]( max || size );
};

// same height
$('.service-box').sameSize();

// same width
//$('div').sameSize(true);

// same width, and max constraint
//$('div').sa