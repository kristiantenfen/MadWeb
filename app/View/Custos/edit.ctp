<div class="custos form">
<?php echo $this->Form->create('Custo'); ?>
	<fieldset>
		<legend><?php echo __('Editar Custo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor', array('class' => 'valor', 'value' => $this->Number->currency($this->data['Custo']['valor'], 'Br2')));
                echo $this->Form->input('tipos_id', array('options' => $tipos));
		echo $this->Form->input('data', array('type' => 'text', 'class' => 'date', 'value' => $this->Locale->date($this->data['Custo']['data'], true)));
		echo $this->Form->input('origem');
		echo $this->Form->input('obervacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>

