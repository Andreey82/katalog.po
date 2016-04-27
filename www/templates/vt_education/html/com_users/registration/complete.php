<?php
/**
 * @version		$Id: complete.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @since		1.6
 */
defined('_JEXEC') or die;
?>
<div class="registration-complete<?php echo $this->pageclass_sfx;?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="vt_heading_style">
	<h3><span class="vt_heading1"><span class="vt_heading2">
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	</span></span></h3>
    </div>
	<?php endif; ?>
</div>