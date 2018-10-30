function toast(messaggio) {
    var x = $("#snackbar");
    x.html(messaggio);
    x.addClass("show");
    setTimeout(function(){ x.removeClass("show"); }, 3000);
}