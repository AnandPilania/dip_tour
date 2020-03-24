<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	/**
	 * Reference to the CI singleton
	 *
	 * @var	object
	 */
	private static $instance;

	/**
	 * CI_Loader
	 *
	 * @var	CI_Loader
	 */
	public $load;

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');
		$this->load->initialize();
		log_message('info', 'Controller Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Get the CI singleton
	 *
	 * @static
	 * @return	object
	 */
	public static function &get_instance()
	{
		return self::$instance;
	}

	public function logToFile($filename,$msg){
		$file_location = $_SERVER['DOCUMENT_ROOT']."/tmp/code_logs/".$filename;
		$file = fopen($file_location,'a+');
		fwrite($file, $msg."\n");
        fclose($file);
	}

	public function deleteFile($filename){
		unlink($filename);
	}

	public function uploadImageFileToPath($files, $type, $name){
		$target_dir = $type."/";
		$save_to_db = "/tmp/".$type."/".$files[$name]["name"];
        $target_file = UPLOAD_FILE_PATH ."/tmp/". $target_dir . basename($files[$name]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if (isset($files[$name]) && empty($files[$name]['error'])) {
			if ($files[$name]["size"] > 5000000) {
    			$message = "Sorry, your file is too large.";
                $this->session->set_flashdata('item', $message);
    			$uploadOk = 0;
    			return 0;
			}

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    			$message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    			$this->session->set_flashdata('item', $message);
    			$uploadOk = 0;
    			return 0;
			}

			if ($uploadOk != 0) {
	    		if (move_uploaded_file($files[$name]["tmp_name"], $target_file)) {
	        		return $save_to_db;
			    } else {
			        $message = "Sorry, there was an error uploading your file.";
			        $this->session->set_flashdata('item', $message);
			        return 0;
			    }
		  	}
		}
		else if(!empty($files[$name]['error'])){
			$message = "Sorry, error uploading file.";
            $this->session->set_flashdata('item', $message);
    		$uploadOk = 0;
    		return 0;			
		}
	}

}
