<div class="vendas view">
<h2><?php  echo __('Venda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Metro'); ?></dt>
		<dd>
			<?php echo h($this->Number->currency($venda['Venda']['valor_total'], 'Br')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metros'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($this->Locale->date($venda['Venda']['data'], true)); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['observacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

