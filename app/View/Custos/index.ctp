<div class="custos index">
    <h2><?php echo __('Custos');
    
    
?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Novo Custo'), array('action' => 'add'), array('class' => 'btn btn-success')); ?></li>
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
            <th><?php echo $this->Paginator->sort('valor'); ?></th>
            <th><?php echo $this->Paginator->sort('data'); ?></th>
            <th><?php echo $this->Paginator->sort('tipo'); ?></th>
            <th class="actions"><?php echo __('Ações'); ?></th>
        </tr>
        <?php $total = (float) 0.00; ?>
        <?php foreach ($custos as $custo): ?>
            <tr>
                <td><?php echo h($custo['Custo']['id']); ?>&nbsp;</td>
                <td><?php echo h($this->Number->currency($custo['Custo']['valor'], 'Br')); ?>&nbsp;</td>
                <td><?php echo h($this->Locale->date($custo['Custo']['data'], true)); ?>&nbsp;</td>
                <td><?php echo h($custo['Tipo']['nome']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__(''), array('action' => 'view', $custo['Custo']['id']), array('class' => 'icon-zoom-in', 'title' => 'Visualizar')); ?>
                    <?php echo $this->Html->link(__(''), array('action' => 'edit', $custo['Custo']['id']), array('class' => 'icon-pencil', 'title' => 'Editar')); ?>
                    <?php echo $this->Form->postLink(__(''), array('action' => 'delete', $custo['Custo']['id']), array('class' => 'icon-trash', 'title' => 'Excluir'), __('Are you sure you want to delete # %s?', $custo['Custo']['id'])); ?>
                </td>
            </tr>
            <?php $total += $custo['Custo']['valor']; ?>
        <?php endforeach; ?>

        <tr>
            <td>Total</td>
            <td><?php
        echo $this->Number->currency($total, 'Br');
        ?>
            </td>
            <td></td>
            <td></td>
            <td></td>

        </tr>

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

