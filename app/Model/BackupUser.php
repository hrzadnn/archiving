<?php
class User extends AppModel {
	public $actsAs = array('Acl' => array('type' => 'requester'));

	public function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}

	var $validate = array(
        'first_name' => array(
            'length' => array(
                'rule'      => array('minLength', 5),
                'message'   => 'Please enter your last name (more than 5 chars)',
                'required'  => true,
			),
		),
        'last_name' => array(
            'length' => array(
                'rule'      => array('minLength', 5),
                'message'   => 'Please enter your last name (more than 5 chars)',
                'required'  => true,
			),
		),
        'username' => array(
            'length' => array(
                'rule'      => array('minLength', 5),
                'message'   => 'Must be more than 5 characters',
                'required'  => true,
			),
            'alphanum' => array(
                'rule'      => 'alphanumeric',
                'message'   => 'May only contain letters and numbers',
			),
            'unique' => array(
                'rule'      => 'isUnique',
                'message'   => 'Already taken',
			),
		),
        'email' => array(
            'email' => array(
                'rule'      => 'email',
                'message'   => 'Must be a valid email address',
			),
            'unique' => array(
                'rule'      => 'isUnique',
                'message'   => 'Already taken',
			),
		),
        'password' => array(
            'empty' => array(
                'rule'      => 'notEmpty',
                'message'   => 'Must not be blank',
                'required'  => true,
			),
		),
        'group_id' => array(
            'empty' => array(
                'rule' => 'notEmpty',
                'message' => 'Please select one role.',
                'required' => true,
			),
		),
        'password_confirm' => array(
            'compare'    => array(
                'rule'      => array('password_match', 'password', false),
                'message'   => 'The password you entered does not match',
                'required'  => true,
			),
            'length' => array(
                'rule'      => array('between', 6, 20),
                'message'   => 'Use between 6 and 20 characters',
			),
            'empty' => array(
                'rule'      => 'notEmpty',
                'message'   => 'Must not be blank',
			),
		),
	);
	
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	 

	/**
	 * Ensure two password fields match
	 *
	 * @param   array   data provided by the controller
	 * @param   string  the original (already hashed) password fieldname
	 * @param   bool    whether the password field has been hashed,
	 *                  only hashed when a username input is present
	 */
	function password_match($data, $password_field, $hashed = true)
	{
		$password         = $this->data[$this->alias][$password_field];
		$keys             = array_keys($data);
		$password_confirm = $hashed ? Security::hash($data[$keys[0]], null, true) : $data[$keys[0]];

		return $password === $password_confirm;
	}

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}
?>

