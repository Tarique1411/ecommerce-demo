<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index(){
        $data['brands'] = $this->db->where('is_active',1)->get('brands')->result();

		$this->load->adminTemplate('admin/dashboard',$data);

	}

	public function login() {
		$this->load->adminTemplate('admin/login');
	}

	public function dashboard(){
        $data['products'] = $this->db->where('is_active',1)->get('products')->result();
        $data['brands'] = $this->db->where('is_active',1)->get('brands')->result();
        // echo '<pre>'; print_r($data['brands']); exit;

		$this->load->adminTemplate('admin/dashboard',$data);
	}

	public function employee()
	{
		$this->load->adminTemplate('admin/employee');
	}
	public function upload_brands($brand_id=null)
	{
		if (isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST' && !empty($brand_id)) {
            $data = array('brand_name' =>$this->input->post('brand_name'),
                            'created_at'=>date('Y-m-d H:i:s'));

            if (isset($_FILES['brand_image']) && !empty($_FILES['brand_image'])) {
                $file_ext = pathinfo($_FILES["brand_image"]["name"],PATHINFO_EXTENSION);
                $config['upload_path']   = 'assets/images/brands';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_width']  = '328';
                // $config['max_height']  = '210';
                $config['file_name'] = time();
                $config['overwrite']     = TRUE;
                $config['encrypt_name']  = FALSE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('brand_image')) {
                    $error = array(
                        'error' => $this->upload->display_errors()
                    );
                    echo '<pre>';
                    print_r($error);
                    
                } else {
                    $result = array(
                        'brand_image' => $this->upload->data('brand_image')
                    );
                    $this->upload->do_upload('brand_image');
                    $data['brand_image'] = $config['file_name'].'.'.$file_ext;
                }

            }
               $this->db->where('id',$brand_id)->update('brands',$data);
                redirect('admin/upload_brands');
        }


		if (isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST') {
            $data = array('brand_name' =>$this->input->post('brand_name'),
                            'created_at'=>date('Y-m-d H:i:s'));

            if (isset($_FILES['brand_image']) && !empty($_FILES['brand_image'])) {
                $file_ext = pathinfo($_FILES["brand_image"]["name"],PATHINFO_EXTENSION);
                $config['upload_path']   = 'assets/images/brands';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_width']  = '328';
                // $config['max_height']  = '210';
                $config['file_name'] = time();
                $config['overwrite']     = TRUE;
                $config['encrypt_name']  = FALSE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('brand_image')) {
                    $error = array(
                        'error' => $this->upload->display_errors()
                    );
                    echo '<pre>';
                    print_r($error);
                    
                } else {
                    $result = array(
                        'brand_image' => $this->upload->data('brand_image')
                    );
                    $this->upload->do_upload('brand_image');
                    $data['brand_image'] = $config['file_name'].'.'.$file_ext;
                }

            }
               $this->db->insert('brands',$data);
        }
        
        $data['brands'] = $this->db->where('is_active',1)->get('brands')->result();
        $data['edit'] = $this->db->where('id',$brand_id)->get('brands')->row();


		$this->load->adminTemplate('admin/upload_brands',$data);
	}
	public function delete_brand($brand_delete)
	{
		$delete = array(
		      'is_active' => 0
		       );

		$this->db->where('id',$brand_delete)->update('brands',$delete);
		  redirect('admin/upload_brands');
	}
	public function upload_products($product_id=null)
    {
        if (isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST' && !empty($product_id)) {
            $data = array('brand_id' =>$this->input->post('brand_id'),
                          'brand' =>$this->input->post('brand'),
                          'pdt_sku' =>$this->input->post('pdt_sku'),
                          'spl_offer_pdt' =>$this->input->post('special'),
                          'top_pdt' =>$this->input->post('top'),
                          'best_selling_pdt' =>$this->input->post('best'),
                          'featured_pdt' =>$this->input->post('featured'),
                          'top_twenty_pdt' =>$this->input->post('top_twenty_pdt'),
                          'pdt_name' =>$this->input->post('pdt_name'),
                          'pdt_specification' =>$this->input->post('pdt_specification'),
                          'pdt_desc' =>$this->input->post('pdt_desc'),
                          'new_pdt_cost' =>$this->input->post('new_pdt_cost'),
                          'old_pdt_cost' =>$this->input->post('old_pdt_cost'),
                          'pdt_color' =>$this->input->post('pdt_color'),
                          'pdt_stk' =>$this->input->post('pdt_stk'),
                           'created_at'=>date('Y-m-d H:i:s'));

            if (isset($_FILES['pdt_image']) && !empty($_FILES['pdt_image'])) {
                $file_ext = pathinfo($_FILES["pdt_image"]["name"],PATHINFO_EXTENSION);
                $config['upload_path']   = 'assets/images/products';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_width']  = '328';
                // $config['max_height']  = '210';
                $config['file_name'] = time();
                $config['overwrite']     = TRUE;
                $config['encrypt_name']  = FALSE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('pdt_image')) {
                    $error = array(
                        'error' => $this->upload->display_errors()
                    );
                    echo '<pre>';
                    print_r($error);
                    
                } else {
                    $result = array(
                        'pdt_image' => $this->upload->data('pdt_image')
                    );
                    $this->upload->do_upload('pdt_image');
                    $data['pdt_image'] = $config['file_name'].'.'.$file_ext;
                }

            }
               $this->db->where('id',$product_id)->update('products',$data);
                redirect('admin/upload_products');
        }
        if (isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST') {
            $data = array('brand_id' =>$this->input->post('brand_id'),
                          'brand' =>$this->input->post('brand'),
                          'pdt_sku' =>$this->input->post('pdt_sku'),
                          'spl_offer_pdt' =>$this->input->post('special'),
                          'top_pdt' =>$this->input->post('top'),
                          'best_selling_pdt' =>$this->input->post('best'),
                          'featured_pdt' =>$this->input->post('featured'),
                          'top_twenty_pdt' =>$this->input->post('top_twenty_pdt'),
                          'pdt_name' =>$this->input->post('pdt_name'),
                          'pdt_specification' =>$this->input->post('pdt_specification'),
                          'pdt_desc' =>$this->input->post('pdt_desc'),
                          'new_pdt_cost' =>$this->input->post('new_pdt_cost'),
                          'old_pdt_cost' =>$this->input->post('old_pdt_cost'),
                          'pdt_color' =>$this->input->post('pdt_color'),
                          'pdt_stk' =>$this->input->post('pdt_stk'),
                           'created_at'=>date('Y-m-d H:i:s'));

            if (isset($_FILES['pdt_image']) && !empty($_FILES['pdt_image'])) {
                $file_ext = pathinfo($_FILES["pdt_image"]["name"],PATHINFO_EXTENSION);
                $config['upload_path']   = 'assets/images/products';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                // $config['max_width']  = '328';
                // $config['max_height']  = '210';
                $config['file_name'] = time();
                $config['overwrite']     = TRUE;
                $config['encrypt_name']  = FALSE;
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('pdt_image')) {
                    $error = array(
                        'error' => $this->upload->display_errors()
                    );
                    echo '<pre>';
                    print_r($error);
                    
                } else {
                    $result = array(
                        'pdt_image' => $this->upload->data('pdt_image')
                    );
                    $this->upload->do_upload('pdt_image');
                    $data['pdt_image'] = $config['file_name'].'.'.$file_ext;
                }

            }
               $this->db->insert('products',$data);
        }
        $data['brands'] = $this->db->get('brands')->result();
        $data['products'] = $this->db->get('products')->result();

		$this->load->adminTemplate('admin/upload_products',$data);

	}
    public function delete_products($delete_id)
    {
        $delete = array(
            'is_active' => 0
        );
        $this->db->where('id',$delete_id)->update('products',$delete);
        redirect('admin/upload_products');
    }
    public function add_to_banner($add_id)
    {
        $add = array(
                        'top_pdt' => 'yes'
                        );
        $this->db->where('id',$add_id)->update('products',$add);
         redirect('admin/upload_products');
    }
    public function remove_banner($remove_id)
    {
        $remove = array(
                        'top_pdt' => 'no'
                        );
        $this->db->where('id',$remove_id)->update('products',$remove);
         redirect('admin/upload_products');
    }
    public function add_to_spl_offer($add_id)
    {
        $add = array(
                        'spl_offer_pdt' => 'yes'
                        );
        $this->db->where('id',$add_id)->update('products',$add);
         redirect('admin/upload_products');
    }
    public function remove_from_spl_offer($remove_id)
    {
        $remove = array(
                        'spl_offer_pdt' => 'no'
                        );
        $this->db->where('id',$remove_id)->update('products',$remove);
         redirect('admin/upload_products');
    }
    public function add_to_best_selling($add_id)
    {
        $add = array(
                        'best_selling_pdt' => 'yes'
                        );
        $this->db->where('id',$add_id)->update('products',$add);
         redirect('admin/upload_products');
    }
    public function remove_from_best_selling($remove_id)
    {
        $remove = array(
                        'best_selling_pdt' => 'no'
                        );
        $this->db->where('id',$remove_id)->update('products',$remove);
         redirect('admin/upload_products');
    }
    public function add_to_featured_product($add_id)
    {
        $add = array(
                        'featured_pdt' => 'yes'
                        );
        $this->db->where('id',$add_id)->update('products',$add);
         redirect('admin/upload_products');
    }
    public function remove_from_featured_product($remove_id)
    {
        $remove = array(
                        'featured_pdt' => 'no'
                        );
        $this->db->where('id',$remove_id)->update('products',$remove);
         redirect('admin/upload_products');
    }
    public function add_in_top_twenty($add_id)
    {
        $add = array(
                        'top_twenty_pdt' => 'yes'
                        );
        $this->db->where('id',$add_id)->update('products',$add);
         redirect('admin/upload_products');
    }
    public function remove_from_top_twenty($remove_id)
    {
        $remove = array(
                        'top_twenty_pdt' => 'no'
                        );
        $this->db->where('id',$remove_id)->update('products',$remove);
         redirect('admin/upload_products');
    }
    public function multi_images()
    {
        $data = array(); 
        $errorUploadType = $statusMsg = ''; 
         
        // If file upload form submitted 
        if($this->input->post('submit')){ 

            $brand_id = $this->input->post('brand');
            $pdt_id = $this->input->post('product');
            $color = $this->input->post('color');
              
            // If files are selected to upload 
            if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
                $filesCount = count($_FILES['files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = 'assets/images/products'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['file_name'] = time();

                    //$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['brand_id'] = $brand_id;
                        $uploadData[$i]['pdt_id'] = $pdt_id;
                        $uploadData[$i]['pdt_color'] = $color; 
                        $uploadData[$i]['multi_pdt_image'] = $fileData['file_name']; 


                        // $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                } 
                 
                $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                if(!empty($uploadData)){ 
                    // Insert files data into the database 
                    foreach ($uploadData as $key => $value) {
                    //echo '<pre>'; print_r($value);exit;
                    $insert = $this->db->insert('multi_image',$value); 

                        
                    }
                     
                    // Upload status message 
                    $statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
                }else{ 
                    $statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
                } 
            }else{ 
                $statusMsg = 'Please select image files to upload.'; 
            } 
        }
         $data['brands'] = $this->db->get('brands')->result();
        $data['products'] = $this->db->get('products')->result(); 
        // echo '<pre>'; print_r($data['products']);exit;
         
        $this->load->adminTemplate('admin/multi_images',$data); 
    } 
}
