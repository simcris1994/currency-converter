$('#from').on('input', function() {
    let from = $("#list1 option:selected").text();
    let to = $("#list2 option:selected").text();
    let amount = $("#from").val();

    $.get( "http://localhost:8000/api/convert/" + from + "/" + to + "/" + amount , function( data ) {
        $("#to").val(data);
    });
});

$('#to').on('input', function() {
    let to = $("#list1 option:selected").text();
    let from = $("#list2 option:selected").text();
    let amount = $("#to").val();

    $.get( "http://localhost:8000/api/convert/" + from + "/" + to + "/" + amount , function( data ) {
        $("#from").val(data);
    });
});