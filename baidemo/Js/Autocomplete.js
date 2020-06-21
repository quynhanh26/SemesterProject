$(document).ready(function() {
    $("input#key").autocomplete({
        source: "Search.php",
        select: function(event, ui) {
            var name = ui.item.value;
            $.ajax({
                type: "GET",
                data: {
                    name: name
                },
            })
        },
    })
});