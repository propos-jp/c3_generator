$(function() {
   
     var chart = null;

    $('#select').change(function () {
        var val = $('#select').val();
        $.getJSON( "c3/" + val, function( data ) {
            console.log(data);
            chart = null;
            chart = c3.generate(data);
        })
        .fail(function() {
            console.log( "error" );
        })
        .always(function() {
            console.log( "complete" );
        });
    });

    


});



