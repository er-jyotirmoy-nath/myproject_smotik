$("#upload_data").on('submit', (function (e) {
    e.preventDefault();
    $.ajax({
        url: "banner_man_class.php",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            $("#upload_res").html(response);
        	console.log(response);
        	$("#upload_data")[0].reset();
        	get_banner_details();
        },
        error: function () {}
    });
}));

$(document).ready(function(){
	get_banner_details();
});

var get_banner_details = function(){
	$('#example').DataTable().fnDestroy();
	$.get('banner_man_class.php',{load_data:"get"}).done(function(response){
		$('#table_data').html(response);
		$('#example').dataTable();
	});
};