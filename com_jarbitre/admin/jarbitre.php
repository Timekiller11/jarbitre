<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Access check: is this user allowed to access the backend of this component?
if (!JFactory::getUser()->authorise('core.manage', 'com_jarbitre')) 
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// require helper file
JLoader::register('JArbitreHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'jarbitre.php');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by JArbitre
$controller = JController::getInstance('JArbitre');
 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();