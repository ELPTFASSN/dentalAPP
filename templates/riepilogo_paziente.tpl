{include file="header_amm.tpl"}
{include file="sidebar.tpl"}
{assign var="iva" value=$smarty.session.utente['IVA']/100}
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">I miei trattamenti</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_paziente.php">BackOffice</a></li>
                        <li class="active">Dettaglio trattamento</li>
                    </ol>
                </div>
            </div>

            {if !empty($error)}
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-bold-border fade in animated flash">
                            <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                            <strong>Si sono verificati i seguenti errori:<br>
                                <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                        </div>
                    </div>
                </div>
            {/if}       
            <div class="row">
                <div class="col-md-12">


                    <div class="panel panel-border panel-primary">
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Servizi disponibili su EasySmile Group</h3> 
                        </div> 
                        <div class="panel-body">
                            <div class="col-md-12 text-center">
                                <img src="http://easysmile.beecloud.it/img/portfolio/igiene.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/filler.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/endodonzia.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/conservativa.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/chirurgia.png">
                                <img src="http://easysmile.beecloud.it/img/portfolio/implantologia.png">
                            </div>
                            <div class="clearfix"></div><br><hr><br>
                            <div class="col-md-12">
                                <table class="table table-striped table-hover" id="datatable">
                                    <thead class="the-box dark full">
                                        <tr>
                                            <th>Data</th>
                                            <th>Tipo di servizio</th>
                                            <th>Studio Medico</th>
                                            <th>Gradimenti</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach $ordini as $key=>$value}
                                            <tr class="{cycle values='odd,even'}">
                                                <td>{$value['dataApertura']|date_format:"%d/%m/%Y"}</td>
                                                <td>Ortodonzia Invisibile</td>
                                                <td>{$value['denominazione']}</td>
                                                <td><a href="home_paziente.php?gradimenti=true" class="btn btn-primary btn-sm">Lascia un gradimento</a></td>                                                             
                                            </tr>
                                                {/foreach}
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            {include file="footer_modifica_3.tpl"}