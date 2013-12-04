<?

class Indice extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Articulos_model');
	}
	
	//Pagina principal
        public function index(){
            $datos['articulos'] = $this->Articulos_model->lista_articulos();
            $datos['titulo'] = "Aplicación - Titulo";
            $this->load->view('index', $datos);
        }
        //Muestra los detalles de un articulo por ID
//        public function articulo_detalles($id_articulo){
//            $id_limpio = $this->security->xss_clean($id_articulo);
//            $datos['detalles'] = $this->Articulos_model->articulo_detalles($id_limpio);
//            $datos['titulo'] = $datos['detalles']->nombre_articulo;
//            $this->load->view('detalle',$datos);
//        }
         //Muestra los detalles de un articulo por el nombre del articulo
//        public function articulo_detalles($nombre_articulo){
//            $this->output->enable_profiler(FALSE);
//            $nombre_limpio = str_replace('-', ' ', $nombre_articulo);
//            $datos['detalles'] = $this->Articulos_model->articulo_detalles($nombre_limpio);
//            $datos['titulo'] = $datos['detalles']->nombre_articulo;
//            $this->load->view('detalle',$datos);
//        }
        //Muestra los detalles de un articulo por la URL
         public function articulo_detalles($url_articulo){
            $this->output->enable_profiler(FALSE);
            $url_limpia = $this->security->xss_clean($url_articulo);
            //$nombre_limpio = str_replace('-', ' ', $nombre_articulo);
            $datos['detalles'] = $this->Articulos_model->articulo_detalles($url_limpia);
            $datos['titulo'] = $datos['detalles']->nombre_articulo;
            $this->load->view('detalle',$datos);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */