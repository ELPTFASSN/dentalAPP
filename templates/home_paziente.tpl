{include file="header_amm.tpl"}
{include file="sidebar.tpl"}


<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Cruscotto Paziente</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>Backoffice</a></li>
<li class=active>Cruscotto</li>
</ol>
</div>
</div>
<div class=row>
    {if !empty($accessError)}
                            <div class="alert alert-warning alert-bold-border fade in alert-dismissable margin-top"><i class="fa fa-fw fa-exclamation-triangle fa-3x text-warning" style="float:left; padding-right:20px"></i>
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>Attenzione!<br>
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

   <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                       
                                    </div> 
                                    <div class="panel-body"> 
                                        <h1 class="text-center"> <i class="fa fa-3x fa-book text-pink"></i> </h1>
                                        <br><br>
                                            
                                        <a href="agenda.php" class="btn btn-lg btn-block btn-primary">LE MIE VISITE</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                          
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-file-text-o text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?gradimenti=true" class="btn btn-lg btn-block btn-primary">FARE UN GRADIMENTO</a>
                                    </div> 
                                </div>
   </div> 

    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                        
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-tags text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?inviti=true" class="btn btn-lg btn-block btn-primary">INVITA A TUOI AMICI</a>
                                    </div> 
                                </div>
   </div> 
                                
                                   <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                       
                                    </div> 
                                    <div class="panel-body"> 
                                        <h1 class="text-center"> <i class="fa fa-3x fa-medkit text-pink"></i> </h1>
                                        <br><br>
                                            
                                        <a href="home_paziente.php?trattamenti=true" class="btn btn-lg btn-block btn-primary">I MIEI TRATTAMENTI</a>
                                    </div> 
                                </div>
   </div> 
    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                          
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-life-saver text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?sosmascherina=true" class="btn btn-lg btn-block btn-primary">SOS MASCHERINA</a>
                                    </div> 
                                </div>
   </div> 

    <div class="col-lg-4">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading"> 
                                        
                                    </div> 
                                    <div class="panel-body"> 
                                            <h1 class="text-center"> <i class="fa fa-3x fa-user-md text-pink"></i> </h1>
                                        <br><br>
                                        <a href="home_paziente.php?medico=true" class="btn btn-lg btn-block btn-primary">SCEGLIE STUDIO MEDICO</a>
                                    </div> 
                                </div>
   </div> 

</div>
                                
</div>
</div>
</div>


{include file="footer_amm.tpl"}