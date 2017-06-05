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

JHtml::_('script', 'com_ehsan/script.js', false, true);
JHtml::_('stylesheet', 'com_ehsan/style.css', array(), true);

$layout = new JLayoutFile('ehsan.page');
$data = new stdClass;
$data->text = 'Hello Joomla!';
echo $layout->render($data);