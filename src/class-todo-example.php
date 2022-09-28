<?php
/**
 * This is class is A to Z
 *
 * @author Name <csemazharulislam@email.com>
 * @package Clean code
 */

namespace Clean\Code;

/**
 * Example Class
 */
class Todo_Example {
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->todo = 'This is a todo example';
	}
	/**
	 * Get todo function
	 */
	public function get_todo() {
		return $this->todo;
	}

}
