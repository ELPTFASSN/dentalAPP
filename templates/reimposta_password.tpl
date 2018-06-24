{include file="header_publica.tpl"}

<div class="col-lg-4 col-lg-offset-4 col-md-6 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">Recupera Password <i class="fa fa-fw fa-key"></i></h3>
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

                <form class="form-horizontal" action="{$smarty.const.URL_FILE}recupera_password.php" method="POST">
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>Inserisci la tua email per reimpostare la password</label>
                            <input class="form-control input-lg " name="email" type="email" required="" placeholder="La tua email"><br>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Avanti</button>
                        </div>
                    </div>

                   
                </form> 
                </div>                                 
            </div>
        </div>
    </div>
</div>


{include file="footer_public.tpl"}