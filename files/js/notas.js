$(document).ready(function () {
    comboboxCarrera();
    comboboxUsuarioCarrera();
    comboboxMatricula();
//    comboboxCiclos();
//    comboboxSeccion();

});

function comboboxCarrera() {
    $('#idCarrera option[value!=""]').remove();
    var url = baseHTTP + 'controller/__carrera.php?action=combobox';
    var result = jqueryAjax(url, false, '');
    var jsonCarrera = jQuery.parseJSON(result);
    for (i = 0; i < jsonCarrera.length; i++) {
        var opt = new Option(jsonCarrera[i].carDescripcion, jsonCarrera[i].idCarrera);
        opt.setAttribute("data-maxCiclo", jsonCarrera[i].carPeriodos);
        $('#idCarrera').append(opt);
    }
}

function comboboxUsuarioCarrera() {
    var idCarrera = $('#idCarrera').val();
    $('#idUsuarioCarrera option[value!=""]').remove();
    var url = baseHTTP + 'controller/__usuarioCarrera.php?action=combobox&idCarrera=' + idCarrera;
    var result = jqueryAjax(url, false, '');
    var usurioCarrera = jQuery.parseJSON(result);

    for (i = 0; i < usurioCarrera.length; i++) {
        var opt = new Option(usurioCarrera[i].prsNombre + ' ' + usurioCarrera[i].prsApellidoPaterno + ' ' + usurioCarrera[i].prsApellidoMaterno, usurioCarrera[i].idUsuarioCarrera);
        opt.setAttribute("data-dni", usurioCarrera[i].prsDNI);
        opt.setAttribute("data-carrera", usurioCarrera[i].carDescripcion);
        $('#idUsuarioCarrera').append(opt);
    }
}

function comboboxMatricula() {
    var idUsuarioCarrera = $('#idUsuarioCarrera').val();
    $('#idMatricula option[value!=""]').remove();
    var url = baseHTTP + 'controller/__matricula.php?action=combobox&idUsuarioCarrera='+idUsuarioCarrera;
    var result = jqueryAjax(url, false, '');
    var jsonMatricula = jQuery.parseJSON(result);
    for (i = 0; i < jsonMatricula.length; i++) {
        var opt = new Option(jsonMatricula[i].mtcFecha, jsonMatricula[i].idMatricula);
        opt.setAttribute("data-ciclo", jsonMatricula[i].cloDescripcion);
        opt.setAttribute("data-seccion", jsonMatricula[i].scnDescripcion);
        opt.setAttribute("data-turno", jsonMatricula[i].troDescripcion);
        opt.setAttribute("data-sede", jsonMatricula[i].sdeNombre);
        opt.setAttribute("data-estado", jsonMatricula[i].etmDescripcion);
        $('#idMatricula').append(opt);
    }
}

function showExtraData() {
    var student = $('#idUsuarioCarrera');
    var matricula = $('#idMatricula');
    if (student.val() == '') {
        $("#mensajeDNI").removeClass("label-danger");
        $("#mensajeDNI").removeClass("label-success");
        $("#mensajeDNI").addClass("label-info");
        $("#mensajeDNI").html("No se seleccionó estudiante.");
    } else {
        var _dni = student.find(':selected').data('dni');
        $("#mensajeDNI").addClass("label-info");
        $("#mensajeDNI").removeClass("label-success");
        $("#mensajeDNI").removeClass("label-danger");
        $("#mensajeDNI").html("DNI: " + _dni);
    }
    if(matricula.val()==''){
        $(".matriculaNFO").removeClass("label-danger");
        $(".matriculaNFO").removeClass("label-success");
        $(".matriculaNFO").addClass("label-info");
        $(".matriculaNFO").html("No se seleccionó Matrícula.");
    }else{
        var _ciclo = matricula.find(':selected').data('ciclo');
        var _seccion = matricula.find(':selected').data('seccion');
        var _turno = matricula.find(':selected').data('turno');
        var _sede = matricula.find(':selected').data('sede');
        var _estado = matricula.find(':selected').data('estado');
        /***************/
        $("#mensajeCiclo").addClass("label-info");
        $("#mensajeCiclo").removeClass("label-success");
        $("#mensajeCiclo").removeClass("label-danger");
        $("#mensajeCiclo").html("Ciclo: " + _ciclo);
        /***************/
        $("#mensajeSeccion").addClass("label-info");
        $("#mensajeSeccion").removeClass("label-success");
        $("#mensajeSeccion").removeClass("label-danger");
        $("#mensajeSeccion").html("Sección: " + _seccion);
        /***************/
        $("#mensajeTurno").addClass("label-info");
        $("#mensajeTurno").removeClass("label-success");
        $("#mensajeTurno").removeClass("label-danger");
        $("#mensajeTurno").html("Turno: " + _turno);
        /***************/
        $("#mensajeSede").addClass("label-info");
        $("#mensajeSede").removeClass("label-success");
        $("#mensajeSede").removeClass("label-danger");
        $("#mensajeSede").html("Sede: " + _sede);
        /***************/
        $("#mensajeEstado").addClass("label-info");
        $("#mensajeEstado").removeClass("label-success");
        $("#mensajeEstado").removeClass("label-danger");
        $("#mensajeEstado").html("Estado: " + _estado);
    }
}