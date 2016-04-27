<?php if($IE6Warning == 1){?>
<!--[if lte IE 6]>
<script src="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/vtemtools/warning.js"></script>
<script>window.onload=function(){e("<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/vtemtools/ie6_warning/")}</script>
<![endif]-->
<?php 
}
if($webfont == 1){
echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$bodyfont1.$fontsep1.$logofont1.$fontsep2.$sloganfont1.$fontsep3.$menufont1.$fontsep4.$moduletitlefont1.$fontsep5.$pageheadingfont1.$fontsep6.$contenttitlefont1.'">';
}
if($copyright == 1){
$vtcopyright = '<div style="text-align:center;padding:5px;"><a href="http://vtem.net" target="_blank"><img class="vtem_copyright_logo" src="'.$template_baseurl.'/vtemtools/widgets/radios/images/vtem-logo.png"/></a></div>';
}
$vtemmainwidth = 980;
?>
<style type="text/css">
<?php if($customstyle == 1){
echo '#vt_header{background-color:'.$headerbackground.' !important;}
#vt_bottom{background-color:'.$bottombackground.' !important;}
#vt_footer{background-color:'.$footerbackground.' !important;}
body#vtem{background-color:'.$mainbackground.';font-size:'.$fontsize.' !important;}
#vtem a,#vtem a:link,#vtem a:visited{color:'.$LinkColor.' !important;}';}?>
<?php echo $showbodyfont;?>
<?php echo $showlogofont;?>
<?php echo $showsloganfont;?>
<?php echo $showmenufont;?>
<?php echo $showmoduletitlefont;?>
<?php echo $showpageheadingfont;?>
<?php echo $showcontenttitlefont;?>
div.vt_container{
width:<?php echo $vtemmainwidth;?>px;
margin:0 auto;
display:block;
}
.width100{width:<?php echo $vtemmainwidth;?>px;}
.width50{width:<?php echo $vtemmainwidth/2;?>px;}
.width33{width:<?php echo $vtemmainwidth/3;?>px;}
.width25{width:<?php echo $vtemmainwidth/4;?>px;}
.width20{width:<?php echo $vtemmainwidth/5;?>px;}
.width15{width:<?php echo $vtemmainwidth/6;?>px;}
.floatleft{float:left;}
.floatright{float:right;}
.none{display:none !important; visibility:hidden !important;}
.navleft,.navright{width:210px;}
.navleft1,.navright1{width:310px;}
.contentwidth{width:530px !important;}
.contentwidth1{width:640px !important;} 
.widthinset100{width:100%;}
.widthinset50{width:50%;}
</style>
