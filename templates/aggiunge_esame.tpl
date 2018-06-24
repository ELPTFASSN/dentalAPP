<div id="small-dialog" class="zoom-anim-dialog">
    <h2>Aggiungere esame</h2>
    
    <hr>
<form action="{$smarty.const.URL_FILE}aggiunge_esame.php" method="post" name="aggiunge_esame" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$paziente}"><input type="hidden" name="inserimento" value="true">
                                                
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <label>Tipo di Esame</label><br />

                            <select name="esame" id="esame" class="form-control  rounded" data-live-search="true">
                                <option vale="" disabled selected>Sceglie un tipo di esame</option>
                                        {foreach $esame as $item}
                                               <option value="{$item['idEsame']}">{$item['nome']}</option>
                                        {/foreach}
                            </select>
                            
                        </div>
                        <div class="col-md-2">
                        <div class="form-group">
                        <label>Valore</label>
                                    <input type="text" class="form-control rounded" id="valore" name="valore" placeholder="es. 1,04" value="" style="float:left;width:65%;"><span id="unidad" style="float: right;font-size: 11px;margin-top: 9px;font-weight: 500;">mg/dL</span>
                            </div>
                        </div>
                            <div class="col-md-6">
                            <label>Data</label><br />
                            
                            {assign var='numero' value=1}
                            {assign var='cicli' value=31}

                            <select name="giorno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:33%;margin-right:5px;">
                                <option value="0">Giorno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['giorno']) && $post['giorno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero+1}
                                {/section}

                            </select>

                            {assign var='numero' value=1}
                            {assign var='cicli' value=12}

                            <select name="mese" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%;margin-right:5px;">
                                <option value="0">Mese</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['mese']) && $post['mese']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero+1}
                                {/section}

                            </select>

                            {assign var='numero' value=2014}
                            {assign var='cicli' value=14}

                            <select name="anno" id="basic" class="form-control  rounded" data-live-search="true" style="float:left; width:31%">
                                <option value="0">Anno</option>
                                {section name=numero loop=$cicli}
                                        <option {if isset($post['anno']) && $post['anno']==$numero}selected="selected"{/if} value="{$numero}">{$numero}</option>
                                        {assign var='numero' value=$numero-1}
                                {/section}

                            </select>
                            
                        </div>
                                <div class="col-md-12 animated fadeIn" id="dialisi" style="display:none;">
                                    <label class="form-control rounded" style="background: ivory;"><input type="checkbox" name="dialisi" value="1"> <span style="vertical-align: 2px;">Paziente sottoposto a dialisi due volte nella settimana precedente a questo esame.</span></label>
                                 </div>
                                <div class="col-md-12"><br>
                            <div class="form-group">
                                    <label>Scansione</label>
                                    <input type="file" class="btn btn-info btn-perspective btn-file" name="uploadFile" style="padding: 15px 35px 15px 25px;width: 99%;">
                            </div>
                        </div>

                                <div class="clearfix"></div><br>
                      <div class="col-md-6 col-md-offset-6 text-right"> <button type="submit" class="btn btn-perspective btn-primary">Aggiungi <i class="fa fa-fw fa-plus"></i></button> </div>
                    </form>
{literal}
<script type="text/javascript"> 
$('select').on('change', function() {
    $('#dialisi').hide();
    $('#unidad').text("mg/dL");
       if($('#esame').val() == '3')
            $('#dialisi').show();
       if($('#esame').val() == '4')
            $('#unidad').text("mEq/L");
       
});
</script>
{/literal}
<br><br>
</div>