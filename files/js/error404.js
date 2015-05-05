$(window).load(function () {
    $('#backgroundLoading').fadeOut('slow');
    countdown();
});

function countdown() {
    var currentCount = parseInt($.trim($('#countdown').html()));
    if (currentCount <= 0) {
        href('login.php');
    } else {
        $('#countdown').html(currentCount - 1);
        setTimeout('countdown()', 1000);
    }
}