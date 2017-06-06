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

/**
 * Ehsan
 *
 * @package  ehsan
 * @since    1.0
 */
class EhsanModelEhsan extends JModelList
{

	public function getTable($type = 'Agent', $prefix = 'EhsanTable', $config=array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}


	public function getData(){

		$db = JFactory::getDbo();

		$query = $db->getQuery(true)
			->select('m.title')
			->from('#__menu AS m');


		$db->setQuery($query);

		return $db->loadObjectList();


	}

}
