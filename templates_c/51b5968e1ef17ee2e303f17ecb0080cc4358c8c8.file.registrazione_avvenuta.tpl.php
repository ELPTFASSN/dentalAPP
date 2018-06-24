<?php /* Smarty version Smarty-3.1.19, created on 2015-09-29 16:24:08
         compiled from "./templates/registrazione_avvenuta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:662751102560a9f08935b89-50122739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b5968e1ef17ee2e303f17ecb0080cc4358c8c8' => 
    array (
      0 => './templates/registrazione_avvenuta.tpl',
      1 => 1443536587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662751102560a9f08935b89-50122739',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560a9f0897bbb1_08669888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a9f0897bbb1_08669888')) {function content_560a9f0897bbb1_08669888($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 <div class="content-page" style="margin: 10px auto;width:80%;" id="pachuli">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
<div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Registra un nuovo account come paziente</h4>

                            </div>
                        </div>
 <!-- Wizard with Validation -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-fill panel-success">
                                    <div class="panel-heading"> 
                                        <h2 class="panel-title">Registrazione completata con successo</h2> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="col-md-4"><h1><i class="md md-done"></i></h1></div>
                                        <div class="col-md-8">
                                        <p>Grazie mille per avere registrato un account in Easy Smile Group. Tra pochi minuti riceverai una mail con le istruzioni per usuare il tuo account.</p> 
                                        </div>
                                    </div> 
                                </div>

                            </div> <!-- end col -->

                        </div> <!-- End row -->
                        
<?php echo $_smarty_tpl->getSubTemplate ("footer_public.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
