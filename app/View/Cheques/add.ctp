<div class="cheques form">
<?php echo $this->Form->create('Cheque'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Cheque'); ?></legend>
	<?php
		echo $this->Form->input('valor', array('class' => 'valor'));
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date'));
		echo $this->Form->input('favorecido');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>
