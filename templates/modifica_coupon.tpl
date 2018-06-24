{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Aggiungi codice sconto</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="home_amministratore.php">BackOffice</a></li>
                                    <li><a href="aziende.php">Sconti</a></li>
                                    <li class="active">Aggiungi codice sconto</li>
                                </ol>
                            </div>
                        </div>
                          <div class="row">
                    <div class="col-md-12">
                         {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in animated flash">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                           </div>
                         </div>
                         </div>
                    {/if}       
  <div class="row">
       <form action="{$smarty.const.URL_FILE}coupon.php" method="post" name="addCoupon">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Dati Sconto</h3></div>
                            <div class="panel-body">

                   
                        {if isset($idCoupon)}<input type="hidden" name="idCoupon" value="{$idCoupon}">{else}<input type="hidden" name="inserimento" value="TRUE">{/if}
                        <div class="col-md-4">
                            <div class="form-group">
                                    <label>Codice sconto</label>
                                    <input required="" aria-required="true" type="text" class="form-control input-lg" name="cupon" placeholder="Codice Coupon" value="{if isset($codiceCoupon)}{$codiceCoupon}{/if}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Sconto applicato a</label>
                                <select required="" aria-required="true" name="tipoCoupon" id="tipoCoupon" class="select2" data-placeholder="Seleziona tipologia...">
                                    <option></option>
                                           {foreach $tipologia as $value => $key}
                                               <option {if $key['idTipoCoupon']==$oCoupon->idTipoCoupon}selected="selected"{/if} value="{$key['idTipoCoupon']}">{$key['nomeCoupon']} {if $key['idTipoCoupon']=='4'} (da 0 a {$precios['1']['prezzo']}){/if}{if $key['idTipoCoupon']=='5'} (da {$precios['1']['prezzo']} a {$precios['0']['prezzo']}){/if} {if $key['idTipoCoupon']=='6'} (da {$precios['0']['prezzo']+1} in poi){/if}</option>
                                           {/foreach}
                                      </select>
                            </div>
                        </div>
                                    <div class="col-md-4">
                            <div class="form-group">
                                    <label id="response">Tipo di sconto</label>
                                      <select required="" aria-required="true" name="scontoCoupon" id="scontoCoupon" class="select2" data-placeholder="Seleziona tipo di sconto...">
                                          <option></option>
                                          <option value="0">Sconto Pecuniario (&euro;)</option>
                                          <option value="2">Sconto Percentuale (%)</option>
                                          <option value="1">Prezzo permanente (&euro;)</option>
                                      </select>
                            </div>
                        </div>
                         <div class="clearfix"></div>

                    <div class="col-md-4">
                                        <label>Sconto effettivo</label>
                            <div class="input-group">
                                    
                                    <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>
                                    <input required="" aria-required="true" type="text" class="form-control input-lg" name="cantidad" placeholder="Es. 25" value="{if isset($oCoupon->idCoupon)}{$oCoupon->codice}{/if}">
                            </div>
                        </div>


                   
                                      
                            
                                      <div class="col-md-4">
                            <div class="form-group">
                                    <label id="response">Sconto permanente</label>
                                      <select required="" aria-required="true" name="tempoCoupon" id="tempoCoupon" class="select2" data-placeholder="Seleziona tipo di sconto...">
                                          <option></option>
                                          <option value="1">SI</option>
                                          <option value="2">SI, ma fino a scadenza</option>
                                          <option value="0">NO</option>
                                      </select>
                            </div>
                        </div>
                                      <div class="col-md-4">
                            <label>Data di scadenza</label><br />
                            
                                <div class="input-group date">
                                    <input type="text" name="data" class="form-control input-lg" placeholder="{if isset($oCoupon->dataScadenza)}{$oCoupon->dataScadenza|date_format:"%e %B %Y"}{/if}" data-date-format="dd/mm/yyyy" id="datepicker">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div><!-- input-group -->
                        </div>
                                      
                        
                        <div class="clearfix"></div>
                            </div>
</div>
                    </div>
  <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Medici iscritti a questi coupon</h3></div>
                            <div class="panel-body">
                                
                             <div class="form-group">
                                        
                                        <div class="col-md-12">
                                            <select required="" aria-required="true" name="utenti[]" class="multi-select" multiple="" id="my_multi_select3" >
                                                {foreach $medici as $value => $key}
                                               <option  value="{$key['fkUtente']}">{$key['nome']} {$key['cognome']} - {$key['codiceFiscale']} - {$key['tipoSpecializzazione']}</option>
                                           {/foreach}
                                            </select>
                            </div>

                                    </div>
            
                    
                </div>

                        </div>
  </div><div class="col-md-6"><a href="aziende.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div> <div class="col-md-6"><button type="submit" class="btn btn-primary btn-lg btn-block ">Invia <i class="fa fa-check"></i></button></div>
                                            </form>
  </div>

{include file="footer_modifica.tpl"}