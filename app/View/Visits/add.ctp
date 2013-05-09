<div class="visits form">
<?php echo $this->Form->create('Visit'); ?>
	<fieldset>
		<legend><?php echo __('Add Visit'); ?></legend>
	<?php
		echo $this->Form->input('Projects_id');
		echo $this->Form->input('visitdate');
		echo $this->Form->input('visitperiod');
		echo $this->Form->input('visitdescription');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Visits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
