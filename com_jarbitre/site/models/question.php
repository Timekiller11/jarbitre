<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitems library
jimport('joomla.application.component.modelitem');
 
/**
 * HelloWorld Model
 */
class JArbitreModelQuestion extends JModelItem
{
	/**
	 * @var array messages
	 */
	protected $items;
 
	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 * @since	2.5
	 */
	public function getTable($type = 'Questions', $prefix = 'JArbitreTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	/**
	 * Get the message
	 * @param  int    The corresponding id of the message to be retrieved
	 * @return string The message to be displayed to the user
	 */
	public function getQuestion($id = 1) 
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,question,A,B,C,D');
		$query->from('#__jarbitre_questions');
		$query->where($db->quoteName('id')." = ".$db->quote($id));
		$db->setQuery((string)$query);
		$question = $db->loadObject();
		return $question;
	}
}