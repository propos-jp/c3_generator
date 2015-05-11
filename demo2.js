$(function() {
   
     var chart = null;

    $('#select').change(function () {
        var val = $('#select').val();
        $.getJSON( "c3/test2" , function( data ) {
            console.log(data);
            var chart_data = jQuery.parseJSON(data);
  
            console.log(chart_data);
            chart = null;
            chart = c3.generate(chart_data);
        })
        .fail(function() {
            console.log( "error" );
        })
        .always(function() {
            console.log( "complete" );
        });
    });

    


});