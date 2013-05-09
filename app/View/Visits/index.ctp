<div class="visits index">
	<h2><?php echo __('Visits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Projects_id'); ?></th>
			<th><?php echo $this->Paginator->sort('visitdate'); ?></th>
			<th><?php echo $this->Paginator->sort('visitperiod'); ?></th>
			<th><?php echo $this->Paginator->sort('visitdescription'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($visits as $visit): ?>
	<tr>
		<td><?php echo h($visit['Visit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($visit['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $visit['Projects']['id'])); ?>
		</td>
		<td><?php echo h($visit['Visit']['visitdate']); ?>&nbsp;</td>
		<td><?php echo h($visit['Visit']['visitperiod']); ?>&nbsp;</td>
		<td><?php echo h($visit['Visit']['visitdescription']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $visit['Visit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $visit['Visit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $visit['Visit']['id']), null, __('Are you sure you want to delete # %s?', $visit['Visit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Visit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
