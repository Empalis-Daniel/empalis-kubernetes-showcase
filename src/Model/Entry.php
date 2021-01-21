<?php
	
	class Entry extends AppModel
	{
		public $name = 'Entry';
		
		public $validate = array(
			'author' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'message' => 'Bitte gib deinen Namen ein!'
			),
			'content' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'message' => 'Was möchtest du ins Gästebuch schreiben?'
			)
		);
		
		public function beforeSave($options = array()) {
			if(!isset($this->id)) {
				$this->data['Entry']['ip'] = $_SERVER['REMOTE_ADDR'];
				
				$this->data['Entry']['content'] = preg_replace('|(?<!</p>)\s*\n|', "<br />", (preg_replace('/\n?(.+?)(\n\n|\z)/s', "<p>$1</p>", (preg_replace("/\n\n+/", "\n\n", preg_replace("/(\r\n|\n|\r)/", "\n", $this->data['Entry']['content']))))));
				
			}
			
			return parent::beforeSave($options);
		}
	}
	
?>