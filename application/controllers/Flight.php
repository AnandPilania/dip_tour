<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index(){
		$this->load->view('Flight/index');
	}

	public function add(){
		$data = $this->input->post();
        /*Array ( [flight_search_type] => One-Way [origin] => [destination] => [departure_date] => 11/16/2019 [adult_count] => 5 [child_count] => 3 [infant_count] => 1 [class] => Economy [airline] => Select Airline [return_date] => 11/10/2019 [non_stop_only] => [search_time] => ) */
        if(isset($data['non_stop_only'])){
        	$data['non_stop_only']= 'Yes';
        }else{
        	$data['non_stop_only']= 'No';
        }
        if(isset($data['search_time'])){
        	$data['search_time']= '1';
        }else{
        	$data['non_stop_only']= '0';
        }

        $this->load->model('Flightsearch');
        $tripdetails = $this->Flightsearch->insertData($data);
        $message = "Our executives will connect with you over you query";
        $this->session->set_flashdata('item', $message);
        redirect(base_url('Flight'));
	
	}


}
?>