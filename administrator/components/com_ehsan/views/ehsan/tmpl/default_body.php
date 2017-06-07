<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access'); 


?>
<?php foreach ($this->test2 as $row): ?>

	<tr>

		<td class="nowrap center">
			<?php echo $row->title; ?>
		</td>

	</tr>
<?php endforeach; ?>