<style>
    .modal{
        width: 880px !important;
        height: 730px !important;
        top: 36% !important;
        left: 36%;
    }
</style>


<div class="box color_light" >
    <div class="modal-header" style="width: 878px !important">
        <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
        <h4> <i class="icon-book"></i>
            <span><?= lang('transac.edit_title') ?></span> 
        </h4>
    </div>
    <div class="content" style="width: 878px !important; height: 650px !important;">
        <form id="frmNew" action="<?= site_url('transaccion/upd_transaccion') ?>" method="POST" class="form-horizontal row-fluid">
            <div class="form-row control-group row-fluid hide">
                <div class="controls span8 hide">
                    <input type="text" class="hide" id="txt_id" name="txt_id" value="<?php if (isset($txt_id)) echo $txt_id ?>">
                </div>
            </div>
            <table style="width: 841px !important;">
                <tr>
                    <td >
                        <label for="normal-field" class="control-label span5"  style=" font-size: 13px"><?= lang('transac.tipo') ?></label>
                        <div class="controls span7">
                           <input id="cb_tipo" name="cb_tipo" class="row-fluid"  value="<?php if (isset($cb_tipo)) echo $cb_tipo ?>"/>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.freg') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_fecha_registro" name="txt_fecha_registro" value="<?php if (isset($txt_fecha_registro)) echo $txt_fecha_registro ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.tcambio') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_tipo_cambio" name="txt_tipo_cambio" value="<?php if (isset($txt_tipo_cambio)) echo $txt_tipo_cambio ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.soles') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_importe" name="txt_importe" value="<?php if (isset($txt_importe)) echo $txt_importe ?>" >
                            </span>
                        </div>
                    </td>
                    <td >
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.rendicion') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_rendicion" name="txt_rendicion" value="<?php if (isset($txt_rendicion)) echo $txt_rendicion ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.fsis') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_fecha_sistema" name="txt_fecha_sistema" value="<?php if (isset($txt_fecha_sistema)) echo $txt_fecha_sistema ?>" disabled>
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.docu') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_documeto" name="txt_documento" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.dolares') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_importedol" name="txt_importedol" value="<?php if (isset($txt_importedol)) echo $txt_importedol ?>" >
                            </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.caja') ?></label>
                        <div class="controls span7">
                           <input id="cb_caja" name="cb_caja" class="row-fluid"  value="<?php if (isset($cb_caja)) echo $cb_caja ?>" />
                        </div>
                    </td>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.cheque') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_nro_boucher" name="txt_nro_boucher" value="<?php if (isset($txt_nro_boucher)) echo $txt_nro_boucher ?>" >
                            </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.sproy') ?></label>
                        <div class="controls span7">
                           <input id="cb_sproy" name="cb_sproy" class="row-fluid" value="<?php if (isset($cb_sproy)) echo $cb_sproy ?>" />
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.sconcepto') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                           <input id="cb_sconcepto" name="cb_sconcepto" class="row-fluid" value="<?php if (isset($cb_sconcepto)) echo $cb_sconcepto ?>" />
                        </div>
                    </td>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.proy') ?></label>
                        <div class="controls span7">
                           <input id="cb_proy" name="cb_proy" class="row-fluid" value="<?php if (isset($cb_proy)) echo $cb_proy ?>" />
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.concepto') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                           <input id="cb_concepto" name="cb_concepto" class="row-fluid" value="<?php if (isset($cb_concepto)) echo $cb_concepto ?>" />
                        </div>
                    </td>
                </tr>
            </table>
            <table style="width: 841px !important;">
                <tr>
                    <td>
                        <label for="normal-field" class="control-label span3" style=" font-size: 13px"><?= lang('transac.obs') ?></label>
                        <div class="controls span8">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_observacion" name="txt_observacion" value="<?php if (isset($txt_observacion)) echo $txt_observacion ?>" >
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
            <table style="width: 831px !important;">
                <tr>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.empresa') ?></label>
                        <div class="controls span7">
                           <input id="cb_empresa" name="cb_empresa" class="row-fluid" value="<?php if (isset($cb_empresa)) echo $cb_empresa ?>" />
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.cta_dr') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_cta_dr" name="txt_cta_dr" value="<?php if (isset($txt_cta_dr)) echo $txt_cta_dr ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.freg') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_fecha1" name="txt_fecha1" value="<?php if (isset($txt_fecha1)) echo $txt_fecha1 ?>" >
                            </span>
                        </div>
                    </td>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.glosa') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_glosa" name="txt_glosa" value="<?php if (isset($txt_glosa)) echo $txt_glosa ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.cta_dc') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_cta_dc" name="txt_cta_dc" value="<?php if (isset($txt_cta_dc)) echo $txt_cta_dc ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.ndoc') ?></label>
                        <div class="controls span7" style="padding-top: 3px;">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_ndoc" name="txt_ndoc" value="<?php if (isset($txt_ndoc)) echo $txt_ndoc ?>" >
                            </span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.cta_dr') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_cta_dr2" name="txt_cta_dr2" value="<?php if (isset($txt_cta_dr2)) echo $txt_cta_dr2 ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.freg') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox" style="padding-top: 3px;">
                               <input type="text" class="row-fluid" id="txt_fecha2" name="txt_fecha2" value="<?php if (isset($txt_fecha2)) echo $txt_fecha2 ?>" >
                            </span>
                        </div>
                    </td>
                    <td>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.cta_dc') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox">
                               <input type="text" class="row-fluid" id="txt_cta_dc2" name="txt_cta_dc2" value="<?php if (isset($txt_cta_dc2)) echo $txt_cta_dc2 ?>" >
                            </span>
                        </div>
                        <label for="normal-field" class="control-label span5" style=" font-size: 13px"><?= lang('transac.glosa') ?></label>
                        <div class="controls span7">
                            <span class="row-fluid k-textbox" style="padding-top: 3px;">
                               <input type="text" class="row-fluid" id="txt_glosa2" name="txt_glosa2" value="<?php if (isset($txt_glosa2)) echo $txt_glosa2 ?>" >
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
            
            <div class="form-actions row-fluid" >
                <div class="span3 visible-desktop" ></div>
                <div class="span7 ">
                    <button id="submit" class="btn btn-primary" type="submit"><?= lang('boton.register') ?></button>
                    <button id="close" class="btn btn-primary" data-dismiss="modal"><?= lang('boton.close') ?></button>
                </div>
            </div>
            <div id="msgForm"></div>
        </form>
    </div>
</div>


<script type="text/javascript">
    /**** Specific JS for this page ****/
    function setDolares2(){
        var val = $(this).val();
        dolares = parseFloat((document.getElementById('txt_importe').value/val));
        document.getElementById('txt_importedol').value = dolares.toFixed(2);
    }
    
    function setDolares(){
        var val = $(this).val();
        dolares = parseFloat(val/(document.getElementById('txt_tipo_cambio').value));
        document.getElementById('txt_importedol').value = dolares.toFixed(2);
    }
    
    function setSoles(){
        var val = $(this).val();
        soles = parseFloat(val*document.getElementById('txt_tipo_cambio').value);
        document.getElementById('txt_importe').value = soles.toFixed(2);
    }
    
    function setEmpresa(){
        var val = $(this).val();
        var cajas = <?php echo (isset($arrCaja)) ? $arrCaja : 'null' ?>;
        var empresa = val;
        //console.log(cajas)
        // recorrer cajas(array de objects)
        var caja_i;
        for(var caja in cajas){
            caja_i = cajas[caja];
            //console.log(caja_i.Caja);
            if(caja_i.c_codigo == val){
                //console.log(caja_i.Caja);
                empresa = caja_i.id_empresa;
            }
        }
        //empresa.forEach()
        $("#cb_empresa").data("kendoComboBox").value(empresa);
    }
    
    function setProyecto(){
        var val = $(this).val();
        var sproys = <?php echo (isset($arrSproyecto)) ? $arrSproyecto : 'null' ?>;
        var proyecto = val;
        var sproy_i;
        for(var sproy in sproys){
            sproy_i = sproys[sproy];
            if(sproy_i.c_scodigo == val){
                proyecto = sproy_i.id_proyecto;
                //console.log(proyecto);
            }
        }
        $("#cb_proy").data("kendoComboBox").value(proyecto);
    }
    
    function setConcepto(){
        var val = $(this).val();
        var sconceptos = <?php echo (isset($arrSConcepto)) ? $arrSConcepto : 'null' ?>;
        var concepto = val;
        var sconcepto_i;
        for(var sconcepto in sconceptos){
            sconcepto_i = sconceptos[sconcepto];
            if(sconcepto_i.c_scodigo == val){
                concepto = sconcepto_i.id_concepto;
                //console.log(concepto);
            }
        }
        $("#cb_concepto").data("kendoComboBox").value(concepto);
    }
    
    $(document).ready(function () {
        
        txt_tipo_cambio = $('#txt_tipo_cambio').change(setDolares2);
        txt_importe = $('#txt_importe').change(setDolares);
        txt_importedol = $('#txt_importedol').change(setSoles);
        
        $.populateComboBox('#cb_tipo', "", 'c_tipo', 'id_tipo', <?php echo (isset($arrTipo)) ? $arrTipo : 'null' ?>, 1);     
        cb_tipo = $("#cb_tipo").data("kendoComboBox");
        
        $.populateComboBox('#cb_caja', "<?= lang('transac.selcaja')?>", 'Caja', 'c_codigo', <?php echo (isset($arrCaja)) ? $arrCaja : 'null' ?>, 1);
        cb_caja = $("#cb_caja").data("kendoComboBox");
        cb_caja = $('#cb_caja').change(setEmpresa);
        
        $.populateComboBox('#cb_sproy',"<?= lang('transac.selsproy')?>", 'SProyecto', 'c_scodigo', <?php echo (isset($arrSproyecto)) ? $arrSproyecto : 'null' ?>, 1);      
        cb_sproy = $("#cb_sproy").data("kendoComboBox");
        cb_sproy = $('#cb_sproy').change(setProyecto);
        
        $.populateComboBox('#cb_proy',"", 'Proyecto', 'id_proyecto', <?php echo (isset($arrProyecto)) ? $arrProyecto : 'null' ?>, 1);      
        cb_proy = $("#cb_proy").data("kendoComboBox");
        
        $.populateComboBox('#cb_sconcepto',"<?= lang('transac.selsconcepto')?>", 'SConcepto', 'c_scodigo', <?php echo (isset($arrSConcepto)) ? $arrSConcepto : 'null' ?>, 1);      
        cb_sconcepto = $("#cb_sconcepto").data("kendoComboBox");
        cb_sconcepto = $('#cb_sconcepto').change(setConcepto);
        
        $.populateComboBox('#cb_concepto',"", 'Concepto', 'id_concepto', <?php echo (isset($arrConcepto)) ? $arrConcepto : 'null' ?>, 1);      
        cb_concepto = $("#cb_concepto").data("kendoComboBox");
        
        $.populateComboBox('#cb_empresa',"", 'Empresa', 'c_codigo', <?php echo (isset($arrEmpresa)) ? $arrEmpresa : 'null' ?>, 1);      
        cb_empresa = $("#cb_empresa").data("kendoComboBox");
        
        $.saveModal('#frmNew', '#submit', '#tbData', '#msgForm', "<?= lang('g.msgProcesing')?>");
        
    });
</script>
