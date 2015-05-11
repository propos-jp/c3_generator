﻿$(function() {
   
     var chart = null;

    $('#select').change(function () {
        var val = $('#select').val();
        $.getJSON( "c3/" + val, function( data ) {
            console.log(data);
  
 
            chart = null;
            chart = c3.generate(data);
        })
        .fail(function( jqxhr, textStatus, error ) {
            var err = textStatus + ", " + error;
            console.log( "Request Failed: " + err );
        })
        .always(function() {
            console.log( "complete" );
        });
    });

    


});



