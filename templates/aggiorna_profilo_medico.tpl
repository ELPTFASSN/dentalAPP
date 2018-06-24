{include file="header_amm.tpl"}
{include file="sidebar.tpl"}

    <div class="page-content">

        <div class="container-fluid">
            
            
            <h1 class="page-heading">Aggiorna profilo</h1>
                <div class="the-box" style="min-height: 540px;">
                    {if !empty($error)}
                            <div class="alert alert-danger alert-bold-border fade in">
                                <i class="fa fa-fw fa-5x fa-exclamation-circle text-danger" style="float:right;"></i>
                                   <strong>Si sono verificati i seguenti errori:<br>
                                       <span class="text-danger">{if isset($error)}{$error}{/if}</span></strong>
                           </div>
                    {/if}
                    <form action="{$smarty.const.URL_FILE}aggiorna_profilo_medico.php" method="post" name="aggiorna_profilo_medico">
                        <input type="hidden" name="idUtente" value="{if isset($oMedico->idUtente)}{$oMedico->idUtente}{/if}">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" class="form-control rounded" name="nome" placeholder="Nome" value="{if isset($oMedico->nome)}{$oMedico->nome}{/if}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label>Cognome</label>
                                    <input type="text" class="form-control rounded" name="cognome" placeholder="Cognome" value="{if isset($oMedico->cognome)}{$oMedico->cognome}{/if}">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="text" class="form-control rounded" name="telefono" placeholder="Telefono" value="{if isset($oMedico->telefono)}{$oMedico->telefono}{/if}">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control rounded" name="email" placeholder="Email" value="{if isset($oMedico->email)}{$oMedico->email}{/if}">
                            </div>
                        </div>
                                                <div class="col-md-6">
                            <div class="form-group">
                                    <label>Indirizzo</label>
                                    <input type="text" class="form-control rounded" name="indirizzo" placeholder="Indirizzo" value="{if isset($oMedico->indirizzo)}{$oMedico->indirizzo}{/if}">
                            </div>
                        </div>
                                                <div class="col-md-4">
                            <div class="form-group">
                                    <label>Citt&agrave;</label>
                                    <input type="text" class="form-control rounded" name="citta" placeholder="Citt&agrave;" value="{if isset($oMedico->citta)}{$oMedico->citta}{/if}">
                            </div>
                        </div>
                                                <div class="col-md-2">
                            <div class="form-group">
                                    <label>Provincia</label>{$oMedico->provincia}
                                      <select name="provincia" class="form-control rounded">
                                           <option>Seleziona la provincia</option>
                                           {foreach $province as $key => $value}
                                               <option {if $key==$oMedico->provincia}selected=selected{/if} value="{$key}">{$value}</option>
                                           {/foreach}
                                      </select>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                                                                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password <small>(lasciare vuoto per non modificare)</small></label>
                                    <input type="password" class="form-control rounded" name="password">
                                 
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipologia</label>
                                <div class="radio"><input name="specializzazione" type="radio" id="Medico_di_Base" {if isset($oMedico->specializzazione)}{if $oMedico->specializzazione=="Medico_di_Base"}checked="checked"{/if}{/if} value="Medico_di_Base" onclick="checkAltro();" > <label for="Medico_di_Base" class="label-info-medici" onclick="checkAltro();" >Medico di Base</label></div>
                                <div class="radio"><input name="specializzazione" type="radio" id="Epatologo" {if isset($oMedico->specializzazione)}{if $oMedico->specializzazione=="Epatologo"}checked="checked"{/if}{/if} value="Epatologo" onclick="checkAltro();" > <label for="Epatologo" class="label-info-medici" onclick="checkAltro();">Epatologo</label></div>
                                <div class="radio"><input name="specializzazione" type="radio" id="Altro" {if isset($oMedico->specializzazione)}{if ( $oMedico->specializzazione!="Medico_di_Base" && $oMedico->specializzazione!="Epatologo")}checked="checked"{/if}{/if} value="Altro" onclick="checkAltro();" /><label for="Altro" class="label-info-medici" onclick="checkAltro();" >Altro</label></div>
                        

                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-md-4">
                            <label>Data di specializzazione</label><br />
                            
                            {assign var='numero' value=1}
                            {assign var='cicli' value=31}

                            <select name="giorno" id="basic" class="form-control no-border rounded" data-live-search="true" style="float:left; width:33%;margin-right:5px;">
                                <option value="">Giorno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['giorno']) && $post['giorno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero+1}
                                {/section}

                            </select>

                            {assign var='numero' value=1}
                            {assign var='cicli' value=12}

                            <select name="mese" id="basic" class="form-control no-border rounded" data-live-search="true" style="float:left; width:31%;margin-right:5px;">
                                <option value="">Mese</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['mese']) && $post['mese']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero+1}
                                {/section}

                            </select>

                            {assign var='numero' value=2014}
                            {assign var='cicli' value=114}

                            <select name="anno" id="basic" class="form-control no-border rounded" data-live-search="true" style="float:left; width:31%">
                                <option value="">Anno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['anno']) && $post['anno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero-1}
                                {/section}

                            </select>
                        </div>
                                
                                <div class="col-md-6"></div>
                        
                        <div class="clearfix"></div>
                        
                        
                        <div class="col-md-12">
                            <div class="col-md-4" >
                                <div class="form-group" id="altro_value" {if !isset($post['altro_value'])}style="display: none;"{/if}>
                                    <label>Tipo Specializzazione</label>
                                    <input type="text" class="form-control rounded" name="altro_value" placeholder="Tipo specializzazione" value="{if isset($post['altro_value'])}{$post['altro_value']}{/if}">
                                </div>  
                            </div>
                            <div class="col-md-5 col-md-offset-3 text-right">
                                <a href="home_medico.php" class="btn btn-danger btn-lg btn-perspective">Anulla<i class="fa fa-fw fa-times"></i></a> <button class="btn btn-action btn-lg btn-perspective btn-primary">Invia<i class="fa fa-fw fa-check"></i></button>
                            </div>
                        
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
        </div>

    </div>

                        
{literal}
    <script type="text/javascript">
        function checkAltro( ) {
            
            if (document.aggiorna_profilo_medico.Altro.checked == false)
                document.getElementById("altro_value").style.display = "none";
            else
                document.getElementById("altro_value").style.display = "block";
        }
    </script>
{/literal}
                        
{include file="footer_amm.tpl"}