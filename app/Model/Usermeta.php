<?php
App::uses('AppModel', 'Model');
/**
 * Usermeta Model
 *
 */
class Usermeta extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'firstname';
        public $belongsTo = 'User';
}
