<div class="vendas index">
    <h2><?php echo __('Vendas'); ?></h2>
        <div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Nova Venda'), array('action' => 'add'), array('class' => 'btn btn-success')); ?></li>
	</ul>
    </div>

	<table cellpadding="0" cellspacing="0" >
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade'); ?></th>
                        <th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_total'); ?></th>
                        <th><?php echo $this->Paginator->sort('situacao_financeira'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($vendas as $venda): ?>
	<tr>
		<td><?php echo h($venda['Venda']['id']); ?>&nbsp;</td>
		<td><?php echo h($venda['Venda']['cliente']); ?>&nbsp;</td>
		<td><?php echo h($this->Locale->date($venda['Venda']['data'], true)); ?>&nbsp;</td>
		<td><?php echo h($venda['Venda']['quantidade']); ?>&nbsp;</td>
                <td><?php switch ($venda['Venda']['tipo']){
                    
                                    case 1:
                                        echo $tipos[1];
                                        break;
                                    case 2:
                                        echo $tipos[2];
                                        break;
                                    case 3;
                                        echo $tipos[3];
                                        break;
                    
                                } ?>&nbsp;</td>
		<td><?php echo h($this->Number->currency($venda['Venda']['valor_total'], 'Br')); ?>&nbsp;</td>
                <td><?php switch ($venda['Venda']['situacao_financeira']){
                    
                                    case true:
                                        echo 'Pago';
                                        break;
                                    case false:
                                        echo 'Pendente';
                                        break;
                                    
                    
                                } ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__(''), array('action' => 'view', $venda['Venda']['id']), array('class' => 'icon-zoom-in', 'title' => 'Visualizar')); ?>
			<?php echo $this->Html->link(__(''), array('action' => 'edit', $venda['Venda']['id']), array('class' => 'icon-pencil', 'title' => 'Editar')); ?>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $venda['Venda']['id']), array('class' => 'icon-trash', 'title' => 'Excluir'), __('Are you sure you want to delete # %s?', $venda['Venda']['id'])); ?>
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
