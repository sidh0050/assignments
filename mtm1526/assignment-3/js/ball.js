jQuery(function ($) {
	var $ball = $('#ball')
		, $property = $('#property')
		, $color = $('#color')
	;

	$('form').on('submit', function (e) {
		var color = $color.val();

		e.preventDefault();

		if (color) {
			$ball.css($property.val(), color);
		}
	});

	$('#hide-show').on('click', function (e) {
		$ball.toggle(500);
	});
});
