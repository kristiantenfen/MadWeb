<div class="compras form">
<?php echo $this->Form->create('Compra'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Compra'); ?></legend>
	<?php
		echo $this->Form->input('quantidade');
               
		echo $this->Form->input('tipo_compra', array('options' => $tipos));
		echo $this->Form->input('data', array('type' =>'text', 'class' => 'date'));
		echo $this->Form->input('valor', array('class' => 'valor'));
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>

