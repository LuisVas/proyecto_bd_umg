function base_url(){
	return 'http://localhost:8888/meykoclub/';
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
