<?php /* Smarty version Smarty-3.1.14, created on 2015-03-20 21:28:08
         compiled from "./templates/registrarAlumno.html" */ ?>
<?php /*%%SmartyHeaderCode:1375876621550cd738e3c514-50994101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84dc72cb9d1ee26df21a8030b25b9cf88709ed91' => 
    array (
      0 => './templates/registrarAlumno.html',
      1 => 1425706232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375876621550cd738e3c514-50994101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550cd738e63f29_40227548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550cd738e63f29_40227548')) {function content_550cd738e63f29_40227548($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLBegin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/beginWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
FILTROS
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/contentWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <form id="formSearch" name="formSearch" class="form-horizontal" role="form" >
            <div class="form-group">
                <label class="col-lg-2 control-label">Nombres</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nombres" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Apellido Paterno</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="Apellido Paterno" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Apellido Materno</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputMName" name="inputMName" placeholder="Apellido Materno" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">DNI</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputDNI" name="inputDNI" placeholder="DNI" maxlength="8" >
                </div>
            </div>
            <div class="col-lg-8 col-lg-offset-3">
                <button type="button" class="btn btn-info btn-sm" onclick="javascript:gridAlumnos()" >Buscar</button>
                <button class="btn btn-sm btn-info" type="button" onclick="newForm()">Nuevo Registro</button>
                <button type="reset" class="btn btn-default btn-sm" >Limpiar</button>
            </div><br />
        </form>
    <?php echo $_smarty_tpl->getSubTemplate ("../structure/endWinget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<!-- contenido -->
	<div class="tableAlumnos widget"></div>
<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMatterContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/endMainbarContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/endContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../structure/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- -->
<?php echo $_smarty_tpl->getSubTemplate ("../structure/bodyEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("../structure/HTMLEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>