<?php
App::uses('Component', 'Controller');
/**
 * 
 * Search function
 * @author gilang
 *
 */
class SearchComponent extends Component {
	var $controller = NULL;
	var $modelClass = NULL;
	var $fields 	= NULL;
	
	/**
	 * 
	 * Get model name & load model fields
	 * @param $controller
	 */
    public function init(&$controller, $modelClass = NULL) {
    	$this->controller 	= $controller;
    	if(empty($modelClass)) {
        	$this->modelClass = $this->controller->modelClass;
    	} else {
    		$this->modelClass = $modelClass;
    	}
        $this->fields = ($this->controller->{$this->modelClass}->schema());
    }
    
    /**
     * 
     * Format query conditions
     * @param array $data
     */
    public function getConditions($data) {
    	$conditions = array();
    	if(!empty($data)) {
	    	foreach($data[$this->modelClass] as $key => $value) {
	    		if(strlen($value) > 0) {
		    		switch($this->fields[$key]['type']) {
						case "string":
		                	$conditions[$this->modelClass . "." .$key . " LIKE"] = "%".trim($value)."%";						
		                    break;
						case "integer":
		                	$conditions[$this->modelClass . "." .$key] =  $value;
		                    break;
						case "boolean":
		                	$conditions[$this->modelClass . "." .$key] =  $value;
		                    break;    
						case "float":
		                	$conditions[$this->modelClass . "." .$key] =  $value;
		                    break;    
						default:
							$conditions[$this->modelClass . "." .$key . " LIKE"] = "%".trim($value)."%";
							break;
		    		}
	    		}
	    	}
    	}
		
		$new_conditions = array();
		foreach($conditions as $key => $condition) {
			$key_replacement = str_replace(" LIKE", "", $key);
			if(in_array($key_replacement, array('Document.title', 'Document.description'))) {
				$new_conditions['OR'][$key] = $condition;
			} else {
				$new_conditions[$key] = $condition;
			}
		}

    	return $new_conditions;
    }
}