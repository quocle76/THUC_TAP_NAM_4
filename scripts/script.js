var $header = $('#mod-header');
	function showDropInfo() {
	$header.find('.arrow-user').on('click', function(event) {
	  if($header.find('.arrow-user').hasClass('active')){
	    $header.find('.arrow-user').removeClass("active");
	    $header.find('.sub-infor').hide();
	  }else {
	    $header.find('.arrow-user').addClass("active");
	    $header.find('.sub-infor').show();
	  }
	});
	
}
$(document).ready(function(){
	showDropInfo();
});
