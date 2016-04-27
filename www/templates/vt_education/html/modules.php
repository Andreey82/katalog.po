<?php
/**
 * @copyright	Copyright (C) 2008 - 2009  All rights reserved.
 * @license		
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
/*
 * Module chrome for rendering the module in a slider
 */
function modChrome_vt_xhtml($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($module->showtitle != 0) : ?>
			<div class="vt_heading_style">
            <h3><span class="vt_heading1"><span class="vt_heading2">
			<?php echo $module->title; ?></span></span></h3>
            </div>
		<?php endif; ?>
		   <div class="vt_module_xhtml_content">
			<?php echo $module->content; ?>
			</div>
		</div>
	<?php endif;
}
function modChrome_vt_rounded($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="vt_module<?php echo $params->get('moduleclass_sfx'); ?>">
		<div class="vt_rounded1"><div class="vt_rounded2"><div class="vt_rounded3">
		<div class="vt_rounded4"><div class="vt_rounded5"><div class="vt_rounded6"><div class="vt_rounded7">
		<?php if ($module->showtitle != 0) : ?>
			<div class="vt_heading_style">
            <h3><span class="vt_heading1"><span class="vt_heading2"><?php echo $module->title; ?></span></span></h3>
            </div>
		<?php endif; ?>
			<div class="vt_module_content"><?php echo $module->content; ?></div>
		</div></div></div></div></div></div></div></div>
	<?php endif;
}
?>