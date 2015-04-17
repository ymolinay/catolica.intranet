$(document).ready(function () {
    comboboxCarrera();
    comboboxUsuarioCarrera();
	comboboxMatricula();
});

function validateMatricula() {
    if (validateFormControl('idUsuarioCarrera', 'number', true, true, 'Estudiante / Inscripción no válido.')) {
        if (validateFormControl('idCiclo', 'number', true, true, 'Seleccionar ciclo.')) {
            if (validateFormControl('idSede', 'number', true, true, 'Seleccionar sede.')) {
                if (validateFormControl('idSeccion', 'number', true, true, 'Seleccionar Seccion.')) {
                    if (numberCheckCursos() > 0) {
                        if (validateDuplicateMatricula() === 0) {
                            return true;
                        }
                    }
                }
            }
        }
    }
}

function validateShowCursos() {
    if (validateFormControl('idUsuarioCarrera', 'number', true, true, 'Estudiante / Inscripción no válido.')) {
        if (validateFormControl('idSede', 'number', true, true, 'Seleccionar sede.')) {
            if (validateFormControl('idCiclo', 'number', true, true, 'Seleccionar ciclo.')) {
                if (validateFormControl('idTurno', 'number', true, true, 'Seleccionar Turno.')) {
                    if (validateFormControl('idSeccion', 'number', true, true, 'Seleccionar Seccion.')) {
                        if (validateFormControl('idTipoBeneficio', 'number', true, true, 'Seleccionar Beneficio.')) {
                            return true;
                        }
                    }
                }
            }
        }
    }
}

function numberCheckCursos() {
    var _count = 0;
    //$("input[type=checkbox][name='_gridCheckBox[]']:checked").each(function () {
    $('.tablePlanEstudiosMatricula tbody tr td input[type=checkbox][name="_gridCheckBox[]"]:checked').each(function () {
        _count++;
    });
    openPopUp('Seleccionar cursos', 'Seleccionar al menos un curso.', '', '', '');
    return _count;
}

function comboboxBeneficio() {
    $('#idTipoBeneficio option[value!=""]').remove();
    var url = baseHTTP + 'controller/__tipoBeneficio.php?action=combobox';
    var result = jqueryAjax(url, false, '');
    var jsonTipoBeneicio = jQuery.parseJSON(result);
    for (i = 0; i < jsonTipoBeneicio.length; i++) {
        $('#idTipoBeneficio').append(new Option(jsonTipoBeneicio[i].tboDescripcion + ' - (' + jsonTipoBeneicio[i].tboDescuentoPorcentaje + '%)', jsonTipoBeneicio[i].idTipoBeneficio));
    }
}

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
		console.log(jsonMatricula[i]);
        var opt = new Option(jsonMatricula[i].mtcFecha, jsonMatricula[i].idMatricula);
        opt.setAttribute("data-ciclo", jsonMatricula[i].cloDescripcion);
        opt.setAttribute("data-seccion", jsonMatricula[i].scnDescripcion);
        opt.setAttribute("data-turno", jsonMatricula[i].troDescripcion);
        opt.setAttribute("data-sede", jsonMatricula[i].sdeNombre);
        opt.setAttribute("data-estado", jsonMatricula[i].etmDescripcion);
        opt.setAttribute("data-beneficio", jsonMatricula[i].tboDescripcion);
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
        var _beneficio = matricula.find(':selected').data('beneficio');
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
        /***************/
        $("#mensajeBeneficio").addClass("label-info");
        $("#mensajeBeneficio").removeClass("label-success");
        $("#mensajeBeneficio").removeClass("label-danger");
        $("#mensajeBeneficio").html("Beneficio: " + _beneficio);
    }
}
//function generateMatricula() {
//    var idPlanEstudio = new Array();//recorro los cursos seleccionados
//    $('#tableCursos tbody tr td input[type=checkbox]:checked').each(function () {
//        idPlanEstudio.push($(this).val());
//    });
//    var data = 'idUsuarioCarrera=' + $('#_idUsuarioCarrera').val() + '&idCiclo=' + $('#_idCiclo').val() + '&idSeccion=' + $('#_idSeccion').val() + '&planEstudioInscripcion=' + idPlanEstudio.join(';');
//    var url = baseHTTP + 'controller/__matricula.php?action=save&' + data;
//    var result = jqueryAjax(url, true, 'quest');
//    if (result === 'success') {
//        $('.modal-body').html('Registro actualizado con éxito. El estudiante debe cancelar el primer pago para activar esta matrícula.');
//        $('.modal-footer').html('<button id="confirm" class="btn btn-primary" type="button" onclick="closePopUp();clearForm(\'Zm9ybU1hdHJpY3VsYQ==\');" style="border-radius: 0px"><span class="glyphicon glyphicon-ok"></span> OK</button>');
//    } else {
//        $('.modal-body').html('Error al actualizar el registro.');
//        $('.modal-footer').html('<button id="confirm" class="btn btn-primary" type="button" onclick="closePopUp();" style="border-radius: 0px"><span class="glyphicon glyphicon-ok"></span> OK</button>');
//    }
//}

function confirmGenerateMatricula() {
    var title = 'Confirmar guardar registro';
    var body = '<div class="quest">¿Desea guardar el registro actual?</div>';
    var actionSave = "generateMatricula();";
    openPopUp(title, body, '', actionSave);
}


/*function gridGeneratePlanEstudio() {
 if (validateShowCursos() === true) {
 var UserProfession = $('#idUsuarioCarrera').val();
 UserProfession = (UserProfession === undefined) ? '' : UserProfession;
 var Ciclo = $('#idCiclo').val();
 Ciclo = (Ciclo === undefined) ? '' : Ciclo;
 
 var objGrid = {
 div: 'tablePlanEstudiosMatricula',
 url: baseHTTP + 'controller/__grid.php?action=loadGrid',
 table: 'usuariocarrera;usuario;personal;tipobeneficio;carrera;planestudio;curso;ciclo',
 colNames: ['', 'CICLO', 'CURSO'],
 colModel: [
 {name: 'idPlanEstudio', index: '5', align: 'left'},
 {name: 'cloDescripcion', index: '7'},
 {name: 'crsNombre', index: '6'}
 ],
 join: {
 type: 'inner;inner;inner;inner;inner;inner;inner',
 on: 'u0.idUsuario=u1.idUsuario;u1.idPersonal=p2.idPersonal;u0.idTipoBeneficio=t3.idTipoBeneficio;u0.idCarrera=c4.idCarrera;c4.idCarrera=p5.idCarrera;p5.idCurso=c6.idCurso;p5.idCiclo=c7.idCiclo'
 },
 where: {
 fields: 'u0.idUsuarioCarrera;c7.idCiclo',
 logical: '=;=',
 values: UserProfession + ';' + Ciclo
 },
 page: 1,
 rowNum: 100,
 sortName: 'c7.idCiclo,p5.idPlanEstudio',
 sortOrder: 'asc',
 title: 'CURSOS PENDIENTES',
 checkbox: {
 prefix: 'crs',
 //accion: 'alert(this.id);'
 accion: ''
 }
 };
 loadGrid(objGrid);
 var _btn = '<button class="btn btn-sm btn-info" type="button" onclick="confirmSave(\'bWF0cmljdWxh\',\'Zm9ybU1hdHJpY3VsYQ==\',\'disbledShowButton();\',\'\')">Generar Matrícula</button>';
 $('.tablePlanEstudiosMatricula div.widget-head div.widget-icons.pull-right').html(_btn);
 }
 }*/

function gridGeneratePlanEstudio() {
    if (validateShowCursos() === true) {
        var UserProfession = $('#idUsuarioCarrera').val();
        UserProfession = (UserProfession === undefined) ? '' : UserProfession;
        var Ciclo = $('#idCiclo').val();
        Ciclo = (Ciclo === undefined) ? '' : Ciclo;

        var objGrid = {
            div: 'tablePlanEstudiosMatricula',
            url: baseHTTP + 'controller/__grid.php?action=loadGrid',
            table: 'usuariocarrera;usuario;personal;carrera;planestudio;curso;ciclo',
            colNames: ['', 'CICLO', 'CURSO'],
            colModel: [
                {name: 'idPlanEstudio', index: '4', align: 'left'},
                {name: 'cloDescripcion', index: '6'},
                {name: 'crsNombre', index: '5'}
            ],
            join: {
                type: 'inner;inner;inner;inner;inner;inner',
                on: 'u0.idUsuario=u1.idUsuario;u1.idPersonal=p2.idPersonal;u0.idCarrera=c3.idCarrera;c3.idCarrera=p4.idCarrera;p4.idCurso=c5.idCurso;p4.idCiclo=c6.idCiclo'
            },
            where: {
                fields: 'u0.idUsuarioCarrera;c6.idCiclo',
                logical: '=;=',
                values: UserProfession + ';' + Ciclo
            },
            page: 1,
            rowNum: 100,
            sortName: 'c6.idCiclo,p4.idPlanEstudio',
            sortOrder: 'asc',
            title: 'CURSOS PENDIENTES',
            checkbox: {
                prefix: 'crs',
                //accion: 'alert(this.id);'
                accion: ''
            }
        };
        loadGrid(objGrid);
        var _btn = '<button class="btn btn-sm btn-info" type="button" onclick="confirmSave(\'bWF0cmljdWxh\',\'Zm9ybU1hdHJpY3VsYQ==\',\'disbledShowButton();\',\'\')">Generar Matrícula</button>';
        $('.tablePlanEstudiosMatricula div.widget-head div.widget-icons.pull-right').html(_btn);
    }
}

function printMatricula() {
    var pdfURL = baseHTTP + 'files/PDF/fichaMatricula.pdf';
    window.open(pdfURL);
}

function comboboxCarrera_DELETE() {
    $('#idCarrera option[value!=""]').remove();
    var url = baseHTTP + 'controller/__carrera.php?action=combobox';
    var result = jqueryAjax(url, false, '');
    var jsonCarrera = jQuery.parseJSON(result);
    for (i = 0; i < jsonCarrera.length; i++) {
        $('#idCarrera').append(new Option(jsonCarrera[i].carDescripcion, jsonCarrera[i].idCarrera));
    }
}

function disbledShowButton() {
    $('#buttonShowCourses').addClass('disabled');
    $('.tablePlanEstudiosMatricula').empty();
    showExtraData();
}

function validateDuplicateMatricula() {
    var _idCiclo = $('#idCiclo').val();
    var _idUsuarioCarrera = $('#idUsuarioCarrera').val();
    var url = baseHTTP + 'controller/__matricula.php?action=searchDuplicate&_idCiclo=' + _idCiclo + '&_idUsuarioCarrera=' + _idUsuarioCarrera;
    var duplicate = jqueryAjax(url, false, '');
    duplicate = jQuery.parseJSON(duplicate);
    openPopUp('Registro duplicado', 'Este alumno ya tiene una matrícula activa para el ciclo seleccionado.', '', '', '');
    return duplicate.count;
}