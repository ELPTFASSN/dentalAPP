{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Lista delle fatture</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class=active>Fatture</li>
                    </ol>
                </div>
            </div>
            <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>Le mie fatture</h3> 
                        </div>
                        <div class=panel-body>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=m-b-30>
                                        {if $smarty.session.utente['idRuoloUtente'] == $smarty.const.AMMINISTRATORE} 
                                            <a id="sa-success" class="btn btn-success waves-effect waves-light">Genera codice di iscrizione <i class="fa fa-plus"></i></a> 

                                            <a href="pazienti.php?status=attesa" class="btn btn-danger waves-effect waves-light{if isset($status)} {if $status=='attesa'}disabled{/if}{/if}">Vedi solo in attesa <i class="fa fa-clock-o"></i></a>
                                            {/if}
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="the-box dark full">
                                            <tr>
                                                <th>Numero</th>
                                                <th>Data</th>
                                                <th>Totale</th>
                                                <th>Tipo </th>
                                                <th>Descrizione</th>
                                                <th>Codice </th>
                                                <th>Azioni</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $ordini as $key=>$value}
                                                <tr class="{cycle values='odd,even'}">
                                                    <td>{if $value['tipoFattura']=='1' || $value['tipoFattura']=='3'}INV{"%05d"|sprintf:$value['idFattura']} {else}ABB{"%05d"|sprintf:$value['idFattura']}{/if}</td>
                                                    <td>{$value['data']|date_format:"%d/%m/%Y"}</td>
                                                    <td>{$value['totale']|number_format:2:",":"."} &euro;</td>
                                                    <td>{if $value['tipoFattura']=='1'}Prescrizione{elseif $value['tipoFattura']=='3'} Trattamento{else}Abbonamento{/if}</td>                                                             

                                                    <td>{$value['descrizione']}</td>
                                                    <td>{$value['codice']}</td>
                                                    <td><a href="generatePDF.php?task=generate&id={$value['idFattura']}{if $value['tipoFattura']=='3'}&tx=true{/if}" class="btn btn-xs btn-primary btn-perspective btn-block waves-effect waves-light">Scarica Fattura <i class="fa fa-fw fa-download"></i></a></td>
                                                    </tr>
                                                {/foreach}
                                            </tbody>
                                        </table>

                                        {include file="footer_aziende.tpl"}