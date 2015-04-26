$(document).ready(function () {
    gridTipoPago();
});

function gridTipoPago() {
    var objGrid = {
        div: 'tableTipoPago',
        url: baseHTTP + 'controller/__grid.php?action=loadGrid',
        table: 'tipopago',
        colNames: ['', 'TIPO PAGO', 'MONTO'],
        colModel: [
            {name: 'idTipoPago', index: '0', align: 'center'},
            {name: 'tppDescripcion', index: '0'},
            {name: 'tppMonto', index: '0'}
        ],
        page: 1,
        rowNum: 20,
        sortName: 'idTipoPago',
        sortOrder: 'asc',
        title: 'TIPOS DE PAGO',
        check: ""
    };
    loadGrid(objGrid);
    var _btn = '';
    $('.tableTipoPago div.widget-head div.widget-icons.pull-right').html(_btn);
}

function validateTipoPago() {
    if (validateFormControl('Descripcion', 'text', true, true, 'Ingresar una descripción.')) {
        if (validateFormControl('Monto', 'number', true, true, 'Ingresar un monto numérico.')) {
            //if (validateFormControl('Obligatorio', 'number', true, true, 'Ingresar un monto numérico.')) {
                if (validateFormControl('Orden', 'number', true, true, 'Ingresar un monto numérico.')) {
                    return true;
                }
            //}
        }
    }
}

function countObligatorio(){
    var Obligatorio = $('#Obligatorio');
    var Orden = $('#Orden');
    
    if(Obligatorio.is(":checked") === true){
        var url = baseHTTP + 'controller/__tipoPago.php?action=countObligatorio';
        var result = jqueryAjax(url, false, '');
        var tipoPago = jQuery.parseJSON(result);
        Orden.val(parseInt(tipoPago.length) + 1);
    }else{
        Orden.val('');
    }
}

function changeOrder(){
    console.log('mostrar interfaz que cambia el orden');
}