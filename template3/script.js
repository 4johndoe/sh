$(document).ready(function() {
	$(".one").hover(function () {
		$(".one").toggleClass('hovered');
	});
});

$(document).ready(function() {
	$(".one").click(function () {
		console.log('clicked!!!');
	});
});

// $(document).ready(function() {
// 	$(".two").hover(function () {
// 		$(".two").toggleClass('hovered');
// 	});
// });

$(document).ready(function() {
	$(".two").hover(function () {
		$(".two").toggleClass('hovered');
		$(".two").animate({
			"top": "+5px"
		}, "slow");
	});
});


$(document).ready(function() {
	$(".two").click(function () {
		console.log('clicked!!!');
	});
});