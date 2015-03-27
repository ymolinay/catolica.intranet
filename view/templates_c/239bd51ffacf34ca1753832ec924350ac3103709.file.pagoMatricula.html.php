<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 22:48:06
         compiled from "./templates/pagoMatricula.html" */ ?>
<?php /*%%SmartyHeaderCode:2035908770550ce9f6c59177-89968358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239bd51ffacf34ca1753832ec924350ac3103709' => 
    array (
      0 => './templates/pagoMatricula.html',
      1 => 1425732954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035908770550ce9f6c59177-89968358',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550ce9f6c7f7c7_86828546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550ce9f6c7f7c7_86828546')) {function content_550ce9f6c7f7c7_86828546($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/topBanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/headerContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/beginContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/navigationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/beginMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/beginMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- contenido -->
	<form id="formInscripcion" name="formInscripcion" class="form-horizontal" role="form" >
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/beginWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
PROCESAR PAGO MATRICULA
	<?php echo $_smarty_tpl->getSubTemplate ("../structure/contentWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <input id="idInscripcion" name="idInscripcion" type="text" class="notVisible">
    <input id="idInscripcionMarketing" name="idInscripcionMarketing" type="text" class="notVisible">
    <input id="idPersonal" name="idPersonal" type="text" class="notVisible">
    <!--<input id="userType" name="userType" type="hidden" value="YWx1bW5v">-->
    <div class="form-group">
    <label class="col-lg-2 control-label">ALUMNO</label>
    <div class="col-lg-5">
        <input id="insNombre" name="insNombre" type="text" class="form-control" placeholder="Nombres" value="Luis Armando Durand Martinez - 45110916" >
    </div>
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Tipo Pago</label>
    <div class="col-lg-5">
        <div class="radio">
            <label>
                <input type="radio" name="insSexo" id="insSexoM" value="M" checked="checked">Matricula
            </label>
         </div>
        <div class="radio">
            <label>
                <input type="radio" name="insSexo" id="insSexoF" value="F" >Mensualidad
            </label>
         </div>	
    </div>
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Modo de Pago</label>
    <div class="col-lg-3">
        <select id="insEstadocivil" name="insEstadocivil" class="form-control">
        <option value="1">Total</option>
        </select>
    </div>
    
    </div>
     <div class="form-group">
    <label class="col-lg-2 control-label">Tipo Comprobante</label>
    <div class="col-lg-3">
        <select id="tdocumento" name="tdocumento" class="form-control">
        <option value="1">Recibo</option>
         <option value="2">Boleta</option>
          <option value="3">Factura</option>
        </select>
    </div>
    
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Monto</label>
    <div class="col-lg-3">
        <input id="insNombre" name="insNombre" type="text" class="form-control" placeholder="Pago" value="350,00" >
    </div>
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Descuento</label>
    <div class="col-lg-3">
        <input id="insNombre" name="insNombre" type="text" class="form-control" placeholder="Descuento" value="0,00" >
    </div>
    </div>
    <div class="form-group">
    <label class="col-lg-2 control-label">Fecha de Pago</label>
    <div class="col-lg-3">
       <div id="insFNacimiento" name="insFNacimiento" class="input-append input-group dtpicker">
              <input id="FNacimiento" name="FNacimiento" data-format="dd-MM-yyyy" type="text" class="form-control">
              <span class="input-group-addon add-on">
                  <i data-time-icon="fa fa-times" data-date-icon="fa fa-calendar" class="fa fa-calendar"></i>
              </span>
          </div>
    </div>
    </div>
    
    <div class="col-lg-5 col-lg-offset-5">
		<button type="button" class="btn btn-info btn-sm" onclick="finalizarPago()" >Registrar</button>
		<button type="reset" class="btn btn-default btn-sm" >Limpiar</button>
	</div><br />
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/endWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </form>
<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/endContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>