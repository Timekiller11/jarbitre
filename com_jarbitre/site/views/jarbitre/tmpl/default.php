<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<link href="http://localhost/joomla/components/com_jarbitre/views/question/tmpl/styles.css" rel="stylesheet" type="text/css">
<script src="http://localhost/joomla/components/com_jarbitre/views/question/tmpl/js/script.js"></script>
<div id='conteneur'>
	<div id='jeuComp'>
			<h1><?php echo $this->item->question; ?>
			</h1>
			<div class='choix' onclick='choixA()'><img id='choix1' src='/joomla/components\com_jarbitre\views\question\tmpl\images\rond.png' /><span><?php echo $this->item->A; ?></span></div>
			<div class='choix' onclick='choixB()'><img id='choix2' src='/joomla/components\com_jarbitre\views\question\tmpl\images\rond.png' /><span><?php echo $this->item->B; ?></span></div>
			<div class='choix' onclick='choixC()'><img id='choix3' src='/joomla/components\com_jarbitre\views\question\tmpl\images\rond.png' /><span><?php echo $this->item->C; ?></span></div>
			<div class='choix' onclick='choixD()'><img id='choix4' src='/joomla/components\com_jarbitre\views\question\tmpl\images\rond.png' /><span><?php echo $this->item->D; ?></span></div>


			<form action="<?php echo JRoute::_('index.php?option=com_jarbitre&id='.(int) $this->item->id); ?>"
			      method="post" name="questionForm" id="jarbitre-form" class="form-validate">
			      <input type='hidden' name='answer' />
			</form>
			<img id='cadrage' src='/joomla/components/com_jarbitre/views/question/tmpl/images/cadre.svg' />
			<div id='conteneurFond'>
				<img id='fond' src='/joomla/components/com_jarbitre/views/question/tmpl/images/fond.svg' />
			</div>
	</div>
</div>
</body>
</html>