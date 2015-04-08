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

function clearFormNotas() {
    comboboxDocente();
    comboboxCarreraNt();
    comboboxCarreraCicloNt();
    comboboxCarreraCicloCursoNt();
    comboboxCarreraCicloCursoSeccionNt();
}

function SearchRatingsStudentsOfSeccionPlanEstudio() {
    var idCarrera = $('#idCarrera').val();
    var idCiclo = $('#idCiclo').val();
    var idPlanEstudio = $('#idPlanEstudioCursos').val();
    var idTurno = $('#idTurno').val();
    var idSeccion = $('#idSeccion').val();
    var url = baseHTTP + 'controller/__matriculaNotas.php?action=SearchRatingsStudentsOfSeccionPlanEstudio&_idCar=' + idCarrera + '&_idCic=' + idCiclo + '&_idPla=' + idPlanEstudio + '&_idTur=' + idTurno + '&_idSec=' + idSeccion;
    var ratings = jqueryAjax(url, false, '');

    var jsonRatings = jQuery.parseJSON(ratings);

    var tableRatings = '<div class="widget-head">'
            + '<div class="pull-left">REGISTRO DE NOTAS</div>'
            + '<div class="widget-icons pull-right">'
            + '<button onclick="" type="button" class="btn btn-sm btn-info">Guardar Notas</button>'
            + '</div>'
            + '<div class="clearfix"></div>'
            + '</div>'

            + '<div class="widget-content" style="display: block;">'
            + '<div class="padd">'
            + '<div class="page-tables">'
            + '<div class="table-responsive" style="overflow-x: auto;">'
            + '';
    var tableHead = ['Estudiante', 'Ev1', 'Ev2', 'Ev3', 'Ev4', 'PromPract', 'ExParcial', 'Promedio', 'Ev1', 'Ev2', 'Ev3', 'Ev4', 'PromPract', 'Trabajo', 'ExFinal', 'Promedio', 'Susti', 'PromedioFinal'];
    tableRatings += '<table width="100%" cellspacing="0" cellpadding="0" border="0" style="width: 100%;" aria-describedby="data-table_info" class="dataTable" id="data-table">'
            + '<thead>'
            + '<tr role="row">';
    
    tableRatings += '<th style="width: auto; background-color:#f5f5f5; padding: 0 95px;" aria-sort="ascending" colspan="1" rowspan="1" aria-controls="data-table" tabindex="0" role="columnheader" class="none"><strong>' + tableHead[0] + '</strong></th>';
    for (var i = 1; i < tableHead.length; i++) {
        tableRatings += '<th style="width: auto; background-color:#f5f5f5" aria-sort="ascending" colspan="1" rowspan="1" aria-controls="data-table" tabindex="0" role="columnheader" class="none"><strong>' + tableHead[i] + '</strong></th>';
    }
    tableRatings += '</tr>'
            + '</thead>';

    tableRatings += '<tbody aria-relevant="all" aria-live="polite" role="alert">';
    for (var j = 0; j < jsonRatings.rows.length; j++) {
        tableRatings += '<tr>'
                + '<td>'
                +'<input name="_idMatriculaNotas[]" id="_idMatriculaNotas[]" type="text" value="'+jsonRatings.rows[j].idMatriculaNotas +'" class="notVisible" />' 
                +'<input name="_idMatriculaDetalle[]" id="_idMatriculaDetalle[]" type="text" value="'+jsonRatings.rows[j].idMatriculaDetalle +'" class="notVisible" />' 
                + jsonRatings.rows[j].prsApellidoPaterno + ' ' + jsonRatings.rows[j].prsApellidoMaterno + ', ' + jsonRatings.rows[j].prsNombre + ' <span style="float: right;">[' + jsonRatings.rows[j].prsDNI +']</span>'
                + '</td>'
                + '<td class="contentRatingStudent"><input name="_mntU1Ev1[]" id="_mntU1Ev1[]" type="text" value="' + jsonRatings.rows[j].mntU1Ev1 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU1Ev2[]" id="_mntU1Ev2[]" type="text" value="' + jsonRatings.rows[j].mntU1Ev2 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU1Ev3[]" id="_mntU1Ev3[]" type="text" value="' + jsonRatings.rows[j].mntU1Ev3 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU1Ev4[]" id="_mntU1Ev4[]" type="text" value="' + jsonRatings.rows[j].mntU1Ev4 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU1PromPract[]" id="_mntU1PromPract[]" type="text" value="' + jsonRatings.rows[j].mntU1PromPract + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU1ExParcial[]" id="_mntU1ExParcial[]" type="text" value="' + jsonRatings.rows[j].mntU1ExParcial + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU1Promedio[]" id="_mntU1Promedio[]" type="text" value="' + jsonRatings.rows[j].mntU1Promedio + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2Ev1[]" id="_mntU2Ev1[]" type="text" value="' + jsonRatings.rows[j].mntU2Ev1 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2Ev2[]" id="_mntU2Ev2[]" type="text" value="' + jsonRatings.rows[j].mntU2Ev2 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2Ev3[]" id="_mntU2Ev3[]" type="text" value="' + jsonRatings.rows[j].mntU2Ev3 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2Ev4[]" id="_mntU2Ev4[]" type="text" value="' + jsonRatings.rows[j].mntU2Ev4 + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2PromPract[]" id="_mntU2PromPract[]" type="text" value="' + jsonRatings.rows[j].mntU2PromPract + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2Trabajo[]" id="_mntU2Trabajo[]" type="text" value="' + jsonRatings.rows[j].mntU2Trabajo + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2ExFinal[]" id="_mntU2ExFinal[]" type="text" value="' + jsonRatings.rows[j].mntU2ExFinal + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntU2Promedio[]" id="_mntU2Promedio[]" type="text" value="' + jsonRatings.rows[j].mntU2Promedio + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntSusti[]" id="_mntSusti[]" type="text" value="' + jsonRatings.rows[j].mntSusti + '" class="inputRatingStudent" /></td>'
                + '<td class="contentRatingStudent"><input name="_mntPromedioFinal[]" id="_mntPromedioFinal[]" type="text" value="' + jsonRatings.rows[j].mntPromedioFinal + '" class="inputRatingStudent" /></td>'
                + '</tr>';
    }

    tableRatings += '</tbody></table>'
            + '</div>'
            + '</div>'
            + '</div>'
            + '<div class="widget-foot">'
            + ''
            + '</div>'
            + '</div>';

    $('.tableDocentesCursos').html(tableRatings);







}