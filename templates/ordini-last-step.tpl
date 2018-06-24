{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Aggiungi Trattamento</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Aggiungi trattamento</li>
                    </ol>
                </div>
            </div>
            {if !empty($error)}
            <div class="row">
                <div class="col-md-12">
                    
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
                    
                        <div class="alert alert-success alert-bold-border fade in animated bounceInDown">
                            <i class="fa fa-fw fa-2x fa-check text-success" style="float:right;"></i>
                            <strong>Pagamento andato a buon fine. Per favore, finisce l'inserimento della prescrizione.<br>
                                
                        </div>
                    </div>
                </div>
     
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati del ritiro della prescrizione - {$token['codice']}</h3></div>
                        <div class="panel-body">

                            <form action="{$smarty.const.URL_FILE}ordini.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="idOrdine" value="{$token['idOrdine']}"><input type="hidden" name="last-step" value="true">
                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sceglie data per il ritiro</label>
                                       <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="dataRitiro" class="form-control input-lg required clearfix" placeholder="gg/mm/aaaa" data-date-start-date="+2d" id="datepicker" required>

                                    </div><!-- input-group -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Note per il corriere</label>
                                        <textarea class="form-control input-lg" name="noteRitiro" placeholder="Hai qualche bisogno per il ritiro? ..."></textarea>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <p><hr></p>
                                <div class="col-md-12 text-right"><button class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            {include file="footer_modifica_4.tpl"}