<div class="custos form">
<?php echo $this->Form->create('Custo'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Custo'); ?></legend>
	<?php 
       
		echo $this->Form->input('valor', array('class' => 'valor'));
		echo $this->Form->input('data', array('type' => 'text',  'class' => 'date'));
                echo $this->Form->input('tipos_id', array('options' => $tipos));
		echo $this->Form->input('origem');
		echo $this->Form->input('obervacao');
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Salvar', 'class' => 'success')); ?>
</div>

