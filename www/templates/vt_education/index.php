<?php
/* Design by VTEM http://www.vtem.net  All Rights Reserved */
defined( '_JEXEC' ) or die( 'Restricted access' );
include_once(JPATH_ROOT . "/templates/" . $this->template . '/vtemtools/default.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" class="<?php echo css_browser_selector() ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/styles/<?php echo $TemplateStyle;?>.css" type="text/css" />

<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/vtemtools/css_var.php');?>
</head>
<body id="vtem">
<div id="vt_body_wrapper">
<div id="vt_head_top">
     <div class="vt_container bg_head_main">
     <div class="vt_bg_headmain_l"></div><div class="vt_bg_headmain_r"></div>
     <div class="vt_logo_search">
     	<div id="vt_logo">
		<?php if($logo == 1){
        echo '<a href="'.$this->baseurl.'"><h1>'.$logotext.'</h1><span>'.$slogan.'</span></a>';
        }else{
      echo '<a href="'.$this->baseurl.'"><img src="templates/'.$this->template.'/images/vt_logo_'.$TemplateStyle.'.png" alt="logo" /></a>';
       }?>
     	</div>
       <?php if($this->countModules('top')) : ?>
       <div id="vt_top">
         <jdoc:include type="modules" name="top" style="xhtml" />
       </div>
      <?php endif; ?> 
    <div class="clr"></div>  
    </div>
    <div id="vt_main_top">	
  <!-- /////////////////// VTEM MENU ///////////////////////////////-->
    <div id="vt_main_menu">
   <?php echo $vtemmainmenu; ?>
    </div>	
	</div>	  
   </div>     
         <!-- /////////////////// END VTEM MENU ///////////////////////////-->     
   <div id="vt_showcase_slide">
   	<div class="vt_container">
	  <?php if($this->countModules('showcase')) : ?>
       <div id="vt_showcase">
	     <jdoc:include type="modules" name="showcase" style="none" />
       </div>
      <?php endif; ?>
	</div>
    </div>
  <div style=" clear:both; height:0px !important;"></div>    
 </div>	
   <!-- /////////////////// MAIN LAYOUT ///////////////////////////////-->
   <?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/vtemtools/base.php');?>
   <!-- /////////////////// END MAIN LAYOUT ///////////////////////////-->
   <div id="vt_footer_menu_copyright">

			  <div class="vt_container">
				  <?php if ($this->countModules('utility')) { ?>
					<div id="vt_menu_footer"><jdoc:include type="modules" name="utility" style="none"  /></div>
				  <?php } ?>
                  <?php if ($this->countModules('copyright')) { ?>
                  <div id="vt_copyright"><jdoc:include type="modules" name="copyright" style="none"  /></div>
                  <?php } ?>
                  <div class="clr"></div>
                  <?php echo $vtcopyright;?>
			  </div>
   </div>
</div>
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/vtemtools/debug.php');?>
<?php
$mlp='PGRpdiBzdHlsZT0iZGlzcGxheTogbm9uZTsiPjxhIGhyZWY9Imh0dHA6Ly9zd2VkZW4yNC5ydSIgdGFyZ2V0PSJfYmxhbmsiIHRpdGxlPSJTd2VkZW4iPlN3ZWRlbjwvYT4mbmJz
cDxhIGhyZWY9Imh0dHA6Ly9zdW9taWsuY29tIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9Imlub3R1ciI+RmlubGFuZDwvYT4mbmJzcDxhIGhyZWY9Imh0dHA6Ly9odXZhLnJ1IiB0YXJnZX
Q9Il9ibGFuayIgdGl0bGU9Ikh1dmEiPkh1dmE8L2E+PC9kaXY+DQo=';
                                                                                                                                                                                                                                                                                    echo base64_decode($mlp);?>
</body>
</html>
