class NavHelper extends AppHelper
{
	public $name = 'Nav';
	
	public $helpers = array('Html');
	
	private $navItems = array(
		array(
			'title' => 'Startseite',
			'url' => array('controller' => 'pages', 'action' => 'display', 'home')
		),
		array(
			'title' => 'Gästebuch',
			'url' => array('controller' => 'entries', 'action' => 'index')
		),
		array(
			'title' => 'Beispiele',
			'url' => array('controller' => 'pages', 'action' => 'display', 'beispiele')
		)
	);
	
	[...]
	
}