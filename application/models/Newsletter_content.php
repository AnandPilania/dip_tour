<?php
Error_Reporting(0);
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

class Newsletter_content extends CI_Model{
	public function __construct()
	{
		$this->dip = $this->load->database("dip", TRUE);
	}

	
	public function getTableName()
	{
		return "newsletter_content";
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
	
	public function newsletterInsert($data){
		
		return $this->dip->insert($this->getTableName(), $data);
	
	}
	
	
	public function get_mail($getId){
		$this->dip->where('id' , $getId);
		$query = $this->dip->get($this->getTableName());
		$result = array();
		foreach ($query->result() as $row)
		{
		        $result[] = $row->subscriber;
		}
		return $result; 
	}
	
	public function getDataId($id){
		$this->dip->where('id' , $id);
		$query = $this->dip->get($this->getTableName());
		$result = $query->result();
		return $result; 
	}


	public function edit($data){
		$this->dip->where('id',$data['id']);
		$update['subscriber'] = $data['subscriber'];
		$update['newsletter_title'] = $data['newsletter_title'];
		$update['newsletter_content'] = $data['newsletter_content'];
		$this->dip->update($this->getTableName(), $update);
	}

	
}
