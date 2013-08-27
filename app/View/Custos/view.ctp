<div class="custos view">
<h2><?php  echo __('Custo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($custo['Custo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h('R$ '.$custo['Custo']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($this->Locale->date($custo['Custo']['data'], true)); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Origem'); ?></dt>
		<dd>
			<?php echo h($custo['Custo']['origem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obervacao'); ?></dt>
		<dd>
			<?php echo h($custo['Custo']['obervacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
