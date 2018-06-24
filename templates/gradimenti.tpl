{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Realizza un gradimento</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Gradimenti</li>
</ol>
</div>
</div>
    <div class="row"><div class="col-md-12">
         {if !empty($accessError)}
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$accessError}</span></strong> 
                            </div>
				{/if}
                                {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$error}</span></strong>
                            </div>
				{/if}
                                {if !empty($success)}
                            <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Esito<br>
                                        <span class="text-success">{$success}</span></strong>
                            </div>
				{/if}
            
        </div></div>
<div class=row>
<div class=col-md-12>
<div class="panel panel-default">
<div class=panel-heading>
<h3 class=panel-title>Gradimenti</h3>
</div>
<div class=panel-body>
<form action="home_paziente.php" method="post">
    <h3>Inserisci un gradimento per <span class="text-primary">{$smarty.session.utente['denominazione']}</span></h3>
    <p><br><br></p>
    <div class="col-md-6">
    <div class="form-group">
                                       
                                        <select id="studio" name="medico" class="hidden" data-placeholder="Seleziona studio medico...">
                                            <option></option>
                                           
                                                <option selected="selected" value="{$smarty.session.utente['idAzienda']}">-</option>
                                            
                                        </select>
                                    </div>
                                                
                                        </div>
    <div class="clearfix"></div>
                                            <input id="input-2c" name="score" class="rating" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa" data-language="it">
                                            <textarea name="comentario" rows="10" class="form-control">Inserisci il tuo gradimento qua</textarea>
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-perspective waves-effect waves-light">Invia gradimento</button>
                                        </form>
</div>
</div>
</div>

</div>
    


{include file="footer_amm.tpl"}