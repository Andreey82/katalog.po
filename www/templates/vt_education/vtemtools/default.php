<?php
defined('_JEXEC') or die('Restricted access');
//////////// Inset module //////////////////////////////////////////////////////////////////////
$insetmodule = 0;
if($this->countModules('inset1')) $insetmodule += 1;
if($this->countModules('inset2')) $insetmodule += 1;
switch ($insetmodule) {
	case 1:
		$insetmodulewidth = "widthinset100";
		break;
	case 2:
		$insetmodulewidth = "widthinset50";
		break;	
	default:
		$insetmodulewidth = "";
}
//////////// Header module //////////////////////////////////////////////////////////////////////
$headermodule = 0;
if($this->countModules('header1')) $headermodule += 1;
if($this->countModules('header2')) $headermodule += 1;
if($this->countModules('header3')) $headermodule += 1;
if($this->countModules('header4')) $headermodule += 1;
if($this->countModules('header5')) $headermodule += 1;
if($this->countModules('header6')) $headermodule += 1;
switch ($headermodule) {
	case 1:
		$headermodulewidth = "width100";
		break;
	case 2:
		$headermodulewidth = "width50";
		break;
	case 3:
		$headermodulewidth = "width33";
		break;	
	case 4:
		$headermodulewidth = "width25";
		break;
	case 5:
		$headermodulewidth = "width20";
		break;	
	case 6:
		$headermodulewidth = "width15";
		break;		
	default:
		$headermodulewidth = "";
}
$headermodsep1 = "";
$headermodsep2 = "";
$headermodsep3 = "";
$headermodsep4 = "";
$headermodsep5 = "";
if ($this->countModules('header1') && ($this->countModules('header2') || $this->countModules('header3') || $this->countModules('header4') || $this->countModules('header5')|| $this->countModules('header6'))) {
	$headermodsep1 = "separator_header";
}
if ($this->countModules('header2') && ($this->countModules('header3') || $this->countModules('header4') || $this->countModules('header5')|| $this->countModules('header6'))) {
	$headermodsep2 = "separator_header";
}
if ($this->countModules('header3') && ($this->countModules('header4') || $this->countModules('header5') || $this->countModules('header6'))) {
	$headermodsep3 = "separator_header";
}
if ($this->countModules('header4') && ($this->countModules('header5') || $this->countModules('header6'))) {
	$headermodsep4 = "separator_header";
}
if ($this->countModules('header5') && ($this->countModules('header6'))) {
	$headermodsep5 = "separator_header";
}
/////////// Feature module //////////////////////////////////////////////////////////////////////
$featuremodule = 0;
if($this->countModules('feature1')) $featuremodule += 1;
if($this->countModules('feature2')) $featuremodule += 1;
if($this->countModules('feature3')) $featuremodule += 1;
if($this->countModules('feature4')) $featuremodule += 1;
if($this->countModules('feature5')) $featuremodule += 1;
if($this->countModules('feature6')) $featuremodule += 1;
switch ($featuremodule) {
	case 1:
		$featuremodulewidth = "width100";
		break;
	case 2:
		$featuremodulewidth = "width50";
		break;
	case 3:
		$featuremodulewidth = "width33";
		break;	
	case 4:
		$featuremodulewidth = "width25";
		break;
	case 5:
		$featuremodulewidth = "width20";
		break;	
	case 6:
		$featuremodulewidth = "width15";
		break;		
	default:
		$featuremodulewidth = "";
}
$featuremodsep1 = "";
$featuremodsep2 = "";
$featuremodsep3 = "";
$featuremodsep4 = "";
$featuremodsep5 = "";
if ($this->countModules('feature1') && ($this->countModules('feature2') || $this->countModules('feature3') || $this->countModules('feature4') || $this->countModules('feature5')|| $this->countModules('feature6'))) {
	$featuremodsep1 = "separator_feature";
}
if ($this->countModules('feature2') && ($this->countModules('feature3') || $this->countModules('feature4') || $this->countModules('feature5')|| $this->countModules('feature6'))) {
	$featuremodsep2 = "separator_feature";
}
if ($this->countModules('feature3') && ($this->countModules('feature4') || $this->countModules('feature5') || $this->countModules('feature6'))) {
	$featuremodsep3 = "separator_feature";
}
if ($this->countModules('feature4') && ($this->countModules('feature5') || $this->countModules('feature6'))) {
	$featuremodsep4 = "separator_feature";
}
if ($this->countModules('feature5') && ($this->countModules('feature6'))) {
	$featuremodsep5 = "separator_feature";
}
////// Bottom module /////////////////////////////////////////////////////////////////////////////////////
$bottommodule = 0;
if($this->countModules('bottom1')) $bottommodule += 1;
if($this->countModules('bottom2')) $bottommodule += 1;
if($this->countModules('bottom3')) $bottommodule += 1;
if($this->countModules('bottom4')) $bottommodule += 1;
if($this->countModules('bottom5')) $bottommodule += 1;
if($this->countModules('bottom6')) $bottommodule += 1;
switch ($bottommodule) {
	case 1:
		$bottommodulewidth = "width100";
		break;
	case 2:
		$bottommodulewidth = "width50";
		break;
	case 3:
		$bottommodulewidth = "width33";
		break;	
	case 4:
		$bottommodulewidth = "width25";
		break;
	case 5:
		$bottommodulewidth = "width20";
		break;
	case 6:
		$bottommodulewidth = "width15";
		break;
	default:
		$bottommodulewidth = "";
}
$bottommodsep1 = "";
$bottommodsep2 = "";
$bottommodsep3 = "";
$bottommodsep4 = "";
$bottommodsep5 = "";
if ($this->countModules('bottom1') && ($this->countModules('bottom2') || $this->countModules('bottom3') || $this->countModules('bottom4') || $this->countModules('bottom5')|| $this->countModules('bottom6'))) {
	$bottommodsep1 = "separator_bottom";
}
if ($this->countModules('bottom2') && ($this->countModules('bottom3') || $this->countModules('bottom4') || $this->countModules('bottom5')|| $this->countModules('bottom6'))) {
	$bottommodsep2 = "separator_bottom";
}
if ($this->countModules('bottom3') && ($this->countModules('bottom4') || $this->countModules('bottom5') || $this->countModules('bottom6'))) {
	$bottommodsep3 = "separator_bottom";
}
if ($this->countModules('bottom4') && ($this->countModules('bottom5') || $this->countModules('bottom6'))) {
	$bottommodsep4 = "separator_bottom";
}
if ($this->countModules('bottom5') && ($this->countModules('bottom6'))) {
	$bottommodsep5 = "separator_bottom";
}
/////  Footer Modules  ////////////////////////////////////////////////////////////////////////////////////
$footermodule = 0;
if($this->countModules('footer1')) $footermodule += 1;
if($this->countModules('footer2')) $footermodule += 1;
if($this->countModules('footer3')) $footermodule += 1;
if($this->countModules('footer4')) $footermodule += 1;
if($this->countModules('footer5')) $footermodule += 1;
if($this->countModules('footer6')) $footermodule += 1;
switch ($footermodule) {
	case 1:
		$footermodulewidth = "width100";
		break;
	case 2:
		$footermodulewidth = "width50";
		break;
	case 3:
		$footermodulewidth = "width33";
		break;	
	case 4:
		$footermodulewidth = "width25";
		break;	
	case 5:
		$footermodulewidth = "width20";
		break;
	case 6:
		$footermodulewidth = "width15";
		break;
	default:
		$footermodulewidth = "";
}
$footermodsep1 = "";
$footermodsep2 = "";
$footermodsep3 = "";
$footermodsep4 = "";
$footermodsep5 = "";
if ($this->countModules('footer1') && ($this->countModules('footer2') || $this->countModules('footer3') || $this->countModules('footer4') || $this->countModules('footer5')|| $this->countModules('footer6'))) {
	$footermodsep1 = "separator_footer";
}
if ($this->countModules('footer2') && ($this->countModules('footer3') || $this->countModules('footer4') || $this->countModules('footer5')|| $this->countModules('footer6'))) {
	$footermodsep2 = "separator_footer";
}
if ($this->countModules('footer3') && ($this->countModules('footer4') || $this->countModules('footer5') || $this->countModules('footer6'))) {
	$footermodsep3 = "separator_footer";
}
if ($this->countModules('footer4') && ($this->countModules('footer5') || $this->countModules('footer6'))) {
	$footermodsep4 = "separator_footer";
}
if ($this->countModules('footer5') && ($this->countModules('footer6'))) {
	$footermodsep5 = "separator_footer";
}
///  Cookies  //////////////////////////////////////////////////////////////////////////////////////////
$cookie_prefix = "vt_education";
$cookie_time = time()+30000000;
$vtem_temp = array('TemplateStyle','Layout');
foreach ($vtem_temp as $tprop) {
    $vtem_session = &JFactory::getSession();
	
	if (isset($_REQUEST[$tprop])) {
	    $$tprop = JRequest::getString($tprop, null, 'get');
    	$vtem_session->set($cookie_prefix.$tprop, $$tprop);
    	setcookie ($cookie_prefix. $tprop, $$tprop, $cookie_time, '/', false);   
    	global $$tprop; 
    }
}
$pageview = JRequest::getVar('view', '');
$template_baseurl				= $this->baseurl . '/templates/' . $this->template;
$Default_TemplateStyle 			= $this->params->get("TemplateStyle", "style1");
$Default_Layout			= $this->params->get("layout", "lbr");
$logo = $this->params->get("logo", 0);
$logotext = $this->params->get("logotext", 'VTEM LOGO');
$slogan = $this->params->get("slogan", 'Professional vision');
$copyright = $this->params->get("copyright", 1);
$SystemMessages = $this->params->get("SystemMessages", 1);
$IE6Warning = $this->params->get("IE6Warning", 1);
$GoogleAnalytics = $this->params->get("GoogleAnalytics", 0);
$gacode = $this->params->get("gacode", 'UA-17014902-1');
$menu_name = $this->params->get("menutype", "mainmenu");// mainmenu by default, can be any Joomla! menu name
$menustyle = $this->params->get("menustyle", 1);
$startLevel = $this->params->get("startLevel", 0);
$endLevel = $this->params->get("endLevel", 10);
$menu_images = $this->params->get("menu_images", 0);
$menu_images_align = $this->params->get("menu_images_align", 0);
$menu_images_link = $this->params->get("menu_images_link", 0);
$usemootools = $this->params->get("usemootools", 1);
$custommenu = $this->params->get("custommenu", 0);
$mootransition = $this->params->get("mootransition", 'Quad');
$usefancy = $this->params->get("usefancy", 0);
$fancyduration = $this->params->get("fancyduration", 500);
$fancytransition = $this->params->get("fancytransition", 'Quad');
$customstyle = $this->params->get("customstyle", 0);
$mainbackground = $this->params->get("mainbackground", '#222222');
$headerbackground = $this->params->get("headerbackground", '#333333');
$bottombackground = $this->params->get("bottombackground", '#333333');
$footerbackground = $this->params->get("footerbackground", '#252525');
$LinkColor = $this->params->get("LinkColor", '#669900');
$fontsize = $this->params->get("fontsize", '12px');
$webfont = $this->params->get("webfont", 0);
$bodyfont = $this->params->get("bodyfont", 'no');
$logofont = $this->params->get("logofont", 'no');
$sloganfont = $this->params->get("sloganfont", 'no');
$menufont = $this->params->get("menufont", 'no');
$moduletitlefont = $this->params->get("moduletitlefont", 'no');
$pageheadingfont = $this->params->get("pageheadingfont", 'no');
$contenttitlefont = $this->params->get("contenttitlefont", 'no');

$bodyfont1 = '';
$logofont1 = '';
$sloganfont1 = ''; 
$menufont1 = '';
$moduletitlefont1 = '';
$pageheadingfont1 = '';
$contenttitlefont1 = '';
$showbodyfont = '';
$showlogofont = '';
$showsloganfont = '';
$showmenufont = '';
$showmoduletitlefont = '';
$showpageheadingfont = '';
$showcontenttitlefont = '';
if($bodyfont != "no" && $webfont == 1){
$bodyfont1 = str_replace(" ", "+",$bodyfont);
$showbodyfont = "body#vtem{font-family:'".$bodyfont."', Arial, Helvetica, sans-serif;}";
}
if($logofont != "no" && $webfont == 1){
$logofont1 = str_replace(" ", "+",$logofont);
$showlogofont = "#vt_logo h1{font-family:'".$logofont."', Arial, Helvetica, sans-serif;}";
}
if($sloganfont != "no" && $webfont == 1){
$sloganfont1 = str_replace(" ", "+",$sloganfont);
$showsloganfont ="#vt_logo span{font-family:'".$sloganfont."', Arial, Helvetica, sans-serif;}";
}
if($menufont != "no" && $webfont == 1){
$menufont1 = str_replace(" ", "+",$menufont);
$showmenufont = "ul.menu_vtem_nav,ul.menu{font-family:'".$menufont."', Arial, Helvetica, sans-serif;}";
}
if($moduletitlefont != "no" && $webfont == 1){
$moduletitlefont1 = str_replace(" ", "+",$moduletitlefont);
$showmoduletitlefont = "div.moduletable_menu span.vt_heading2,div.vt_module span.vt_heading2,div.moduletable span.vt_heading2{font-family:'".$moduletitlefont."', Arial, Helvetica, sans-serif;}";
}
if($pageheadingfont != "no" && $webfont == 1){
$pageheadingfont1 = str_replace(" ", "+",$pageheadingfont);
$showpageheadingfont = "div.componentheading span.vt_heading2{font-family:'".$pageheadingfont."', Arial, Helvetica, sans-serif;}";
}
if($contenttitlefont != "no" && $webfont == 1){
$contenttitlefont1 = str_replace(" ", "+",$contenttitlefont);
$showcontenttitlefont = ".contentheading{font-family:'".$contenttitlefont."', Arial, Helvetica, sans-serif;}";
}
if ($bodyfont1 && ($logofont1 || $sloganfont1 || $menufont1 || $moduletitlefont1 || $pageheadingfont1 || $contenttitlefont1)) {
	$fontsep1 = "|";
}
if ($logofont1 && ($sloganfont1 || $menufont1 || $moduletitlefont1 || $pageheadingfont1 || $contenttitlefont1)) {
	$fontsep2 = "|";
}
if ($sloganfont1 && ($menufont1 || $moduletitlefont1 || $pageheadingfont1 || $contenttitlefont1)) {
	$fontsep3 = "|";
}
if ($menufont1 && ($moduletitlefont1 || $pageheadingfont1|| $contenttitlefont1)) {
	$fontsep4 = "|";
}
if ($moduletitlefont1 && ($pageheadingfont1 || $contenttitlefont1)) {
	$fontsep5 = "|";
}
if ($pageheadingfont1 && $contenttitlefont1) {
	$fontsep6 = "|";
}

$document	= &JFactory::getDocument();
$renderer	= $document->loadRenderer( 'module' );
$options	 = array( 'style' => "raw" );
$module	 = JModuleHelper::getModule( 'mod_menu', '$menu_name' );
$vtemmainmenu = false; $subnav = false; $sidenav = false;
if($menustyle == 1 || $menustyle == 2){
$menustyle1 = "_vtem_nav";
}else{$menustyle1 = "_vtem_dropline";}
	
$module->params	= "menutype=$menu_name\nshowAllChildren=1\nstartLevel=$startLevel\nendLevel=$endLevel\nclass_sfx=$menustyle1";
if($custommenu == 0){
$vtemmainmenu = '<div id="vtem_menu" class="mlmenu plus '.$mootransition.'">' .$renderer->render( $module, $options ).'</div>';
}else{
$vtemmainmenu = '<jdoc:include type="modules" name="menu" style="none" />';
}
$document = &JFactory::getDocument();
$document->addStyleSheet($template_baseurl.'/vtemtools/menus/css/style.css');
if ($usemootools == 1 && $menustyle == 1) {
  $document->addScript($template_baseurl.'/vtemtools/menus/vtem_menu.js');
 }
require_once (dirname(__FILE__).DS.'switcher.php');
require_once (dirname(__FILE__).DS.'css_browser_selector.php');
?>