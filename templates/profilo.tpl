{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Modifica Dati</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="aziende.php">Profilo</a></li>
                        <li class="active">Modifica il mio profilo</li>
                    </ol>
                </div>
            </div>
            {if !empty($error)}
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}  
               {if !empty($success)}
            <div class="row">
                <div class="col-md-12">
                    
                        <div class="alert alert-success alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-check text-success" style="float:right;"></i>
                            <strong>ESITO<br>
                                <span class="text-success">{if isset($success)}{$success}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if} 
            <div class="row">
                <form action="{$smarty.const.URL_FILE}profile.php" method="post" name="aggiorna_profilo_medico">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">I miei dati</h3></div>
                            <div class="panel-body">


                                <input type="hidden" name="modifica" value="{if isset($oMedico->idUtente)}{$oMedico->idUtente}{/if}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control input-lg" name="nome" placeholder="Nome" value="{if isset($oMedico->nome)}{$oMedico->nome}{/if}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cognome</label>
                                        <input type="text" class="form-control input-lg" name="cognome" placeholder="Cognome" value="{if isset($oMedico->cognome)}{$oMedico->cognome}{/if}" disabled>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control input-lg" name="telefono" placeholder="Telefono" value="{if isset($oMedico->telefono)}{$oMedico->telefono}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefono Mobile</label>
                                        <input type="text" class="form-control input-lg" name="telefonoMobile" placeholder="Telefono Mobile" value="{if isset($oMedico->telefonoMobile)}{$oMedico->telefonoMobile}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control input-lg" name="email" placeholder="Email" value="{if isset($oMedico->email)}{$oMedico->email}{/if}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cambia password <small>(lasciare in bianco per non cambiare)</small></label>
                                        <input type="text" class="form-control input-lg" name="password" placeholder="">
                                    </div>
                                </div>

                                <hr>
                                <div class="col-md-12 text-right"><a href="home_medico.php" class="btn btn-danger btn-lg">Torna Indietro <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>

            {include file="footer_modifica.tpl"}