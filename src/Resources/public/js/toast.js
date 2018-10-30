function toast(messaggio) {
    var x = document.getElementById("snackbar");
    x.className = "show";
    x.html(messaggio);
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}