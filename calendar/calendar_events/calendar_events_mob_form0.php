<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " events"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " events"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_start_date button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_end_date button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>calendar_events/calendar_events_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("calendar_events_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}

 function sc_calendar_all_day_click() {
  var allDayField = $("input[name='__calend_all_day__[]']");
  if (allDayField.length) {
     if (allDayField.prop("checked")) {
      scAjaxElementDisplay('hidden_field_label_start_time', 'off');
      scAjaxElementDisplay('hidden_field_data_start_time', 'off');
      scAjaxElementDisplay('hidden_field_label_end_time', 'off');
      scAjaxElementDisplay('hidden_field_data_end_time', 'off');
     }
     else {
      scAjaxElementDisplay('hidden_field_label_start_time', 'on');
      scAjaxElementDisplay('hidden_field_data_start_time', 'on');
      scAjaxElementDisplay('hidden_field_label_end_time', 'on');
      scAjaxElementDisplay('hidden_field_data_end_time', 'on');
     }
    }
 } // sc_calendar_all_day_click

 function sc_calendar_recurrence_change() {
          var recurField = $("#id_sc_field_");
          if ("" == recurField.val()) {
                  scAjaxElementDisplay("hidden_field_label_", "off");
                  scAjaxElementDisplay("hidden_field_data_", "off");
                  scAjaxElementDisplay("hidden_field_label_", "off");
                  scAjaxElementDisplay("hidden_field_data_", "off");
          }
          else {
                  scAjaxElementDisplay("hidden_field_label_", "on");
                  scAjaxElementDisplay("hidden_field_data_", "on");
                  scAjaxElementDisplay("hidden_field_label_", "on");
                  scAjaxElementDisplay("hidden_field_data_", "on");
          }
  
 } // sc_calendar_recurrence_change
<?php

include_once('calendar_events_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  mainForm = document.getElementById('main_table_form');
  formResize();

  sc_calendar_all_day_click();
  sc_calendar_recurrence_change();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 function formResize()
 {
    var formWidth = mainForm.clientWidth,
        formHeight = mainForm.clientHeight,
        windowHeight = $(window.parent).height();
    if (0 == formWidth || 0 == formHeight)
    {
        setTimeout("formResize()", 50);
    }
    else
    {
        if (formHeight > windowHeight - 100)
        {
            formHeight = windowHeight - 100;
        }
        self.parent.tb_resize(formHeight + 50, formWidth + 50);
    }
 }

 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    $vertical_center = '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['calendar_events']['error_buffer']) && '' != $_SESSION['scriptcase']['calendar_events']['error_buffer'])
{
    echo $_SESSION['scriptcase']['calendar_events']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("calendar_events_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="calendar_events_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="id" value="<?php  echo $this->form_encode_input($this->id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['calendar_events_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['calendar_events_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="60%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " events"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " events"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['title']))
    {
        $this->nm_new_label['title'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_title'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $title = $this->title;
   $sStyleHidden_title = '';
   if (isset($this->nmgp_cmp_hidden['title']) && $this->nmgp_cmp_hidden['title'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['title']);
       $sStyleHidden_title = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_title = 'display: none;';
   $sStyleReadInp_title = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['title']) && $this->nmgp_cmp_readonly['title'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['title']);
       $sStyleReadLab_title = '';
       $sStyleReadInp_title = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['title']) && $this->nmgp_cmp_hidden['title'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="title" value="<?php echo $this->form_encode_input($title) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_title_line" id="hidden_field_data_title" style="<?php echo $sStyleHidden_title; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_title_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_title_label" style=""><span id="id_label_title"><?php echo $this->nm_new_label['title']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['php_cmp_required']['title']) || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['php_cmp_required']['title'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["title"]) &&  $this->nmgp_cmp_readonly["title"] == "on") { 

 ?>
<input type="hidden" name="title" value="<?php echo $this->form_encode_input($title) . "\">" . $title . ""; ?>
<?php } else { ?>
<span id="id_read_on_title" class="sc-ui-readonly-title css_title_line" style="<?php echo $sStyleReadLab_title; ?>"><?php echo $this->form_format_readonly("title", $this->form_encode_input($this->title)); ?></span><span id="id_read_off_title" class="css_read_off_title" style="white-space: nowrap;<?php echo $sStyleReadInp_title; ?>">
 <input class="sc-js-input scFormObjectOdd css_title_obj" style="" id="id_sc_field_title" type=text name="title" value="<?php echo $this->form_encode_input($title) ?>"
 size=50 maxlength=64 alt="{datatype: 'text', maxLength: 64, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_title_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_title_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['description']))
    {
        $this->nm_new_label['description'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_description'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $description = $this->description;
   $sStyleHidden_description = '';
   if (isset($this->nmgp_cmp_hidden['description']) && $this->nmgp_cmp_hidden['description'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['description']);
       $sStyleHidden_description = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_description = 'display: none;';
   $sStyleReadInp_description = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['description']) && $this->nmgp_cmp_readonly['description'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['description']);
       $sStyleReadLab_description = '';
       $sStyleReadInp_description = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['description']) && $this->nmgp_cmp_hidden['description'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="description" value="<?php echo $this->form_encode_input($description) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_description_line" id="hidden_field_data_description" style="<?php echo $sStyleHidden_description; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_description_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_description_label" style=""><span id="id_label_description"><?php echo $this->nm_new_label['description']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["description"]) &&  $this->nmgp_cmp_readonly["description"] == "on") { 

 ?>
<input type="hidden" name="description" value="<?php echo $this->form_encode_input($description) . "\">" . $description . ""; ?>
<?php } else { ?>
<span id="id_read_on_description" class="sc-ui-readonly-description css_description_line" style="<?php echo $sStyleReadLab_description; ?>"><?php echo $this->form_format_readonly("description", $this->form_encode_input($this->description)); ?></span><span id="id_read_off_description" class="css_read_off_description" style="white-space: nowrap;<?php echo $sStyleReadInp_description; ?>">
 <input class="sc-js-input scFormObjectOdd css_description_obj" style="" id="id_sc_field_description" type=text name="description" value="<?php echo $this->form_encode_input($description) ?>"
 size=50 maxlength=128 alt="{datatype: 'text', maxLength: 128, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_description_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_description_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_description_dumb = ('' == $sStyleHidden_description) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_description_dumb" style="<?php echo $sStyleHidden_description_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['start_date']))
    {
        $this->nm_new_label['start_date'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_start_date'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $start_date = $this->start_date;
   $sStyleHidden_start_date = '';
   if (isset($this->nmgp_cmp_hidden['start_date']) && $this->nmgp_cmp_hidden['start_date'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['start_date']);
       $sStyleHidden_start_date = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_start_date = 'display: none;';
   $sStyleReadInp_start_date = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['start_date']) && $this->nmgp_cmp_readonly['start_date'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['start_date']);
       $sStyleReadLab_start_date = '';
       $sStyleReadInp_start_date = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['start_date']) && $this->nmgp_cmp_hidden['start_date'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="start_date" value="<?php echo $this->form_encode_input($start_date) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_start_date_line" id="hidden_field_data_start_date" style="<?php echo $sStyleHidden_start_date; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_start_date_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_start_date_label" style=""><span id="id_label_start_date"><?php echo $this->nm_new_label['start_date']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['php_cmp_required']['start_date']) || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['php_cmp_required']['start_date'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["start_date"]) &&  $this->nmgp_cmp_readonly["start_date"] == "on") { 

 ?>
<input type="hidden" name="start_date" value="<?php echo $this->form_encode_input($start_date) . "\">" . $start_date . ""; ?>
<?php } else { ?>
<span id="id_read_on_start_date" class="sc-ui-readonly-start_date css_start_date_line" style="<?php echo $sStyleReadLab_start_date; ?>"><?php echo $this->form_format_readonly("start_date", $this->form_encode_input($start_date)); ?></span><span id="id_read_off_start_date" class="css_read_off_start_date" style="white-space: nowrap;<?php echo $sStyleReadInp_start_date; ?>"><?php
$tmp_form_data = $this->field_config['start_date']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_start_date_obj" style="" id="id_sc_field_start_date" type=text name="start_date" value="<?php echo $this->form_encode_input($start_date) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['start_date']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['start_date']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '<?php echo $tmp_form_data; ?>', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_start_date_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_start_date_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['end_date']))
    {
        $this->nm_new_label['end_date'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_end_date'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $end_date = $this->end_date;
   $sStyleHidden_end_date = '';
   if (isset($this->nmgp_cmp_hidden['end_date']) && $this->nmgp_cmp_hidden['end_date'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['end_date']);
       $sStyleHidden_end_date = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_end_date = 'display: none;';
   $sStyleReadInp_end_date = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['end_date']) && $this->nmgp_cmp_readonly['end_date'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['end_date']);
       $sStyleReadLab_end_date = '';
       $sStyleReadInp_end_date = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['end_date']) && $this->nmgp_cmp_hidden['end_date'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="end_date" value="<?php echo $this->form_encode_input($end_date) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_end_date_line" id="hidden_field_data_end_date" style="<?php echo $sStyleHidden_end_date; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_end_date_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_end_date_label" style=""><span id="id_label_end_date"><?php echo $this->nm_new_label['end_date']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["end_date"]) &&  $this->nmgp_cmp_readonly["end_date"] == "on") { 

 ?>
<input type="hidden" name="end_date" value="<?php echo $this->form_encode_input($end_date) . "\">" . $end_date . ""; ?>
<?php } else { ?>
<span id="id_read_on_end_date" class="sc-ui-readonly-end_date css_end_date_line" style="<?php echo $sStyleReadLab_end_date; ?>"><?php echo $this->form_format_readonly("end_date", $this->form_encode_input($end_date)); ?></span><span id="id_read_off_end_date" class="css_read_off_end_date" style="white-space: nowrap;<?php echo $sStyleReadInp_end_date; ?>"><?php
$tmp_form_data = $this->field_config['end_date']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_end_date_obj" style="" id="id_sc_field_end_date" type=text name="end_date" value="<?php echo $this->form_encode_input($end_date) ?>"
 size=10 alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['end_date']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['end_date']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '<?php echo $tmp_form_data; ?>', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_end_date_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_end_date_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['start_time']))
    {
        $this->nm_new_label['start_time'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_start_time'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $start_time = $this->start_time;
   $sStyleHidden_start_time = '';
   if (isset($this->nmgp_cmp_hidden['start_time']) && $this->nmgp_cmp_hidden['start_time'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['start_time']);
       $sStyleHidden_start_time = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_start_time = 'display: none;';
   $sStyleReadInp_start_time = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['start_time']) && $this->nmgp_cmp_readonly['start_time'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['start_time']);
       $sStyleReadLab_start_time = '';
       $sStyleReadInp_start_time = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['start_time']) && $this->nmgp_cmp_hidden['start_time'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="start_time" value="<?php echo $this->form_encode_input($start_time) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_start_time_line" id="hidden_field_data_start_time" style="<?php echo $sStyleHidden_start_time; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_start_time_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_start_time_label" style=""><span id="id_label_start_time"><?php echo $this->nm_new_label['start_time']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["start_time"]) &&  $this->nmgp_cmp_readonly["start_time"] == "on") { 

 ?>
<input type="hidden" name="start_time" value="<?php echo $this->form_encode_input($start_time) . "\">" . $start_time . ""; ?>
<?php } else { ?>
<span id="id_read_on_start_time" class="sc-ui-readonly-start_time css_start_time_line" style="<?php echo $sStyleReadLab_start_time; ?>"><?php echo $this->form_format_readonly("start_time", $this->form_encode_input($start_time)); ?></span><span id="id_read_off_start_time" class="css_read_off_start_time" style="white-space: nowrap;<?php echo $sStyleReadInp_start_time; ?>"><?php
$tmp_form_data = $this->field_config['start_time']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

 <input class="sc-js-input scFormObjectOdd css_start_time_obj" style="" id="id_sc_field_start_time" type=text name="start_time" value="<?php echo $this->form_encode_input($start_time) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['start_time']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['start_time']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '<?php echo $tmp_form_data; ?>', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_start_time_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_start_time_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['end_time']))
    {
        $this->nm_new_label['end_time'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_end_time'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $end_time = $this->end_time;
   $sStyleHidden_end_time = '';
   if (isset($this->nmgp_cmp_hidden['end_time']) && $this->nmgp_cmp_hidden['end_time'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['end_time']);
       $sStyleHidden_end_time = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_end_time = 'display: none;';
   $sStyleReadInp_end_time = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['end_time']) && $this->nmgp_cmp_readonly['end_time'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['end_time']);
       $sStyleReadLab_end_time = '';
       $sStyleReadInp_end_time = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['end_time']) && $this->nmgp_cmp_hidden['end_time'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="end_time" value="<?php echo $this->form_encode_input($end_time) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_end_time_line" id="hidden_field_data_end_time" style="<?php echo $sStyleHidden_end_time; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_end_time_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_end_time_label" style=""><span id="id_label_end_time"><?php echo $this->nm_new_label['end_time']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["end_time"]) &&  $this->nmgp_cmp_readonly["end_time"] == "on") { 

 ?>
<input type="hidden" name="end_time" value="<?php echo $this->form_encode_input($end_time) . "\">" . $end_time . ""; ?>
<?php } else { ?>
<span id="id_read_on_end_time" class="sc-ui-readonly-end_time css_end_time_line" style="<?php echo $sStyleReadLab_end_time; ?>"><?php echo $this->form_format_readonly("end_time", $this->form_encode_input($end_time)); ?></span><span id="id_read_off_end_time" class="css_read_off_end_time" style="white-space: nowrap;<?php echo $sStyleReadInp_end_time; ?>"><?php
$tmp_form_data = $this->field_config['end_time']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

 <input class="sc-js-input scFormObjectOdd css_end_time_obj" style="" id="id_sc_field_end_time" type=text name="end_time" value="<?php echo $this->form_encode_input($end_time) ?>"
 size=8 alt="{datatype: 'time', timeSep: '<?php echo $this->field_config['end_time']['time_sep']; ?>', timeFormat: '<?php echo $this->field_config['end_time']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '<?php echo $tmp_form_data; ?>', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_end_time_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_end_time_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['__calend_all_day__']))
   {
       $this->nm_new_label['__calend_all_day__'] = "" . $this->Ini->Nm_lang['lang_per_allday'] . "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $__calend_all_day__ = $this->__calend_all_day__;
   $sStyleHidden___calend_all_day__ = '';
   if (isset($this->nmgp_cmp_hidden['__calend_all_day__']) && $this->nmgp_cmp_hidden['__calend_all_day__'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['__calend_all_day__']);
       $sStyleHidden___calend_all_day__ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab___calend_all_day__ = 'display: none;';
   $sStyleReadInp___calend_all_day__ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['__calend_all_day__']) && $this->nmgp_cmp_readonly['__calend_all_day__'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['__calend_all_day__']);
       $sStyleReadLab___calend_all_day__ = '';
       $sStyleReadInp___calend_all_day__ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['__calend_all_day__']) && $this->nmgp_cmp_hidden['__calend_all_day__'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="__calend_all_day__" value="<?php echo $this->form_encode_input($this->__calend_all_day__) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->__calend_all_day___1 = explode(";", trim($this->__calend_all_day__));
  } 
  else
  {
      if (empty($this->__calend_all_day__))
      {
          $this->__calend_all_day___1= array(); 
          $this->__calend_all_day__= "";
      } 
      else
      {
          $this->__calend_all_day___1= $this->__calend_all_day__; 
          $this->__calend_all_day__= ""; 
          foreach ($this->__calend_all_day___1 as $cada___calend_all_day__)
          {
             if (!empty($__calend_all_day__))
             {
                 $this->__calend_all_day__.= ";"; 
             } 
             $this->__calend_all_day__.= $cada___calend_all_day__; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css___calend_all_day___line" id="hidden_field_data___calend_all_day__" style="<?php echo $sStyleHidden___calend_all_day__; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css___calend_all_day___line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css___calend_all_day___label" style=""><span id="id_label___calend_all_day__"><?php echo $this->nm_new_label['__calend_all_day__']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["__calend_all_day__"]) &&  $this->nmgp_cmp_readonly["__calend_all_day__"] == "on") { 

$__calend_all_day___look = "";
 if ($this->__calend_all_day__ == "Y") { $__calend_all_day___look .= "" . $this->Ini->Nm_lang['lang_per_allday'] . "" ;} 
 if (empty($__calend_all_day___look)) { $__calend_all_day___look = $this->__calend_all_day__; }
?>
<input type="hidden" name="__calend_all_day__" value="<?php echo $this->form_encode_input($__calend_all_day__) . "\">" . $__calend_all_day___look . ""; ?>
<?php } else { ?>

<?php

$__calend_all_day___look = "";
 if ($this->__calend_all_day__ == "Y") { $__calend_all_day___look .= "" . $this->Ini->Nm_lang['lang_per_allday'] . "" ;} 
 if (empty($__calend_all_day___look)) { $__calend_all_day___look = $this->__calend_all_day__; }
?>
<span id="id_read_on___calend_all_day__" class="css___calend_all_day___line" style="<?php echo $sStyleReadLab___calend_all_day__; ?>"><?php echo $this->form_format_readonly("__calend_all_day__", $this->form_encode_input($__calend_all_day___look)); ?></span><span id="id_read_off___calend_all_day__" class="css_read_off___calend_all_day__ css___calend_all_day___line" style="<?php echo $sStyleReadInp___calend_all_day__; ?>"><?php echo "<div id=\"idAjaxCheckbox___calend_all_day__\" style=\"display: inline-block\" class=\"css___calend_all_day___line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css___calend_all_day___line"><?php $tempOptionId = "id-opt-__calend_all_day__" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-__calend_all_day__ sc-ui-checkbox-__calend_all_day__" name="__calend_all_day__[]" value="Y"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['Lookup___calend_all_day__'][] = 'Y'; ?>
<?php  if (in_array("Y", $this->__calend_all_day___1))  { echo " checked" ;} ?> onClick="sc___calend_all_day___onclick()"><label for="<?php echo $tempOptionId ?>"><?php echo $this->Ini->Nm_lang['lang_per_allday']; ?></label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display___calend_all_day___frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display___calend_all_day___text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden___calend_all_day___dumb = ('' == $sStyleHidden___calend_all_day__) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data___calend_all_day___dumb" style="<?php echo $sStyleHidden___calend_all_day___dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['period']))
   {
       $this->nm_new_label['period'] = "" . $this->Ini->Nm_lang['lang_calendar_fld_period'] . "";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $period = $this->period;
   $sStyleHidden_period = '';
   if (isset($this->nmgp_cmp_hidden['period']) && $this->nmgp_cmp_hidden['period'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['period']);
       $sStyleHidden_period = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_period = 'display: none;';
   $sStyleReadInp_period = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['period']) && $this->nmgp_cmp_readonly['period'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['period']);
       $sStyleReadLab_period = '';
       $sStyleReadInp_period = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['period']) && $this->nmgp_cmp_hidden['period'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="period" value="<?php echo $this->form_encode_input($this->period) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_period_line" id="hidden_field_data_period" style="<?php echo $sStyleHidden_period; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_period_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_period_label" style=""><span id="id_label_period"><?php echo $this->nm_new_label['period']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["period"]) &&  $this->nmgp_cmp_readonly["period"] == "on") { 

$period_look = "";
 if ($this->period == "D") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_daily'] . "" ;} 
 if ($this->period == "W") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_weekly'] . "" ;} 
 if ($this->period == "M") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_monthly'] . "" ;} 
 if ($this->period == "A") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_annual'] . "" ;} 
 if (empty($period_look)) { $period_look = $this->period; }
?>
<input type="hidden" name="period" value="<?php echo $this->form_encode_input($period) . "\">" . $period_look . ""; ?>
<?php } else { ?>
<?php

$period_look = "";
 if ($this->period == "D") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_daily'] . "" ;} 
 if ($this->period == "W") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_weekly'] . "" ;} 
 if ($this->period == "M") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_monthly'] . "" ;} 
 if ($this->period == "A") { $period_look .= "" . $this->Ini->Nm_lang['lang_recu_annual'] . "" ;} 
 if (empty($period_look)) { $period_look = $this->period; }
?>
<span id="id_read_on_period" class="css_period_line"  style="<?php echo $sStyleReadLab_period; ?>"><?php echo $this->form_format_readonly("period", $this->form_encode_input($period_look)); ?></span><span id="id_read_off_period" class="css_read_off_period" style="white-space: nowrap; <?php echo $sStyleReadInp_period; ?>">
 <span id="idAjaxSelect_period"><select class="sc-js-input scFormObjectOdd css_period_obj" style="" id="id_sc_field_period" name="period" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="D" <?php  if ($this->period == "D") { echo " selected" ;} ?><?php  if (empty($this->period)) { echo " selected" ;} ?>><?php echo $this->Ini->Nm_lang['lang_recu_daily']; ?></option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['Lookup_period'][] = 'D'; ?>
 <option  value="W" <?php  if ($this->period == "W") { echo " selected" ;} ?>><?php echo $this->Ini->Nm_lang['lang_recu_weekly']; ?></option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['Lookup_period'][] = 'W'; ?>
 <option  value="M" <?php  if ($this->period == "M") { echo " selected" ;} ?>><?php echo $this->Ini->Nm_lang['lang_recu_monthly']; ?></option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['Lookup_period'][] = 'M'; ?>
 <option  value="A" <?php  if ($this->period == "A") { echo " selected" ;} ?>><?php echo $this->Ini->Nm_lang['lang_recu_annual']; ?></option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['Lookup_period'][] = 'A'; ?>
 </select></span>
</span><?php  }?>
</td><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none; position: absolute" id="id_error_display_period_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_period_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-9", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-10", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-11", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-12", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
       <?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if ($NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_2";
        echo "<img id=\"NM_sep_2\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-14", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-15", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-16", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("calendar_events_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("calendar_events_mob");
 parent.scAjaxDetailHeight("calendar_events_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("calendar_events_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("calendar_events_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_b.sc-unique-btn-1").length && $("#sc_b_new_b.sc-unique-btn-1").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_b.sc-unique-btn-2").length && $("#sc_b_ins_b.sc-unique-btn-2").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_b.sc-unique-btn-9").length && $("#sc_b_new_b.sc-unique-btn-9").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_b.sc-unique-btn-10").length && $("#sc_b_ins_b.sc-unique-btn-10").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_b.sc-unique-btn-3").length && $("#sc_b_upd_b.sc-unique-btn-3").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-11").length && $("#sc_b_upd_b.sc-unique-btn-11").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_b.sc-unique-btn-4").length && $("#sc_b_del_b.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
		if ($("#sc_b_del_b.sc-unique-btn-12").length && $("#sc_b_del_b.sc-unique-btn-12").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-5").length && $("#sys_separator.sc-unique-btn-5").is(":visible")) {
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-13").length && $("#sys_separator.sc-unique-btn-13").is(":visible")) {
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_b").length && $("#sc_b_hlp_b").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_b.sc-unique-btn-6").length && $("#sc_b_sai_b.sc-unique-btn-6").is(":visible")) {
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-7").length && $("#sc_b_sai_b.sc-unique-btn-7").is(":visible")) {
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-8").length && $("#sc_b_sai_b.sc-unique-btn-8").is(":visible")) {
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-14").length && $("#sc_b_sai_b.sc-unique-btn-14").is(":visible")) {
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-15").length && $("#sc_b_sai_b.sc-unique-btn-15").is(":visible")) {
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-16").length && $("#sc_b_sai_b.sc-unique-btn-16").is(":visible")) {
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['calendar_events_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
