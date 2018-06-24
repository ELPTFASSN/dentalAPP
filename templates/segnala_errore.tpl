{include file="header_amm.tpl"}
{include file="sidebar.tpl"}


<!-- INIZIO CONTENUTO -->
			<div class="page-content">
				
				
				<div class="container-fluid">
                                                                                                    {if !empty($accessError)}
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top animated flash"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$accessError}</span></strong>
                            </div>
				{/if}
                                {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable margin-top animated flash"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$error}</span></strong>
                            </div>
				{/if}
                                {if !empty($success)}
                            <div class="alert alert-success alert-bold-border fade in alert-dismissable margin-top animated flash"><i class="fa fa-fw fa-check fa-3x text-success" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Esito<br>
                                        <span class="text-success">{$success}</span></strong>
                            </div>
				{/if}
                                    <h1 class="page-heading">Segnala Errore</h1>

					<!-- INIZIO DATA TABLE -->
					<div class="the-box">
                                            <form method="POST" action="{$smarty.const.URL_FILE}{$smarty.const.SEGNALA_ERRORE}">
                        <div class="col-md-12">
                            <div class="form-group">
                                    <label>Segnala di forma dettagliata l'errore riscontrato</label>
                                    <textarea rows='10' type="text" class="form-control rounded" name="messaggio" placeholder="Inserire il messaggio qua...">{if isset($post['messaggio'])}{$post['messaggio']}{/if}</textarea> 
                            </div>
                        </div>
                                                <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a href="home_medico.php" class="btn btn-danger btn-perspective">Anulla<i class="fa fa-fw fa-times"></i></a> <button class="btn btn-action btn-perspective btn-primary" type="submit">Invia<i class="fa fa-fw fa-check"></i></button>
                            </div>
                        
                        </div>
                            <div class="clearfix"></div><br>
                        
                                            </form>
					</div><!-- /.the-box .default -->
					<!-- END DATA TABLE -->
					
				</div><!-- /.container-fluid -->

                        </div>
{include file="footer_amm.tpl"}