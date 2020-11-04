<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     if ( ! function_exists('asset_url()'))
     {
       function asset_url()
       {
          return base_url().'assets/';
       }
     }


     if ( ! function_exists('admin_asset_url()'))
     {
       function admin_asset_url()
       {
          return base_url().'admin_assets/';
       }
     }
 ?>