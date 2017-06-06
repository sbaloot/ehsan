<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access'); 


?>
<?php foreach ($this->test2 as $i => $item): ?>

	<tr class="row<?php echo $i % 2; ?>">
		<td class="order nowrap center hidden-phone">

			<?php echo $i; ?>

		</td>
		<td class="nowrap center">
			<?php echo $item; ?>
		</td>

	</tr>
<?php endforeach; ?>