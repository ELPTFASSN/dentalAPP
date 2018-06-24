{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Minisito</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Minisito</a></li>
                        <li class="active">Modifica minisito</li>
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
            {if !empty($success)}
                        <div class="alert alert-success alert-bold-border fade in animated fadeInDown">
                            <i class="fa fa-fw fa-3x fa-check text-success" style="float:right;"></i>
                            <strong>Esito:<br>
                                <span class="text-sucess">{if isset($success)}{$success}{/if}</span></strong>
                        </div>
                    </div>
               
            {/if}
            <div class="row">
                <form action="{$smarty.const.URL_FILE}minisito.php" method="post" name="aggiorna_minisito" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Modifica il minisito per {$azienda['denominazione']} - P.IVA:{$azienda['partitaIVA']}</h3></div>
                            <div class="panel-body">


                                <input type="hidden" name="idAzienda" value="{$azienda['idAzienda']}">
                                <div class="form-group">
                                    <label class="control-label">Servizi disponibili (separati per virgole)</label>
                                    
                                        <input name="servizi" id="tags" class="form-control input-lg" value="{$azienda['servizi']}" />
                                    
                                </div><!-- form-group -->
                                <div class="form-group">
                                    <label>Descrizione</label>
                                            <textarea class="wysihtml5 form-control input-lg" rows="9" name='descrizione'>{$azienda['descrizione']}</textarea>
                                    </div>
                                <div class="form-group">
                                    <label>Immagine dello studio (JPG o JPEG massimo di 1920x1080px e 400kb)</label>
                                    <input type="file" name="file" class="input-lg form-control"/>
                                </div>
                                    <div class="col-md-12 img-bordada">
                                        {if file_exists("{$smarty.const.IMG}users/{$azienda['idAzienda']}/bg.jpg")}
                                        <img src="{$smarty.const.URL_IMAGES}users/{$azienda['idAzienda']}/bg.jpg" class="img-responsive" />
                                        {/if}
                                    </div>
                                <hr>
                                <div class="col-md-12 text-right"><a href="medici.php" class="btn btn-danger btn-lg">Torna indietro <i class="fa fa-backward"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>

            {include file="footer_modifica.tpl"}