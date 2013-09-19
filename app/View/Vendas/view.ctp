<div class="vendas view">
<h2><?php  echo __('Venda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($this->Number->currency($venda['Venda']['valor_total'], 'Br')); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Situação'); ?></dt>
		<dd>
			<?php switch ($venda['Venda']['situacao_financeira']){
                    
                                    case true:
                                        echo 'Pago';
                                        break;
                                    case false:
                                        echo 'Pendente';
                                        break;
                                    
                    
                                } ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['quantidade']); ?>
			&nbsp;
		</dd>
                <dt><?php echo __('Tipo'); ?></dt>
		<dd>
                    
			<?php switch ($venda['Venda']['tipo']){
                    
                                    case 1:
                                        echo $tipos[1];
                                        break;
                                    case 2:
                                        echo $tipos[2];
                                        break;
                                    case 3;
                                        echo $tipos[3];
                                        break;
                    
                        }
                        ?>
			&nbsp;
		</dd>
                
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($this->Locale->date($venda['Venda']['data'], true)); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($venda['Venda']['observacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

