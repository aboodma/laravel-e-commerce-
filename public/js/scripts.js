
$(document).ready(function () {
	$("#searchp").submit(function (e) {
		e.preventDefault();
		var data = $("#searchp").serialize();
		$.ajax({
			url:"/search",
			type:"POST",
			data:data,
			success : function (come) {
				alert(come);
			}
		})
	});

function ChangeLang(data) {
	$.get('/lang/?lang='+data,function(){
		location.reload();
	})
}
function ChangeCurrency(data) {
	$.get('/currency/?currency='+data,function(){
		location.reload();
	})
}
function change(data) {
$("a.selected").removeClass('selected');
$("#"+data).addClass('selected');
}
function changeVal(data) {

		$.get('/cart/ship/'+data,function (request){
			$("#shipping_fee").html(' ');
			$("#shipping_fee").html(request);
			var subTotal = $("#shipping_fee").attr('data-subtotal');
			var total = Number(subTotal)+Number(request);
			$("#totalprice").html('');
			$("#totalprice").html(total);


		})
}
$("#button-confirm").on("click",function(e){
	e.preventDefault();
	$.get('/Customer/Check',function (data) {
		if (data==0) {
			window.location.href = '/Customer/login';

		}if(data==1){

		}
	});
});




























})
