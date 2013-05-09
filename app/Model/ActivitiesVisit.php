<?php
App::uses('AppModel', 'Model');
/**
 * ActivitiesVisit Model
 *
 * @property Visits $Visits
 * @property Activities $Activities
 */
class ActivitiesVisit extends AppModel {

    public $className = 'ActivitiesVisit';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Visits_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Activities_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Visits' => array(
			'className' => 'Visits',
			'foreignKey' => 'Visits_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Activities' => array(
			'className' => 'Activities',
			'foreignKey' => 'Activities_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
