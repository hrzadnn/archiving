<?php
App::uses('Validation', 'Utility');

class CakeValidationRule {

protected $_valid = true;

protected $_recordExists = false;
 
protected $_rule = null;
 
protected $_ruleParams = array();
 
protected $_passedOptions = array();

public $rule = 'blank';

public $required = null;

public $allowEmpty = null;
 
public $on = null;

public $last = true;
 
public $message = null;

public function __construct($validator = array()) {
$this->_addValidatorProps($validator);
}
 
public function isValid() {
    if (!$this->_valid || (is_string($this->_valid) && !empty($this->_valid))) {
    return false;
    }
  return true;
 }

public function isEmptyAllowed() {
  return $this->skip() || $this->allowEmpty === true;
}
 
public function isRequired() {
  if (in_array($this->required, array('create', 'update'), true)) {
    if ($this->required === 'create' && !$this->isUpdate() || $this->required === 'update' && $this->isUpdate()) {
        return true;
        }
        else 
        {
         return false;
        }
  }
    return $this->required;
  }

  public function checkRequired($field, &$data) {
  return (
  (!array_key_exists($field, $data) && $this->isRequired() === true) ||
  (
  array_key_exists($field, $data) && (empty($data[$field]) &&
  !is_numeric($data[$field])) && $this->allowEmpty === false
  )
  );
  }
 
  public function checkEmpty($field, &$data) {
 if (empty($data[$field]) && $data[$field] != '0' && $this->allowEmpty === true) {
  return true;
  }
  return false;
  }
 
  public function skip() {
  if (!empty($this->on)) {
  if ($this->on === 'create' && $this->isUpdate() || $this->on === 'update' && !$this->isUpdate()) {
  return true;
  }
  }
  return false;
  }
 
  public function isLast() {
  return (bool)$this->last;
  }
 
  public function getValidationResult() {
  return $this->_valid;
  }
 
  protected function _getPropertiesArray() {
  $rule = $this->rule;
  if (!is_string($rule)) {
  unset($rule[0]);
  }
  return array(
  'rule' => $rule,
  'required' => $this->required,
  'allowEmpty' => $this->allowEmpty,
  'on' => $this->on,
  'last' => $this->last,
  'message' => $this->message
  );
  }
 
  public function isUpdate($exists = null) {
  if ($exists === null) {
  return $this->_recordExists;
  }
  return $this->_recordExists = $exists;
  }
 
  public function process($field, &$data, &$methods) {
  $this->_valid = true;
  $this->_parseRule($field, $data);
 
  $validator = $this->_getPropertiesArray();
  $rule = strtolower($this->_rule);
  if (isset($methods[$rule])) {
  $this->_ruleParams[] = array_merge($validator, $this->_passedOptions);
  $this->_ruleParams[0] = array($field => $this->_ruleParams[0]);
  $this->_valid = call_user_func_array($methods[$rule], $this->_ruleParams);
  } elseif (class_exists('Validation') && method_exists('Validation', $this->_rule)) {
  $this->_valid = call_user_func_array(array('Validation', $this->_rule), $this->_ruleParams);
  } elseif (is_string($validator['rule'])) {
  $this->_valid = preg_match($this->_rule, $data[$field]);
  } else {
  trigger_error(__d('cake_dev', 'Could not find validation handler %s for %s', $this->_rule, $field), E_USER_WARNING);
  return false;
  }
 
  return true;
  }
 
  public function reset() {
  $this->_valid = true;
  $this->_recordExists = false;
  }
 
  public function getOptions($key) {
  if (!isset($this->_passedOptions[$key])) {
  return null;
  }
  return $this->_passedOptions[$key];
  }
 
  protected function _addValidatorProps($validator = array()) {
  if (!is_array($validator)) {
  $validator = array('rule' => $validator);
  }
  foreach ($validator as $key => $value) {
  if (isset($value) || !empty($value)) {
  if (in_array($key, array('rule', 'required', 'allowEmpty', 'on', 'message', 'last'))) {
  $this->{$key} = $validator[$key];
  } else {
  $this->_passedOptions[$key] = $value;
  }
  }
  }
  }
 
  protected function _parseRule($field, &$data) {
  if (is_array($this->rule)) {
  $this->_rule = $this->rule[0];
  $this->_ruleParams = array_merge(array($data[$field]), array_values(array_slice($this->rule, 1)));
  } else {
  $this->_rule = $this->rule;
  $this->_ruleParams = array($data[$field]);
 }
  }

}
