<?php

	function textup_services_resources() {
		
		$api = array(
			'textup' => array(
				'operations' => array(
					'index' => array(
						'help' => 'List all uploaded text',
						'callback' => '_textup_index',
						'access callback' => '_textup_service_access',
						'args' => array(
							array(
								'name' => 'name',
								'type' => 'string',
								'description' => 'List all uploaded text',
								'source' => array('path' => '0'),
								'optional' => TRUE,
							),
						),
					),
					'create' => array(
						'help' => 'Upload text files',
						'callback' => '_textup_upload',
						'access callback' => '_textup_service_access',
						'args' => array(
							array(
								'name' => 'data',
								'type' => 'array',
								'description' => 'Upload text files',
								'source' => 'data',
								'optional' => FALSE,
							),
						),
					),
				),
			),
		);
		
		return $api;
	}

	function _textup_service_access() {
		if(user_is_anonymous() == TRUE) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function _textup_index() {
		$query = db_select('file_managed', 'fm');
		$query->fields('fm');
		$item = $query->execute()->fetchAll();
      
		return $item;
		
		$formated = array();
		
		/*
foreach($item as $i) {
			$formated['uri'] = file_create_url($i[0]["uri"]);
		}
		
		return $formated;
*/
	}

	function _textup_upload($data) {
		
		
		$name = $_FILES['file']['name'];
		$type = $_FILES['file']['type'];
		$size = $_FILES['file']['size'];
		$allowed = array('txt');
		$ext = pathinfo($name, PATHINFO_EXTENSION);
		
		if(in_array($ext, $allowed)) {
			$item["name"] = $name;
			$item["type"] = $type;
			$item["size"] = $size;
			
			$validators = array('file_validate_extensions' => array());
			
			ob_start();
			readfile($_FILES['file']['tmp_name']);
			$data = ob_get_clean();
			
			
			if(file_save_data($data, 'public://text/'.$name)) {
				return true;
			} else {
				return false;
			}
		} else {
			return 'File not supported';
		}
		
		// FAILED METHOD
		
		/*
		$file = file_save_upload($_FILES['file'], $validators, 'public://file', FILE_EXISTS_RENAME);
		*/
		
		/*
if ($wrapper = file_stream_wrapper_get_instance_by_uri('public://')) {
			$realpath = $wrapper->realpath();
		}
*/
		
		/*
if (move_uploaded_file($_FILES["file"]["tmp_name"], 'uploaded/')) { 
			return "Uploaded file moved"; 
		} else { 
			return "Move failed"; 
		}
*/
		
		/*
if (is_dir($realpath) && is_writable($realpath)) {
		    return true;
		} else {
		    return 'Upload directory is not writable, or does not exist.';
		}
*/
		
		/*
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
		   echo "File ". $_FILES['file']['name'] ." uploaded successfully.\n";
		   echo "Displaying contents\n";
		   readfile($_FILES['file']['tmp_name']);
		} else {
		   echo "Possible file upload attack: ";
		   echo "filename '". $_FILES['file']['tmp_name'] . "'.";
		}
*/
		
	}

?>