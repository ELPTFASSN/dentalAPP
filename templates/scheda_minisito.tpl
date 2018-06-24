{include file="header_amm.tpl"} 
<div class="content-page" style="margin: 0;">
    <!-- Start content -->
    <div class="content">



        <div class="wraper container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-picture text-center" style="{if file_exists("{$smarty.const.IMG}users/{$azienda['idAzienda']}/bg.jpg")}background-image:url('{$smarty.const.URL_IMAGES}users/{$azienda['idAzienda']}/bg.jpg') {else}background-image:url('http://imgbox.es/share/VsDQZ.jpg'){/if}">
                        <div class="bg-picture-overlay"></div>
                        <div class="profile-info-name">

                            <h1 class="text-white">{$azienda['denominazione']}</h1>
                            {if $smarty.session.utente['ruolo']==="PAZIENTE"}<div class="col-md-3 col-md-offset-3"><a href="javascript:history.back()" class="btn btn-lg btn-danger btn-block"><i class="fa fa-backward"></i> Torna indietro</a></div><div class="col-md-3"> <a href="home_paziente.php?choose={$azienda['idAzienda']}" class="btn btn-lg btn-primary btn-block">Sceglie questo studio  <i class="fa fa-check"></i></a></div>{/if}
                        </div>
                        <div class="pull-right"><br>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_native_toolbox"></div>
                    </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12"> 
                    
                    <div class="tab-content profile-tab-content"> 
                        <div class="tab-pane active" id="home-2"> 
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default  panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Informazioni</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div class="about-info-p">
                                                <strong>Regione</strong>
                                                <br/>
                                                <p class="text-muted">{$azienda['nomeregione']}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Provincia</strong>
                                                <br/>
                                                <p class="text-muted">{$azienda['nomeprovincia']}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Citt&agrave;</strong>
                                                <br/>
                                                <p class="text-muted">{$azienda['nomecomune']}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>CAP</strong>
                                                <br/>
                                                <p class="text-muted">{$azienda['CAP']}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Indirizzo</strong>
                                                <br/>
                                                <p class="text-muted">{$azienda['indirizzo']} {$azienda['numero']}</p>
                                            </div>
                                        </div> 
                                    </div>
                                            
                                            <div class="panel panel-default panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Servizi</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <ul class='list-group'>
                                                 {assign var="servicios" value=$azienda['servizi']} 

                                        
                                        {assign var="lista" value=","|explode:$servicios} 

                                     
                                        {section name=i loop=$lista} 
                                            <li class='list-group-item'><span class='badge badge-success'><i class='fa fa-fw fa-check'></i></span>{$lista[i]|escape}</li>
                                        {/section} 
                                            </ul>
                                        </div> 
                                    </div>
                                    <!-- Personal-Information -->

                                </div>


                                <div class="col-md-8">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default  panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Descrizione</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            {$azienda['descrizione']}
                                        </div> 
                                    </div>
                                    <!-- Personal-Information -->

                                    <div class="panel panel-default  panel-primary panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Mappa</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div id="gmaps-basic" class="gmaps"></div>

                                        </div> 
                                    </div>

                                </div>

                            </div>
                        </div> 
                   </div> 
                </div> 
            </div>
        </div>
    </div> <!-- container -->

</div> <!-- content -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53259c3547de7402" async="async"></script>

{include file="footer_minisito.tpl"}