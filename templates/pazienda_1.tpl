{include file="header_publica.tpl"}

<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 m-t-40" >
    <!-- Start content -->
    <div class="content m-t-40">
        <div class="container m-t-40">
            <div class="panel panel-primary m-t-40">

                <div class="panel-heading"> 
                    <h3 class="text-white">Studi medici nella regione di {$regione}</h3>
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
{if !empty($aziende)}
                    <table class="table table-striped table-hover" id="datatable">
							<thead class="the-box dark full">
								<tr>
									<th>Denominazione</th>
                                                                        <th>Provincia</th>
                                                                        <th>Città</th>
									<th>Puntteggio</th>
                                                                        <th><i class='fa fa-chain'></i></th>
								</tr>
							</thead>
							<tbody>
                                                            {foreach $aziende as $key=>$value}
								<tr class="{cycle values='odd,even'}">
                                                                    {assign var=foo value=$value['idAzienda']}
                                                                    <td>{$value['denominazione']}</td>
                                                                    <td>{$value['provincia']}</td>
                                                                    <td>{$value['citta']}</td>
                                                                    <td class="center"><span style='font-size:21px;'>{if isset($value['score'])} {for $puntos=1 to $value['score']}<i class="fa fa-star text-primary"></i> {/for}{else}-{$value['score']}{/if}</span></td>
                                                                        
                                                                    <td><a href="associato.php?id={$value['idAzienda']}" class='btn btn-primary btn-sm'>Vedi minisito <i class="fa fa-eye"></i></a></td>
								</tr>
                                                            {/foreach}
							</tbody>
						</table>
{else}<h3 class="alert alert-danger">Non ci sono studi medici nella regione scelta.</h3>{/if}
                                                        <br>
<a href="javascript:history.back()" class="btn btn-lg btn-danger btn-block"><i class="fa fa-backward"></i> Sceglie altra regione</a>
                    
                    
                
            </div>
                                 
        </div>
    </div>
</div>

                                            <p>&nbsp;</p>
{include file="footer_publico.tpl"}