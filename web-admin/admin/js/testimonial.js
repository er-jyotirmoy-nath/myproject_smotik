$("#testimonial_frm").submit(function(e){
    e.preventDefault();
    var serializedata = $(this).serialize();
    $.post("testimonial_man.php",serializedata).done(function(response){
        $("#testi_save").html(response);
        load_testiminials();
    });
});

$(document).ready(function(){
    load_testiminials();
});

var load_testiminials = function(){
    $('#example').DataTable().fnDestroy();
    $.get("testimonial_man.php",{load_testimonial:"get"}).done(function(response){
        $("#testimonial_table").html(response);
        $('#example').dataTable();
    });
};