<div class="visitsEmployees index">
	<h2><?php echo __('Visits Employees'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Employees_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Visits_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($visitsEmployees as $visitsEmployee): ?>
	<tr>
		<td><?php echo h($visitsEmployee['VisitsEmployee']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($visitsEmployee['Employees']['title'], array('controller' => 'employees', 'action' => 'view', $visitsEmployee['Employees']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($visitsEmployee['Visits']['id'], array('controller' => 'visits', 'action' => 'view', $visitsEmployee['Visits']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $visitsEmployee['VisitsEmployee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $visitsEmployee['VisitsEmployee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $visitsEmployee['VisitsEmployee']['id']), null, __('Are you sure you want to delete # %s?', $visitsEmployee['VisitsEmployee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Visits Employee'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employees'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
	</ul>
</div>
