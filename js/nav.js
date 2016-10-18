$( document ).ready(function() {
	// TOP NAVIGATION SLIDE
	$( "#mobile-menu" ).click(function() {

		if($('#menu').is(':hidden')){
			$("#open").toggle("slide", function(){
			$("#close").toggle("slide");
			});
		}else{
			$("#close").toggle("slide", function(){
			$("#open").toggle("slide");
			});
		}
		$("#menu").toggle("slide");
	});
});