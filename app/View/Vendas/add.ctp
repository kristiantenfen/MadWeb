<div class="vendas form">
<?php echo $this->Form->create('Venda'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Venda'); ?></legend>
	<?php
		echo $this->Form->input('valor_total', array('class' => 'valor'));
		echo $this->Form->input('quantidade');
		echo $this->Form->input('data', array('class' => 'date', 'type' => 'text'));
		echo $this->Form->input('cliente');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>

