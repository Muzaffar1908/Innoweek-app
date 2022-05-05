$(document).ready(function() {
    var y = 0;
    $(".filter-btn").animate({ bottom: '80px' });
    $("#filter-btn").click(function() {

        if (y % 2 == 0) {
            $(".filter").animate({ left: '0px' });
            $("#filter-btn").html("<i class='fa fa-times'></i>");


            y++;
        } else {
            $(".filter").animate({ left: '-390px' });
            $("#filter-btn").html("<i class='fal fa-abacus'></i>");
            y++;
        }
    });
    $("#divww").click(function() {
        var a = $("#divww label").html();
        $("#tanlash").html(a);
    });



});