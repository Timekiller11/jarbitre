<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class JArbitreViewQuestion extends JView
{
	protected $already;
	// Overwriting JView display method
	function display($tpl = null) 
	{
		$already = array();
		$id = 1;
		// Load data from Model
		$model = $this->getModel();
		$this->item = $model->getQuestion($id);
 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Display the view
		parent::display($tpl);
	}
}