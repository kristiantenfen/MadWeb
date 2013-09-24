<div class="compras index">
	<h2><?php echo __('Compras'); ?></h2>
        <div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nova Compra'), array('action' => 'add'), array('class' => 'btn btn-success')); ?></li>
	</ul>
        </div>
        <div class="form-inline">
    <?php
                echo $this->FilterForm->create();
                echo $this->FilterForm->input('tipo');
                echo $this->FilterForm->input('data', array('type' => 'text', 'class' => 'date'));
                echo $this->FilterForm->end(array('label' => 'Buscar', 'class' => 'btn btn-primary', 'div' => false));
            ?>
    </div> 
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_compra'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
        <?php $total = (float) 0.00; ?>
	<?php foreach ($compras as $compra): ?>
	<tr>
		<td><?php echo h($compra['Compra']['id']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['tipo_compra']); ?>&nbsp;</td>
		<td><?php echo h($this->Locale->date($compra['Compra']['data'], true)); ?>&nbsp;</td>
		<td><?php echo h($this->Number->currency($compra['Compra']['valor'], 'Br')); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'view', $compra['Compra']['id']), array('class' => 'icon-zoom-in', 'title' => 'Visualizar')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $compra['Compra']['id']), array('class' => 'icon-pencil', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $compra['Compra']['id']), array('class' => 'icon-trash', 'title' => 'Excluir'), __('Are you sure you want to delete # %s?', $compra['Compra']['id'])); ?>
		</td>
	</tr>
 <?php $total += $compra['Compra']['valor']; ?>
<?php endforeach; ?>
        <tr>
            <td>Total</td>
            <td></td>
            <td></td>
            <td></td>
            
            <td><?php
        echo $this->Number->currency($total, 'Br');
        ?>
            <td></td>
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

