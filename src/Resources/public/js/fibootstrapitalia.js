$(document).ready(function () {
    $('body').on('focus', ".fibootstrap_datepicker", function () {
        $(this).datepicker({
            format: 'dd/mm/yyyy',
            language: "it"
        });
    });
});