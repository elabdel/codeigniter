<?

class Articulos_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	
	//Generar un listado de articulos
	function lista_articulos(){
		$this->db->order_by('id_articulo', 'desc');
		$consulta = $this->db->get('articulos');
		return $consulta->result();
	}
}