<div class="compras view">
<h2><?php  echo __('Compra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['quantidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Compra'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['tipo_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($this->Locale->date($compra['Compra']['data'], null)); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($this->Number->currency($compra['Compra']['valor'], 'Br')); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['observacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
