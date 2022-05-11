<?php
include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		$this->load->view('home');
	}

	function allModel()
	{
		$this->load->view('allModel');
	}
	
	function about()
	{
		$this->load->view('about');
	}

	function getModelsJSON()
	{
		$data = $this->model->dbRead();
		echo json_encode($data);
	}
	
	function dbCreate()
	{
		$data = $this->model->dbCreate();
		$this->load->view('view_message',$data);
	}
	
	function dbRead()
	{
		$this->load->view('view_message', $this->getModelsJSON());
	}
	
	function dbDelete()
	{
		$data = $this->model->dbDelete();
		$this->load->view('view_message',$data);
	}
}
?>    