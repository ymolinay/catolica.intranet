$(document).ready(function () {
    clearFormNotas();
    comboboxTurno();
});

function comboboxDocente() {
    $('#idDocente option[value!=""]').remove();
    var url = baseHTTP + 'controller/__docenteSeccionCurso.php?action=comboboxDocente';
    var result = jqueryAjax(url, false, '');
    var docente = jQuery.parseJSON(result);
    for (i = 0; i < docente.length; i++) {
        var opt = new Option(docente[i].prsNombre + ' ' + docente[i].prsApellidoPaterno + ' ' + docente[i].prsApellidoMaterno + ' - ' + docente[i].prsDNI, docente[i].idDocenteSeccionCurso);
        opt.setAttribute("data-usuario", docente[i].idUsuario);
        $('#idDocente').append(opt);
    }
}

function comboboxTurno() {
    $('#idTurno option[value!=""]').remove();
    var url = baseHTTP + 'controller/__turno.php?action=combobox';
    var result = jqueryAjax(url, false, '');
    var jsonTurno = jQuery.parseJSON(result);
    for (i = 0; i < jsonTurno.length; i++) {
        $('#idTurno').append(new Option(jsonTurno[i].troDescripcion, jsonTurno[i].idTurno));
    }
}

function comboboxCarreraNt() {
    var docente = $('#idDocente');
    $('#idCarrera option[value!=""]').remove();
    if (docente.val() != '') {
        var _idDocente = docente.val();
        var _idUsuario = docente.find(':selected').data('usuario');
        var url = baseHTTP + 'controller/__docenteSeccionCurso.php?action=comboboxCarrera&_idDoc=' + _idDocente + '&_idUsu=' + _idUsuario;
        var result = jqueryAjax(url, false, '');
        var docente = jQuery.parseJSON(result);
        for (i = 0; i < docente.length; i++) {
            $('#idCarrera').append(new Option(docente[i].carDescripcion, docente[i].idCarrera));
        }
    }
}

function comboboxCarreraCicloNt() {
    var docente = $('#idDocente');
    var carrera = $('#idCarrera');
    $('#idCiclo option[value!=""]').remove();
    if (docente.val() != '' && carrera.val() != '') {
        var _idDocente = docente.val();
        var _idCarrera = carrera.val();
        var _idUsuario = docente.find(':selected').data('usuario');
        var url = baseHTTP + 'controller/__docenteSeccionCurso.php?action=comboboxCiclo&_idDoc=' + _idDocente + '&_idCar=' + _idCarrera + '&_idUsu=' + _idUsuario;
        var result = jqueryAjax(url, false, '');
        var ciclo = jQuery.parseJSON(result);
        for (i = 0; i < ciclo.length; i++) {
            $('#idCiclo').append(new Option(ciclo[i].cloDescripcion, ciclo[i].idCiclo));
        }
    }
}

function comboboxCarreraCicloCursoNt() {
    var docente = $('#idDocente');
    var carrera = $('#idCarrera');
    var ciclo = $('#idCiclo');
    $('#idPlanEstudioCursos option[value!=""]').remove();
    if (docente.val() != '' && carrera.val() != '' && ciclo.val() != '') {
        var _idDocente = docente.val();
        var _idCarrera = carrera.val();
        var _idCiclo = ciclo.val();
        var _idUsuario = docente.find(':selected').data('usuario');
        var url = baseHTTP + 'controller/__docenteSeccionCurso.php?action=comboboxCursos&_idDoc=' + _idDocente + '&_idCar=' + _idCarrera + '&_idUsu=' + _idUsuario + '&_idCil=' + _idCiclo;
        var result = jqueryAjax(url, false, '');
        var planEstudio = jQuery.parseJSON(result);
        for (i = 0; i < planEstudio.length; i++) {
            $('#idPlanEstudioCursos').append(new Option(planEstudio[i].crsNombre, planEstudio[i].idPlanEstudio));
        }
    }
}

function comboboxCarreraCicloCursoSeccionNt() {
    var docente = $('#idDocente');
    var carrera = $('#idCarrera');
    var ciclo = $('#idCiclo');
    var planEstudioCurso = $('#idPlanEstudioCursos');
    var turno = $('#idTurno');
    $('#idSeccion option[value!=""]').remove();
    $('#seccionFound').removeClass('label-success');
    $('#seccionFound').addClass('label-default');
    $('#seccionFound').html('No hay secciones.');
    if (docente.val() != '' && carrera.val() != '' && ciclo.val() != '' && planEstudioCurso.val() != '' && turno.val() != '') {
        var _idDocente = docente.val();
        var _idCarrera = carrera.val();
        var _idCiclo = ciclo.val();
        var _idPlanEstudio = planEstudioCurso.val();
        var _idTurno = turno.val();
        var _idUsuario = docente.find(':selected').data('usuario');
        var url = baseHTTP + 'controller/__docenteSeccionCurso.php?action=comboboxSecciones&_idDoc=' + _idDocente + '&_idCar=' + _idCarrera + '&_idUsu=' + _idUsuario + '&_idCil=' + _idCiclo + '&_idTur=' + _idTurno + '&_idPla=' + _idPlanEstudio;
        var result = jqueryAjax(url, false, '');
        var seccion = jQuery.parseJSON(result);

        if (seccion == false) {
            $('#seccionFound').removeClass('label-success');
            $('#seccionFound').addClass('label-default');
            $('#seccionFound').html('No hay secciones.');
        } else {
            $('#seccionFound').addClass('label-success');
            $('#seccionFound').removeClass('label-default');
            $('#seccionFound').html('Secciones encontradas.');
        }

        for (i = 0; i < seccion.length; i++) {
            var opt = new Option(seccion[i].scnDescripcion, seccion[i].idSeccion);
            opt.setAttribute("data-max", seccion[i].scnCantMaxima);
            opt.setAttribute("data-ini", seccion[i].scnInicio);
            opt.setAttribute("data-fin", seccion[i].scnFin);
            $('#idSeccion').append(opt);
        }
    }
}

function clearFormNotas(){
    comboboxDocente();
    comboboxCarreraNt();
    comboboxCarreraCicloNt();
    comboboxCarreraCicloCursoNt();
    comboboxCarreraCicloCursoSeccionNt();
}