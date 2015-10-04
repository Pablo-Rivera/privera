<?php /* Smarty version 3.1.27, created on 2015-09-30 20:37:28
         compiled from "C:\xampp\htdocs\Web 2\privera\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3584560c2be8290201_30638451%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c936376ba37797feb0892997642c26dd2494a1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\privera\\templates\\home.tpl',
      1 => 1443621898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3584560c2be8290201_30638451',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560c2be82c5884_54515911',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560c2be82c5884_54515911')) {
function content_560c2be82c5884_54515911 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3584560c2be8290201_30638451';
?>
<article class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
  <div id="carousel-example-generic" class="carousel slide"  data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/home1.png">
      </div>
      <div class="item">
        <img src="images/home2.png">
      </div>
      <div class="item">
        <img src="images/home3.png">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</article>
<?php }
}
?>