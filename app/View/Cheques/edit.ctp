<div class="cheques form">
<?php echo $this->Form->create('Cheque'); ?>
	<fieldset>
		<legend><?php echo __('Editar Cheque'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor', array('class' => 'valor', 'value' => $this->Number->currency($this->data['Cheque']['valor'], 'Br2')));
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date', 'value' => $this->Locale->date($this->data['Cheque']['data'], true)));
                
		echo $this->Form->input('favorecido');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>

