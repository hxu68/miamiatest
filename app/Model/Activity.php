<?php
App::uses('AppModel', 'Model');
/**
 * Activity Model
 *
 */
class Activity extends AppModel {


    public $hasMany = array(
        'Visits' => array(
            'className'              => 'ActivitiesVisit',
            'foreignKey'             => 'Activities_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
