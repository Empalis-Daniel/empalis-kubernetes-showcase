<h1>Das Gästebuch</h1>
<?php echo $this->Session->flash(); ?>
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
<?php foreach($entries as $entry) { ?>
	<article class="entry">
		<div class="meta">
			<?php echo $entry['Entry']['author']; ?>
			<time><?php echo date('j. n. Y \u\m H:i \U\h\r', strtotime($entry['Entry']['created'])); ?></time>
		</div>
		<div class="content">
			<?php echo $entry['Entry']['content']; ?>
		</div>
	</article>
<?php } ?>