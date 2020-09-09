$(document).ready(function() {
	$(".popup").magnificPopup();
	$(".buy-button").on('click', function(e) {
		let parent = $(this).closest("div.product");
		$("#product_name").val(parent[0].getElementsByTagName('p')[0].innerText);
	});
	$(".count_element").on("click", (function() {
		ga("send", "event", "goal", "goal");
		yaCounterXXXXXXXX.reachGoal("goal");
		return true;
	}));
	$("#phone").mask("+(380)99-999-9999");

	$("#form").submit(function() {
		alert('Спасибо за заказ, мы свяжимся с вами в ближайшее время');
	});
});
