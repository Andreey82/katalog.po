<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_newsfeeds
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
$pageClass = $this->params->get('pageclass_sfx');
?>
<div class="newsfeed-category<?php echo $this->pageclass_sfx;?>">
<?php if ($this->params->def('show_page_heading', 1)) : ?>
<div class="vt_heading_style">
	<h3><span class="vt_heading1"><span class="vt_heading2">
	<?php echo $this->escape($this->params->get('page_heading')); ?>
</span></span></h3>
</div>
<?php endif; ?>
<?php if($this->params->get('show_category_title', 1)) : ?>
<h4>
	<?php echo JHtml::_('content.prepare', $this->category->title); ?>
</h4>
<?php endif; ?>
<?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
	<div class="category-desc">
	<?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
		<img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
	<?php endif; ?>
	<?php if ($this->params->get('show_description') && $this->category->description) : ?>
		<?php echo JHtml::_('content.prepare', $this->category->description); ?>
	<?php endif; ?>
	<div class="clr"></div>
	</div>
<?php endif; ?>
<?php echo $this->loadTemplate('items'); ?>
<?php if (!empty($this->children[$this->category->id])&& $this->maxLevel != 0) : ?>
<div class="cat-children">
	<h5><?php echo JText::_('JGLOBAL_SUBCATEGORIES') ; ?></h5>
	<?php echo $this->loadTemplate('children'); ?>
</div>
<?php endif; ?>
</div>