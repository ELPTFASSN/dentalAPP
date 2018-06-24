{include file="header.tpl"}

                <div class="login-header text-center">
			<img src="{$smarty.const.URL_IMG}logo_login.png" class="logos" alt="Logo">
		</div>
		<div class="login-wrappers">
                    
                    <div class="alert {if $error==1}alert-warning{else} alert-info{/if} alert-bold-border fade in">
                        
                        <i class="fa fa-fw fa-3x {if $error==1}fa-exclamation-triangle text-warning{else} fa-info-circle text-info{/if}" style="float:right;margin-top: 14px;"></i><h2 class="text-info">Reimposta password <br></h2>
                 
                            {if $error==1}
                                <p>    La mail non &egrave; corretta oppure l'utente non esiste nei database.
                                    Ripsovare o contattare l'amministratore del sistema</p><br>
                                <a href="{$smarty.const.URL_FILE}" class="btn btn-info btn-perspective btn-block">Torna alla home</a>
                            {else}
                                <p> &Egrave; stata inviata una mail all'indirizzo dato in fase di registrazione con le credenziali per accedere al sistema.</p><br>
                                
                                <a href="{$smarty.const.URL_FILE}" class="btn btn-info btn-perspective btn-block">Torna alla home</a>
                            {/if}
			</div>
	    	</div>
    	</div>
    	</div>
    </div>


{include file="footer.tpl"}