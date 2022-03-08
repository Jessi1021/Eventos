/****** Menu de hamburguesa */
$('#burger-status').change(function() {
    if ($('#burger-status').is(':checked')) {
        $('#nav-lateral').addClass('visible');

    } else {
        $('#nav-lateral').removeClass('visible');
    }
});

/**aparicion de modal */
var myElements = document.getElementsByClassName("card");
var modal = document.getElementById('mymodal');
var modalExit = document.getElementById('modal-exit');


for (var i = 0; i < myElements.length; i++) {
    myElements[i].addEventListener('click', function() {
        modal.style.display = "block";
    });
}

/* cerrar modal modalExit*/

modalExit.addEventListener('click', function() {
    modal.style.display = "none";
});