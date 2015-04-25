$(document).ready(function () {
    comboboxTipoPago();
    gridTipoBeneficio();
});

function gridTipoBeneficio() {
    var objGrid = {
        div: 'tableTipoBeneficio',
        url: baseHTTP + 'controller/__grid.php?action=loadGrid',
        table: 'tipobeneficio;tipopago',
        colNames: ['', 'TIPO DE BENEFICIO', 'TIPO DE PAGO', 'MONTO', 'PORCENTAJE DE DESCUENTO'],
        colModel: [
            {name: 'idTipoBeneficio', index: '0', align: 'center'},
            {name: 'tboDescripcion', index: '0'},
            {name: 'tppDescripcion', index: '1'},
            {name: 'tppMonto', index: '1'},
            {name: 'tboDescuentoPorcentaje', index: '0'}
        ],
        join: {
            type: 'inner',
            on: 't0.idTipoPago=t1.idTipoPago'
        },
        page: 1,
        rowNum: 20,
        sortName: 'idTipoBeneficio',
        sortOrder: 'asc',
        title: 'TIPOS DE BENEFICIO',
        check: ""
    };
    loadGrid(objGrid);
    var _btn = '';
    $('.tableTipoBeneficio div.widget-head div.widget-icons.pull-right').html(_btn);
}

function validateTipoBeneficio() {
    if (validateFormControl('Descripcion', 'text', true, true, 'Ingresar Descripcion.')) {
        if (validateFormControl('idTipoPago', 'number', true, true, 'Seleccionar Tipo de Pago.')) {
            if (validateFormControl('DescuentoPorcentaje', 'decimal', true, true, 'Indicar una Cantidad válida.')) {
                return true;
            }
        }
    }
}

function comboboxTipoPago() {
    $('#idTipoPago option[value!=""]').remove();
    var url = baseHTTP + 'controller/__tipoPago.php?action=combobox';
    var result = jqueryAjax(url, false, '');
    var jsonTipoPago = jQuery.parseJSON(result);
    for (i = 0; i < jsonTipoPago.length; i++) {
        var opt = new Option(jsonTipoPago[i].tppDescripcion, jsonTipoPago[i].idTipoPago);
        opt.setAttribute("data-monto", jsonTipoPago[i].tppMonto);
        $('#idTipoPago').append(opt);
    }
}

function showExtraData() {
    var idTipoPago = $('#idTipoPago');
    var DescuentoPorcentaje = $('#DescuentoPorcentaje');

    if (idTipoPago.val() != '') {
        if (validateFormControl('DescuentoPorcentaje', 'decimal', true, true, 'Indicar una Cantidad válida.')) {
            var _monto = parseFloat(idTipoPago.find(':selected').data('monto'));
            var _porcentaje = parseFloat(DescuentoPorcentaje.val());
            $("#Monto").val(_monto);
            $("#MontoDesc").val(_monto * (100 - _porcentaje) / 100);
        }else{
            $("#Monto").val("-");
            $("#MontoDesc").val("-");
        }
    }
}