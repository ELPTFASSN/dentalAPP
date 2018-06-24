{include file="header_dsr.tpl"}
{include file="sidebar.tpl"}


<!-- INIZIO CONTENUTO -->
			<div class="page-content">
				
                            <div class="container-fluid">
                            
                            <h1 class="page-heading">Gestione eReferral</h1>
                            
                            		<!-- INIZIO DATA TABLE -->
					<div class="the-box">
						<div class="table-responsive">
                                                    <label>Nuovi eReferral</label>
						<table class="table table-striped table-hover" id="elenco-ereferral-in-attesa">
							<thead class="the-box dark full">
								<tr>
									<th>Num. Referral</th>
									<th>Paziente</th>
									<th>Data Apertura</th>
                                                                        <th>Centro Trapianti</th>
                                                                        <th style="width:225px;">Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $referralInAttesa as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    <td><a href="{$smarty.const.URL_FILE}dettaglio_referral.php?idReferral={$value['idReferral']}">{$value['idReferral']}</a></td>
                                                                    <td><a href="{$smarty.const.URL_FILE}dettaglio_referral.php?idReferral={$value['idReferral']}">{$value['paziente']}</a></td>
                                                                    <td>{$value['dataApertura']}</td>
                                                                    <td> {$value['centro']}</td>
                                                                    <td><a href="{$smarty.const.URL_FILE}presa_in_carico.php?idReferral={$value['idReferral']}" class="btn btn-danger btn-perspective btn-xs">Presa in carico<i class="fa fa-lock"></i></a></td>
								</tr>
                                                            {/foreach}
 
							</tbody>
						</table>
                                                <br />
                                                <br />
                                                <table class="table table-striped table-hover" id="elenco-ereferral-assegnati">
                                                    <label>eReferral assegnati</label>
							<thead class="the-box dark full">
								<tr>
									<th>Num. Referral</th>
									<th>Paziente</th>
									<th>Data Aggiornamento</th>
                                                                        <th>Centro</th>
                                                                        <th>Stato Trapianti</th>
                                                                        <th style="width:225px;">Azioni</th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $referralAssegnati as $key=>$value}

								<tr class="{cycle values='odd,even'}">
                                                                    <td><a href="{$smarty.const.URL_FILE}dettaglio_referral.php?idReferral={$value['idReferral']}">{$value['idReferral']}</a></td>
                                                                    <td><a href="{$smarty.const.URL_FILE}dettaglio_referral.php?idReferral={$value['idReferral']}">{$value['paziente']}</a></td>
                                                                    <td> {$value['dataAggiornamento']}</td>
                                                                    <td> {$value['centro']}</td>
                                                                    <td> {$value['stato']|replace:"_":" "}</td>
                                                                    <td><a href="{$smarty.const.URL_FILE}dettaglio_referral.php?idReferral={$value['idReferral']}" class="btn btn-danger btn-perspective btn-xs">Vedi dettaglio<i class="fa fa-lock"></i></a></td>
								</tr>
                                                            {/foreach}
 
							</tbody>
						</table>
                                                </div><!-- /.table-responsive -->
					</div><!-- /.the-box .default -->
					<!-- END DATA TABLE -->
					
				</div><!-- /.container-fluid -->

                        </div>
{include file="footer_amm.tpl"}