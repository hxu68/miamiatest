<div class="visits view">
<h2><?php  echo __('Visit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects'); ?></dt>
		<dd>
			<?php echo $this->Html->link($visit['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $visit['Projects']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitdate'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['visitdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitperiod'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['visitperiod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visitdescription'); ?></dt>
		<dd>
			<?php echo h($visit['Visit']['visitdescription']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Visit'), array('action' => 'edit', $visit['Visit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Visit'), array('action' => 'delete', $visit['Visit']['id']), null, __('Are you sure you want to delete # %s?', $visit['Visit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Visits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Visit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
