<?php
/* Smarty version 3.1.33, created on 2019-01-30 10:10:32
  from 'G:\Users\daw2.Lenovo-PC\Desktop\UwAmp\www\netflix\pantallas\tema05\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c516a085102e1_39867626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84a2756f169246cda229a982958cb989879b688b' => 
    array (
      0 => 'G:\\Users\\daw2.Lenovo-PC\\Desktop\\UwAmp\\www\\netflix\\pantallas\\tema05\\templates\\index.tpl',
      1 => 1548839427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c516a085102e1_39867626 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">

<head>
    <meta charset="utf8" />
    <title>Tienda ON-Line</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <?php echo '<script'; ?>
 type="text/javascript">
        function muestraMensaje(mensaje) {
            if (mensaje != '')
                alert(mensaje);
        }

    <?php echo '</script'; ?>
>
    <style>
        body{
            background-color: blue;
        }
    </style>
</head>

<body onload="muestraMensaje('<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
');">
    <header id="cabecera">
        <img src="imagenes/titulo.png" alt="Tienda" />
    </header>
    <section>
      <!--  <article id="navegacion">
            <div id="carrito">
                <img src="imagenes/basket.png" alt="carrito" class="alinea" />
                <a href="cesta.php"><?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
 productos</a>
            </div>
        </article>-->
        <article id="articulo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['avideos']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
            <div class="flota">
                <a href="muestra.php?codigo=<?php echo $_smarty_tpl->tpl_vars['video']->value->codigo;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['video']->value->cartel;?>
" />
                </a>
                <br>
                
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </article>
    </section>
    <footer class="pie">
        <a href="aviso.php" class="boton">Aviso Legal</a>
    </footer>
</body>

</html>
<?php }
}
