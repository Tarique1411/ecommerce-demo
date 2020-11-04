<?php
class Search_product_model extends CI_Model
{
    function fetch_data($query)
    {
        $this->db->select('*');
        $this->db->from('products');
        if($query !='')
        {
            $this->db->where('is_active','1')->like('brand',$query);
            $this->db->where('is_active','1')->or_like('pdt_name',$query);
            $this->db->where('is_active','1')->or_like('new_pdt_cost',$query);
            $this->db->where('is_active','1')->or_like('pdt_specification',$query);
            
        }
        $this->db->where('is_active','1');
        $this->db->order_by('id','DESC');
        return $this->db->get();
    }
    function fetch_filter_type($type)
    {
        $this->db->distinct();
        $this->db->select($type);
        $this->db->from('products');
        $this->db->where('is_active','1');
        return $this->db->get();
    }
    function make_query($minimum_price,$maximum_price,$brand,$color)
    {
       $query = " SELECT * FROM products WHERE is_active = '1' ";
       if (isset($minimum_price,$maximum_price) && !empty($minimum_price) && !empty($maximum_price)) 
       {
           $query .= " AND new_pdt_cost BETWEEN '".$_POST['minimum_price']."' AND '".$_POST['maximum_price']."' ";
       }
       if (isset($brand))
       {
           $brand_filter = implode("','", $brand);
           $query .= " AND brand IN('".$brand_filter."') ";
       }
       if (isset($color)) 
       {
           $color_filter = implode("','", $color);
           $query .= " AND pdt_color IN('".$color_filter."') ";
       }
       return $query;
    }
    function count_all($minimum_price,$maximum_price,$brand,$color)
    {
        $query = $this->make_query($minimum_price,$maximum_price,$brand,$color);
        $data = $this->db->query($query);
        return $data->num_rows();
    }
    function fetch_product_data($limit,$start,$minimum_price,$maximum_price,$brand,$color)
    {
        $query = $this->make_query($minimum_price,$maximum_price,$brand,$color);
        $query .= ' LIMIT '.$start.','.$limit;
        $data = $this->db->query($query);
        $output = '';
        if ($data->num_rows() > 0)
        {
            foreach ($$data->result_array() as $row) 
            {
                $output .='
                          <div class=" col-sm-4 col-lg-3 col-md-3 ">
                          <div style ="border:1px solid #ccc;">
                          <img src="'.base_url().'images/products/'.$row['pdt_image'].'" class="image-responsive" >
                          <p align="center"><strong><a href="#">'.$row['pdt_name'].'</a></strong></p>
                          <h4 style="text-align:center;">'.$row['new_pdt_cost'].'</h4>
                          </div>
                          </div>
                          ';
            }
            
        }
        else
        {
            $output = '<h3>No Data found</h3>';

        }
        return $output;
    }
}












?>