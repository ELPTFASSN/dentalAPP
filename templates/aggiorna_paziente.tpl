{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Scheda del Paziente <i class="fa fa-fw fa-caret-right"></i><span class="text-primary">{$oPaziente->nome} {$oPaziente->cognome}</span></h1>
            <div class="botoneria"><a href="home_medico.php" class="btn btn-danger btn-perspective">Torna indietro<i class="fa fa-fw fa-reply"></i></a></div>   
            <div class="the-box" style="min-height: 540px;">
                    {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in animated flash">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger arribita"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                           </div>
                    {/if}
                    {if !empty($success)}
                            <div class="alert alert-success alert-bold-border fade in animated flash">
                                <i class="fa fa-fw fa-5x fa-check-circle text-success arribita"></i>
                                   <strong>Esito:<br>
                    <span class="text-success">{if isset($success)}{$success}{/if}</span></strong>
                           </div>
                    {/if}
                    <div id="anagrafe">
                    <form action="{$smarty.const.URL_FILE}modifica_paziente.php" method="post" name="modifica_paziente">
                        <input type="hidden" name="modifica" value="true"><input type="hidden" name="id" value="{$id}">
                        <hr>
                            <span class="legendario">Anagrafe</span>
    <div class="clearfix" style="margin-top: -10px;"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="{$oPaziente->nome}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="{if isset($oPaziente->cognome)}{$oPaziente->cognome}{/if}">
                            </div>
                        </div>
                                                
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <label>Data di Nascita</label><br />
                            
                            {assign var='numero' value=1}
                            {assign var='cicli' value=31}

                            <select name="giorno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:33%;margin-right:5px;">
                                <option value="">Giorno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['giorno']) && $post['giorno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero+1}
                                {/section}

                            </select>

                            {assign var='numero' value=1}
                            {assign var='cicli' value=12}

                            <select name="mese" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%;margin-right:5px;">
                                <option value="">Mese</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['mese']) && $post['mese']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero+1}
                                {/section}

                            </select>

                            {assign var='numero' value=2014}
                            {assign var='cicli' value=114}

                            <select name="anno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%">
                                <option value="">Anno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['anno']) && $post['anno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero-1}
                                {/section}

                            </select>
                            
                        </div>
                                
                        <div class="col-md-2">
                            <label>Sesso</label><br />
                            <select name="sesso" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:80%;margin-right:5px;">
                                <option value="">Seleziona</option>
                                <option {if isset($oPaziente->sesso) && $oPaziente->sesso=="M"}selected="selected"{/if} value="M">M</option>
                                <option {if isset($oPaziente->sesso) && $oPaziente->sesso=="F"}selected="selected"{/if} value="F">F</option>
                            </select>
                        </div>
                                
                        <div class="col-md-4">
                        <div class="form-group">
                        <label>Citt&agrave; di Nascita</label>
                                    <input type="text" class="form-control rounded" name="citta" placeholder="Citt&agrave;" value="{if isset($oPaziente->citta)}{$oPaziente->citta}{/if}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Provincia di Nascita</label>
                                      <select name="provincia" class="form-control rounded">
                                           <option>Seleziona la provincia</option>
                                           {foreach $province as $key => $value}
                                               <option value="{$key}" {if isset($oPaziente->provincia) && ($oPaziente->provincia == $key)}selected{/if}>{$value}</option>
                                           {/foreach}
                                      </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Indirizzo Domicilio</label>
                                    <input type="text" class="form-control rounded" name="indirizzoDomicilio" placeholder="Indirizzo" value="{if isset($oPaziente->indirizzoDomicilio)}{$oPaziente->indirizzoDomicilio}{/if}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Citt&agrave; Domicilio</label>
                                <input type="text" class="form-control rounded" name="cittaDomicilio" placeholder="Citt&agrave;" value="{if isset($oPaziente->citta)}{$oPaziente->citta}{/if}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                    <label>Provincia Domicilio</label>
                                    <select name="provinciaDomicilio" class="form-control rounded">
                                        <option>Seleziona la provincia</option>
                                        {foreach $province as $key => $value}
                                            <option value="{$key}"{if isset($oPaziente->provinciaDomicilio) && ($oPaziente->provinciaDomicilio == $key)}selected{/if}>{$value}</option>
                                        {/foreach}
                                    </select>
                            </div>
                        </div>

                                      
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Codice Fiscale</label>
                                    <input type="text" class="form-control rounded" name="codFiscale" placeholder="Codice Fiscale" value="{if isset($oPaziente->codiceFiscale)}{$oPaziente->codiceFiscale}{/if}">
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nazionalit&agrave;</label>
                                    <input type="text" class="form-control rounded" name="nazionalita" placeholder="Es. Italiana" value="{if isset($oPaziente->nazionalita)}{$oPaziente->nazionalita}{/if}">
                                 
                            </div>
                        </div>
                        <div class="col-md-6">
                      <div class="form-group">
                                <label>Lingua Parlata</label>
                                    <input type="text" class="form-control rounded" name="linguaParlata" placeholder="Es. Italiano" value="{if isset($oPaziente->linguaParlata)}{$oPaziente->linguaParlata}{/if}">
                                 
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="{if isset($oPaziente->telefono)}{$oPaziente->telefono}{/if}">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="{if isset($oPaziente->email)}{$oPaziente->email}{/if}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br>  <button class="btn btn-action btn-perspective btn-primary">Modifica Anagrafe<i class="fa fa-fw fa-pencil"></i></button>
                            </div>
                        </div>
                      </form>
                    </div>
                        <div class="clearfix margin-bottom"></div>
                        <hr>
                            <span class="legendario">Dettaglio Clinico</span>
    <div class="clearfix"></div>
    <form method="post" action="modifica_paziente.php">
        <input type="hidden" name="id" value="{$id}">{if isset($oPaziente->cirrosi) || isset($oPaziente->epatocarcinoma) || isset($oPaziente->altraPatologia)}<input type="hidden" name="idDettaglioClinicoPaziente" value="{$oPaziente->idDettaglioClinicoPaziente}">{/if}
                            <div class="col-md-4">
                                <div class="form-group"><label>Diagnosi</label>
                                    <label class="form-control rounded" {if isset($oPaziente->cirrosi) && ($oPaziente->cirrosi == '1')}style="background: ivory;"{/if}><input type="radio" name="diagnosi" value="1" {if isset($oPaziente->cirrosi) && ($oPaziente->cirrosi == '1')}checked{/if}> <span style="vertical-align: 2px;"> Cirrosi</span></label>
                                    <label class="form-control rounded" {if isset($oPaziente->epatocarcinoma) && ($oPaziente->epatocarcinoma == '1')}style="background: ivory;"{/if}><input type="radio" name="diagnosi" value="2"  {if isset($oPaziente->epatocarcinoma) && ($oPaziente->epatocarcinoma == '1')}checked{/if}> <span style="vertical-align: 2px;"> Epatocarcinoma</span></label>
                                    <label class="form-control rounded" {if isset($oPaziente->altraPatologia)}style="background: ivory;"{/if}><input type="radio" name="diagnosi" value="3" {if isset($oPaziente->altraPatologia)}checked{/if}> <span style="vertical-align: 2px;"> Altra Patologia</span></label>
                                    
                            </div>
                        </div>
                        
                        <div class="col-md-8" {if isset($oPaziente->cirrosi) && ($oPaziente->cirrosi == '1')}{else}style="display:none;"{/if} id="eziologia">
                            <div class="form-group">
                                    <label>Eziologia</label>
                                    <input type="text" class="form-control rounded" name="eziologia" placeholder="Eziologia" {if isset($oPaziente->cirrosi) && ($oPaziente->cirrosi == '1')}value="{$oPaziente->eziologia}"{/if}>
                            </div>
                        </div>
                        <div class="col-md-8" {if isset($oPaziente->altraPatologia)}style="margin-top: 78px;"{else}style="display:none;margin-top: 78px;"{/if} id="altra">
                            <div class="form-group">
                                    <label>Patologia</label>
                                    <input type="text" class="form-control rounded" name="altra" placeholder="Inserisci la patologia" {if isset($oPaziente->altraPatologia)}value="{$oPaziente->altraPatologia}"{/if}>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <button class="btn btn-action btn-perspective btn-primary" type="submit">Modifica Dettaglio Clinico<i class="fa fa-fw fa-pencil"></i></button>
                            </div>
                        
                        </div>
    </form>
                        <div class="clearfix margin-bottom"></div>
                                                <hr>
                            <span class="legendario">Esami </span>
    <div class="clearfix"></div>
        <div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-esami">
							<thead class="the-box dark full">
								<tr>
									<th>Tipo Valore</th>
                                                                        <th>Valore</th>
                                                                        <th>Data</th>
                                                                        <th>Scansione</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $arrEsami as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                   <td>{$value['nome']} {if isset($value['dialisi'])} <span class="label label-primary">In Dialisi</span> {/if}</td>
                                                                   <td>{$value['valore']} {if $value['nome']!=SODIEMIA}mg/dL{else}mEq/L{/if}</td>
                                                                   <td>{$value['data']|date_format}</td>
                                                                   <td>{if isset($value['file'])}<a href='{$smarty.const.URL_SCANSIONI_ESAMI}{$value['url']}{$value['file']}' class="btn btn-action btn-info btn-xs" target="_blank"> Vedere Scansione <i class="fa fa-fw fa-file-text"></i></a>{else}-{/if}</td>
								</tr>
                                                            {/foreach}
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->
    <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a class="ajax-popup-link btn btn-action btn-perspective btn-primary" href="{$smarty.const.URL_FILE}aggiunge_esame.php?id={$oPaziente->idDettaglioPaziente}"> Aggiungi Esame<i class="fa fa-fw fa-plus-circle"></i></a>
                            </div>
                        
                        </div>
                            <div class="clearfix margin-bottom"></div>
                                                <hr>
                            <span class="legendario">Altri Esami </span>
    <div class="clearfix"></div>
    <div class="table-responsive">
						<table class="table table-striped table-hover" id="elenco-altriesami">
							<thead class="the-box dark full">
								<tr>
									<th>Tipo Esame</th>
                                                                        <th>Data</th>
                                                                        <th>Scansione</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $arrAltriEsami as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    <td>{$value['nome']}</td>
                                                                   <td>{$value['data']|date_format}</td>
                                                                   <td>{if isset($value['urlScansioneEsame'])}<a target="_blank" href='{$smarty.const.URL_SCANSIONI_ESAMI}{$value['urlScansioneEsame']}' class="btn btn-action btn-info btn-xs"> Vedere Scansione <i class="fa fa-fw fa-file-text"></i></a>{else}-{/if}</td>
								</tr>
                                                            {/foreach}
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->
        <div class="col-md-12">
                            <div class="col-md-6 col-md-offset-6 text-right">
                                <br> <a href="{$smarty.const.URL_FILE}aggiunge_altro_esame.php?id={$oPaziente->idDettaglioPaziente}" class="ajax-popup-link btn btn-action btn-perspective btn-primary">Aggiungi Altro Esame<i class="fa fa-fw fa-plus-circle"></i></a>
                            </div>
                        
                        </div>
    <div class="clearfix margin-bottom-peq"></div>
                   
                </div>
            <div class="botonerias"><a href="home_medico.php" class="btn btn-danger btn-perspective">Torna indietro<i class="fa fa-fw fa-reply"></i></a></div>   
        </div>

    </div>
                        
{include file="footer_amm.tpl"}