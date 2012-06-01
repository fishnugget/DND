<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PlacesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Places';

/**
 * Default helper
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function index($type = NULL) {
		//FAKE DATA ARRAY TO HELP LAYOUT
		$list_items = array(
			0 => array(
				'image' => 'kayne.png',
				'title' => 'Kayne Steakhouse',
				'body' => ' Cras mattis augue sit amet metus gravida egestas. Pellentesque facilisis nisl rutrum risus ornare adipiscing. Nullam consequat mollis justo, nec rhoncus justo pharetra at. Proin massa ligula, sollicitudin sed tincidunt eu, pharetra sit amet ante. Quisque quam urna, suscipit dapibus imperdiet ac, consectetur pretium eros. Sed ut enim est, id vehicula orci.'
			),
			1 => array(
				'image' => 'kayne.png',
				'title' => 'Kayne Steakhouse',
				'body' => ' Cras mattis augue sit amet metus gravida egestas. Pellentesque facilisis nisl rutrum risus ornare adipiscing. Nullam consequat mollis justo, nec rhoncus justo pharetra at. Proin massa ligula, sollicitudin sed tincidunt eu, pharetra sit amet ante. Quisque quam urna, suscipit dapibus imperdiet ac, consectetur pretium eros. Sed ut enim est, id vehicula orci.'
			),
			2 => array(
				'image' => 'kayne.png',
				'title' => 'Kayne Steakhouse',
				'body' => ' Cras mattis augue sit amet metus gravida egestas. Pellentesque facilisis nisl rutrum risus ornare adipiscing. Nullam consequat mollis justo, nec rhoncus justo pharetra at. Proin massa ligula, sollicitudin sed tincidunt eu, pharetra sit amet ante. Quisque quam urna, suscipit dapibus imperdiet ac, consectetur pretium eros. Sed ut enim est, id vehicula orci.'
			),
			3 => array(
				'image' => 'kayne.png',
				'title' => 'Kayne Steakhouse',
				'body' => ' Cras mattis augue sit amet metus gravida egestas. Pellentesque facilisis nisl rutrum risus ornare adipiscing. Nullam consequat mollis justo, nec rhoncus justo pharetra at. Proin massa ligula, sollicitudin sed tincidunt eu, pharetra sit amet ante. Quisque quam urna, suscipit dapibus imperdiet ac, consectetur pretium eros. Sed ut enim est, id vehicula orci.'
			)
		);
		
		$this->set('list',$list_items);
	}
}
