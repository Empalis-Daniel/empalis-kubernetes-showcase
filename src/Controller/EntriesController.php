<?php
	
	class EntriesController extends AppController
	{
		public $name = 'Entries';
		
		public function index() {
			if($this->request->is('post')) {
				if($this->Entry->save(
					$this->request->data,
					true,
					array('author', 'content')
				)) {
					$this->Session->setFlash('Dein Eintrag wurde gespeichert!');
					$this->request->data = array();
				} else {
					$this->Session->setFlash('Dein Eintrag konnte nicht gespeichert werden. Prüfe deine Angaben!');
				}
			}
			
			$entries = $this->Entry->find('all', array(
				'order' => 'created DESC'
			));
			
			$this->set('entries', $entries);
		}
	}
	
?>