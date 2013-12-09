<?

class Indice extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Articulos_model');
	}
	
	//Pagina principal
        public function index(){
            $this->output->enable_profiler(TRUE);
            $this->benchmark->mark('inicio');
            $this->benchmark->mark('marca1_start');
            $datos['articulos'] = $this->Articulos_model->lista_articulos();
            $datos['titulo'] = "Plantilla CI";
            $this->benchmark->mark('medio');
            $datos['contenido'] = 'index';
            $this->load->view('plantillas/front_end/plantilla', $datos);
            $this->benchmark->mark('marca1_end');
            $this->benchmark->mark('fin');
            //$this->load->view('front_end/index', $datos);
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
            $datos['contenido'] = 'detalle';
            $this->load->view('plantillas/front_end/plantilla', $datos);
            //$this->load->view('detalle',$datos);
        }
        //Muestra calendario
        public function calendario(){
        $config = array(
            'start_day' => 'monday',
            'month_type' => 'long',
            'day_type' => 'short',
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url() . 'indice/calendario',
            'template' => '{table_open}<table border="1" cellpadding="10" cellspacing="0">{/table_open}
                                    {heading_row_start}<tr>{/heading_row_start}
                                    {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
                                    {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
                                    {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
                                    {heading_row_end}</tr>{/heading_row_end}
                                    {week_row_start}<tr>{/week_row_start}
                                    {week_day_cell}<td>{week_day}</td>{/week_day_cell}
                                    {week_row_end}</tr>{/week_row_end}
                                    {cal_row_start}<tr>{/cal_row_start}
                                    {cal_cell_start}<td>{/cal_cell_start}
                                    {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
                                    {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}
                                    {cal_cell_no_content}{day}{/cal_cell_no_content}
                                    {cal_cell_no_content_today}<div class="highlight" style="color:red;">{day}</div>{/cal_cell_no_content_today}
                                    {cal_cell_blank}&nbsp;{/cal_cell_blank}
                                    {cal_cell_end}</td>{/cal_cell_end}
                                    {cal_row_end}</tr>{/cal_row_end}
                                    {table_close}</table>{/table_close}'
        );
        $this->load->library('calendar', $config);
        $datos ['titulo'] = 'Calendario';
        $datos ['contenido'] = 'calendario';
        $datos['data'] = array(5 => 'http://www.google.es', 10 => 'http://www.facebook.es');
        $this->load->view('plantillas/front_end/plantilla', $datos);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */