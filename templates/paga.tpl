{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

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
                    {if !empty($error)}
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
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

            {include file="footer_modifica_2.tpl"}