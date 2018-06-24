{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Aggiungi Prescrizione</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li><a href="ordini.php">Prescrizioni</a></li>
                        <li class="active">Aggiungi prescrizione</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {if !empty($error)}
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-3x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Dati della prescrizione</h3></div>
                        <div class="panel-body">

                            <form action="{$smarty.const.URL_FILE}ordini.php" method="post" name="aggiorna_profilo_medico" enctype="multipart/form-data">
                                <input type="hidden" name="idOrdine" value="nuovo">
                             
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sceglie lo studio medico</label>
                                        <select id="studio" name="azienda" class="select2" data-placeholder="Seleziona studio medico...">
                                            <option></option>
                                            {foreach $aziende as $value => $key}
                                                <option value="{$key['idAzienda']}">{$key['denominazione']} - Partita IVA:{$key['partitaIVA']} - Regione:{$key['regione']}</option>
                                            {/foreach}
                                        </select>
                                    </div><small><a href="aziende.php?task=addstudio" class="btn btn-primary btn-xs btn-perspective waves-light waves-effect">Aggiungi nuovo studio medico</a></small>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sceglie il paziente</label>
                                        <select id="paciente" name="paziente" class="select2" data-placeholder="Seleziona paziente...">
                                            <option></option>
                                            
                                        </select>
                                    </div><small><a href="pazienti.php?task=add" class="btn btn-primary btn-xs btn-perspective waves-light waves-effect">Aggiungi nuovo paziente</a></small>
                                </div>

                                <div class="clearfix"></div>
                                <p><hr></p>

                                <div class="col-md-12"><div class="alert alert-info"><p><i class="fa fa-fw fa-info-circle"></i> Attenzione per selezionare i denti sull'arcata superiore e inferiore occorre cliccare con il mouse sui denti desiderati. Per deselezionare il dente o i denti occorre effettuare un doppio clic con il mouse sul dente/i desiderato/i.</p></div></div>
                                <h4>Arcata superiore</h4>
                                <div class="col-md-6 col-md-offset-3 col-sm-12" ><img id="mas" src="img/mas.jpg"  usemap="#Map"><p>&nbsp;</p></div>
                                <p id="metemas">&nbsp;</p>
                               <map name="Map" id="Map">

    <area alt="" title="" id="18" href="javascript:{}" shape="poly" coords="61,193,53,191,46,193,42,197,40,201,41,207,40,211,41,216,44,221,49,223,58,224,66,223,70,220,74,215,75,208,75,203,72,198" />
    <area alt="" title=""  id="17" href="javascript:{}" shape="poly" coords="51,189,47,184,46,181,48,174,48,170,49,164,53,160,58,157,63,157,71,161,79,165,83,169,83,178,82,184,79,189,74,194,70,195" />
    <area alt="" title=""  id="16" href="javascript:{}" shape="poly" coords="58,154,55,150,53,142,56,134,59,125,66,120,71,119,81,121,89,125,94,130,96,140,95,146,91,152,87,159,82,162,78,162" />
    <area alt="" title=""  id="15" href="javascript:{}" shape="poly" coords="72,117,69,113,68,104,71,99,79,96,87,96,92,97,99,104,104,110,104,116,101,122,94,122,89,122" />
    <area alt="" title=""  id="14" href="javascript:{}" shape="poly" coords="91,71,85,74,82,79,83,90,85,94,97,98,104,99,111,98,117,92,118,87,110,75,99,71" />
    <area alt="" title=""  id="13" href="javascript:{}" shape="poly" coords="103,69,101,61,101,54,107,50,117,48,123,48,127,52,129,61,131,68,131,74,125,76,115,74,108,73" />
    <area alt="" title=""  id="12" href="javascript:{}" shape="poly" coords="130,53,139,61,146,64,152,60,153,54,151,44,150,39,144,36,136,37,130,39,126,46,126,49" />
    <area alt="" title=""  id="11" href="javascript:{}" shape="poly" coords="152,35,153,43,159,53,168,60,175,60,179,58,181,50,184,42,186,36,183,31,171,28,163,29" />
    <area alt="" title=""  id="21" href="javascript:{}"shape="poly" coords="187,42,191,53,195,61,203,62,207,60,213,55,217,48,220,42,221,37,215,32,203,29,193,30,188,32" />
    <area alt="" title=""  id="22" href="javascript:{}" shape="poly" coords="218,51,217,60,220,66,226,66,233,63,243,57,246,51,244,44,241,40,233,38,226,38,223,38" />
    <area alt="" title=""  id="23" href="javascript:{}" shape="poly" coords="241,61,237,70,239,76,242,78,249,80,261,78,268,75,271,66,269,58,266,54,257,51,250,51,248,51" />
    <area alt="" title=""  id="24" href="javascript:{}" shape="poly" coords="253,89,252,95,253,100,260,103,268,105,279,101,287,97,288,85,285,80,279,77,271,75,258,79" />
    <area alt="" title=""  id="25" href="javascript:{}" shape="poly" coords="267,111,264,118,268,125,274,128,288,125,298,122,301,112,298,107,291,102,286,101,271,107" />
    <area alt="" title=""  id="26" href="javascript:{}" shape="poly" coords="285,128,275,136,271,143,273,152,277,159,280,164,286,167,294,167,305,160,313,157,314,148,312,140,309,133,304,126,296,124" />
    <area alt="" title=""  id="27" href="javascript:{}" shape="poly" coords="285,170,283,177,283,186,287,194,291,197,301,198,311,197,319,192,319,182,319,173,315,165,307,162" />
    <area alt="" title=""  id="28" href="javascript:{}" shape="poly" coords="293,201,291,210,293,216,296,225,304,228,315,228,322,226,327,222,325,214,325,206,321,200,315,197" />
                               </map>
    <div class="col-md-12 alert alert-warning">Denti selezionati: 
        <span id="18a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 18 &nbsp;</span>
        <span id="17a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 17 &nbsp;</span>
        <span id="16a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 16 &nbsp;</span>
        <span id="15a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 15 &nbsp;</span>
        <span id="14a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 14 &nbsp;</span>
        <span id="13a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 13 &nbsp;</span>
        <span id="12a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 12 &nbsp;</span>
        <span id="11a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 11 &nbsp;</span>
        <span id="21a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 21 &nbsp;</span>
        <span id="22a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 22 &nbsp;</span>
        <span id="23a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 23 &nbsp;</span>
        <span id="24a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 24 &nbsp;</span>
        <span id="25a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 25 &nbsp;</span>
        <span id="26a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 26 &nbsp;</span>
        <span id="27a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 27 &nbsp;</span>
        <span id="28a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 28 &nbsp;</span>
        <input type="hidden" id="18b" name="18" value="false" />
        <input type="hidden" id="17b" name="17" value="false" />
        <input type="hidden" id="16b" name="16" value="false" />
        <input type="hidden" id="15b" name="15" value="false" />
        <input type="hidden" id="14b" name="14" value="false" />
        <input type="hidden" id="13b" name="13" value="false" />
        <input type="hidden" id="12b" name="12" value="false" />
        <input type="hidden" id="11b" name="11" value="false" />
        <input type="hidden" id="21b" name="21" value="false" />
        <input type="hidden" id="22b" name="22" value="false" />
        <input type="hidden" id="23b" name="23" value="false" />
        <input type="hidden" id="24b" name="24" value="false" />
        <input type="hidden" id="25b" name="25" value="false" />
        <input type="hidden" id="26b" name="26" value="false" />
        <input type="hidden" id="27b" name="27" value="false" />
        <input type="hidden" id="28b" name="28" value="false" />
        
        
        
    </div>
    <div class="clearfix"></div>
    <hr>
                                <h4>Arcata inferiore</h4>
                              
                                <div class="col-md-6 col-md-offset-3 col-sm-12"><img id="menos" src="img/mascinf.png" usemap="#Mapa"><p>&nbsp;</p></div>
                                
                                <p id="metemenos">&nbsp;</p>
                                    <map name="Mapa" id="Mapa">
    <area alt="" title="" id="48" href="javascript:{}" shape="poly" coords="77,24,75,29,74,35,76,41,76,48,79,55,84,57,91,56,100,53,107,51,110,46,108,41,105,33,106,29,102,23,95,20,84,21" />
    <area alt="" title="" id="47" href="javascript:{}" shape="poly" coords="86,58,83,64,82,69,81,73,84,79,86,85,88,89,93,93,98,93,106,92,117,88,122,83,120,77,118,71,116,65,112,59,105,55,100,55" />
    <area alt="" title="" id="46" href="javascript:{}" shape="poly" coords="96,95,95,102,92,109,93,115,98,127,105,132,112,133,118,130,127,127,132,123,133,114,132,108,129,101,126,95,120,93,116,90" />
    <area alt="" title="" id="45" href="javascript:{}" shape="poly" coords="110,134,108,139,107,147,111,152,117,155,125,155,133,152,139,146,142,142,139,136,136,131,130,129,128,128" />
    <area alt="" title="" id="44" href="javascript:{}" shape="poly" coords="123,157,120,167,124,173,130,176,134,179,140,178,145,173,149,166,150,158,145,154,140,152" />
    <area alt="" title="" id="43" href="javascript:{}" shape="poly" coords="154,171,160,170,162,170,164,174,163,180,162,189,160,194,154,195,146,193,142,190,139,183,139,180,148,173" />
    <area alt="" title="" id="42" href="javascript:{}" shape="poly" coords="164,189,161,197,166,199,170,203,176,203,182,201,187,198,185,193,184,183,182,179,178,177,171,182" />
    <area alt="" title="" id="41" href="javascript:{}" shape="poly" coords="190,189,194,183,198,183,203,187,206,194,208,200,203,205,194,206,190,205,186,202,187,195" />
    <area alt="" title="" id="31" href="javascript:{}" shape="poly" coords="210,196,212,188,214,184,218,182,223,184,226,189,228,197,230,203,224,207,215,207,210,205,209,203" />
    <area alt="" title="" id="32" href="javascript:{}" shape="poly" coords="231,195,234,185,236,180,240,180,246,186,252,190,254,195,255,199,250,203,242,205,236,205,231,203" />
    <area alt="" title="" id="33" href="javascript:{}" shape="poly" coords="254,177,253,186,254,193,258,196,266,197,272,197,276,191,278,184,276,178,266,175,259,172,255,172" />
    <area alt="" title="" id="34" href="javascript:{}" shape="poly" coords="280,181,291,179,296,175,295,165,293,159,286,157,276,156,272,158,268,162,269,169,271,176" />
    <area alt="" title="" id="35" href="javascript:{}" shape="poly" coords="277,148,278,143,280,139,285,134,290,132,299,134,304,137,310,142,312,149,309,154,304,158,297,159,294,159,282,155" />
    <area alt="" title="" id="36" href="javascript:{}" shape="poly" coords="287,119,290,107,293,101,300,96,308,94,317,96,325,100,326,106,328,114,324,124,318,133,310,136,302,134,292,131,286,126" />
    <area alt="" title="" id="37" href="javascript:{}" shape="poly" coords="300,84,302,78,305,70,310,63,318,60,324,59,332,62,337,64,340,71,339,77,338,84,335,89,330,94,324,97,321,97,304,92" />
    <area alt="" title="" id="38" href="javascript:{}" shape="poly" coords="319,57,313,53,312,49,315,39,319,30,322,27,331,26,338,25,346,30,349,35,349,43,346,52,343,59,338,62" />

</map>
                                <div class="col-md-12 alert alert-warning">Denti selezionati: 
        <span id="48a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 48 &nbsp;</span>
        <span id="47a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 47 &nbsp;</span>
        <span id="46a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 46 &nbsp;</span>
        <span id="45a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 45 &nbsp;</span>
        <span id="44a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 44 &nbsp;</span>
        <span id="43a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 43 &nbsp;</span>
        <span id="42a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 42 &nbsp;</span>
        <span id="41a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 41 &nbsp;</span>
        <span id="31a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 31 &nbsp;</span>
        <span id="32a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 32 &nbsp;</span>
        <span id="33a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 33 &nbsp;</span>
        <span id="34a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 34 &nbsp;</span>
        <span id="35a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 35 &nbsp;</span>
        <span id="36a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 36 &nbsp;</span>
        <span id="37a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 37 &nbsp;</span>
        <span id="38a" class="badge badge-pink hidden"><i class="fa fa-fw fa-check"></i> 38 &nbsp;</span>
        <input type="hidden" id="48b" name="48" value="false" />
        <input type="hidden" id="47b" name="47" value="false" />
        <input type="hidden" id="46b" name="46" value="false" />
        <input type="hidden" id="45b" name="45" value="false" />
        <input type="hidden" id="44b" name="44" value="false" />
        <input type="hidden" id="43b" name="43" value="false" />
        <input type="hidden" id="42b" name="42" value="false" />
        <input type="hidden" id="41b" name="41" value="false" />
        <input type="hidden" id="31b" name="31" value="false" />
        <input type="hidden" id="32b" name="32" value="false" />
        <input type="hidden" id="33b" name="33" value="false" />
        <input type="hidden" id="34b" name="34" value="false" />
        <input type="hidden" id="35b" name="35" value="false" />
        <input type="hidden" id="36b" name="36" value="false" />
        <input type="hidden" id="37b" name="37" value="false" />
        <input type="hidden" id="38b" name="38" value="false" />
        
        
        
    </div>
                                
                                <div class="clearfix"></div>
                                <p><hr></p>
                                <div class="col-md-12">
                                    <h4>Foto Arcate:</h4>
                                    <input type="file" class="form-control input-lg" name="file">
                                </div>
                                <div class="clearfix"></div>
                                <p>&nbsp;</p>
                                <div class="col-md-12">
                                    <h4>Note:</h4>
                                    <textarea class="form-control" name="note" rows="6"></textarea>
                                </div>
                                <div class="clearfix"></div>
                                <p>&nbsp;</p>
                                <div class="col-md-12">
                                    <h4>Si invia:</h4>
                                    <div class="checkbox checkbox-primary">
                                        <input id="cera" name="cera" value="1" type="checkbox">
                                        <label for="cera">Cera Centrica.</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="superior" name="superior" value="1" type="checkbox">
                                        <label for="superior">Impronta Superiore.</label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="inferior" name="inferior" value="1" type="checkbox">
                                        <label for="inferior">Impronta Inferiore.</label>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
      <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Costi della prescrizione</h3></div>
                        <div class="panel-body">
                                    <div class="col-md-12">
                     
                                                                    <div class="table-responsive">
                                                                        <table class="table m-t-30">
                                                                            <thead>
                                                                                <tr><th>#</th>
                                                                                    <th>Prodotto</th>
                                                                                    
                                                                                    <th>Quantit&agrave;</th>
                                                                                    <th>Prezzo</th>
                                                                                    <th>Totale</th>
                                                                                </tr></thead>
                                                                            <tbody>
                                                                                
                                                                                    <tr class="odd">

                                                                                        <td>1</td>
                                                                                        <td>Acconto prescrizione</td>
                                                                                       
                                                                                        <td>1</td>

                                                                                        <td>
                                                                                            {$acconto|number_format:2:",":"."} &euro;
                                                                                        </td>
                                                                                        <td>{$acconto|number_format:2:",":"."} &euro;</td>
                                                                                    </tr>
                                                                                    {if isset($spedizione)}
                                                                                    <tr class="odd">

                                                                                        <td>2</td>
                                                                                        <td>Spese spedizione (non abbonato)</td>
                                                                                       
                                                                                        <td>1</td>

                                                                                        <td>
                                                                                            {$spedizione|number_format:2:",":"."} &euro;
                                                                                        </td>
                                                                                        <td>{$spedizione|number_format:2:",":"."} &euro;</td>
                                                                                    </tr>
                                                                                    
                                                                               {/if}
                                                                               <tr class="odd">

                                                                                        <td></td>
                                                                                        <td></td>
                                                                                       
                                                                                        <td></td>
{if $smarty.session.utente['IVASINO']}
                                                                                        <td>
                                                                                        IVA {$smarty.session.utente['IVA']}%
                                                                                        </td>
                                                                                        
                                                                                        <td>{math equation="x*y" x=$prezzo['totale'] y=0.22 format="%.2f" assign="iva"}{$iva} &euro;</td>{/if}
                                                                                    </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                           
                                                            <div class="clearfix"> </div>
                                                            <div class="col-md-offset-6 col-md-6"><hr></div>
                                <h3 class='text-right'>Prezzo acconto della prescrizione: <strong>{if $smarty.session.utente['IVASINO']}{math equation="x*y" x=$prezzo['totale'] y=1.22 format="%.2f" assign="totall"}{$totall}{else}{$prezzo['totale']}{/if} &euro; &nbsp;&nbsp;&nbsp;</strong> </h3>
                                <p><hr></p>
                                <div class="col-md-12 text-right"><a href="ordini.php" class="btn btn-danger btn-lg">Torna indietro <i class="fa fa-backward"></i></a> <button class="btn btn-primary btn-lg">Invia <i class="fa fa-check"></i></button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            {include file="footer_modifica_2.tpl"}