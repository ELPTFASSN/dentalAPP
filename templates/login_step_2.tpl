{include file="header.tpl"}

                <div class="login-header text-center">
			<img src="{$smarty.const.URL_IMG}logo_login.png" class="logos" alt="Logo">
		</div>
		<div class="login-wrappers">
                {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border animated flash alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Atenzione!<br>
                                       <span class="text-danger">{$error['autenticazione']}</span></strong>
                           </div>
                {/if}
                    <div class="alert alert-info alert-bold-border fade in">
                        
                        <i class="fa fa-fw fa-5x fa-lock text-info" style="float:right;margin-top: 14px;"></i><h2 class="text-info">Codice temporaneo richiesto <br></h2>
                        <p style="margin-top:15px;" class="text-muted"> Inserisci il codice temporaneo ricevuto via mail.<br></p>
                        
                    <form method="post" class="form-signin" action="{$smarty.const.URL_FILE}login_step_2.php">
                        
                        <div class="form-group has-feedback lg left-feedback no-label">
				  <input name="code" type="text" class="form-control input-lg rounded" placeholder="Codice Temporaneo" required autofocus>
				  <span class="fa fa-lock fa-2x form-control-feedback"></span>
                        </div>
                        <br>
                        <button class="btn btn-lg btn-primary btn-perspective btn-block" type="submit">Accedi</button><br />
                    
                        <a href="{$smarty.const.URL_FILE}" class="btn btn-lg btn-danger btn-perspective btn-block">Annulla</a>
                    
                    </form>
                        
                    </div>
                    
                </div>



{include file="footer.tpl"}