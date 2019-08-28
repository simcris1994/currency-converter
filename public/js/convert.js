$('#from, #list1, #list2').on('input', function() {
    convert(true);
});

$('#to').on('input', function() {
    convert(false);
});

$("#switch").on('click', function () {
    let from = $("#list1 option:selected").val();
    let to = $("#list2 option:selected").val();
    $("#list1").val(to).change();
    $("#list2").val(from).change();

    convert(true);
});

function convert(normal) {
    let from = $("#list1 option:selected").text();
    let to = $("#list2 option:selected").text();
    let amount = $("#from").val();

    $.get( "http://localhost:8000/api/convert/" + (normal ? from : to) + "/" + (normal ? to : from) + "/" + amount , function( data ) {
        let result = (data * amount).toFixed(2);
        if (normal)
            $("#to").val(result);
        else
            $("#from").val(result);
        $("#info").text("1 " + from + " = " + data + " " + to);
    });

}