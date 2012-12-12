<div class="images index">
	<h2><?php __('Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('galeria_id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('ativo');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('imagem_file_name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($images as $image):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $image['Image']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($image['Galeria']['id'], array('controller' => 'galerias', 'action' => 'view', $image['Galeria']['id'])); ?>
		</td>
		<td><?php echo $image['Image']['titulo']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['ativo']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['descricao']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['imagem_file_name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Image', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Galerias', true), array('controller' => 'galerias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeria', true), array('controller' => 'galerias', 'action' => 'add')); ?> </li>
	</ul>
</div>