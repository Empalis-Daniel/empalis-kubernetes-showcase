<h1>Das Gästebuch</h1>
<?php echo $this->Form->create(); ?>
	<?php echo $this->Form->input('author', array(
		'label' => 'Name',
		'placeholder' => 'Dein Name'
	)); ?>
	<?php echo $this->Form->input('content', array(
		'label' => 'Inhalt',
		'placeholder' => 'Was möchtest du ins Gästebuch schreiben?'
	)); ?>
<?php echo $this->Form->end('Absenden'); ?>