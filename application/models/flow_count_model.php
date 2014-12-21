
<?PHP 
class Flow_count_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function ShowMyCounter($id=1){ 
		//定义变量 
			$IsGone = FALSE; 
			//读取数据 
			$query = $this->db->get_where('counter',array('id'=>$id));
			if($query){
			$id_add = $query->row_array();
			$data = array(
			'id' => 1,
			'count' =>$id_add['count']+1);
		
			
			$this->db->update('counter',$data);
			return $data;
		}
}
}
 