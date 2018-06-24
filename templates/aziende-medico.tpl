{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
<div class=content-page>
    <div class=content>
        <div class=container>
            <div class=row>
                <div class=col-sm-12>
                    <h4 class="pull-left page-title">Lista dei miei studi medici iscritti alla piattaforma</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href=#>BackOffice</a></li>
                        <li class=active>Studi medici</li>
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

                </div></div>
            <div class=row>
                <div class=col-md-12>
                    <div class="panel panel-default">
                        <div class=panel-heading>
                            <h3 class=panel-title>I miei studi medici</h3>
                        </div>
                        <div class=panel-body>
                            <div class=row>
                                <div class=col-sm-12>
                                    <div class=m-b-30>
                                        <a href="aziende.php?task=add" class="btn btn-primary waves-effect waves-light">Aggiungi un nuovo studio medico <i class="fa fa-plus"></i></a> 
                                    </div>
                                </div>
                            </div>
                            <div class=row>
                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <table class="table table-striped table-hover" id="datatable">
                                        <thead class="the-box dark full">
                                            <tr>
                                                <th>Denominazione</th>
                                                <th>Partita IVA</th>
                                                <th>Regione</th>
                                                <th>Provincia</th>
                                                <th>Citt&agrave;</th>
                                                <th>Indirizzo</th>
                                                <th>Azioni</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach $aziende as $key=>$value}
                                                <tr class="{cycle values='odd,even'}">
                                                    {assign var=foo value=$value['idAzienda']}
                                                    <td>{$value['denominazione']}</td>
                                                    <td>{$value['partitaIVA']}</td>
                                                    <td>{$value['regione']}</td>
                                                    <td>{$value['provincia']}</td>
                                                    <td>{$value['citta']}</td>
                                                    <td>{$value['indirizzo']} {$value['numero']}</td>
                                                    <td><a href="aziende.php?task=modifica&id={$foo}" class="btn btn-xs btn-primary btn-perspective waves-effect waves-light">Modifica <i class="fa fa-fw fa-edit"></i></a> <a href="aziende.php?task=modifica&id={$foo}" class="btn btn-xs btn-danger btn-perspective waves-effect waves-light">Cancella <i class="fa fa-fw fa-trash-o"></i></a></td>
                                                </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>

                                    {include file="footer_aziende.tpl"}