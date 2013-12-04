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
        //Muestra los detalles de un articulo por ID
//        function articulo_detalles($id_articulo){
//            $this->db->where('id_articulo',$id_articulo);
//            $consulta = $this->db->get('articulos');
//            return $consulta->row();
//        }
        //Muestra los detalles de un articulo por el nombre del articulo
//        function articulo_detalles($nombre_articulo){
//            $this->db->where('nombre_articulo',$nombre_articulo);
//            $consulta = $this->db->get('articulos');
//            return $consulta->row();
//        }
         //Muestra los detalles de un articulo por la URL
        function articulo_detalles($url_articulo){
            $this->db->where('url_articulo',$url_articulo);
            $consulta = $this->db->get('articulos');
            return $consulta->row();
        }
}