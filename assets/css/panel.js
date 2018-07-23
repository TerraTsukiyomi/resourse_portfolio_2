$(function() {

    $(".get-nicer").niceScroll("div.nice-wrapper", {
        cursorwidth: "12px"
    });

    $(".get-nicer").scroll(function() {
        $("#scroll-info-value").val($(".get-nicer").scrollTop());
    });

    $("a.btn").click(function(e) {
        e.preventDefault();

        console.log('click', e.target);

        $('#nice-modal1').modal();
    });

});
