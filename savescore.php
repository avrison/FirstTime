<?php
	/**
	 * Implements of hook_services_resources().
	 */
	function score_services_resources() {
	  $api = array(
	    'score' => array(
	      'operations' => array(
	        'retrieve' => array(
	          'help' => 'Retrieves score of leaderboard',
	          'callback' => 'score_index',
	          'access callback' => 'user_access',
	          'access arguments' => array('access content'),
	          'access arguments append' => FALSE,
	          'args' => array(
	            array(
			 		'name' => 'id',
			 		'type' => 'int',
			 		'description' => 'The id of the score to get',
			 		'source' => array('path' => '0'),
			 		'optional' => FALSE,
			 	),
	          ),
	        ),
	        'index' => array(
				'help' => 'Retrieves a listing of score',
				'callback' => 'score_index',
				'access callback' => 'user_access',
	 			'access arguments' => array('access content'),
	 			'access arguments append' => FALSE,
	 			'args' => array(
	             	array(
				 		'name' => 'id',
				 		'type' => 'int',
				 		'description' => 'The id of the score to get',
				 		'source' => array('path' => '0'),
				 		'optional' => FALSE,
				 	),
				),
			),
	      ),
	    ),
	  );
	  
	  return $api;
	}
	
	function _score_retrieve() {
		return score_index();
	}
	
	function score_index() {
		$query = db_select('leaderboard', 'l');
		$query->fields('l', array('id', 'username', 'gameid', 'scores', 'created_at'));
		$item = $query->execute()->fetchAll();
      
		return $item;
	}
?>