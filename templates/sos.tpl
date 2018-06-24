{include file="header_publica.tpl"}

<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">SOS Mascherina <i class="fa fa-fw fa-support"></i></h3>
                </div> 

                <div class="panel-body" style="padding:45px;">
                    {if !empty($error)}
                        <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Atenzione!<br>
                                <span class="text-danger">{$error}</span></strong>
                        </div>
                    {/if}
                    {if !empty($success)}
                        <div class="alert alert-success alert-bold-border fade in alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Esito<br>
                                <span class="text-success">{$success}</span></strong>
                        </div>
                    {/if}

                <form class="form-horizontal" action="{$smarty.const.URL_FILE}cambia_password.php" method="POST">

                    <div class="col-md-12 text-center">
                        <h3>SOS Mascherina numero verde</h3>
                        <img src="http://easysmile.beecloud.it/img/numero%20verde-12.png">
                    </div>
<!--                    <div class="form-group">
                        <div class="col-xs-12">
                                <div class="form-group">
                                        <label>Sceglie il medico</label>
                                        <select id="studio" name="medico" class="select2" data-placeholder="Seleziona medico...">
                                            <option></option>
                                            {foreach $medici as $value => $key}
                                                <option value="{$key['idDettaglioMedico']}">{$key['nome']} {$key['cognome']}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Sceglie Medico</button>
                        </div>
                    </div>

                   
                
                </div>        -->
                    </form> 
            </div>
                                        <p><br><a href="javascript:history.back()" class="btn btn-lg btn-danger btn-block"><i class="fa fa-backward"></i> Torna indietro</a></p>
        </div>
    </div>
</div>
<p>&nbsp;</p><p>&nbsp;</p>
                                            <p>&nbsp;</p>
{include file="footer_publico.tpl"}