$(document).ready(function () {
    gridCarreras();
});

function gridCarreras() {
    var objGrid = {
        div: 'tableCarreras',
        url: baseHTTP + 'controller/__grid.php?action=loadGrid',
        table: 'carrera',
        colNames: ['', 'NOMBRE', 'PERIODOS'],
        colModel: [
            {name: 'idCarrera', align: 'center'},
            {name: 'carDescripcion'},
            {name: 'carPeriodos'}
        ],
        page: 1,
        rowNum: 5,
        sortName: 'idCarrera',
        sortOrder: 'desc',
        title: 'CARRERAS',
        edit: 'editCarrera(this.id);',
        delete: "openPopUp('Alerta','<p>Usted no posee permisos para realizar esta acción</p>','','');"
    };
    loadGrid(objGrid);
}

function editCarrera(id) {
    var url = baseHTTP + 'controller/__carrera.php?action=find&idCarrera=' + id;
    var result = jqueryAjax(url, false, '');
    var carrera = jQuery.parseJSON(result);
    $('#inputIdCarrera').val(carrera.idCarrera);
    $('#inputDescripcion').val(carrera.descripcion);
    $('#inputPeriodos').val(carrera.periodos);
}

function newForm() {
    $('#inputIdCarrera').val('');
    $('#inputDescripcion').val('');
    $('#inputPeriodos').val('');
    $('#inputDescripcion').focus();
}

function validateCarrera() {
    if (validateFormControl('inputDescripcion', 'text', true, true, 'Nombre de Carrera no válido')) {
        if (validateFormControl('inputPeriodos', 'number', true, true, 'Periodo no válido')) {
            return true;
        }
    }
}

function searchCarrera() {
    var descripcion = $("#inputDescripcion").val();
    var periodos = $("#inputPeriodos").val();
    var objGrid = {
        div: 'tableCarreras',
        url: baseHTTP + 'controller/__grid.php?action=loadGrid',
        table: 'carrera',
        colNames: ['', 'NOMBRE', 'PERIODOS'],
        colModel: [
            {name: 'idCarrera', align: 'center'},
            {name: 'carDescripcion'},
            {name: 'carPeriodos'}
        ],
        where: {
            fields: 'carDescripcion;carPeriodos',
            logical: 'like;like',
            values: '%' + descripcion + '%;%' + periodos + '%'
        },
        page: 1,
        rowNum: 5,
        sortName: 'idCarrera',
        sortOrder: 'desc',
        title: 'CARRERAS',
        edit: 'editCarrera(this.id);',
        delete: "openPopUp('Alerta','<p>Usted no posee permisos para realizar esta acción</p>','','');"
    };
    loadGrid(objGrid);

}