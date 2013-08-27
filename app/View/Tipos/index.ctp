<div class="tipos index">
	<h2><?php echo __('Tipos'); ?></h2>
        <div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Novo Tipo'), array('action' => 'add'), array('class' => 'btn btn-success')); ?></li>
	</ul>
</div>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($tipos as $tipo): ?>
	<tr>
		<td><?php echo h($tipo['Tipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'view', $tipo['Tipo']['id']), array('class' => 'icon-zoom-in', 'title' => 'Visualizar')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $tipo['Tipo']['id']), array('class' => 'icon-pencil', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $tipo['Tipo']['id']), array('class' => 'icon-trash', 'title' => 'Excluir'), __('Are you sure you want to delete # %s?', $tipo['Tipo']['id'])); ?>
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

