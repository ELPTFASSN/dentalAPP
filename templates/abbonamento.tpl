{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
<div class=content>
<div class=container>
<div class=row>
<div class=col-sm-12>
<h4 class="pull-left page-title">Lista dei sconti {if isset($status)}{$satus}{/if}realizzate nella piattaforma</h4>
<ol class="breadcrumb pull-right">
<li><a href=#>BackOffice</a></li>
<li class=active>Sconti</li>
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
            
        </div>
    </div>

                                          <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>Associati e inizia un mondo di vantaggi</h3> 
                        </div>
                        <div class=panel-body>
                            <div class="col-md-5">
             
                            
                            <h3>Prezzo dell'abbonamento annuale: <span class="label label-primary">{$precio} &euro;</span></h3>
                            <h3>Inizio dell'abbonamento: <span class="label label-primary"> {$smarty.now|date_format:"%d/%m/%Y"} </span> </h3>
                            <h3>Fine abbonamento: <span class="label label-primary">{"+1 year"|date_format:"%d/%m/%Y"}</span></h3>
                            <br>
                            <a href="checkout.php?task=abbonamento" class="btn btn-block btn-lg btn-perspective btn-primary waves-effect waves-light">Abbonati subito!</a>
                            </div>
                            <div class="col-md-7 text-center">
                                <img src="http://staging.beecloud.it/easysmile/img/pictures/carta.png" alt="abbonati" style="width:80%; text-align:center;padding:1px; background:white; border:1px solid #ddd;">
                            </div>
                            <div class="clearfix"></div>
                            <hr>
                            <h4>Abbonati a EasySmile Group oggi e riceve questi vantaggi:</h4>
                                           <p>
                                Oggi la concorrenza diventa sempre più competitiva, per il singolo studio diventa, giorno dopo giorno, più difficile contrastarla, ecco perché nasce “Easy smile Group” un’associazione che riunisce medici operanti nel settore odontoiatrico per formare un gruppo in grado di contrastare anche le più grandi “aziende” concorrenti.
                            </p><p>Easy Smile Group mette a disposizione dei propri associati una serie di strumenti di marketing , supporto tecnologico e prezzi competitivi.</p><p>
                                Alcuni esempi di servizi messi a disposizione degli associati:</p>

                            <ul>
                                <li>Presenza nel sito come medico associato, mini sito del medico con tutte le specifiche desiderate, con la possibilità del medico di inserire all’interno tutto ciò che desidera, avendo cosi la possibilità si pubblicizzare l’intera gamma delle sue prestazioni</li>
                                <li>Esclusività territoriale per quanto riguarda il prodotto ortodontico “Easy Smile “</li>
                                <li>Pubblicità nella zona di appartenenza</li>
                                <li>Prenotazioni prima visita on line con ricerca geolocalizzata</li>
                                <li>Copertura assicurativa contro smarrimento o rottura delle mascherine Easy Smile  completamente GRATUITA</li>
                                <li>Visite elettromiografiche, tenz, pedana stabilomentrica presso lo studio  è compresa nel prodotto Easy smile</li>
                                <li>Prezzi delle mascherine “Easy Smile”assolutamente competitivi!</li>
                            </ul>
                            <p>Questo e tanto altro ti aspetta, chiedi un contatto con un nostro consulente che ti illustrerà nei dettagli le nostre proposte!
</p>
                        </div>
                    </div>
                </div>
                                          </div>

{include file="footer_aziende.tpl"}