<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller
{

	function configPagination() {

		$this->load->library('pagination');
		$config['base_url'] = base_url('index.php/Listing/page/');

		//Number of rows to show in a single page
		$config['per_page'] = 10;

		//Designe

		//firs Link html parent
		$config['first_tag_open'] = '<li class="page-item primary">';
		$config['first_tag_close'] = '</li>';

		//Last link html parent
		$config['last_tag_open'] = '<li class="page-item primary">';
		$config['last_tag_close'] = '</li>';

		//Preview page link html parent
		$config['prev_tag_open'] = '<li class="page-item primary">';
		$config['prev_tag_close'] = '</li>';

		//Next page link html parent
		$config['next_tag_open'] = '<li class="page-item primary">';
		$config['next_tag_close'] = '</li>';

		//Number of page html parent
		$config['num_tag_open'] = '<li class="page-item primary">';
		$config['num_tag_close'] = '</li>';

		//Selected Link
		$config['cur_tag_open'] = '<li class="page-item"><a class="genric-btn success page-link">';
		$config['cur_tag_close'] = '</a></li>';
		//Add atribut to links all
		$config['attributes'] = array(

			'class'		=> 		'page-link'

		);

		return $config;

	}

	public function __construct() {

		parent::__construct();
		$this->load->model('Listingm');
		$this->load->model('Imagem');

	}

	public function index() {

		$this->page();

	}

	public function page() {

		$config = $this->configPagination();

		$config['total_rows'] = $this->Listingm->getCount();

		//int pagination
		$this->pagination->initialize($config);

		//Get the page per parametre
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data['Listing'] = $this->Listingm->getAllListing($config['per_page'], $page);

		//echo $this->pagination->create_links();

		$data['link'] =  $this->pagination->create_links();

        // $this->session->set_userdata('Produits', array(

        //     'IdP'        =>  $this->input->post('IdP'),
        //     'Qtt'        =>  $this->input->post('Qtt'),
		// 	'PrixHT'     =>  $this->input->post('PrixHT')
			
        // ));
        
		// $data['Clientm'] = $this->Clientm->getClient();

		$this->load->view('Layout/header');
		$this->load->view('Listing/index', $data);
		$this->load->view('Layout/footer');

	}

	public function p($id) {

		$data['listing'] = $this->Listingm->getProductById($id);
		$data['images'] = $this->Imagem->getAllImagesByListingId($id);
		$this->load->view('Layout/header');
		$this->load->view('Listing/Listing', $data);
		$this->load->view('Layout/footer');

	}

	public function Add() {

		$this->load->view('Layout/header');
		$this->load->view('Listing/Add');
		$this->load->view('Layout/footer');
	}

	public function SaveImage() {

		$limit = sizeof($_FILES['images']['name']) > 8 ? 8 : sizeof($_FILES['images']['name']);

		for($i = 0; $i < $limit; $i++) {

			$_FILES['image']['name'] = $_FILES['images']['name'][$i];
			$_FILES['image']['type'] = $_FILES['images']['type'][$i];
			$_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
			$_FILES['image']['error'] = $_FILES['images']['error'][$i];
			$_FILES['image']['size'] = $_FILES['images']['size'][$i];

			$config = array(
				'upload_path' 	=> "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg",
				'overwrite' 	=> TRUE,
				'max_size' 		=> "3048000", // Can be set to particular file size , here it is 3 MB(2048 Kb)
				'max_height' 	=> "5000",
				'max_width' 	=> "5000",
				'min_width'		=>	"250",
				'min_height'	=> "250"
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{
				$data = array('upload_data' => $this->upload->data());

				$this->load->model('Imagem');
				$data['image_id'] = $this->Imagem->insertImage(array(
					'image_name'	=>	$data['upload_data']['file_name'],
					'image_width'	=>	$data['upload_data']['image_width'],
					'image_height'	=>	$data['upload_data']['image_height'],
				));

				$this->load->view('Componant/image_galery',$data);

			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('Listing/Error', $error);
			}
		}

	}

	public function Save() {

		$this->load->model('Listingm');

		$listing_id = $this->Listingm->Save(array(
			'listion_title'			=> $this->input->post('title'),
			'listing_discription'	=> $this->input->post('disciption'),
			'listing_prix'			=> $this->input->post('prix'),
			'listing_lat'			=> $this->input->post('lat'),
			'listing_lng'			=> $this->input->post('lng'),
			'type'					=> $this->input->post('bien'),
			'listing_adress'		=> $this->input->post('adress'),
			'category_id'			=> $this->input->post('category'),
		));

		$this->load->model('Imagem');
		
		foreach($this->input->post('image_ids') as $id) {

			$this->Imagem->updateImage((int)$id, array(
				'listing_id'	=>	(int)$listing_id
			));
		}

		redirect(base_url('index.php/Listing/p/'.$listing_id));

	}

}