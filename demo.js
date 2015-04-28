$(function() {
   
     var chart = null;

    $('#test1Button').click(function () {
        $.getJSON( "c3/test1", function( data ) {
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

    $('#test2Button').click(function () {
        $.getJSON( "c3/test2", function( data ) {
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



