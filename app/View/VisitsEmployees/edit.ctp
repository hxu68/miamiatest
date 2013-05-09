<div class="visitsEmployees form">
<?php echo $this->Form->create('VisitsEmployee'); ?>
	<fieldset>
		<legend><?php echo __('Edit Visits Employee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Employees_id');
		echo $this->Form->input('Visits_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('VisitsEmployee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('VisitsEmployee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Visits Employees'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employees'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
	</ul>
</div>
