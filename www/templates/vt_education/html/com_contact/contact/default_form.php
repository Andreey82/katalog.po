<?php
 /**
 * @version		$Id: default_form.php 11845 2009-05-27 23:28:59Z robs
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>
<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
		<?php echo JText::_('COM_CONTACT_FORM_LABEL'); ?>
			<div class="contact-email">
				<div>
					<?php echo $this->form->getLabel('contact_name'); ?>
					<?php echo $this->form->getInput('contact_name'); ?>
				</div>
				<div>
					<?php echo $this->form->getLabel('contact_email'); ?>
					<?php echo $this->form->getInput('contact_email'); ?>
				</div>
				<div>
					<?php echo $this->form->getLabel('contact_subject'); ?>
					<?php echo $this->form->getInput('contact_subject'); ?>
				</div>
				<div>
				<?php echo $this->form->getLabel('contact_message'); ?>
				<?php echo $this->form->getInput('contact_message'); ?>
				</div>
				<div>
				<?php 	if ($this->params->get('show_email_copy')){ ?>
						<?php echo $this->form->getLabel('contact_email_copy'); ?>
						<?php echo $this->form->getInput('contact_email_copy'); ?>
				<?php 	} ?>
				</div>
			  </div>	
				<button type="submit" name="Submit" class="button_round"><span class="button_round1"><span>
				<?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?>
				</span></span></button>
				<div>
					<input type="hidden" name="option" value="com_contact" />
					<input type="hidden" name="task" value="contact.submit" />
					<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
					<?php echo JHtml::_( 'form.token' ); ?>
			   </div>
		     	   
	</form>
</div>
