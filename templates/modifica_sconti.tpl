{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gestisci il listino prezzo</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="home_amministratore.php">BackOffice</a></li>
                        <li class="active">Listino Prezzi</li>
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
                            <form action="{$smarty.const.URL_FILE}prezzi.php" method="post" name="addCoupon" >
            <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Gestisci il listino prezzo</h3></div>
                            <div class="panel-body">

                                <input type="hidden" name="inserimento" value="TRUE">
                                
                            {foreach $arrOrdini as $key=>$value}
                                {if $value['idPrezzo'] =='11' || $value['idPrezzo'] =='12' || $value['idPrezzo'] =='13'}
                                    {else}
                                <div class="col-md-6 form-group">
                                    <label>{$value['description']} {if $value['idPrezzo']=='4'} (da 0 a {$precios['1']['prezzo']}){/if}{if $value['idPrezzo']=='1'} (da {$precios['1']['prezzo']} a {$precios['0']['prezzo']}){/if} {if $value['idPrezzo']=='5'} (da {$precios['0']['prezzo']+1} in poi){/if}</label>
                                    <div class="input-group">
                                       {if $value['idPrezzo'] =='11' || $value['idPrezzo'] =='12' || $value['idPrezzo'] =='13'} <span class="input-group-addon" id="moneda"><i class="fa fa-sort-numeric-desc"></i></span> {else} <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>{/if}
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="{$value['idPrezzo']}" placeholder="Es. 25" value="{$value['prezzo']}">
                                    </div>
                                </div>
                                    {/if}
                             {/foreach}       
                        <div class="clearfix"></div>
                        <hr>
                        <div class="col-md-6 form-group"> <div class="checkbox checkbox-primary ">
                                                    <input id="checkbox1" name='14' type="checkbox" {if $smarty.session.utente['IVASINO'] >= "1"}checked{/if}>
                                                    <label for="checkbox1">
                                                        Applicare l'IVA?
                                                    </label>
                            </div>
                                                    <div class="input-group inline"> <span class="input-group-addon" id="moneda"><strong>%</strong></span> <input type="text" class="form-control input-lg" name="15" placeholder="Es. 22" value="{$smarty.session.utente['IVA']}"> </div>
                            
                            </div>
                            </div>
                        </div>
                    </div>
                 
         
            </div>
                        <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Gestisci i range</h3></div>
                            <div class="panel-body">

                                <input type="hidden" name="inserimento" value="TRUE">
                                
                            {foreach $arrOrdini as $key=>$value}
                                {if $value['idPrezzo'] =='11' || $value['idPrezzo'] =='12' || $value['idPrezzo'] =='13'}
                                    
                                <div class="col-md-6 form-group">
                                    <label>{$value['description']} {if $value['idPrezzo']=='4'} (da 0 a {$precios['1']['prezzo']}){/if}{if $value['idPrezzo']=='1'} (da {$precios['1']['prezzo']} a {$precios['0']['prezzo']}){/if} {if $value['idPrezzo']=='5'} (da {$precios['0']['prezzo']+1} in poi){/if}</label>
                                    <div class="input-group">
                                       {if $value['idPrezzo'] =='11' || $value['idPrezzo'] =='12' || $value['idPrezzo'] =='13'} <span class="input-group-addon" id="moneda"><i class="fa fa-sort-numeric-desc"></i></span> {else} <span class="input-group-addon" id="moneda"><i class="fa fa-euro"></i></span>{/if}
                                        <input required="" aria-required="true" type="text" class="form-control input-lg" name="{$value['idPrezzo']}" placeholder="Es. 25" value="{$value['prezzo']}">
                                    </div>
                                </div>
                                    {else}
                                    {/if}
                             {/foreach}       
                        <div class="clearfix"></div>
                        
                        </div>
                    </div>
                    <div class="col-md-6"><a href="aziende.php" class="btn btn-danger btn-lg btn-block">Cancella <i class="fa fa-times"></i></a></div> <div class="col-md-6"><button type="submit" class="btn btn-primary btn-lg btn-block ">Invia <i class="fa fa-check"></i></button></div>
                
            </div>
</form>
            {include file="footer_modifica.tpl"}