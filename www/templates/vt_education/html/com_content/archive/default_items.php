<?php
/**
 * @version		$Id: default_items.php 20209 2011-01-09 17:23:07Z chdemko $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.DS.'helpers');
$params = &$this->params;
?>
<div id="archive-items">
<?php foreach ($this->items as $i => $item) : ?>
	<?php if ($params->get('show_create_date')) : ?>
		<span class="createdate">
		<div class="vt_date">
		<?php echo JHTML::_('date',$this->item->created, JText::_('d')); ?>
		</div>
		<div class="vt_month">
		<?php echo JHTML::_('date',$this->item->created, JText::_('M Y ')); ?>
		</div>
		</span>
  <?php endif; ?>
	<div class="row<?php echo $i % 2; ?>">
		<div class="vt_info_date_style">
 	<span class="contentheading">     
		<?php if ($params->get('link_titles')): ?>
			<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($item->slug,$item->catslug)); ?>">
				<?php echo $this->escape($item->title); ?></a>
		<?php else: ?>
				<?php echo $this->escape($item->title); ?>
		<?php endif; ?>
	</span>
		
        <?php if ($params->get('show_author') && !empty($item->author )) : ?>
	<span class="small"> 
		<?php $author =  $item->author; ?>
		<?php $author = ($item->created_by_alias ? $item->created_by_alias : $author);?>
			<?php if (!empty($item->contactid ) &&  $params->get('link_author') == true):?>
				<?php 	echo JText::sprintf('COM_CONTENT_WRITTEN_BY' , 
				 JHTML::_('link',JRoute::_('index.php?option=com_contact&view=contact&id='.$item->contactid),$author)); ?>
			<?php else :?>
				<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
			<?php endif; ?>
	</span>
	
	<?php if (($params->get('show_author')) or ($params->get('show_parent_category')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date'))  or ($params->get('show_hits'))) : ?>
<div class="vt_sec_cat">
<?php // <dt class="article-info-term"><?php  echo JText::_('COM_CONTENT_ARTICLE_INFO'); </dt> ?>
<?php endif; ?>
<?php if ($params->get('show_parent_category')) : ?>
		<span class="parent-category-name">
			<?php	$title = $this->escape($item->parent_title);
					$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($item->catslug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_parent_category') && $item->parent_slug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
			<?php endif; ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_category')) : ?>
		<span class="category-name">
			<?php	$title = $this->escape($item->category_title);
					$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($item->catslug)) . '">' . $title . '</a>'; ?>
			<?php if ($params->get('link_category') && $item->catslug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
			<?php endif; ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_modify_date')) : ?>
		<span class="modified">
		<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHTML::_('date',$item->modified, JText::_('DATE_FORMAT_LC2'))); ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_publish_date')) : ?>
		<span class="published">
		<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE', JHTML::_('date',$item->publish_up, JText::_('DATE_FORMAT_LC2'))); ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_hits')) : ?>
		<span class="hits">
		<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $item->hits); ?>
		</span>
<?php endif; ?>
<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date'))  or ($params->get('show_hits'))) :?>
	</div>
<?php endif; ?>
<?php endif; ?>	
       </div> 
<?php if ($params->get('show_intro')) :?>
	<div class="intro">
		<?php echo JHTML::_('string.truncate', $item->introtext, $params->get('introtext_limit')); ?>
	</div>		
<?php endif; ?>
	</div>
<?php endforeach; ?>
</div>
<div class="pagination">
	<p class="counter">
		<?php echo $this->pagination->getPagesCounter(); ?>
	</p>
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>