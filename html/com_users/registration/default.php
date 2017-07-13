<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
// JHtml::_('behavior.formvalidator');

JHtml::_('jquery.framework');


$app = JFactory::getApplication();
$document = JFactory::getDocument();
$document->addScript('templates/jen/html/com_users/registration/scripts/croppie.min.js');
$document->addScript('templates/jen/html/com_users/registration/scripts/pcscript.js');


$form = $this->form;


$config = JFactory::getConfig();
$captcha = $config->get('captcha');


?>






<div class="registration<?php echo $this->pageclass_sfx; ?>">
	<div class="page-header">
		<h1 class="border-sides-right"><?php echo JText::_('TPL_JEN_NEW_USER_REGISTRATION'); ?></h1>
	</div>
	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate big-inputs" enctype="multipart/form-data">
		<div class="form-inner">
			<small><?php echo JText::_('TPL_JEN_FORM_ALL_REQUIRED'); ?></small>	
			<fieldset>
			<?php 
				echo $form->renderField('title', 'profile');
				echo $form->renderField('firstname', 'profile');
				echo $form->renderField('middleinitial', 'profile');
				echo $form->renderField('lastname', 'profile');
				echo $form->renderField('email1');
				echo $form->renderField('email2');
				echo $form->renderField('emailother', 'profile');
				echo $form->renderField('password1');
				echo $form->renderField('password2');
			?>		
				<div style="height: 0; overflow: hidden; width: 0;">
					<?php 
						$hidden[] = $form->getField('name');
						$hidden[] = $form->getField('username');
						foreach ($hidden as $field) {
							echo $field->input;
						}
					?>
				</div>			
			</fieldset>
			<br />
			<fieldset>
				<h2 class="border-bottom"><?php $fields = $this->form->getFieldsets('profile'); echo JText::_($fields['profile']->label);?></h2><br /><br />

				<?php 
					echo $form->renderField('court', 'profile');
					echo $form->renderField('courttype', 'profile');
					echo $form->renderField('courtaddress', 'profile');
					echo $form->renderField('city', 'profile');
					echo $form->renderField('state', 'profile');
					echo $form->renderField('zip', 'profile');
					echo $form->renderField('phone', 'profile');
					echo $form->renderField('fax', 'profile');
					echo $form->renderField('courtdescribe', 'profile');
					echo $form->renderField('currentdocket', 'profile');
					echo $form->renderField('criminal', 'profile');
					echo $form->renderField('civil', 'profile');
					echo $form->renderField('both', 'profile');
					echo $form->renderField('domestic', 'profile');
					echo $form->renderField('experience', 'profile');
				?>
				<div class="form-group">
					<?php
						$date = $form->getField('date', 'profile');
						echo $date->label;
					?>
					<input
						id="<?php echo $date->id ;?>"
						class="required"
						name="<?php echo $date->name ;?>"
						value="<?php echo $date->value ;?>"
						size="20"
						type="<?php echo $date->type ;?>"
						placeholder="01/01/2000"
					/>
				</div>		
				<?php
					echo $form->renderField('education', 'profile');
				?>
				<div class="form-group">
					<?php
						$admission = $form->getField('admission', 'profile');
						echo $admission->label;
					?>
					<input
						id="<?php echo $admission->id ;?>"
						class="required"
						name="<?php echo $admission->name ;?>"
						value="<?php echo $admission->value ;?>"
						size="20"
						type="<?php echo $admission->type ;?>"
						placeholder="01/01/2000"
					/>
				</div>	
				<?php
					echo $form->renderField('offices', 'profile');
					echo $form->renderField('experienceother', 'profile');
					echo $form->renderField('beforejudge', 'profile');
					echo $form->renderField('activities', 'profile');
					echo $form->renderField('publications', 'profile');
					echo $form->renderField('learnmore', 'profile');
					echo $form->renderField('referred', 'profile');
					echo $form->renderField('referrer', 'profile');
					echo $form->renderField('whymember', 'profile');
					echo $form->renderField('otherinfo', 'profile');
					echo $form->renderField('pic', 'profile');
				?>			
			</fieldset>
		</div>
		<section class="pic-upload-wrapper">
			<div>
				<div class="pic-upload-set">
					<div class="pic-upload-msg">
					Click to upload your picture. You may zoom in or out and rearrange it before setting it.
					</div>
				</div>							
			</div>		
			<div>
				<div style="width:0;height:0;overflow:hidden;">
					<input type="file" id="upload" value="Choose a file" accept="image/*" />
				</div>	                      
				<div class="croppie-outer">
					<div id="croppie"></div>
				</div>	
				<button type="button" class="btn btn-primary upload-set">Set Image</button>		
			</div>
		</section>


		<?php if($captcha): ?>
			<div class="form-group">
				<?php echo $form->renderField('captcha'); ?>
			</div> 
		<?php endif; ?>
		<div class="form-group text-center">
			<button type="submit" class="btn btn-primary validate"><?php echo JText::_('TPL_JEN_NEW_USER_SUBMIT_FORM');?></button>
			<a class="btn btn-gray" href="<?php echo JRoute::_('');?>" title="<?php echo JText::_('JCANCEL');?>"><?php echo JText::_('JCANCEL');?></a>
			<input type="hidden" name="option" value="com_users" />
			<input type="hidden" name="task" value="registration.register" />
		</div>
		<?php echo JHtml::_('form.token');?>		


	</form>



</div>



