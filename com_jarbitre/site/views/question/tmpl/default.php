<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1><?php echo $this->item->question; ?>
</h1>
<h3><?php echo $this->item->A; ?></h3>
<h3><?php echo $this->item->B; ?></h3>
<h3><?php echo $this->item->C; ?></h3>
<h3><?php echo $this->item->D; ?></h3>

<form action="<?php echo JRoute::_('index.php?option=com_jarbitre&id='.(int) $this->item->id); ?>"
      method="post" name="questionForm" id="jarbitre-form" class="form-validate">
      <input type='hidden' name='answer' />
</form>