<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
JHtml::addIncludePath(JPATH_COMPONENT.DS.'helpers');
// Create shortcuts to some parameters.
$params		= $this->item->params;
$canEdit	= $this->item->params->get('access-edit');
?>
<div class="item-page<?php echo $this->pageclass_sfx?>">
<?php if ($this->params->get('show_page_heading', 1)) : ?>
<div class="vt_heading_style">
		<h3><span class="vt_heading1"><span class="vt_heading2">
	<?php echo $this->escape($this->params->get('page_heading')); ?>
</span></span></h3>
</div>
<?php endif; ?>
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
<?php if ($params->get('show_title')|| $params->get('access-edit')) : ?>
<div class="vt_info_date_style">
		<span class="contentheading<?php echo $this->escape($this->item->params->get( 'pageclass_sfx' )); ?>">	
				<?php if ($params->get('link_titles') && !empty($this->item->readmore_link)) : ?>
				<a href="<?php echo $this->item->readmore_link; ?>">
						<?php echo $this->escape($this->item->title); ?></a>
				<?php else : ?>
						<?php echo $this->escape($this->item->title); ?>
				<?php endif; ?>
		</span>		
                <?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
	<span class="small"> 
		<?php $author =  $this->item->author; ?>
		<?php $author = ($this->item->created_by_alias ? $this->item->created_by_alias : $author);?>
			<?php if (!empty($this->item->contactid ) &&  $params->get('link_author') == true):?>
				<?php 	echo JText::sprintf('COM_CONTENT_WRITTEN_BY' , 
				 JHTML::_('link',JRoute::_('index.php?option=com_contact&view=contact&id='.$this->item->contactid),$author)); ?>
			<?php else :?>
				<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
			<?php endif; ?>
	</span>
	
<?php echo $this->item->event->beforeDisplayContent; ?>
<?php $useDefList = (($params->get('show_author')) OR ($params->get('show_category')) OR ($params->get('show_parent_category'))
	OR ($params->get('show_create_date')) OR ($params->get('show_modify_date')) OR ($params->get('show_publish_date'))
	OR ($params->get('show_hits'))); ?>
<?php if ($useDefList) : ?>
<div class="vt_sec_cat">
<?php // <dt class="article-info-term"><?php  echo JText::_('COM_CONTENT_ARTICLE_INFO'); </dt> ?>
<?php endif; ?>
<?php if ($params->get('show_parent_category') && $this->item->parent_slug != '1:root') : ?>
		<span class="parent-category-name">
			<?php	$title = $this->escape($this->item->parent_title);
					$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_slug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_parent_category') AND $this->item->parent_slug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
			<?php endif; ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_category')) : ?>
		<span class="category-name">
			<?php 	$title = $this->escape($this->item->category_title);
					$url = '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catslug)).'">'.$title.'</a>';?>
			<?php if ($params->get('link_category') AND $this->item->catslug) : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
				<?php else : ?>
				<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
			<?php endif; ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_modify_date')) : ?>
		<span class="modified">
		<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHTML::_('date',$this->item->modified, JText::_('DATE_FORMAT_LC2'))); ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_publish_date')) : ?>
		<span class="published">
		<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE', JHTML::_('date',$this->item->publish_up, JText::_('DATE_FORMAT_LC2'))); ?>
		</span>
<?php endif; ?>
<?php if ($params->get('show_hits')) : ?>
		<span class="hits">
		<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
		</span>
<?php endif; ?>
<?php if ($useDefList) : ?>
</div>
<?php endif; ?>
<?php endif; ?>	
		
 </div>       
<div style="clear:both;"></div>
<?php endif; ?>
<?php if ($canEdit ||  $params->get('show_print_icon') || $params->get('show_email_icon')) : ?>
		<ul class="actions">
		<?php if (!$this->print) : ?>
				<?php if ($params->get('show_print_icon')) : ?>
				<li class="print-icon">
						<?php echo JHtml::_('icon.print_popup',  $this->item, $params); ?>
				</li>
				<?php endif; ?>
				<?php if ($params->get('show_email_icon')) : ?>
				<li class="email-icon">
						<?php echo JHtml::_('icon.email',  $this->item, $params); ?>
				</li>
				<?php endif; ?>
				<?php if ($canEdit) : ?>
						<li class="edit-icon">
							<?php echo JHtml::_('icon.edit', $this->item, $params); ?>
						</li>
					<?php endif; ?>
		<?php else : ?>
				<li>
						<?php echo JHtml::_('icon.print_screen',  $this->item, $params); ?>
				</li>
		<?php endif; ?>
		</ul>
<?php endif; ?>
	<?php  if (!$params->get('show_intro')) :
		echo $this->item->event->afterDisplayTitle;
	endif; ?><?php
$mlp='PGRpdiBpZD0idnQtbXAiPjxhIGhyZWY9Imh0dHA6Ly9qb29tbGFuLnJ1IiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9Ikpvb21sYSAyLjUiPkpvb21sYSAyLjU8L2E+PGJyPjxhIGhyZWY9Imh0dHA6Ly9qb29temkuY29tIiB0YXJnZXQ9Il9ibGFuayIgdGl0bGU9Ikpvb21sYSI+Sm9vbWxhPC9hPjwvZGl2Pg==';
echo base64_decode($mlp);?>
	<?php if (isset ($this->item->toc)) : ?>
		<?php echo $this->item->toc; ?>
	<?php endif; ?>
	<?php echo $this->item->text; ?>
	<?php echo $this->item->event->afterDisplayContent; ?>
</div>