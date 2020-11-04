<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
        {
           parent::__construct();
           $this->load->library("pagination");
           $this->load->library('cart');
        }
        
	public function index()
	{
    // print_r($this->session->userdata);exit();
		$data['cartItems'] = $this->cart->contents();
		$data['brands'] = $this->db->where('is_active',1)->order_by('id','desc')->get('brands')->result();
		$data['products'] = $this->db->where('is_active',1)->order_by('id','desc')->get('products')->result();
		$data['featured_products'] = $this->db->where('is_active',1)->where('featured_pdt','yes')->order_by('id','desc')->get('products')->result();
		$data['special_offer_products'] = $this->db->where('is_active',1)->where('spl_offer_pdt','yes')->order_by('id','desc')->get('products')->result();
		$data['top_products'] = $this->db->where('is_active',1)->where('top_pdt','yes')->order_by('id','desc')->get('products')->result();
		$data['best_selling'] = $this->db->where('is_active',1)->where('best_selling_pdt','yes')->order_by('id','desc')->get('products')->result();
		$data['product_details'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('products.is_active',1)->get()->result();
		$data['recently_added'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('products.is_active',1)->order_by('products.id','desc')->limit(20)->get()->result();
		$data['top_twenty_products'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('top_twenty_pdt','yes')->where('products.is_active',1)->order_by('products.id','desc')->limit(20)->get()->result();
    if(isset($this->session->userdata['id'])){
        $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();
        $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
      }
		$this->load->template('welcome/home',$data);
	}
	public function shop()
	{
    if(isset($this->session->userdata['id'])){
        $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();
        $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
      }
    $data['cartItems'] = $this->cart->contents();
    $data['brands'] = $this->db->where('is_active',1)->order_by('id','desc')->get('brands')->result();
    $data['products'] = $this->db->where('is_active',1)->order_by('id','desc')->get('products')->result();
		$data['product_details'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('products.is_active',1)->order_by('products.id','desc')->get()->result();
    $data['filter_by_brand'] = $this->db->distinct()->select('brand')->from('products')->where('is_active',1)->get()->result();
    $data['recently_added'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('products.is_active',1)->order_by('products.id','desc')->limit(20)->get()->result();
		$this->load->template('welcome/shop',$data);
	}
	public function single_product($pdt_id = null)
	{
    if(isset($this->session->userdata['id'])){
        $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();
         $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
      }
    $data['cartItems'] = $this->cart->contents();
    $data['brands'] = $this->db->where('is_active',1)->order_by('id','desc')->get('brands')->result();
    $data['products'] = $this->db->where('is_active',1)->order_by('id','desc')->get('products')->result();
		$data['cartItems'] = $this->cart->contents();
		$data['single_product'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('products.is_active',1)->where('products.id',$pdt_id)->get()->row();
		$data['multiple_images'] = $this->db->select('multi_image.*,products.*')->from('multi_image')->join('products', 'products.id = multi_image.pdt_id','products.brand_id=multi_image.brand_id')->where('products.id',$pdt_id)->where('products.is_active',1)->order_by('multi_image.id','desc')->get()->result();
		$data['product_color'] = $this->db->where('pdt_id',$pdt_id)->get('multi_image')->row();
    $data['related_pdts'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('products.is_active',1)->where('products.id !=',$pdt_id)->limit(5)->get()->result();
		$this->load->template('welcome/single_product',$data);
	}
	public function addToCart()
	{
		$data = array( 'id' => $_POST['product_id'],
			            'qty' => $_POST['quantity'],
			            'price' => $_POST['product_price'],
			            'name' => $_POST['product_name'],
			            'image' => $_POST['product_image'],

		               );
		      $this->cart->insert($data);
          
		         redirect('welcome/cart');

	}
  public function addToCart_wishItems($id)
  {
    $data = $this->db->where('pdt_id',$id)->get('wishlist')->row();
        $items = array('id' => $data->pdt_id,
                        'qty' =>$data->pdt_qty,
                         'price' =>$data->pdt_cost,
                         'name' =>$data->pdt_name,
                          'image' =>$data->pdt_image);
         if ($this->cart->insert($items)) {
               $update = array('is_active' => 0);
             $this->db->where('pdt_id',$id)->update('wishlist',$update);
                redirect('welcome/wishlist');
               }

  }
	public function cart()
	{

		$data['cartItems'] = $this->cart->contents();


    if (isset($this->session->userdata['id'])) 
    {
      $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
      $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();

        $this->load->template('welcome/cart',$data);
    }
    $this->load->template('welcome/cart',$data);


	}
	public function removeCartItem($rowId)
	{

		$this->cart->remove($rowId);
		redirect('welcome/cart');

	}

	public function order()
	{
               //echo '<pre>'; print_r($this->input->post()); exit();

		   if($this->input->server('REQUEST_METHOD') == 'POST'){

		   	if(!empty($this->input->post()) && count(($this->input->post())) > 0){
                $ordercount = count($this->input->post('id'));
                for($i = 0; $i < $ordercount; $i++){ 
                    $rowid  = $this->input->post('rowid')[$i];
                    $pdt_id  = $this->input->post('id')[$i];
                    $pdt_qty  = $this->input->post('pdt_qty')[$i]; 
                    $pdt_name  = $this->input->post('name')[$i]; 
                    $pdt_image  = $this->input->post('image')[$i];
                    $subtotal  = $this->input->post('subtotal')[$i]; 

                        $uploadData['rowid'] = $rowid;
                        $uploadData['id'] = $pdt_id;
                        $uploadData['qty'] = $pdt_qty;
                        $uploadData['name'] = $pdt_name;
                        $uploadData['image'] = $pdt_image;
                        $uploadData['subtotal'] = $subtotal;

                        $this->cart->update($uploadData);

                }


                redirect('welcome/checkout');


		   	}

          }

        }
   public function checkout()
        {
              //echo '<pre>'; print_r($this->input->post()); exit();
		   if($this->input->server('REQUEST_METHOD') == 'POST'){

		   	if(!empty($this->input->post()) && count(($this->input->post())) > 0){
                $ordercount = count($this->input->post());
                for ($i=0; $i <$ordercount ; $i++) { 
                        $orderData['name'] = implode (",", $this->input->post('name'));
                        $orderData['qty'] = implode (",", $this->input->post('qty'));
                        $orderData['image'] = implode (",", $this->input->post('image'));
                        $orderData['pdt_id'] = implode (",", $this->input->post('pdt_id'));
                        $orderData['price'] = implode (",", $this->input->post('price'));
                        $orderData['subtotal'] = implode (",", $this->input->post('subtotal'));

                }
                        $orderData['email'] = $this->input->post('billing_email');
                        $orderData['phone'] = $this->input->post('billing_phone');
                        $orderData['amount_payable'] = $this->input->post('total');
                        $orderData['payment_method'] = $this->input->post('payment_method');
                        $orderData['note'] = $this->input->post('note');

            }
                $data = array(
                	           'first_name' => $this->input->post('billing_first_name'),
                	           'last_name' => $this->input->post('billing_last_name'),
                	           'email' => $this->input->post('billing_email'),
                	           'phone' => $this->input->post('billing_phone'),
                	           'addressline1' => $this->input->post('billing_address_1'),
                	           'addressline2' =>$this->input->post('billing_address_2'),
                	           'city' =>$this->input->post('billing_city'),
                	           'state' =>$this->input->post('billing_state'),
                	           'zipcode' =>$this->input->post('billing_postcode'),
                	           'created_at' =>date('Y-m-d'));
                // echo '<pre>'; print_r($data);exit;

                         $this->db->insert('customers',$data);
                           $this->complete_order($orderData);
                         redirect('welcome/complete_order');
            }

            $data ['orders'] = $this->cart->contents();

		$this->load->template('welcome/checkout',$data);

        }
 public function complete_order($orderData=null)
        {
        	$data = $orderData;
        	if (!empty($orderData) && $orderData['payment_method'] != 'stripe') {
        		$insertData['order_id'] = 'OM'.date("ymdhms").'MSW'.str_shuffle($orderData['phone'])	;
        		$insertData['name'] = $orderData['name'];
        		$insertData['qty'] = $orderData['qty'];
        		$insertData['image'] = $orderData['image'];
        		$insertData['pdt_id'] = $orderData['pdt_id'];
        		$insertData['price'] = $orderData['price'];
        		$insertData['subtotal'] = $orderData['subtotal'];
        		$insertData['email'] = $orderData['email'];
        		$insertData['phone'] = $orderData['phone'];
        		$insertData['amount_payable'] = $orderData['amount_payable'];
        		$insertData['payment_mode'] = $orderData['payment_method'];
        		$insertData['note'] = $orderData['note'];
        		$insertData['payment_status'] = 'pending';
        		$insertData['created_at'] = date('Y-m-d h:i:s');
        		$this->db->insert('orders',$insertData);
        		$this->cart->destroy();
                redirect('welcome/track_order/'.base64_encode($insertData['order_id']));

        		
        	}


        }
public function track_order($order_id=null)

        {
        	if(!empty($order_id) || !empty($_GET)){

              $order_id = !empty($order_id) ? base64_decode($order_id) : $_GET['orderid'];
              $order_data['orders'] = $this->db->where('order_id',$order_id)->get('orders')->row();
              $order_data['customers'] = $this->db->where('email',$order_data['orders']->email)->get('customers')->row();
              // echo '<pre>'; print_r($order_data); exit;


                require_once('assets/phpmailer/class.phpmailer.php');
   $my_path =  asset_url().'images/products/'.$order_data['orders']->image;

   $message = '<div>Hello,'.$order_data['customers']->first_name.''.$order_data['customers']->last_name.'<br>Thank You For Your Order !<br>Product:'.$order_data['orders']->name.'<br> Order Id:'.$order_data['orders']->order_id.'<br>Email :'.$order_data['orders']->email.'<br>Contact Number:'.$order_data['orders']->phone.'<br>Full Address:'.$order_data['customers']->addressline1.','.$order_data['customers']->addressline2.','.$order_data['customers']->zipcode.'<br> City:'.$order_data['customers']->city.'<br> State:'.$order_data['customers']->state.'<br>Total Amount:'.$order_data['orders']->amount_payable.'<br>Payment Mode:'.$order_data['orders']->payment_mode.'<br> Order Status:'.$order_data['orders']->payment_status.'</div>';
   
   
    
   $mail = new PHPMailer;
   
   //$mail->SMTPDebug = 4;                               // Enable verbose debug output
   
   $mail->isSMTP();                                      // Set mailer to use SMTP
   $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
   $mail->SMTPAuth = true;                               // Enable SMTP authentication
   $mail->Username = 'softwalasonu@gmail.com';                 // SMTP username
   $mail->Password = 'softwalasonu@1411';                           // SMTP password
   $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
   $mail->Port = 587;                                    // TCP port to connect to
   
   $mail->setFrom('softwalasonu@gmail.com','OutlookMobiles');
   $mail->addAddress($order_data['orders']->email);     // Add a recipient
   $mail->addReplyTo('softwalasonu@gmail.com');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');
   
   // $mail->addAttachment('newsletter/'.$row[1]);         // Add attachments
  // foreach ($cid as $key => $id) {
      //$cart_details = $this->db->where('id',$id)->where('is_deleted',1)->get('cart')->row();
      //$product_details = $this->db->where('id',$cart_details->pdt_id)->where('is_active',1)->get('products')->row();
    // $mail->addAttachment( $my_path); 
   $mail->isHTML(true);                                  // Set email format to HTML
   
   $mail->Subject = 'You Orders';
   $mail->Body    = $message;
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
   if(!$mail->send()) {
      echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
   }
    // }

        	   $this->load->template('welcome/track_order',$order_data);

              
          }else{
          $this->load->template('welcome/track_order');
      }

   }
   public function search_products()

   {
    if(isset($this->session->userdata['id'])){
        $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();
         $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
        
      }
    $data['cartItems'] = $this->cart->contents();
    $data['brands'] = $this->db->where('is_active',1)->order_by('id','desc')->get('brands')->result();
    $data['products'] = $this->db->where('is_active',1)->order_by('id','desc')->get('products')->result();

    //echo '<pre>'; print_r ($this->input->get());

       if(isset($_GET['product_cat']) && empty($_GET['keyword'])){
        $data['products'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->where('brands.id',$_GET['product_cat'])->where('products.is_active',1)->order_by('products.id','desc')->get()->result();

        $this->load->template('welcome/search_products',$data);

        }
        else if(isset($_GET['keyword'])){
        $data['products'] = $this->db->select('brands.*,products.*')->from('products')->join('brands', 'brands.id = products.brand_id')->like('products.pdt_name',$_GET['keyword'])->where('products.is_active',1)->order_by('products.id','desc')->get()->result();

        $this->load->template('welcome/search_products',$data);


        }
   
   }
   public function get_products_api()
   {
    $data = $this->db->query('select products.id,products.brand_id,products.pdt_sku,products.pdt_name,products.pdt_specification,products.old_pdt_cost,products.new_pdt_cost,products.pdt_color,products.pdt_stk,products.pdt_image from products');
      echo json_encode($data->result());
    
   }
   public function signUp()
   {
    $data['cartItems'] = $this->cart->contents();

     if (isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST'){
            $data = array('first_name' =>$this->input->post('first_name'),
                          'last_name' =>$this->input->post('last_name'),
                          'email_id' =>$this->input->post('email'),
                          'password' =>$this->input->post('password'),
                          'created_at' =>date('Y-m-d H:i:s'));

                               if($this->db->insert('users',$data)){
                                $userdata=array(
                                  'id'=>$this->db->insert_id(),
                                  'email'=>$data['email'],
                                  'first_name'=>$data['first_name'],
                                  'last_name'=>$data['last_name'],
                                   'authenticate'=>TRUE);
                                  $this->session->set_userdata($userdata);
                              }
                redirect('welcome/index');
               }
      
        $this->load->template('welcome/signUp');
   }
   public function signIn()
    {
    $data['cartItems'] = $this->cart->contents();

   
       if ($this->input->server('REQUEST_METHOD') == 'POST'){
            $email=$this->input->post('email');
            $password=$this->input->post('password');

             $this->db->where('email_id',$email);
           $this->db->where('password',$password);
               $query=$this->db->get('users')->row();

            if ($query) {
                $userdata=array(
                                 'id'=>$query->id,
                                 'email'=>$query->email,
                                 'first_name'=>$query->first_name,
                                 'last_name'=>$query->last_name,
                                  'authenticate'=>TRUE);
                $this->session->set_userdata($userdata);
                      redirect('welcome/index');
            }

        }
      

        $this->load->template('welcome/signIn');


    }
     public function user_account()
    {
    $data['cartItems'] = $this->cart->contents();

     //echo '<pre>'; print_r($this->session->userdata['id']);die;

     if(isset($this->session->userdata['id'])){
       $data['user']=$this->db->where('id',$this->session->userdata['id'])->get('users')->row();
        $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
      $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();

       if(isset($_POST['submit']) && $this->input->server('REQUEST_METHOD') == 'POST'){

               $query = array('first_name' =>$this->input->post('first_name'),
                                'last_name' =>$this->input->post('last_name'),
                                'email_id' =>$this->input->post('email'),
                                'password' =>$this->input->post('password'),
                                'created_at' =>date('Y-m-d H:i:s'));
                   
                  $this->db->where('id',$this->session->userdata['id'])->update('users',$query);
    

                           redirect('welcome/user_account');
       }

        $this->load->template('welcome/user_account',$data);
    }
 
      else
      {
          redirect('welcome/signIn');
      }

    }
    public function user_logout()
    {
      $this->session->sess_destroy();
      redirect('welcome/index');

    }
   public function addWishlist()
   {
    if (isset($this->session->userdata['id']) && $this->input->server('REQUEST_METHOD') == 'POST') {
      $data = array('user_id' => $this->session->userdata['id'], 
                  'pdt_id' => $_POST['product_id'],
                  'pdt_qty' => $_POST['quantity'],
                  'pdt_cost' => $_POST['product_price'],
                  'pdt_name' => $_POST['product_name'],
                  'pdt_image' => $_POST['product_image'],
                  'created_at' => date('Y-m-d H:i:s'));

                   $this->db->insert('wishlist',$data);
                  
    }
    else
    {
      redirect('welcome/signIn');
    }

   }
   public function wishlist()
   {
    $data['cartItems'] = $this->cart->contents();

    if (isset($this->session->userdata['id'])) {

      $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();
      $data['user'] = $this->db->where('id',$this->session->userdata['id'])->where('is_active',1)->get('users')->row();
      $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
         $this->load->template('welcome/wishlist',$data);
    }
    else
    {
    redirect('welcome/signIn');
     }
      
   }
   public function remove_wishlist($pdt_id)
   {
    $data = array('is_active' => 0);

     $this->db->where('pdt_id',$pdt_id)->update('wishlist',$data);
      redirect('welcome/wishlist');
   }
   public function compare()
   {
    $data['cartItems'] = $this->cart->contents();

    if (isset($this->session->userdata['id']) && $this->input->server('REQUEST_METHOD') == 'POST') {
      $data = array('user_id' => $this->session->userdata['id'], 
                  'pdt_id' => $_POST['product_id'],
                  'pdt_qty' => $_POST['quantity'],
                  'pdt_cost' => $_POST['product_price'],
                  'pdt_name' => $_POST['product_name'],
                  'pdt_image' => $_POST['product_image'],
                  'pdt_specification' => $_POST['product_specification'],
                  'created_at' => date('Y-m-d H:i:s'));

                   $this->db->insert('compare',$data);
                           return $data;

                  
    }
    if (isset($this->session->userdata['id'])) 
    {
      $data['compareItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('compare')->result();
      $data['wishItems'] = $this->db->where('user_id',$this->session->userdata['id'])->where('is_active',1)->get('wishlist')->result();

        $this->load->template('welcome/compare',$data);
    }
         else
    {
      redirect('welcome/signIn');
    }

   }
   public function remove_compare($pdt_id)
   {
    $data = array('is_active' => 0);

     $this->db->where('pdt_id',$pdt_id)->update('compare',$data);
      redirect('welcome/compare');
   }
   public function fetch()
   {
     $output = '';
     $query = '';
     $this->load->model('search_product_model');
     if($this->input->post('query'))
     {
       $query = $this->input->post('query');
     }
     $data = $this->search_product_model->fetch_data($query);
    //  echo '<pre>'; print_r($data->result()); exit();
     $output .='<ul class="products columns-3">
                
               ';
               if($data->num_rows() >0)
               {
                 foreach($data->result() as $row)
                 {
                   $output .='
                                    
                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="#" rel="tag">'.$row->brand.'</a></span>
                                                    <a href=" '.base_url().'welcome/single_product/'.$row->id.'">
                                                        <h3>'.$row->pdt_name.'</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="'.asset_url().'images/products/'.$row->pdt_image.'" src="'.asset_url().'images/products/'.$row->pdt_image.'" alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                            <ins><span class="amount">₹'.$row->new_pdt_cost.'</span></ins>
                                                             <del><span class="amount">₹'.$row->old_pdt_cost.'</span></del>
                                                             </span>
                                                             </span>
                                                        <a rel="nofollow" href="JavaScript:Void(0);" id="add_to_cart_item" class="button add_to_cart_button" data-productid="'.$row->id.'" data-productname="'.$row->pdt_name.'" data-price="'.$row->new_pdt_cost.'" data-image="'.$row->pdt_image.'">Add to cart</a>
                                                    </div>

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_wishlist" data-productidwish="'.$row->id.'" data-productnamewish="'.$row->pdt_name.'" data-productpricewish="'.$row->new_pdt_cost.'" data-productimagewish="'.$row->pdt_image.'" > Wishlist</a>
                                                             <a href="JavaScript:Void(0);" rel="nofollow" class="add_to_compare add-to-compare-link" data-productidcompare="'.$row->id.'" data-productnamecompare="'.$row->pdt_name.'" data-productpricecompare="'.$row->new_pdt_cost.'" data-productimagecompare="'.$row->pdt_image.'" data-productspecificationcompare="'.$row->pdt_specification.'" >Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>


                                  
                             ';
                 }
               }
               $output .='  </ul>
                              ';
               echo $output;

   }
   public function filter_products()
   {
    $this->load->model('search_product_model');
    $data['brands'] = $this->search_product_model->fetch_filter_type('brand');
    $data['colors'] = $this->search_product_model->fetch_filter_type('pdt_color');
    $this->load->template('welcome/filter_products',$data);
   }
   public function fetch_products()
   {
      $this->load->model('search_product_model');
      $minimum_price = $this->input->post('minimum_price');
      $maximum_price = $this->input->post('maximum_price');
      $brand = $this->input->post('brand');
      $color = $this->input->post('color');
      $config = array();
      $config['base_url'] = '#';
      $config['total_rows'] = $this->search_product_model->count_all($minimum_price,$maximum_price,$brand,$color);
      $config['per_page'] = 8;
      $config['uri_segment'] = 3;
      $config['use_page_numbers'] = TRUE;
      $config['full_tag_open'] = '<ul class="pagination">';
      $config['full_tag_close'] = '</ul>';
      $config['first_tag_open'] = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['last_tag_open'] = '<li>';
      $config['last_tag_close'] = '</li>';
      $config['next_link'] = '&gt;';
      $config['next_tag_open'] = '<li>';
      $config['next_tag_close'] = '</li>';
      $config['prev_link'] = '&lt;';
      $config['prev_tag_open'] = '<li>';
      $config['prev_tag_close'] = '</li>';
      $config['cur_tag_open'] = "<li class='active'><a href='#'>";
      $config['cur_tag_close'] = '</a></li>';
      $config['num_tag_open'] = '<li>';
      $config['num_tag_close'] = '</li>';
      $config['num_links'] = 3;
      $this->pagination->initialize($config);
      $page = $this->uri->segment(3);
      $start = ($page - 1) * $config['per_page'];
      $output = array(
        'pagination_link' => $this->pagination->create_links(),
         'product_list' => $this->search_product_model->fetch_product_data($config["per_page"],$start,$minimum_price,$maximum_price,$brand,$color)
      );
      echo json_encode($output);

   }

}


