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

?>
<div id="j-sidebar-container" class="span2">
	<?php echo $this->sidebar; ?>
</div>
<div id="j-main-container" class="span10">

    <?php

    echo "ehsan";
   print_r($this->test2);

   ?>



    <table class="table table-striped" id="lookList">

        <tbody><?php echo $this->loadTemplate('body');?></tbody>

    </table>








</div>
