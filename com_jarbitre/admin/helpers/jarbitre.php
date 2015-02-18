<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * JArbitre component helper.
 */
abstract class JArbitreHelper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('COM_JARBITRE_SUBMENU_'. strtoupper($submenu)),
								'index.php?option=com_jarbitre&view='.$submenu.'&extension=com_jarbitre', $submenu == 'questions');
		// set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-jarbitre ' .
		                               '{background-image: url(../media/com_jarbitre/images/soccer-48x48.png);}');
	}
 
	/**
	 * Get the actions
	 */
	public static function getActions($messageId = 0, $menu='message')
	{	
		jimport('joomla.access.access');
		$user	= JFactory::getUser();
		$result	= new JObject;
 
		if (empty($messageId)) {
			$assetName = 'com_jarbitre';
		}
		else {
			$assetName = 'com_jarbitre.'.$menu.'.'.(int) $messageId;
		}
 
		$actions = JAccess::getActions('com_jarbitre', 'component');
 
		foreach ($actions as $action) {
			$result->set($action->name, $user->authorise($action->name, $assetName));
		}
 
		return $result;
	}
}