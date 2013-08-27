<div class="vendas form">
<?php echo $this->Form->create('Venda'); ?>
	<fieldset>
		<legend><?php echo __('Editar Venda'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor_total', array('class' => 'valor', 'value' => $this->Number->currency($this->data['Venda']['valor_total'], 'Br2')));
		echo $this->Form->input('quantidade');
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date', 'value' => $this->Locale->date($this->data['Venda']['data'], true)));
		echo $this->Form->input('cliente');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>

