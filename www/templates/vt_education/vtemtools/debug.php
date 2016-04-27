<script type="text/javascript">
var Equalizer = new Class({
initialize: function(elements) {
this.elements = $$(elements);
},
equalize: function(hw) {
if(!hw) { hw = 'height'; }
var max = 0,
prop = (typeof document.body.style.maxHeight != 'undefined' ? 'min-' : '') + hw; //ie6 ftl
offset = 'offset' + hw.capitalize();
this.elements.each(function(element,i) {
var calc = element[offset];
if(calc > max) { max = calc; }
},this);
this.elements.each(function(element,i) {
element.setStyle(prop,max - (element[offset] - element.getStyle(hw).toInt()));
});
return max;
}
});
///////////////////////////////////////////////////////////////
function fixHeight1 () {
var equalizer1 = new Equalizer("#vt_main_inside .vt_auto_cols").equalize("height");
}
window.addEvent ("load", function () {
fixHeight1.delay (300);
}); 
</script>
<?php 
if ($this->countModules('debug')) { ?>
<div id="vt_debug"><jdoc:include type="modules" name="debug" style="none"  /></div>
<?php } 
if($GoogleAnalytics == 1){
      echo '<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("'.$gacode.'");
			pageTracker._trackPageview();
			} catch(err) {}</script>
			';
}
?>