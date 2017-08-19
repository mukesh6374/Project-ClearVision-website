$(document).ready(function(){

	$('#icon img').click(function() {
	var v=$(this).attr('src');
	$('#modalimage').attr("src",v);
});

$(document).on('mouseenter', '.divbutton', function () {
        $(this).find(":button").show();
    }).on('mouseleave', '.divbutton', function () {
        $(this).find(":button").hide();
    });

});




