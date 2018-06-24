<?php /* Smarty version Smarty-3.1.19, created on 2015-10-21 23:34:17
         compiled from "./templates/paga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882907608562804d993d771-51887950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35392a73658277228413d311879c1d8b13d5ba3f' => 
    array (
      0 => './templates/paga.tpl',
      1 => 1445461415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882907608562804d993d771-51887950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_562804d9978ad0_59822207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562804d9978ad0_59822207')) {function content_562804d9978ad0_59822207($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header_amm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Paga tramite PayPal</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Pagamenti</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger"><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<?php }?></span></strong>
                        </div>
                    </div>
                </div>
            <?php }?>       
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati del pagamento</h3></div>
                        <div class="panel-body">

                            <form action='expresscheckout.php' METHOD='POST'>
                                <input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/>
                            </form>

                        </div>

                    </div>
                </div>
            </div>


            <!-- Add Digital goods in-context experience. Ensure that this script is added before the closing of html body tag -->

            <script src='https://www.paypalobjects.com/js/external/dg.js' type='text/javascript'></script>


            <script>

                var dg = new PAYPAL.apps.DGFlow(
                        {
                            trigger: 'paypal_submit',
                            expType: 'instant'
                                    //PayPal will decide the experience type for the buyer based on his/her 'Remember me on your computer' option.
                        });

            </script>

            <?php echo $_smarty_tpl->getSubTemplate ("footer_modifica_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
