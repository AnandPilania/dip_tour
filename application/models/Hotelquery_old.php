<?php

/**
 * 
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Model
 * @author     Prashant Swami <prashant.swami@samco.in>
 * 
 */

class Hotelquery extends CI_Model{
	public function __construct()
	{
		$this->dip = $this->load->database("dip", TRUE);
	}

	/**
	 * @description get Table name
	 * @param no params
	 * @author Suprabha Mishra
	 * @date_created 13-08-2019
	 * @date_modified 13-08-2019
	 * 
	 * @return array
	 */

	public function getTableName()
	{
		return "hotel_query";
	}

	/**
	 * @description get user data according username
	 * @param String $username
	 * @author Suprabha Mishra
	 * @date_created 04-10-2019
	 * @date_modified 04-10-2019
	 * 
	 * @return Array $results
	 */

	public function insertData($data){
		return $this->dip->insert($this->getTableName(), $data);
	}


	public function get(){
		$query = $this->dip->get($this->getTableName());
		$result = array();
		foreach ($query->result() as $row)
		{
		        $result[] = $row;
		}
		return $result; 

	}
}
