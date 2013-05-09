<div class="visits form">
<?php echo $this->Form->create('Visit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Visit'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Visit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Visit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Visits'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
