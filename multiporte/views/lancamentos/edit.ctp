﻿<div class="lancamento">
<h2>Editar Lancamento</h2>
	<?php echo $form->create('Lancamento');?>
		<?php echo $form->input('id');?>
		<?php echo $form->input('centro_custo_id', array('options' => $centroCustos));?>
		<?php echo $form->input('categoria_id', array('options' => $categorias));?>
		<?php echo $form->input('conta_id', array('options' => $contas));?>
		<?php echo $form->input('descricao', array('class' => 'required'));?>
		<?php echo $form->input('data');?>
		<?php echo $form->input('valor', array('class' => 'required'));?>
		<?php echo $form->submit('Salvar');?>
	</form>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Excluir', array('action'=>'delete', $html->tagValue('Lancamento/id')), null, 'Você tem certeza que deseja excluir o lançamento #' . $html->tagValue('Lancamento/id') '?'); ?>
		<li><?php echo $html->link('Listar Lançamentos', array('action'=>'index')); ?></li>
		<li><?php echo $html->link('Mostrar Centro de Custos', array('controller'=> 'centro_custos', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Adicionar Centro de Custos', array('controller'=> 'centro_custos', 'action'=>'add')); ?></li>
		<li><?php echo $html->link('Mostrar Contas', array('controller'=> 'conta', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Adicionar Contas', array('controller'=> 'conta', 'action'=>'add')); ?></li>
		<li><?php echo $html->link('Mostrar Categorias', array('controller'=> 'categoria', 'action'=>'view')); ?></li>
		<li><?php echo $html->link('Adicionar Categorias', array('controller'=> 'categoria', 'action'=>'add')); ?></li>
	</ul>
</div>
