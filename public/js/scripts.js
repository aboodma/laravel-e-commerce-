

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
$("#button-confirm").on("click",function(e) {
	e.preventDefault();
	$.get('/Customer/Check',function (data) {
		if (data==0) {
			window.location.href = '/Customer/login';

		}if(data==1){

		}
	});
});

$("#updateCon").on("click",function (e) {
	e.preventDefault();
	var data = $("updateForm").serialize();
	$.ajax({
		url:"/updateProfile",
		data:data,
		type:"POST",
		success: function (req){alert(req)},
		error: function (req){alert(req)},
	});
});

$('#orderform').submit(function (e) {
		e.preventDefault();
		var Data = $("#orderform").serialize();
		$.ajax({
			url:'/cart/order',
			type:"POST",
			data:Data,
			success: function (res){
				if (res == "1") {
					$('#ignismyModal').modal('show');

				}
			}
		})
});
$("#submitlog").on('click',function (e) {
	e.preventDefault();
	var data = $("#logout").serialize();
	$.post('/Customer/logout',data,function(data , status){
		 window.location.reload();

	})
});
function addtowish(product_id, quantity,image,name,price){
	$.get('/wishadd/'+product_id+'/'+quantity+'/'+price+'/'+name);
}
function removefromwish(id){
	$.get('/wishremove/'+id,function(data){alert(data)});
	 window.location.reload();
}
function Redirecter(link){
	window.location.replace(link);
}
