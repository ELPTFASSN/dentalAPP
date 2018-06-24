{include file="header_publica.tpl"}

<div class="col-lg-6 col-lg-offset-3 col-md-6 col-sm-12 m-t-40" style="min-height: 800px;" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-border panel-primary m-t-40">

                <div class="panel-heading"> 
                  
                </div> 

                <div class="panel-body" style="padding:25px 45px;">
                                                    {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <strong>Atenzione!<br>
                                       <span class="text-danger">{$error['autenticazione']}</span></strong>
                           </div>
                {/if}
                {if !empty($accessError)}
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Atenzione!<br>
                                        <span class="text-danger">{$accessError}</span></strong>
                            </div>
		{/if}
                <form class="form-horizontal" action="login.php" method="POST">
                    <div class="text-center"> <img src="http://imgbox.es/share/87OKU.jpg" width="200" style="margin: 0 auto 20px;text-align: center;"></div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg " name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Avanti </button>
                        </div>
                    </div>

                   
                </form> 
                </div>                                 
                 
            </div>
                <div class="col-xs-12">
                        <div class="col-md-6">
                            <a class="btn btn-danger" href="recupera_password.php"><i class="fa fa-lock m-r-5"></i> Hai dimenticato la password?</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a class="btn btn-primary" href="registrati.php">Non hai un account? Registrati! <i class="fa fa-pencil m-r-5"></i></a>
                        </div>
                    </div>
        </div>
    </div>
</div>


{include file="footer_public.tpl"}