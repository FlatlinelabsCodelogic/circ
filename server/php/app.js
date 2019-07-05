$(document).ready(function() {
    $('div#exportColumns').hide();

    $('select#exportTable').change(function(){
        var exTab = $('select#exportTable').val();
      //  event.preventDefault();
        $.ajax({
            url: "ajax.inc.php",
            method: "POST",
            dataType: "html",
            data: {table: exTab},
            success: function (data) {
                $('#result').html(data);
                $('div#exportColumns').fadeIn('slow');
            },
            error:  function(msg){
            }
        });
    });
});
