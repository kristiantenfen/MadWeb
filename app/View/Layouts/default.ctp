<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'MADWeb');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('charisma-app');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('opa-icons');
		echo $this->Html->css('padrao');
                echo $this->Html->css('style');
		echo $this->Html->css('ui/jquery-ui-1.10.3.custom.min');
		
		
		echo $this->Html->script('jquery-1.9.1');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('padrao');
		echo $this->Html->script('jquery.maskmoney');
		echo $this->Html->script('ui/jquery-ui-1.10.3.custom.min');
		echo $this->Html->script('mask');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	<script type="text/javascript"> var baseUrl = '<?php echo $baseUrl;?>';</script>
</head>
<body> 
<div class="navbar">
		
		
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Menu</li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/', true)?>"><i class="icon-home"></i><span class="hidden-tablet"> Início</span></a></li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/vendas', true)?>"><i class="icon-user"></i><span class="hidden-tablet"> Vendas</span></a></li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/compras', true)?>"><i class="icon-briefcase"></i><span class="hidden-tablet"> Compras</span></a></li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/custos', true)?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Custos</span></a></li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/cheques', true)?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> Cheques</span></a></li>
						<li class="nav-header hidden-tablet">Configurações</li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/tipos', true)?>"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tipos de custos</span></a></li>
<!--						<li class="nav-header hidden-tablet">Módulos</li>
						<li><a class="ajax-link" href="<?php echo $this->Html->url('/relatorios', true)?>"><i class="icon-align-justify"></i><span class="hidden-tablet"> Relatorios</span></a></li>-->
					</ul>
					
				</div><!--/.well -->
		</div><!--/span-->
			<!-- left menu ends -->

	</div>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content');?>
		</div>
		
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
