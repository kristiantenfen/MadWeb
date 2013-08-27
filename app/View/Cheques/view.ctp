<div class="cheques view">
<h2><?php  echo __('Cheque'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cheque['Cheque']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h('R$ '.$cheque['Cheque']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Vencimento'); ?></dt>
		<dd>
			<?php echo h($this->Locale->date($cheque['Cheque']['data'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destinatario'); ?></dt>
		<dd>
			<?php echo h($cheque['Cheque']['favorecido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($cheque['Cheque']['observacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

