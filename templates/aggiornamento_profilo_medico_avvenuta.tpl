{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiorna profilo</h1>
                <div class="the-box">
                    {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                           </div>
                            <a href="home_medico.php" class="btn btn-danger btn-lg btn-block btn-perspective">Anulla </a>
                    {/if}
                    {if empty($error)}
                            <div class="alert alert-success alert-bold-border fade in">
                                <i class="fa fa-fw fa-5x fa-check text-success" style="float:right;"></i>
                                <h3><strong>ESITO:<br>
                                        <span class="text-success">Aggiornamento del profilo avvenuto con successo!</span></strong></h3>
                           </div>
                    {/if}
                    <a href="home_medico.php" class="btn btn-primary btn-lg btn-block btn-perspective">Torna alla home </a>
                </div>
        </div>

    </div>
                        
{include file="footer_amm.tpl"}