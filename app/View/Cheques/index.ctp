<div class="cheques index">
	<h2><?php echo __('Cheques'); ?></h2>
        <div class="actions">
		<li><?php echo $this->Html->link(__('Novo Cheque'), array('action' => 'add'), array('class' => 'btn btn-success')); ?></li>
        </div>
        <div class="form-inline">
        <?php 
              echo $this->FilterForm->create();
              echo $this->FilterForm->input('data', array('type' => 'text', 'class' => 'date'));
              echo $this->FilterForm->end(array('label' => 'Buscar', 'class' => 'btn btn-primary', 'div' => false));
        ?>    
        </div>    
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('favorecido'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($cheques as $cheque): ?>
	<tr>
		<td><?php echo h($cheque['Cheque']['id']); ?>&nbsp;</td>
		<td><?php echo h($this->Number->currency($cheque['Cheque']['valor'], 'Br')); ?>&nbsp;</td>
		<td><?php echo h($this->Locale->date($cheque['Cheque']['data'])); ?>&nbsp;</td>
		<td><?php echo h($cheque['Cheque']['favorecido']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'view', $cheque['Cheque']['id']), array('class' => 'icon-zoom-in', 'title' => 'Visualizar')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $cheque['Cheque']['id']), array('class' => 'icon-pencil', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $cheque['Cheque']['id']), array('class' => 'icon-trash', 'title' => 'Excluir'), __('Are you sure you want to delete # %s?', $cheque['Cheque']['id'])); ?>
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

