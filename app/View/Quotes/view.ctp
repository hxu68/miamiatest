<div class="quotes view">
<h2><?php  echo __('Quote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects'); ?></dt>
		<dd>
			<?php echo $this->Html->link($quote['Projects']['id'], array('controller' => 'projects', 'action' => 'view', $quote['Projects']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unitname'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['unitname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unitquantity'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['unitquantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unitprice'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['unitprice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Totalcost'); ?></dt>
		<dd>
			<?php echo h($quote['Quote']['totalcost']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Quote'), array('action' => 'edit', $quote['Quote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Quote'), array('action' => 'delete', $quote['Quote']['id']), null, __('Are you sure you want to delete # %s?', $quote['Quote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Quotes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quote'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
