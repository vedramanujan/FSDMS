<?php
// ------------------------------------------------------------------------
//		Delete Model
// ------------------------------------------------------------------------

defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_model extends CI_Model
{
	public function delete_category($get_category_id)
	{
		$this->db->where('id', $get_category_id);
		$this->db->delete('category_master');
		return $affected = $this->db->affected_rows();
	}

	public function delete_product($get_product_id)
	{
		$this->db->where('id',$get_product_id);
		$this->db->delete('product_master');
		return $affected = $this->db->affected_rows();
	}
	
	public function delete_custom_product($product_sku)
	{
		$this->db->where('product_sku',$product_sku);
		$this->db->delete('custom_product_master');
		return $affected = $this->db->affected_rows();
	}

	public function delete_img($product_sku)
	{
		$this->db->where('product_sku',$product_sku);
		$this->db->delete('product_image');
		return $affected = $this->db->affected_rows();
	}
		/**
		*	DELETE ON CART
		*	==============
		*	Author : Vedavith Ravula et,al.
		* 	Date : 07-02-2019
		*/

	public function delete_cart_product($rowid)
	{
		$this->db->where('rowid',$rowid);
		$this->db->delete('product_cart');
		return $affected = $this->db->affected_rows();
	}

	//7-2-19
	public function delete_kitchen_reg($get_reg_id)
	{
		$this->db->where('id',$get_reg_id);
		$this->db->delete('kitchen_register');
		return $affected = $this->db->affected_rows();
	}
	//11-2-19
	public function delete_kitchen_admin($get_admin_id)
	{
		$this->db->where('id',$get_admin_id);
		$this->db->delete('kitchen_admin');
		return $affected = $this->db->affected_rows();
	}
	//13-2-19 changes 25-2-19
	public function delete_individual_customer($get_id)
	{
		// $this->db->where('id',$get_id);
		// $this->db->delete('individual_user_registration');
		$this->db->query("DELETE individual_user_registration,user_login FROM individual_user_registration LEFT JOIN user_login ON individual_user_registration.email = user_login.email_id WHERE individual_user_registration.id='$get_id' ");

		return $affected = $this->db->affected_rows();
	}
	//18-2-19
	public function delete_corporate_customer($get_id)
	{
		$this->db->query("DELETE corporate_user_registration,user_login,company_data from corporate_user_registration INNER JOIN user_login on corporate_user_registration.rep_email_id = user_login.email_id INNER JOIN company_data on corporate_user_registration.company_name = company_data.company_name WHERE corporate_user_registration.rep_email_id = '$get_id'"); 
		return $affected = $this->db->affected_rows();
	}
	//18-2-19
	public function delete_corporate_company($get_id)
	{
		$this->db->where('id',$get_id);
		$this->db->delete('company_data');
		return $affected = $this->db->affected_rows();
	}
	//18-2-19
	public function delete_corporate_login($get_id)
	{
		$this->db->where('id',$get_id);
		$this->db->delete('user_login');
		return $affected = $this->db->affected_rows();
	}
	//19-2-19
	public function delete_mealplan($get_mealplan_id)
	{
		$this->db->where('id', $get_mealplan_id);
		$this->db->delete('meal_plan_master');
		return $affected = $this->db->affected_rows();
	}
	//19-2-19
	public function delete_mealpref($get_mealprefer_id)
	{
		$this->db->where('id', $get_mealprefer_id);
		$this->db->delete('meal_preference_master');
		return $affected = $this->db->affected_rows();
	}
	//20-2-19(mounika)
	public function delete_employee($get_emp_id)
    {
        $this->db->where('id', $get_emp_id);
        $this->db->delete('kitchen_employee');
        return $affected = $this->db->affected_rows();
    }
    //21-2-19(divya)
    public function delete_branch($get_id)
    {
    	$this->db->where('id',$get_id);
    	$this->db->delete('branch_data');
    	return $affected = $this->db->affected_rows();
    }
    //22-2-19(divya)
    public function delete_repres($get_id)
    {
    	// $this->db->where('id',$get_id);
    	// $this->db->delete('corporate_representative');
    	// return $affected = $this->db->affected_rows();
    	$this->db->query("DELETE corporate_representative,user_login FROM corporate_representative LEFT JOIN user_login on corporate_representative.rep_email_id = user_login.email_id WHERE corporate_representative.id = '$get_id' ");
    	return $query = $this->db->affected_rows();
    }
    /**
     * Author   :   Mounika Marella et.al,
     * Date     :   21022019
     */

     public function delete_kitchen_product($get_product_id)
     {
        $this->db->where('id',$get_product_id);
        $this->db->delete('kitchen_product_master');
        return $affected = $this->db->affected_rows();
     }

     public function delete_units($get_product_id)
     {
        $this->db->where('id',$get_product_id);
        $this->db->delete('units_master');
        return $affected = $this->db->affected_rows();
     }
     //21-02-19(Mounika)
    public function delete_emp_role($get_role_id)
    {
        $this->db->where('id', $get_role_id);
        $this->db->delete('emp_role_master');
        return $affected = $this->db->affected_rows();
    }
    /**
     * Author   :   Vedavith Ravula et.al,
     * Date     :   27022019
     */

    public function delete_kitchen_inventory_product($get_data)
    {

        $this->db->where('id',$get_data['id']);
        $this->db->delete('insert_inventory_kitchen_'.$get_data['table_name']);
        return $affected = $this->db->affected_rows();
    }
    //1-03-2019
     public function delete_note($get_id)
     {
        $this->db->where('id',$get_id);
        $this->db->delete('notifications');
        return $affected = $this->db->affected_rows();
     }
     //04-03-19
	public function delete_room($get_id)
	{
		$this->db->where('id', $get_id);
		$this->db->delete('room_master');
		return $affected = $this->db->affected_rows();
	}
	//04-03-19
	public function delete_grid($get_id)
	{
		$this->db->where('id', $get_id);
		$this->db->delete('grid_master');
		return $affected = $this->db->affected_rows();
	}
	//04-03-19
	public function delete_bin($get_id)
	{
		$this->db->where('id', $get_id);
		$this->db->delete('bin_master');
		return $affected = $this->db->affected_rows();
	}
	//04-03-19
	public function delete_store($get_id)
	{
		$this->db->where('id', $get_id);
		$this->db->delete('store_master');
		return $affected = $this->db->affected_rows();
	}
	//04-03-19
	public function delete_store_manager($get_id)
	{
		$this->db->where('id', $get_id);
		$this->db->delete('store_manager');
		return $affected = $this->db->affected_rows();
	}
	//05-03-19
	public function delete_store_mapping($get_id)
	{
		$this->db->where('id', $get_id);
		$this->db->delete('store_mapping');
		return $affected = $this->db->affected_rows();
	}
	//8-03-19
	public function delete_primary_stock_products($get_product_id)
	{
	  $this->db->where('id',$get_product_id);
	  $this->db->delete('primary_stock_products');
	  return $affected = $this->db->affected_rows();
	 }
	 //8-03-19
	 public function delete_primary_stock_inventory($get_data)
    {

        $this->db->where('id',$get_data);
        $this->db->delete('primary_product_inventory_insert');
        return $affected = $this->db->affected_rows();
    }
    //20-3-19(Divya)
	public function delete_del_employee($get_emp_id)
    {
        $this->db->where('id', $get_emp_id);
        $this->db->delete('delivery_employee');
        return $affected = $this->db->affected_rows();
    }
    //20-3-19(Divya)
	public function delete_del_kitchen($get_id)
    {
        //$this->db->where('id', $get_id);
        $this->db->where('order_id', $get_id);
        $this->db->delete('delivery_kitchen_order');
        return $affected = $this->db->affected_rows();
    }
    
		/**
	 	* Author : Vedavith Ravula
	 	* Date   : 19032019
	 	*/
	    public function delete_confirm_cart($row_id)
	    {
	        $this->db->where('product_id',$row_id);
	        $this->db->delete('cart_confirmation');
	        return $affected = $this->db->affected_rows();
	    }

}

/* End of file Delete_model.php */
/* Location: ./application/models/Delete_model.php */
