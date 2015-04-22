<?php

class 2garin {

	/**
	 * List of all config values
	 *
	 * @var array
	 */
	private var _params;

	/**
	 * Constructor
	 *
	 * Sets the $config data from the primary config.php file as a class variable
	 *
	 * @access   public
	 * @param   Associaive array	the builder params
	 */
	function __construct($params)
	{
		echo '__construct()';
		$this->_params = $params;
	}

	function build()
	{
		echo 'build()';
	}

}

// END 2garin class

/* End of file 2garin.php */
/* Location: lib/2garin.php */