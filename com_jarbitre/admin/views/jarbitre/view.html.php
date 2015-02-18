<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * JArbitre View
 */
class JArbitreViewJArbitre extends JView
{
	protected $form;
	protected $item;
	protected $script;
	protected $canDo;
 
	/**
	 * display method of Hello view
	 * @return void
	 */
	public function display($tpl = null) 
	{
		// get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');
		$this->script = $this->get('Script');
 
		// What Access Permissions does this user have? What can (s)he do?
		$this->canDo = JArbitreHelper::getActions($this->item->id);

 
		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		// Set the toolbar
		$this->addToolBar();
 
		// Display the template
		parent::display($tpl);
 
		// Set the document
		$this->setDocument();
	}
 
	/**
	 * Setting the toolbar
	 */
	protected function addToolBar() 
	{
	
		$input = JFactory::getApplication()->input;
		$input->set('hidemainmenu', true);
		$user = JFactory::getUser();
		$userId = $user->id;
		$isNew = $this->item->id == 0;
		JToolBarHelper::title($isNew ? JText::_('COM_JARBITRE_MANAGER_JARBITRE_NEW')
		                             : JText::_('COM_JARBITRE_MANAGER_JARBITRE_EDIT'), 'jarbitre');

		// Build the actions for new and existing records.
		if ($isNew) 
		{
			// For new records, check the create permission.
			if ($this->canDo->get('core.create')) 
			{
				JToolBarHelper::apply('jarbitre.apply', 'JTOOLBAR_APPLY');
				JToolBarHelper::save('jarbitre.save', 'JTOOLBAR_SAVE');
				JToolBarHelper::custom('jarbitre.save2new', 'save-new.png', 'save-new_f2.png',
				                       'JTOOLBAR_SAVE_AND_NEW', false);
			}
			JToolBarHelper::cancel('jarbitre.cancel', 'JTOOLBAR_CANCEL');
		}
		else
		{
			if ($this->canDo->get('core.edit'))
			{
				// We can save the new record
				JToolBarHelper::apply('jarbitre.apply', 'JTOOLBAR_APPLY');
				JToolBarHelper::save('jarbitre.save', 'JTOOLBAR_SAVE');
 
				// We can save this record, but check the create permission to see
				// if we can return to make a new one.
				if ($this->canDo->get('core.create')) 
				{
					JToolBarHelper::custom('jarbitre.save2new', 'save-new.png', 'save-new_f2.png',
					                       'JTOOLBAR_SAVE_AND_NEW', false);
				}
			}
			if ($this->canDo->get('core.create')) 
			{
				JToolBarHelper::custom('jarbitre.save2copy', 'save-copy.png', 'save-copy_f2.png',
				                       'JTOOLBAR_SAVE_AS_COPY', false);
			}
			JToolBarHelper::cancel('jarbitre.cancel', 'JTOOLBAR_CLOSE');
		}
	}

	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$isNew = $this->item->id == 0;
		$document = JFactory::getDocument();
		$document->setTitle($isNew ? JText::_('COM_JARBITRE_JARBITRE_CREATING')
		                           : JText::_('COM_JARBITRE_JARBITRE_EDITING'));
		$document->addScript(JURI::root() . $this->script);
		$document->addScript(JURI::root() . "/administrator/components/com_jarbitre"
		                                  . "/views/jarbitre/submitbutton.js");
		JText::script('COM_JARBITRE_JARBITRE_ERROR_UNACCEPTABLE');
	}
}