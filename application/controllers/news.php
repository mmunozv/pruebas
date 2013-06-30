<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = "Archivo de noticias";

		$this->load->view('templates/header',$data);
		$this->load->view('news/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['news_item'] = $this->news_model->get_news($slug);

		if ( empty($data['news_item']))
		{
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header',$data);
		$this->load->view('news/view'.$page,$data);
		$this->load->view('templates/footer');
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */