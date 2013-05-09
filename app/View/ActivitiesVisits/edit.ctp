<div class="activitiesVisits form">
<?php echo $this->Form->create('ActivitiesVisit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activities Visit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Visits_id');
		echo $this->Form->input('Activities_id');
		echo $this->Form->input('completed');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActivitiesVisit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ActivitiesVisit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activities Visits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activities'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
