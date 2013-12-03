<?

class Indice extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Articulos_model');
	}
	
	//Pagina principal
	public function index()
	{
		$datos['articulos'] = $this->Articulos_model->lista_articulos();
		$datos['titulo'] = "Aplicación - Titulo";
		$this->load->view('index', $datos);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */