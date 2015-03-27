<html>
	<script>
	function loadGrid(objGrid) {

    var url = objGrid.url;
    var dbTable = objGrid.table;

    var fields = '';
    var index = '';
    var sep = '';

    for (i = 0; i < objGrid.colModel.length; i++) {
        fields += sep + objGrid.colModel[i].name;
        index += sep + objGrid.colModel[i].index;
        sep = ';';
    }

    var limit = objGrid.rowNum;
    var orderName = objGrid.sortName;
    var orderMode = objGrid.sortOrder;
    var page = objGrid.page;

    var joinType = (objGrid.hasOwnProperty('join')) ? objGrid.join.type : '';
    var joinOn = (objGrid.hasOwnProperty('join')) ? objGrid.join.on : '';

    var whereFields = (objGrid.hasOwnProperty('where')) ? objGrid.where.fields : '';
    var whereLogical = (objGrid.hasOwnProperty('where')) ? objGrid.where.logical : '';
    var whereValues = (objGrid.hasOwnProperty('where')) ? objGrid.where.values : '';

    url = url + '&dbTable=' + dbTable + '&fields=' + fields + '&limit=' + limit + '&orderName=' + orderName + '&orderMode=' + orderMode
            + '&page=' + page + '&whereFields=' + whereFields + '&whereLogical=' + whereLogical + '&whereValues=' + whereValues
            + '&index=' + index + '&joinType=' + joinType + '&joinOn=' + base64_encoding(joinOn);

    var result = jqueryAjax(url, true, objGrid.div);
    var data = jQuery.parseJSON(result);

    if (data.records > 0) {

        /////////////////////////////////////////
        var ObjNextGrid = $.extend({}, objGrid);
        ObjNextGrid.page = parseInt(data.page) + 1;
        //ObjNextGrid = recorrer(ObjNextGrid);

        var ObjPrevGrid = $.extend({}, objGrid);
        ObjPrevGrid.page = parseInt(data.page) - 1;
        //ObjPrevGrid = recorrer(ObjPrevGrid);

        var ObjEndGrid = $.extend({}, objGrid);
        ObjEndGrid.page = parseInt(data.total);
        //ObjEndGrid = recorrer(ObjEndGrid);

        var ObjStartGrid = $.extend({}, objGrid);
        ObjStartGrid.page = 1;
        //ObjStartGrid = recorrer(ObjStartGrid);
        ///////////////////////////////////////

        var title = objGrid.title.toUpperCase();
        var colums = objGrid.colNames;
        var numColums = colums.length;
        var select = objGrid.rowList;
        var table = '<div class="table-responsive">'
                + '<table class="table table-striped table-condensed table-bordered" id="tbl_personal">'
                + '<thead>'
                + '<tr>'
                + '<th colspan="' + numColums + '" style="text-align: left; font-size: 14px;">'
                + '<div>'
                + '&nbsp;&nbsp;'
                + '<span class="glyphicon glyphicon-list"></span>'
                + '&nbsp;&nbsp;&nbsp;'
                + title
                + '<span style="float: right;" class="glyphicon glyphicon-chevron-down"></span>'
                + '</div>'
                + '</th>'
                + '</tr>'
                + '<tr>';
        for (var i = 0; i < numColums; i++) {
            table += '<th id="fld_idPersonal">'
                    + colums[i] + '&nbsp;&nbsp;'
                    + '<div class="notVisible">'
                    + '<span class="glyphicon  glyphicon glyphicon-sort-by-attributes"></span>'
                    + '<span class="glyphicon glyphicon glyphicon-sort-by-attributes-alt"></span>'
                    + '</div>'
                    + '</th>';
        }
        table += '</tr>'
                + '</thead>'
                + '<tbody>';

        for (var i = 0; i < data.rows.length; i++) {
            table += '<tr>'
                    + '<td align="center">';

            if (objGrid.hasOwnProperty('edit')) {
                //table += '&nbsp;<span class="glyphicon glyphicon-pencil" onClick="editRecord('+data.rows[i].id+');' + objGrid.edit + '" style="cursor: pointer;"></span>';
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-pencil" onClick="' + objGrid.edit + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('delete')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-remove" onClick="' + objGrid.delete + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('qrCode')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-qrcode" onClick="' + objGrid.qrCode + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('print')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-print" onClick="' + objGrid.print + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('check')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-ok" onClick="' + objGrid.check + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('lock')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-lock" onClick="' + objGrid.lock + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('reset')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-repeat" onClick="' + objGrid.reset + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('alert')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-exclamation-sign" onClick="' + objGrid.alert + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('tag')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-tag" onClick="' + objGrid.tag + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('rebuild')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-wrench" onClick="' + objGrid.rebuild + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('file')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-paperclip" onClick="' + objGrid.file + '" style="cursor: pointer;"></span>';
            }
            if (objGrid.hasOwnProperty('view')) {
                table += '&nbsp;<span id="' + base64_encoding(data.rows[i].id) + '" class="glyphicon glyphicon-search" onClick="' + objGrid.view + '" style="cursor: pointer;"></span>';
            }

            table += '</td>';

            for (var j = 1; j <= data.rows[i].cell.length - 1; j++) {
                //if(objGrid.colModel[j].hasOwnProperty('align')){}
                var align = (objGrid.colModel[j].hasOwnProperty('align')) ? 'align = "' + objGrid.colModel[j].align + '"' : '';
                table += '<td ' + align + '>' + data.rows[i].cell[j] + '</td>';
            }
            table + '</tr>';
        }
        table += '<tr>'
                + '<th colspan="' + numColums + '" style="text-align: center; font-size: 14px;">'
                + '<div>'
                + '&nbsp;'
                + '<span id="startGrid" class="glyphicon glyphicon-fast-backward"></span>'
                + '<span id="prevGrid" class="glyphicon glyphicon-backward"></span>'
                + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
                + 'Página ' + data.page + ' de ' + data.total
                + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
                + '<span id="nextGrid" class="glyphicon glyphicon-forward"></span>'
                + '<span id="endGrid" class="glyphicon glyphicon-fast-forward"></span>'
                + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
                //            + '<select name="limitGrid" class="gridselect">';
                //    for (var i = 0; i < select.length; i++) {
                //        table += '<option>' + select[i] + '</option>';
                //    }
                //    table += '</select>'
                + '<span style="float: right;">Mostrando ' + (data.star + 1) + ' - ' + data.end + ' de ' + data.records + '</span>'
                + '</div>'
                + '</th>'
                + '</tr>'
                + '</tbody>'
                + '</table>'
                + '</div>';

        $('.' + objGrid.div).html(table);
        if (objGrid.page !== 1) {
            $('#startGrid').on('click', function() {
                loadGrid(ObjStartGrid);
            });
            $('#startGrid').css("cursor", "pointer");
        } else {
            $('#startGrid').css("opacity", "0.2");
        }
        if (ObjPrevGrid.page !== 0) {
            $('#prevGrid').on('click', function() {
                loadGrid(ObjPrevGrid);
            });
            $('#prevGrid').css("cursor", "pointer");
        } else {
            $('#prevGrid').css("opacity", "0.2");
        }
        if (ObjNextGrid.page !== parseInt(data.total) + 1) {
            $('#nextGrid').on('click', function() {
                loadGrid(ObjNextGrid);
            });
            $('#nextGrid').css("cursor", "pointer");
        } else {
            $('#nextGrid').css("opacity", "0.2");
        }
        if (objGrid.page !== data.total) {
            $('#endGrid').on('click', function() {
                loadGrid(ObjEndGrid);
            });
            $('#endGrid').css("cursor", "pointer");
        } else {
            $('#endGrid').css("opacity", "0.2");
        }
    } else {
        var table = '<div class="noResult">No se encontraron registros.</div>';
        $('.' + objGrid.div).html(table);
    }
}
	function gridUsers(){
		var objGrid = {
			div: 'tableUsers',
			url: baseHTTP + 'controller/__grid.php?action=loadGrid',
			table: 'personal',
			colNames: ['ID', 'NOMBRE', 'APELLIDOS', 'DNI', 'NÚMERO', 'CORREO'],
			colModel: [
				{name: 'idPersonal', align: 'center'},
				{name: 'nombres'},
				{name: 'apellidos'},
				{name: 'dni'},
				{name: 'telefono'},
				{name: 'email'}
			],
			page: 1,
			rowNum: 10,
			sortName: 'idPersonal',
			sortOrder: 'asc',
			title: 'Personal',
			edit: 'editUser(this.id);',
			delete: "confirmDelete('cGVyc29uYWw=',this.id,'gridUsers()');"
		};
		loadGrid(objGrid);
	}
    </script>
</html>