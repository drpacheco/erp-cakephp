<div class="centroCusto">
<h2>Mostrando Centro de Custo</h2>

	<dl>
		<dt>Id</dt>
		<dd>&nbsp;<?php echo $centroCusto['CentroCusto']['id']; ?></dd>
		<dt>Nome</dt>
		<dd>&nbsp;<?php echo utf8_decode($centroCusto['CentroCusto']['nome']); ?></dd>
		<dt>Descri��o</dt>
		<dd>&nbsp;<?php echo utf8_decode($centroCusto['CentroCusto']['descricao']); ?></dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link('Editar Centro de Custo',   array('action'=>'edit', $centroCusto['CentroCusto']['id'])); ?> </li>
		<li><?php echo $html->link('Excluir Centro de Custo', array('action'=>'delete', $centroCusto['CentroCusto']['id']), null, 'Voc� tem certeza que deseja excluir o centro de custo #' . $centroCusto['CentroCusto']['id'] . '?'); ?> </li>
		<li><?php echo $html->link('Listar Centros de Custo', array('action'=>'index')); ?> </li>
		<li><?php echo $html->link('Novo Centro de Custo', array('action'=>'add')); ?> </li>
	</ul>

</div>
<div class="related">
<h3>Lan�amentos Relacionados</h3>
<?php if(!empty($centroCusto['Lancamento'])):?>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Id</th>
		<th>Centro Custo</th>
		<th>Categoria</th>
		<th>Conta</th>
		<th>Descri��o</th>
		<th>Data</th>
		<th>Valor</th>
		<th>Criado</th>
		<th>Modificado</th>
		<th>A��es</th>
	</tr>
<?php foreach($centroCusto['Lancamento'] as $lancamento):?>
	<tr>
		<td><?php echo $lancamento['id'];?></td>
		<td><?php echo utf8_decode($lancamento['CentroCusto']['nome']);?></td>
		<td><?php echo utf8_decode($lancamento['Categoria']['nome']);?></td>
		<td><?php echo utf8_decode($lancamento['Conta']['nome']);?></td>
		<td><?php echo utf8_decode($lancamento['descricao']);?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['data']));?></td>
		<td><?php echo number_format($lancamento['valor'], 2, ',', '.'); ?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['created']));?></td>
		<td><?php echo date('d/m/Y', strtotime($lancamento['modified']));?></td>
		<td class="actions">
			<?php echo $html->link('Mostrar', array('controller'=> 'lancamentos', 'action'=>'view', $lancamento['id'])); ?>
			<?php echo $html->link('Editar', array('controller'=> 'lancamentos', 'action'=>'edit', $lancamento['id'])); ?>
			<?php echo $html->link('Excluir', array('controller'=> 'lancamentos', 'action'=>'delete', $lancamento['id']), null, 'Voc� tem certeza que deseja excluir o lan�amento #' . $lancamento['id'] . '?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link('Novo Lancamento', array('controller'=> 'lancamentos', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
