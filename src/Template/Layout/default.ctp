<?php
    
    if(!isset($this->pageTitle) || $this->pageTitle == '') {
        $this->pageTitle = Configure::read('Config.long_title');
    } else {
        $this->pageTitle .= ' - ' . Configure::read('Config.site_title');
    }
    
    if(!isset($this->pageDescription) || $this->pageDescription == '') {
        $this->pageDescription = Configure::read('Config.description');
    }
    
    if(!isset($this->pageKeywords) || $this->pageKeywords == '') {
        $this->pageKeywords = Configure::read('Config.keywords');
    }
    
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->pageTitle; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->meta(
            'keywords',
            $this->pageKeywords
        );
        echo $this->Html->meta(
            'description',
            $this->pageDescription
        );
        echo $this->Html->meta(array('name' => 'author', 'content' => 'Lars Ebert'));
		echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width'));
        
        echo $this->Html->css('main');
	?>
</head>
<body<?php if(isset($this->bodyClass)) { echo ' class="' . h($this->bodyClass) . '"'; } ?>>
	<div id="root">
		<!--[if lt IE 7]>
		<p class="chromeframe">Sie verwenden einen veralteten Browser. Bitte <a href="http://browsehappy.com/">laden Sie einen aktuellen Browser</a> oder <a href="http://www.google.com/chromeframe/?redirect=true">aktivieren Sie Google Chrome Frame</a>, um gut und sicher zu surfen.</p>
		<![endif]-->
		
		<header>
			<div class="container">
				<a href="#" id="logo"><strong>Cope</strong>dio</a>
				<nav id="mainMenu">
					<a href="#">Home</a>
					<a href="#">Beispiele</a>
					<a href="#">Blog</a>
					<a href="#">Kontakt</a>
				</nav>
				<img id="eyeCatcher" src="img/header.jpg" />
			</div>
		</header>
		
		<section id="content" class="container">
			<?php echo $this->fetch('content'); ?>
			<div id="root_footer"></div>
		</section>
	</div>
	
	<div id="footer">
		<footer>
			<div class="container">
				<div class="columns">
					<div class="column">
						Footer Spalte 1
					</div>
					<div class="column">
						Footer Spalte 2
					</div>
					<div class="column">
						Footer Spalte 3
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>