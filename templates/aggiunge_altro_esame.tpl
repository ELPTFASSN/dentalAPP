<div id="small-dialog" class="zoom-anim-dialog">
    <h2>Aggiungere altro esame</h2>
    
    <hr>
<form action="{$smarty.const.URL_FILE}aggiunge_altro_esame.php" method="post" name="aggiunge_altro_esame" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{$paziente}"><input type="hidden" name="inserimento" value="TRUE">
                                                
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <label>Tipo di Esame</label><br />
<input type="text" class="form-control rounded" name="esame" placeholder="Nome del Esame" value="">
                            
                        </div>
                            <div class="col-md-6">
                            <label>Data</label><br />
                            
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
                            {assign var='cicli' value=14}

                            <select name="anno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%">
                                <option value="">Anno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['anno']) && $post['anno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero-1}
                                {/section}

                            </select>
                            
                        </div>
                                <div class="clearfix"></div><br>
                        <div class="col-md-12">
                            <div class="form-group">
                                    <label>Scansione</label>
                                    <input type="file" class="btn btn-info btn-perspective btn-file" name="uploadFile" style="padding: 15px 35px 15px 25px;width: 99%;">
                            </div>
                        </div>

                                <div class="clearfix"></div><br>
                                <div class="col-md-6 col-md-offset-6 text-right"> <button type="submit" class="btn btn-perspective btn-primary">Aggiungi <i class="fa fa-fw fa-plus"></i></button> </div>
                    </form>
</div>