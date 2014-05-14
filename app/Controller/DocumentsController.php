<?php
App::uses('AppController', 'Controller');
/**
 * Documents Controller
 *
 * @property Document $Document
 */
class DocumentsController extends AppController {
	
	public $name 		= 'Documents';
	public $uses 		= array('Document' , 'Classification');
	public $helpers 	= array('Time');
	public $paginate 	= array('limit' => 20);
	public $components 	= array('Search', 'Prg');
	var $controller 	= NULL;
	var $modelClass 	= NULL;
	var $fields 		= NULL;
	
/**
 * index method
 *
 * @return void
 */
	public function index() {    
	
		$this->Search->init($this);

    	$this->Prg->redirect();
    	$this->Prg->decode();
    	
    	if(isset($this->request->data['Document']['title'])) {
    		$this->request->data['Document']['description'] = $this->request->data['Document']['title'];
    	}
    	
		$conditions = $this->Search->getConditions($this->request->data);
		$this->paginate['conditions'] = $conditions;
		
		// Unset unused search fields
		unset($this->Search->fields['user_id']);
		unset($this->Search->fields['description']);
		unset($this->Search->fields['classification_id']);
		unset($this->Search->fields['amount_docs']);
		unset($this->Search->fields['box_number']);
		unset($this->Search->fields['folder_number']);
		unset($this->Search->fields['created']);
		unset($this->Search->fields['modified']);		
		
		// Search variables setter
		$this->set('model', $this->Search->modelClass);
		$this->set('fields', $this->Search->fields);
	
		$this->Document->recursive = 0;
		$this->set('documents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
		$this->set('document', $this->Document->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
public function add() {
		if ($this->request->is('post')) {
			$this->Classification->recursive = 0;
			
			$primaryClassification 	= "";
			$archiveId	 			= "";
			$classificationId 		= "";
			
			// Primary Classification
			if(isset($this->request->data['Document']['classification_id'])) {
				$primaryClassification = $this->Classification->find('first', array(
					'conditions' => array(
						'Classification.id' => $this->request->data['Document']['classification_id']	
					)
				));
				
				$classificationId .= $this->request->data['Document']['classification_id'];
				$archiveId .= $primaryClassification['Classification']['master_id'];
			}
			
			// Secondary Classification
			$secondaryClassification = "";
			if(isset($this->request->data['Document']['secondary_classification_id'])) {
				$secondaryClassification = $this->Classification->find('first', array(
					'conditions' => array(
						'Classification.id' 		=> $this->request->data['Document']['secondary_classification_id'],
						'Classification.parent_id'	=> $this->request->data['Document']['classification_id']
					)
				));
				
				$classificationId .= "." . $this->request->data['Document']['secondary_classification_id'];
				$archiveId .= "." . $secondaryClassification['Classification']['master_id'];
			}
			
			// Tertiary Classification
			$tertiaryClassification = "";
			if(isset($this->request->data['Document']['tertiary_classification_id'])) {
				$tertiaryClassification = $this->Classification->find('first', array(
					'conditions' => array(
						'Classification.id' 		=> $this->request->data['Document']['tertiary_classification_id'],
						'Classification.parent_id'	=> $this->request->data['Document']['secondary_classification_id']
					)
				));
				
				$classificationId .= "." . $this->request->data['Document']['tertiary_classification_id'];
				if($tertiaryClassification['Classification']['master_id']) {
					$archiveId .= "." . $tertiaryClassification['Classification']['master_id'];
				} else {
					$archiveId .= "." . $tertiaryClassification['Classification']['name'];
				}
			}
			
			$this->request->data['Document']['classification_id'] = $classificationId;
			$this->request->data['Document']['archive_id'] = $archiveId;
			
			$this->request->data['Document']['user_id'] = $_SESSION['Auth']['User']['id'];
			
			unset($this->request->data['Document']['secondary_classification_id']);
			unset($this->request->data['Document']['tertiary_classification_id']);
				
			$this->Document->create();
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'flash/error');
			}
		}
		
		$primaryClassifications = $this->Document->Classification->find('list', array(
			'conditions' => array('parent_id' => '0')
		));
		
		$parentDocuments = $this->Document->ParentDocument->find('list');
		
		$this->set(compact('primaryClassifications', 'parentDocuments'));
	}
	
/**
 * 
 * To get secondary classification for drop down menu
 */	
		public function secondary_classifications() { 
			if(isset($this->request->data['Document']['classification_id'])) {
				$parent_id = $this->request->data['Document']['classification_id'];
			}
			
			if(isset($this->request->data['Document']['secondary_classification_id'])) {
				$parent_id = $this->request->data['Document']['secondary_classification_id'];
			}
			
			$secondaryClassifications = $this->Document->Classification->find('list', array(
				'conditions' => array('parent_id' => $parent_id)
			));

            $this->set(compact('secondaryClassifications'));
			$this->layout = 'ajax';

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid document'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Document->id = $id;
			$archiveId	 		= "";
			$classificationId 	= "";
			
			// Primary Classification
			if(isset($this->request->data['Document']['classification_id'])) {
				$primaryClassification = $this->Classification->find('first', array(
					'conditions' => array(
						'Classification.id' => $this->request->data['Document']['classification_id']	
					)
				));
				
				$classificationId .= $this->request->data['Document']['classification_id'];
				$archiveId .= $primaryClassification['Classification']['master_id'];
			}
			
			// Secondary Classification
			$secondaryClassification = "";
			if(isset($this->request->data['Document']['secondary_classification_id'])) {
				$secondaryClassification = $this->Classification->find('first', array(
					'conditions' => array(
						'Classification.id' 		=> $this->request->data['Document']['secondary_classification_id'],
						'Classification.parent_id'	=> $this->request->data['Document']['classification_id']
					)
				));
				
				$classificationId .= "." . $this->request->data['Document']['secondary_classification_id'];
				$archiveId .= "." . $secondaryClassification['Classification']['master_id'];
			}
			
			// Tertiary Classification
			$tertiaryClassification = "";
			if(isset($this->request->data['Document']['tertiary_classification_id'])) {
				$tertiaryClassification = $this->Classification->find('first', array(
					'conditions' => array(
						'Classification.id' 		=> $this->request->data['Document']['tertiary_classification_id'],
						'Classification.parent_id'	=> $this->request->data['Document']['secondary_classification_id']
					)
				));
				
				$classificationId .= "." . $this->request->data['Document']['tertiary_classification_id'];
				if($tertiaryClassification['Classification']['master_id']) {
					$archiveId .= "." . $tertiaryClassification['Classification']['master_id'];
				} else {
					$archiveId .= "." . $tertiaryClassification['Classification']['name'];
				}
			}
			
			$this->request->data['Document']['classification_id'] = $classificationId;
			$this->request->data['Document']['archive_id'] = $archiveId;
			
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Unable to update your document. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->Document->recursive = 0;
			$this->request->data = $this->Document->find('first', $options);
			
			$classificationIds = explode(".", $this->request->data['Document']['classification_id']);
			if(isset($classificationIds[0])) {
				$this->request->data['Document']['classification_id'] = $classificationIds[0];

				$secClassifications = $this->Classification->find('list', array(
					'conditions' => array(
						'parent_id' => $classificationIds[0]
					)
				));
				$secClassificationIds = array_keys($secClassifications);
				
				$terClassifications = $this->Classification->find('list', array(
					'conditions' => array(
						'parent_id' => $classificationIds[1]
					)
				));
			}
				
			if(isset($classificationIds[1]))
				$this->request->data['Document']['secondary_classification_id'] = $classificationIds[1];
			
			if(isset($classificationIds[2]))	
				$this->request->data['Document']['tertiary_classification_id'] 	= $classificationIds[2];
			
		}
		
		//Dropdown menu for classifications
		$primaryClassifications = $this->Classification->find('list', array(
			'conditions' => array('parent_id' => '0')
		));

		$parentDocuments = $this->Document->ParentDocument->find('list');
		$this->set(compact('primaryClassifications', 'secClassifications', 'terClassifications', 'parentDocuments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	
	    if ($this->Document->delete($id)) {
	        $this->Session->setFlash(__('The post with id: %s has been deleted.', $id));
	        $this->redirect(array('action' => 'index'));
	    }
	}

	function search() {
			
		$this->Document->recursive = 0;
		$this->set('documents', $this->paginate());
	}
}

?>