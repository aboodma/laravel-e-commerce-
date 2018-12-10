/* -------------------------------------------------------------------------------- /

	Magentech jQuery
	Created by Magentech
	v1.0 - 20.9.2016
	All rights reserved.

/ -------------------------------------------------------------------------------- */


	// Cart add remove functions
	var cart = {

		'add': function(product_id, quantity,image,name,price,) {
			addProductNotice('Product added to Cart', '<img src="'+image+'" alt="">', '<h3><a href="#">'+name+'</a> added to <a href="/cart/show">shopping cart</a>!</h3>', 'success');
			var data={product_id:'product_id'	,quantity:'quantity'};
			$.get('/cart/'+product_id+'/'+quantity+'/'+price+'/'+name,function(res){alert(res);});

	}
}
var cart = {

	'addpro': function(product_id, quantity,image,name,price) {
		 var size = $("a.selected").attr('id');
		  var sizeid = $("a.selected").attr('data-group-id');
if(typeof size != 'undefined'){
		addProductNotice('Product added to Cart', '<img src="'+image+'" alt="">', '<h3><a href="#">'+name+'</a> added to <a href="/cart/show">shopping cart</a>!</h3>', 'success');
		var data={product_id:'product_id'	,quantity:'quantity'};
		$.get('/cart/'+product_id+'/'+quantity+'/'+price+'/'+name+'/'+size+'/'+sizeid);
}else{
	if (typeof $("#error") != 'undefined') {
$("#error").append("<h5 style=' background: red; color:white;'><strong>Please Select Size</strong></h5>");
	}
	if (typeof $("#error_ar") != 'undefined') {
$("#error_ar").append("<h5 style=' background: red; color:white;'><strong>يرجي اختيار المقاس</strong></h5>");
	}
	if (typeof $("#error_gr") != 'undefined') {
$("#error_gr").append("<h5 style=' background: red; color:white;'><strong>Please Select Size</strong></h5>");
	}

}
}
}




	/* ---------------------------------------------------
		jGrowl – jQuery alerts and message box
	-------------------------------------------------- */
	function addProductNotice(title, thumb, text, type) {
		$.jGrowl.defaults.closer = false;
		//Stop jGrowl
		//$.jGrowl.defaults.sticky = true;
		var tpl = thumb + '<h3>'+text+'</h3>';
		$.jGrowl(tpl, {
			life: 4000,
			header: title,
			speed: 'slow',
			theme: type
		});
	}
