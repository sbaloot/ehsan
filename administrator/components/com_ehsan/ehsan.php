<?php
/**
 * @package    ehsan
 *
 * @author     ehsan <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

// Access check.
// sathe destresi ro barresi mikone.
if (!JFactory::getUser()->authorise('core.manage', 'com_ehsan'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// Require the helper
require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/ehsan.php';

// Execute the task
$controller = JControllerLegacy::getInstance('ehsan');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
