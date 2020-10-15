function base_url(){
	return 'http://localhost:8083/umg/';
}

$.show_loading = function(){
	$('.content_loading').addClass('content_loading_active');
}

$.hide_loading = function(){
	$('.content_loading').removeClass('content_loading_active');
}

function formatDate(date) {
  var monthNames = [
    "January", "February", "March",
    "April", "May", "June", "July",
    "August", "September", "October",
    "November", "December"
  ];

  // console.log("Z: " + date);
  var day = date.getDate();
  // console.log("day: " + day);
  var monthIndex = date.getMonth();
  var year = date.getFullYear();

  return day + ' ' + monthNames[monthIndex] + ' ' + year;
}

function convert_price(price){
	return parseFloat(price).toFixed(2);
}

function add_commas(val){
	if(val == null || val == undefined) return (0).toFixed(2);
	while (/(\d+)(\d{3})/.test(val.toString())){
	  val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
	}
	return val;
}

function get_cart_products(){
	var value = JSON.parse(localStorage.getItem('cart'));
	return value ? value : [];
}

function get_cart_count_products(){
	var value = JSON.parse(localStorage.getItem('cart'));
	return value ? value.length : 0;
}

function set_cart_products(data){
	localStorage.setItem('cart',JSON.stringify(data));
	return true;
}

function remove_cart_products(){
	localStorage.removeItem('cart');
}

function add_to_cart(product,new_product){

	var flag = false;
	if(product.length == 0) return [new_product];

	for(let d in product){
		if(product[d]['id'] == new_product.id){
			product[d].qty = parseInt(product[d]['qty']) + parseInt(new_product.qty);
			flag = true;
		}
	}

	if(!flag) product.push(new_product);
	return product;
}

function core_cart(){
	var products = get_cart_products();
	if(!products) return;

	$('.header-cart .badge').text(get_cart_count_products());
}

function get_subtotal(price,qty){
	return parseFloat(price) * parseFloat(qty);
}

function remove_cart_product_id(id){
	var list_products = get_cart_products();
	var args = [];
	for(var x in list_products){
		if(list_products[x].id != id){
			args.push(list_products[x]);
		}
	}

	remove_cart_products();
	set_cart_products(args);
}

function update_cart(data){
	var list_products = get_cart_products();
	var args = [];
	for(var x in list_products){
		for(var c = 0; c < data.length; c++){
			if(list_products[x].id == data[c].id){
				list_products[x].qty = data[c].qty;
			}
		}

		args.push(list_products[x]);
	}

	remove_cart_products();
	set_cart_products(args);
}

function get_cart_total(){
	var list_products = get_cart_products();
	var total = 0;
	for(var x in list_products){
		total += get_subtotal(list_products[x].price,list_products[x].qty);
	}

	return total;
}

core_cart();
