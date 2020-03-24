<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index()
	{
		//echo "Inside";
		//echo "<a href='".base_url('User/logout')."'>Logout</a>";
		$data['v'] = 'Dashboard/index';
		$data['viewName'] = 'Dashboard';
		$this->load->view('template',$data);
	}

	public function flights(){
		$this->load->model('Flightsearch');
		$getDataForFlightQuery = $this->Flightsearch->getFlightQueryData();
		$data['viewName'] = 'Flights';
		$data['v'] = 'Dashboard/flights';
		$data['data'] = json_decode(json_encode($getDataForFlightQuery), true);
		$this->load->view('template',$data);
	}

	public function transfer(){
		$this->load->model('Cartransfer');
		$getDataForTransferQuery = $this->Cartransfer->getTransferQueryData();
		$data['v'] = 'Dashboard/transfer';
		$data['viewName'] = 'Transfer';
		$data['data'] = json_decode(json_encode($getDataForTransferQuery	), true);
		$this->load->view('template',$data);
	}


	public function visa(){
		$this->load->model('Visaquery');
		$getDataForVisaQuery = $this->Visaquery->get();
		$data['v'] = 'Dashboard/visa';
		$data['viewName'] = 'Visa';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}

	public function dubaiUaeVisa(){
		$this->load->model('Visaquery');
		$getDataForVisaQuery = $this->Visaquery->getDubaiUAE();
		$data['v'] = 'Dashboard/dubaiUaeVisa';
		$data['viewName'] = 'Dubai UAE Visa Queries';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}

	public function partnersDetails(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/partnerDetails';
		$data['viewName'] = 'CMS | Our Partners';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}

	public function addPartnerLogo(){
		try{
			$data = $this->input->post();
			$pathToFile = $this->uploadImageFileToPath($_FILES, 'partners_logo', 'file_name');
			$inputData = array();
			$inputData['first_name'] = $data['first_name'];
			$inputData['last_name'] = $data['last_name'];
			$inputData['file_path'] = $pathToFile;
			$this->load->model('Partnerdetails');
			if($pathToFile !== 0){
				$partnerLogo = $this->Partnerdetails->insertData($inputData);
				$message = "<span style='background-color:green;color:white;'>Partner data saved successfully</span>";
				$this->session->set_flashdata('item', $message);
				redirect(base_url('Dashboard/partnersDetails'));
			}
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/partnersDetails'));
         }
	}


	public function banners(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/banners';
		$data['viewName'] = 'CMS | Banners';
		$this->load->model('Banners');
		$getDataForVisaQuery = $this->Banners->get();
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}


	public function addBanner(){
		try{
			$inputData['banner1'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_1');
			$inputData['banner2'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_2');
			$inputData['banner3'] = $this->uploadImageFileToPath($_FILES, 'banner', 'banner_3');

			$this->load->model('Banners');
			///print_r($inputData);

			if(!empty($inputData['banner1']) && !empty($inputData['banner2']) && !empty($inputData['banner3'])){
				//die("suprabha1");
				$partnerLogo = $this->Banners->insertData($inputData);
				//echo "here"; exit;
				$message = "<span style='background-color:green;color:white;'>Banner data saved successfully</span>";
				$this->session->set_flashdata('item', $message);
				redirect(base_url('Dashboard/banners'));
			}

			//die("suprabha3");
		}catch(Exception $e){
			//echo "else here"; exit;
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/banners'));
         }
	}


	public function footerInfo(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/footer_info';
		$data['viewName'] = 'CMS | Footer Info';
		$this->load->model('Footerinfo');
        $getAboutUsData = $this->Footerinfo->get();
        $data['footer_info'] = html_entity_decode($getAboutUsData);
        $this->load->view('template',$data);

	}


	public function addfooterInfo(){
		try{
			$data = $this->input->post();
			$this->load->model('Footerinfo');
	        $tripdetails = $this->Footerinfo->update($data);
	        $message = "<span style='background-color:green;color:white;'>Footer info saved</span>";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('Dashboard/footerInfo'));
	    }catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/footerInfo'));
         }
	}


	public function contactUs(){
		//$this->load->model('Partnerdetails');

		$data['v'] = 'Dashboard/contact_us';
		$data['viewName'] = 'CMS | Contact Us Info';
		//$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);

	}



	public function addContactInfo(){
		try{
			$data = $this->input->post();
			$this->load->model('Contactinfo');
	        $tripdetails = $this->Contactinfo->insertData($data);
	        $message = "<span style='background-color:green;color:white;'>Contact Info saved</span>";
	        $this->session->set_flashdata('item', $message);
	        redirect(base_url('Dashboard/contactUs'));
	    }catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/contactUs'));
         }
	}


	public function editAboutUs(){
		$data['v'] = 'Dashboard/edit_about_us';
		$data['viewName'] = 'CMS | About Us';
		$this->load->model('Aboutus');
        $getAboutUsData = $this->Aboutus->get();
        $data['about_us'] = html_entity_decode($getAboutUsData);
        $this->load->view('template',$data);

	}

	public function addAboutUs(){
		try{
			$data = $this->input->post();
	        $this->load->model('Aboutus');
	        $inserData['about_us'] = htmlentities($data['about_us']);
	        $this->Aboutus->update($inserData);
	        $message = "<span style='background-color:green;color:white;'>About us Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editAboutUs'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editAboutUs'));
         }
	}

	// our network

	public function editServices(){
		$data['v'] = 'Dashboard/services';
		$data['viewName'] = 'CMS | Services';
		$this->load->model('Services');
        $getServicesData = $this->Services->get();
        $data['services'] = html_entity_decode($getServicesData);
        $this->load->view('template',$data);

	}

	public function addServices(){
		try{
			$data = $this->input->post();
	        $this->load->model('Services');
	        $inserData['services'] = htmlentities($data['services']);
	        $this->Services->update($inserData);
	        $message = "<span style='background-color:green;color:white;'>Services Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editServices'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editServices'));
         }
	}


	public function editPrivacyPolicy(){
		$data['v'] = 'Dashboard/privacy_policy';
		$data['viewName'] = 'CMS | Privacy Policy';
		$this->load->model('Privacypolicy');
        $getServicesData = $this->Privacypolicy->get();
        $data['privacy_policy'] = html_entity_decode($getServicesData);
        $this->load->view('template',$data);

	}

	public function addPrivacyPolicy(){
		try{
			$data = $this->input->post();
	        $this->load->model('Privacypolicy');
	        $inserData['privacy_policy'] = htmlentities($data['privacy_policy']);
	        $this->Privacypolicy->update($inserData);
	        $message = "<span style='background-color:green;color:white;'>Privacy policy Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editPrivacyPolicy'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editPrivacyPolicy'));
        }
	}

	public function editOurNetwork(){
		$data['v'] = 'Dashboard/our_network';
		$data['viewName'] = 'CMS | Our Network';
		$this->load->model('Ournetwork');
        $getServicesData = $this->Ournetwork->get();
        $data['our_network'] = html_entity_decode($getServicesData);
        $this->load->view('template',$data);

	}

	public function addOurNetwork(){
		try{
			$data = $this->input->post();
	        $this->load->model('Ournetwork');
	        $inserData['our_network'] = htmlentities($data['our_network']);
	        $this->Ournetwork->update($inserData);
	        $message = "<span style='background-color:green;color:white;'>Our Network Info saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/editOurNetwork'));
		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/editOurNetwork'));
        }
	}


	public function hotel(){
		$this->load->model('Hotelquery');
		$getDataForVisaQuery = $this->Hotelquery->get();
		$data['v'] = 'Dashboard/hotel';
		$data['viewName'] = 'Hotel';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}



	public function TravelInsuranceData(){
		$this->load->model('Travelinsurancequery');
		$getDataForVisaQuery = $this->Travelinsurancequery->get();
		$data['v'] = 'Dashboard/Travelinsurance';
		$data['viewName'] = 'Travel Insurance';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}


	public function TravelSimData(){
		$this->load->model('Travelsimquery');
		$getDataForVisaQuery = $this->Travelsimquery->get();
		$data['v'] = 'Dashboard/Travelsim';
		$data['viewName'] = 'Travel Sim';
		$data['data'] = json_decode(json_encode($getDataForVisaQuery), true);
		$this->load->view('template',$data);
	}

	public function ListTourPackages(){
		$this->load->model('TourPackage');
		$getListOfTourPackages = $this->TourPackage->get();
		$data['v'] = 'Dashboard/ListTourPackage';
		$data['viewName'] = 'Tour Packages';
		$data['data'] = json_decode(json_encode($getListOfTourPackages), true);
		$this->load->view('template', $data);
	}

	public function addTourPackage(){
		try{
			$data =  $this->input->post();
			$data['tour_image'] = $this->uploadImageFileToPath($_FILES, 'tour_images', 'tour_image');
			$this->load->model('TourPackage');
			$this->TourPackage->insert($data);
	        $message = "<span style='background-color:green;color:white;'>Tour Package saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/ListTourPackages'));
		}
		catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/ListTourPackages'));
        }
	}

	public function editTourPackages($edit_id){
		$data['v'] = 'Dashboard/EditTourPackage';
		$data['viewName'] = 'Edit Tour Packages';
		$this->load->model('TourPackage');
		$getDataForId = $this->TourPackage->getDataForId($edit_id);
		$data['data'] = json_decode(json_encode($getDataForId), true)[0];
		$this->load->view('template', $data);
	}

	public function saveTourPackage(){
		try{
			$this->load->model('TourPackage');
			$data = $this->input->post();
			$edit_id = $data['id'];
			if(!empty($_FILES['tour_image']['name'])){
				$data['tour_image'] = $this->uploadImageFileToPath($_FILES, 'tour_images', 'tour_image');
			}else{
				$getDataForId = $this->TourPackage->getDataForId($edit_id);
				$data['tour_image'] = json_decode(json_encode($getDataForId), true)[0]['tour_image'];
			}
			$this->TourPackage->edit($data);
			$message = "<span style='background-color:green;color:white;'>Tour Package saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/ListTourPackages'));

		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/ListTourPackages'));
        }

	}
public function deleteFlight($id){
		$getId=$_GET['id'];
		//print_r($getId);die;
		$this->load->model('Flightsearch');
		$data['viewName'] = 'Flights';
		$data['v'] = 'Dashboard/flights';
		$getData = $this->Flightsearch->deleteDataForId($getId);
		redirect(base_url('Dashboard/flights'));
		
	}
	public function deleteHotel($id){
		$getId=$_GET['id'];
		$this->load->model('Hotelquery');
		$data['viewName'] = 'hotel';
		$data['v'] = 'Dashboard/hotel';
		$this->Hotelquery->deleteDataForId($getId);
		redirect(base_url('Dashboard/Hotel'));
		
	}
public function UserList(){
		$this->load->model('Registereduser');
		$getUser = $this->Registereduser->get();
		$data['v'] = 'Dashboard/UserList';
		$data['viewName'] = 'Registered Users';
		$data['data'] = json_decode(json_encode($getUser), true);
		$this->load->view('template', $data);
	}

	public function deleteUser($id){
		
		$getId=$_GET['id'];
		$this->load->model('Registereduser');
		$data['viewName'] = 'User List';	
		$data['v'] = 'Dashboard/UserList';
		$this->Registereduser->deleteDataForId($getId);
		//print_r("hi");
		redirect(base_url('Dashboard/UserList'));
		
	}
		public function editUser($id){
		$getId=$_GET['id'];
		//print_r($getId);die;
		$this->load->model('Registereduser');
		$data['v'] = 'Dashboard/edit_userlist';
		$data['viewName'] = 'edit user';
		$getData = $this->Registereduser->getDataId($getId);
		$data['data'] = json_decode(json_encode($getData), true);
		//print_r($data);die;
		$this->load->view('template', $data);
	}
	public function updateUserDetails(){
		try{
			$this->load->model('Registereduser');
			$data = $this->input->post();
			//print_r($data);die;
			$edit_id = $data['id'];
			if(!empty($_FILES['tour_image']['name'])){
				$data['tour_image'] = $this->uploadImageFileToPath($_FILES, 'tour_images', 'tour_image');
			}else{
				$getDataForId = $this->Registereduser->getDataForId($edit_id);
				$data['tour_image'] = json_decode(json_encode($getDataForId), true)[0]['tour_image'];
			}
			$this->Registereduser->edit($data);
			$message = "<span style='background-color:green;color:white;'>User Details saved</span>";
	        $this->session->set_flashdata('item', $message);
			redirect(base_url('Dashboard/UserList'));

		}catch(Exception $e){
                $message = "<span style='background-color:red;'>Something went wrong... Try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/ListTourPackages'));
        }

	}
	public function deleteTravelsim($id){
		$getId=$_GET['id'];
		$this->load->model('Travelsimquery');
		$data['viewName'] = 'Travel sim';
		$data['v'] = 'Dashboard/Travelsim';
		$this->Travelsimquery->deleteDataForId($getId);
		redirect(base_url('Dashboard/TravelSimData'));
		
	}
	public function flightPopup(){
		$data['v'] = 'Dashboard/flight_popup';
		$data['viewName'] = 'send email';
		$this->load->view('template',$data);

	}
	public function send_email($from,$to,$subject,$message) {
   $host = 'cbhbooking.com';
   $port = '';
    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => '$host',
        'smtp_port' => '$port',
        'smtp_user' => '$user_name',
        'smtp_pass' => 'xxxxxx',
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'smtp_timeout' => 7,
        'newline' => '\r\n',
        'validation' => TRUE,
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");

    $config['newline'] = "\r\n";

    $this->email->initialize($config);

    $this->email->from($from);
    $this->email->to($to);
   
    $this->email->subject($subject);
    $this->email->message($message);
   
    $this->email->send();
}

	 public function contact_insert() {
		try{
			$data = $this->input->post();
			$name=$data['userName'];
			$content =$data['message'];
			$from= 'dip_tour@demo.tkies.com';
			$email_to = $data['userEmail'];
			$subject=$data['subject'];
			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Dear ".$name.",</strong> </td></tr>";
			$message .= "<tr><td>" .$content. "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";
			$this->send_email($from,$email_to,$subject,$message);
			$message = "<span style='background-color:white;color:green;'>Email sent</span>";
			redirect(base_url('Dashboard/flights'));

				}
	    catch(Exception $e){
	    	 $message = "<span style='background-color:red;'>please try again</span>";
                $this->session->set_flashdata('item', $message);
                redirect(base_url('Dashboard/flights'));
	    }
		
	}


}
