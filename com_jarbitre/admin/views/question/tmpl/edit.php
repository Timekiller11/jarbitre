<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<form action="<?php echo JRoute::_('index.php?option=com_jarbitre&layout=edit&id='.(int) $this->item->id); ?>"
      method="post" name="adminForm" id="jarbitre-form" class="form-validate">
 
	<div class="width-100 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_( 'COM_JARBITRE_QUESTION_TITLE' ); ?></legend>
			<ul class="adminformlist">
<?php                      foreach($this->form->getFieldset('questions') as $field): ?>
				<li><?php echo $field->label;echo $field->input;?></li>
<?php                      endforeach; ?>
			</ul>
		</fieldset>
	</div>

	<div>
		<input type="hidden" name="task" value="jarbitre.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>