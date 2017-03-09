
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Initdata_model extends CI_Model {
	
	public function __construct() {        
	    parent::__construct();
	}

	public function get_menu()
	{
		$sqlmenu ="SELECT * FROM menu WHERE is_active ='1' ORDER BY order_by "; 
		$reMenus = $this->db->query($sqlmenu);
		return  $reMenus->result_array();
	}

	public function get_brands()
	{
		$sql =" SELECT pb.id, pb.name, pb.slug, pt.id type_id, COUNT(p.id) count_product FROM product_brand pb 
				INNER JOIN products p ON p.product_brand_id = pb.id 
				INNER JOIN product_type  pt  ON p.product_type_id = pt.id 
				WHERE pb.is_active = 1 AND p.is_active= '1' AND  pt.is_active = 1 GROUP BY  pb.id, pb.name , pb.slug
				HAVING COUNT(p.id) > 0
				ORDER BY pb.name "; 
		$result = $this->db->query($sql);
		return  $result->result_array();
	}

	public function get_type()
	{
		//$sql ="SELECT pt.id, pt.name, pt.slug ,COUNT(p.id) count_product FROM product_type  pt 
		//INNER JOIN products p ON p.product_type_id = pt.id 
		//WHERE pt.is_active = 1 AND p.is_active= '1'  GROUP BY  pt.id, pt.name ,pt.slug
		//HAVING COUNT(p.id) > 0
		//ORDER BY pt.name"; 

		$sql ="SELECT pt.id, pt.name, pt.slug 
				FROM product_type  pt 
						WHERE pt.is_active = 1   AND pt.parenttype_id = 0
				GROUP BY  pt.id, pt.name ,pt.slug
						ORDER BY pt.name;";
		$result = $this->db->query($sql);
		return  $result->result_array();
	}
	public function get_sub_type()
	{
		
		$sql = "SELECT pt.id, pt.name, pt.slug ,pt.parenttype_id ,COUNT(p.id) count_product 
				FROM product_type  pt 
						INNER JOIN products p ON p.product_type_id = pt.id 
						WHERE pt.is_active = 1 AND p.is_active= '1'   AND pt.parenttype_id != 0
				GROUP BY  pt.id, pt.name ,pt.slug
						HAVING COUNT(p.id) > 0
						ORDER BY pt.name; ";
		$result = $this->db->query($sql);
		return  $result->result_array();
	}

	public function get_brand_oftype()
	{
		$sql ="SELECT pt.id product_type_id , pt.name product_type_name ,  pb.id product_brand_id , 
				pb.name product_brand_name ,pt.slug  product_type_slug,pb.slug product_brand_slug,  COUNT(p.id)
				FROM  products p 
				LEFT JOIN  product_type pt ON p.product_type_id = pt.id
				LEFT JOIN  product_brand pb ON p.product_brand_id = pb.id
				WHERE  p.is_active= '1' AND  pt.is_active = '1'
				GROUP BY  pt.id  , pt.name  ,  pb.id  , pb.name  , pt.slug , pb.slug
				HAVING COUNT(p.id) > 0 ";
		$re = $this->db->query($sql);
		return $re->result_array();
	}

	public function get_type_by_id($id)
	{
		$sql ="SELECT * FROM product_type
		WHERE id = '".$id."'"; 
		$result = $this->db->query($sql);
		return  $result->row_array();
	}

	public function get_brand_by_id($id)
	{
		$sql ="SELECT * FROM product_brand
		WHERE id = '".$id."'"; 
		$result = $this->db->query($sql);
		return  $result->row_array();
	}

	public function get_type_by_slug($slug)
	{
		$sql ="SELECT * FROM product_type
		WHERE slug = '".$slug."'"; 
		$result = $this->db->query($sql);
		return  $result->row_array();
	}

	public function get_brand_by_slug($slug)
	{
		$sql ="SELECT * FROM product_brand
		WHERE slug = '".$slug."'"; 
		$result = $this->db->query($sql);
		return  $result->row_array();
	}
}

/* End of file initdata */
/* Location: ./application/models/initdata */

