<div class="activitiesVisits view">
<h2><?php  echo __('Activities Visit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activitiesVisit['ActivitiesVisit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visits'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activitiesVisit['Visits']['id'], array('controller' => 'visits', 'action' => 'view', $activitiesVisit['Visits']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activities'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activitiesVisit['Activities']['name'], array('controller' => 'activities', 'action' => 'view', $activitiesVisit['Activities']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed'); ?></dt>
		<dd>
			<?php echo h($activitiesVisit['ActivitiesVisit']['completed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($activitiesVisit['ActivitiesVisit']['quantity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activities Visit'), array('action' => 'edit', $activitiesVisit['ActivitiesVisit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activities Visit'), array('action' => 'delete', $activitiesVisit['ActivitiesVisit']['id']), null, __('Are you sure you want to delete # %s?', $activitiesVisit['ActivitiesVisit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities Visits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activities Visit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('controller' => 'visits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visits'), array('controller' => 'visits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activities'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
