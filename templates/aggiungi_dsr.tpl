{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiungi un Design Specialist Review</h1>
                <div class="the-box" style="min-height: 400px;">
                    {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                           </div>
                    {/if}

                    <form action="{$smarty.const.URL_FILE}aggiungi_dsr.php" method="post" name="aggiunge_paziente">
                     {if !empty($warning)}
                            <div class="alert alert-warning alert-bold-border animated flash fade in">
                                <i class="fa fa-fw fa-5x fa-question-circle text-warning" style="float:right;"></i>
                                   <strong>Atenzione!<br>
                                       <span class="text-warning">{if isset($warning)}{$warning}{/if} <button class="btn btn-xs btn-primary btn-perspective">Si, invia comunque</button></span></strong>
                           </div>
                    {/if}
                        <input type="hidden" name="inserimento" value="true">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="{if isset($post['nome'])}{$post['nome']}{/if}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="{if isset($post['cognome'])}{$post['cognome']}{/if}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="{if isset($post['telefono'])}{$post['telefono']}{/if}">
                            </div>
                        </div>                  
                        <div class="clearfix"></div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="{if isset($post['email'])}{$post['email']}{/if}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control rounded" name="username" placeholder="Username" value="{if isset($post['username'])}{$post['username']}{/if}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control rounded" name="password" placeholder="Password" value="{if isset($post['password'])}{$post['password']}{/if}">
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a href="{$smarty.const.URL_FILE}elenco_dsr.php" class="btn btn-danger btn-perspective">Anulla<i class="fa fa-fw fa-times"></i></a> <button class="btn btn-action btn-perspective btn-primary" type="submit">Invia<i class="fa fa-fw fa-check"></i></button>
                            </div>
                        
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
        </div>

    </div>
     
                        
{include file="footer_amm.tpl"}