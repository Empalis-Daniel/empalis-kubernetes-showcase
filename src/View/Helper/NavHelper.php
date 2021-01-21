<?php
	
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
		);
		
		public function main() {
			return '<nav id="mainMenu">' . $this->nav($this->navItems) . '</nav>';
		}
		
		private function nav($items) {
			$content = '';
			
			foreach($items as $item) {
                $class = array();
				
                if($this->isActive($item)) {
                    $class[] = 'active';
                }
				
				$url = $this->getUrl($item);
				
                $content .= $this->Html->link($item['title'], $url, array(
					'escape' => false,
					'class' => implode(' ', $class)
				));
            }
			
			return $content;
		}
		
		private function getUrl($item) {
			$url = false;
			if(isset($item['url'])) {
				$url = $item['url'];
			}
			
			return $url;
		}
		
        private function isActive($item) {
			$url = $this->Html->url($this->getUrl($item));
            if($this->here == $url || ($url != '/' && strlen($this->here) > strlen($url) && substr($this->here, 0, strlen($url)) == $url)) {
                $active = true;
            } else {
                $active =  false;
            }
            return $active;
        }
	}
	
?>