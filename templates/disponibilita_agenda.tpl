{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gestisci disponibilità</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_medico.php">BackOffice</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li class="active">Gestisci disponibilità</li>
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
                        <div class="panel-heading"><h3 class="panel-title">Inserisci ore di NON disponibilità</h3></div>
                        <div class="panel-body">

                            <form action="{$smarty.const.URL_FILE}agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="disponibilita" value="cambia">
                                
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>    
                                                <td>Lunedì</td>
                                                <td>Martedì</td>
                                                <td>Mercoledì</td>
                                                <td>Giovedì</td>
                                                <td>Venerdì</td>
                                                <td>Sabato</td>
                                                <td>Domenica</td>
                                                
                                            </tr>
                                            <tr>

                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">8:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">9:00</label>
                                                </td>
                                                {/for}
</tr>
<tr>
                                               {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">10:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">11:00</label>
                                                </td>
                                                {/for}
                                                
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">12:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">13:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">14:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">15:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">16:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">17:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">18:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">19:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                            <tr>
                                                {for $foo=1 to 7}
                                                <td><div class="checkbox checkbox-primary">
                                            <input id="acceptTerms-{$foo}}" name="prima{$foo}" type="checkbox">
                                                    <label for="acceptTerms-{$foo}">20:00</label>
                                                </td>
                                                {/for}
                                            </tr>
                                        </thead>
                                    </table>
 <a href="agenda.php" class="btn btn-danger btn-lg">Ritorna <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button>
                                </div>
                                
                                <div class="clearfix"></div><p><hr></p>
                                        <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Tutti giorni ed ore che entrano dentro del range verrano segnalate come NON disponibile per realizzare appuntamenti.</p></div></div>
                                        <div class="clearfix"></div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Inserisci range di NON disponibilità</h3></div>
                        <div class="panel-body">

                            <form action="{$smarty.const.URL_FILE}agenda.php" method="post" name="aggiorna_profilo_medico">
                                <input type="hidden" name="disponibilita" value="cambia">
                                
                                <div class="col-md-8">
                                    <label>Sceglie giorno o giorni <span class="text-danger">*</span></label><br />

<div id="datepicker" data-date="12/03/2012"></div>
<input type="hidden" name="cuando" id="my_hidden_input">
                                </div>
                                <div class="col-md-4">
                                    <label>Dalle <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker2" type="text" name="tiempo" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                    <label>Alle <span class="text-danger">*</span></label><br />
                                    <div class="input-group m-b-15">

                                        <div class="bootstrap-timepicker"><input id="timepicker1" type="text" name="tiempo2" class="form-control input-lg" data-minute-step="30"/></div>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                    <br><br> <a href="agenda.php" class="btn btn-danger btn-lg">Ritorna <i class="fa fa-times"></i></a> <button type="submit" class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button>
                                </div>
                                
                                <div class="clearfix"></div><p><hr></p>
                                        <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Tutti giorni ed ore che entrano dentro del range verrano segnalate come NON disponibile per realizzare appuntamenti.</p></div></div>
                                        <div class="clearfix"></div>
                                
                            </form>
                        </div>

                    </div>
                </div>
            </div>
                                          <div class=row>
                <div class=col-lg-12>
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">I miei appuntamenti</h3> 
                        </div> 
                        <div class="panel-body"> 

                            <div id="calendar"></div>
                            <div class="clearfix"></div>
                            <hr style="margin-top:0px;">

                        </div>

                    </div>
                </div>
            </div>

            {include file="footer_modifica_1.tpl"}