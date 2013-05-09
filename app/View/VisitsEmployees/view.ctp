<div class="visitsEmployees view">
<h2><?php  echo __('Visits Employee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($visitsEmployee['VisitsEmployee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employees'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visitsEmployee['Employees']['title'], array('controller' => 'employees', 'action' => 'view', $visitsEmployee['Employees']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visits'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visitsEmployee['Visits']['id'], array('controller' => 'visits', 'action' => 'view', $visitsEmployee['Visits']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Visits Employee'), array('action' => 'edit', $visitsEmployee['VisitsEmployee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Visits Employee'), array('action' => 'delete', $visitsEmployee['VisitsEmployee']['id']), null, __('Are you sure you want to delete # %s?', $visitsEmployee['VisitsEmployee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits Employee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employees'), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
	</ul>
</div>
