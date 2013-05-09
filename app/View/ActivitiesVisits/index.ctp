<div class="activitiesVisits index">
	<h2><?php echo __('Activities Visits'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('Visits_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Activities_id'); ?></th>
			<th><?php echo $this->Paginator->sort('completed'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activitiesVisits as $activitiesVisit): ?>
	<tr>
		<td><?php echo h($activitiesVisit['ActivitiesVisit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($activitiesVisit['Visits']['id'], array('controller' => 'visits', 'action' => 'view', $activitiesVisit['Visits']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activitiesVisit['Activities']['name'], array('controller' => 'activities', 'action' => 'view', $activitiesVisit['Activities']['id'])); ?>
		</td>
		<td><?php echo h($activitiesVisit['ActivitiesVisit']['completed']); ?>&nbsp;</td>
		<td><?php echo h($activitiesVisit['ActivitiesVisit']['quantity']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activitiesVisit['ActivitiesVisit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activitiesVisit['ActivitiesVisit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activitiesVisit['ActivitiesVisit']['id']), null, __('Are you sure you want to delete # %s?', $activitiesVisit['ActivitiesVisit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Activities Visit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activities'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
