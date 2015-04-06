$(document).ready(function (){
    comboboxDocente();
});

function comboboxDocente() {
    $('#idDocente option[value!=""]').remove();
    var url = baseHTTP + 'controller/__docenteSeccionCurso.php?action=comboboxDocente';
    var result = jqueryAjax(url, false, '');
    var docente = jQuery.parseJSON(result);
    for (i = 0; i < docente.length; i++) {
        $('#idDocente').append(new Option(docente[i].prsNombre + ' ' + docente[i].prsApellidoPaterno + ' ' + docente[i].prsApellidoMaterno + ' - ' + docente[i].prsDNI, docente[i].idDocenteSeccionCurso));
    }
}