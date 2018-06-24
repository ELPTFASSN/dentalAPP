<?php /* Smarty version Smarty-3.1.19, created on 2015-10-22 16:39:04
         compiled from "./templates/registrati_sceglie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9817684205628f508cc71e5-78125962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd2a24dd72cfa6069c349789147d9e711cf5330' => 
    array (
      0 => './templates/registrati_sceglie.tpl',
      1 => 1445333870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9817684205628f508cc71e5-78125962',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5628f508ce9821_50015978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628f508ce9821_50015978')) {function content_5628f508ce9821_50015978($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <div class="content-page" style="margin: 10px auto;width:80%;">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <h2 class="text-muted text-center">La registrazione è gratuita e consente di usufruire<br> fin da subito i trattamenti Easy Smile<br><br></h2>
                        </div>
 <!-- Wizard with Validation -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Scegliere tipo di registrazione</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="row pricing-plan">
                        <div class="col-md-12">
                            <div class="row">
                                

                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="price_card text-center">
                                        <div class="pricing-header bg-azienda" style="background: url(http://imgbox.es/share/mbGIg.jpg) no-repeat;background-size: cover;">
                                            <span class="price">&nbsp;</span>
                                            <span class="name">&nbsp;</span>
                                        </div>
                                        <ul class="price-features">
                                            <li>Paziente</li>
                                        </ul>
                                        <a href="registrati.php?task=paziente" class="btn btn-lg btn-primary w-md waves-effect waves-light">Registrati come paziente</a>
                                    </div>
                                </div> <!-- end col -->
                                
                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="price_card text-center bg-primary" >
                                        <div class="pricing-header bg-medico" style="background: url(http://imgbox.es/share/s627k.jpg) no-repeat;background-size: cover;">
                                            <span class="price">&nbsp;</span>
                                            <span class="name">&nbsp;</span>
                                        </div>
                                        <ul class="price-features">
                                            <li>Medico</li>
                                        </ul>
                                        <a href="registrati.php?task=medico" class="btn btn-lg btn-primary waves-effect waves-light w-md">Registrati come medico</a>
                                    </div> <!-- end Pricing_card -->
                                </div> <!-- end col -->

                                <div class="col-sm-12 col-md-4 col-lg-4">
                                    <div class="price_card text-center">
                                        <div class="pricing-header bg-azienda" style="background: url(http://imgbox.es/share/KoFj.jpg) no-repeat;background-size: cover;">
                                            <span class="price">&nbsp;</span>
                                            <span class="name">&nbsp;</span>
                                        </div>
                                        <ul class="price-features">
                                            <li>Studio medico</li>
                                        </ul>
                                        <a href="registrati.php?task=azienda" class="btn btn-lg btn-primary w-md waves-effect waves-light">Registrati come studio medico</a>
                                    </div> <!-- end Pricing_card -->
                                </div> <!-- end col -->

                            </div> <!-- end row -->
                        </div> <!-- end Col-10 -->
                    </div> <!-- end row -->
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->
                    
                

<?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
