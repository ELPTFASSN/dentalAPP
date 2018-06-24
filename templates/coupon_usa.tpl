{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Usa codice sconto</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="coupon.php">Coupon</a></li>
                        <li class="active">Usa Codice Sconto</li>
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
                <div class="col-md-6">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usa sconto aziendale
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="{$smarty.const.URL_FILE}coupon.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="input-group m-t-10">
                                                        <input type="text" id="example-input2-group2" name="couponAzienda" class="form-control input-lg" placeholder="Es. ANR9876543">
                                                        <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg waves-effect waves-light btn-primary">Convalida codice sconto</button>
                                                        </span>
                                </div>
                                
                                
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading">
                            <h3 class="panel-title">Usa sconto amico
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="{$smarty.const.URL_FILE}coupon.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idAgenda" value="nuovo">
                                <div class="input-group m-t-10">
                                                        <input type="text" id="example-input2-group1" name="couponAmico" class="form-control input-lg" placeholder="Es. BBC9876543">
                                                        <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg waves-effect waves-light btn-primary">Convalida codice sconto</button>
                                                        </span>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
                                <div class="row"><div class="col-md-12"><div class="col-md-4 col-md-offset-8 col-xs-12"><a href="home_medico.php" class="btn btn-lg btn-danger waves-effect waves-light btn-perspective btn-block"><i class="fa fa-fw fa-backward"></i> Torna indietro</a></div></div></div>
            {include file="footer_modifica.tpl"}