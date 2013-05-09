<?php
App::uses('AppModel', 'Model');
/**
 * Visit Model
 *
 * @property Projects $Projects
 */
class Visit extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Projects_id' => array(
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
		'Projects' => array(
			'className' => 'Projects',
			'foreignKey' => 'Projects_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public $hasAndBelongsToMany = array(
        'Employees' => array(
            'className'              => 'Employees',
            'joinTable'              => 'visits_employees',
            'foreignKey'             => 'Visits_id',
            'associationForeignKey'  => 'Employees_id',
            'unique'                 => true
        )
    );

    public $hasMany = array(
        'Activities' => array(
            'className'              => 'ActivitiesVisit',
            'foreignKey'             => 'Visits_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
