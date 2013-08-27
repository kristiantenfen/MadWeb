<?php
App::uses('AppModel', 'Model');
/**
 * Custo Model
 *
 */
class Custo extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'test';
        
        
        public $belongsTo  = array(
        'Tipo' => array(
            'className' => 'Tipo',
            'foreignKey' => 'tipos_id'
        )
    );

        /**
 * Display field
 *
 * @var string
 */
	public $displayField = 'origem';

}
