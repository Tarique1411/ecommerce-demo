<style type="text/css">
	
.card-body.p-b-20 .list-group{
	display: unset;
}
.main-wthree input.name
{
  border-radius: 11px;
}
.main-wthree form span
{
  font-size: 11px;
}
.container{
  margin-top: -120px;
}
</style>

<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Upload Products</h2>
        <?php //echo '<pre>'; print_r($edit);exit; ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="username">
				<span class="username" >Select Brand:</span>
                       <select name="brand_id" style="padding: 8px;" >
                       	<?php if (!empty($brands)){ ?>
                       <?php foreach ($brands as $key => $brand) { ?>
             <option value="<?php echo $brand->id;?>"><?php echo $brand->brand_name;?></option>
                        <?php } } ?>
                         </select>
				<div class="clearfix"></div>

            </div><br>
            <div class="username">
        <span class="username" >Select Filter Brand:</span>
                       <select name="brand" style="padding: 8px;" >
                        <?php if (!empty($brands)){ ?>
                       <?php foreach ($brands as $key => $brand) { ?>
             <option value="<?php echo $brand->brand_name;?>"><?php echo $brand->brand_name;?></option>
                        <?php } } ?>
                         </select>
        <div class="clearfix"></div>

            </div><br>
			<div class="username">
				<span class="username">Product SKU:</span>
				<input type="text" name="pdt_sku" class="name" placeholder="" value="" required="true">
				<div class="clearfix"></div>
			</div>
				<div class="username">
				<span class="username">Want To Add In Special Offer Product ?</span><br>
				<input type="radio" id="yes" name="special" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="special" value="no">
                <label for="no">No</label><br>
				<div class="clearfix"></div>
			</div><br>
				<div class="username">
				<span class="username">Want To Add In Banner ?</span><br>
				<input type="radio" id="yes" name="top" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="top" value="no">
                <label for="no">No</label><br>
				<div class="clearfix"></div>
			</div><br>
				<div class="username">
				<span class="username">Want To Add In Best Selling Product ?</span><br>
				<input type="radio" id="yes" name="best" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="best" value="no">
                <label for="no">No</label><br>
				<div class="clearfix"></div>
			</div><br>
				<div class="username">
				<span class="username">Want To Add In Featured Product ?</span><br>
				<input type="radio" id="yes" name="featured" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="featured" value="no">
                <label for="no">No</label><br>
				<div class="clearfix"></div>
			</div><br>
      <div class="username">
        <span class="username">Want To Add In Top 20 Product ?</span><br>
        <input type="radio" id="yes" name="top_twenty_pdt" value="yes">
                <label for="yes">Yes</label>
                <input type="radio" id="no" name="top_twenty_pdt" value="no">
                <label for="no">No</label><br>
        <div class="clearfix"></div>
      </div><br>
				<div class="username">
				<span class="username">Product Name:</span>
				<input type="text" name="pdt_name" class="name" placeholder="" value="" required="true">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">Product Specification:</span>
        <textarea name="pdt_specification" required="true"></textarea>
				<div class="clearfix"></div>
			</div>
				<div class="username">
				<span class="username">Product Description:</span>
				<textarea name="pdt_desc" required="true"></textarea>
				<div class="clearfix"></div>
			</div><br>
				<div class="username">
				<span class="username">Old Product Cost:</span>
				<input type="text" name="old_pdt_cost" class="name" placeholder="" value="" required="true">
				<div class="clearfix"></div>
			</div>
      <div class="username">
        <span class="username">New Product Cost:</span>
        <input type="text" name="new_pdt_cost" class="name" placeholder="" value="" required="true">
        <div class="clearfix"></div>
      </div>
			<div class="password-agileits">
				<span class="username">Product In Stock</span>
				<input type="text" name="pdt_stk" class="name" placeholder=""  required="true">
				<div class="clearfix"></div>
			</div>
      <div class="password-agileits">
        <span class="username">Product Color</span>
        <input type="text" name="pdt_color" class="name" placeholder=""  required="true">
        <div class="clearfix"></div>
      </div>
			<div class="password-agileits">
				<span class="username">Product Image</span>
				<input type="file" name="pdt_image" class="name" placeholder=""  required="true">
				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" name="submit" value="Upload">
			</div>
			<div class="clearfix"></div>
		</form>
		</div>
	</div>
	</div>

		<div class="table-responsive" style="margin-left: 240px; padding: 15px;size: 40px; font: small-caption;font-size: 15px;font-family: monospace;">
        <table class="table table-striped table-sm" id="myTable" >
          <thead>
            <tr>
              <th>Sl no</th>
              <th>Products Sku</th>
              <th>Products Name</th>
              <th>Product Color</th>
              <th>Special offers Product</th>
              <th>Banner product</th>
              <th>Best Selling Product</th>
              <th>Featured Product</th>
              <th>Top 20 Product</th>
              <th>Product Specification</th>
              <th>Product Description</th>
              <th>New Product Cost</th>
              <th>Old Product Cost</th>
              <th>Product In Stock</th>
              <th>Product Color</th>
              <th>Product Image</th>
              <th>Is Active</th>
              <th>Date</th>
              <th>Update</th>
              <th>Add To Banner</th>
              <th>Remove From Banner</th>
              <th>Add To Special Offers</th>
              <th>Remove From Special Offers</th>
              <th>Add To Best Selling</th>
              <th>Remove From Best Selling</th>
              <th>Add To Featured Product</th>
              <th>Remove From Featured Product</th>
              <th>Add To Top 20 Product</th>
              <th>Remove From Top 20 Product</th>
              <th>Deactivate</th>
            </tr>
          </thead>
          <tbody>
            
           <?php foreach ($products as $key => $product) { ?>
            <tr>
             <th><?php echo $product->id; ?></th>
             <th><?php echo $product->pdt_sku; ?></th>
             <th><?php echo $product->pdt_name; ?></th>
             <th><?php echo $product->pdt_color; ?></th>
             <th>
             	<?php if ($product->spl_offer_pdt == 'yes') { ?>
            <span class="label label-success"><?php echo 'Yes' ?></span><?php  }else{ ?>
            <span class="label label-danger"><?php echo 'No'; ?>
            	<?php } ?>
            </span>
            </th>
            <th>
             	<?php if ($product->top_pdt == 'yes') { ?>
            <span class="label label-success"><?php echo 'Yes' ?></span><?php  }else{ ?>
            <span class="label label-danger"><?php echo 'No'; ?>
            	<?php } ?>
            </span>
            </th>
            <th>
             	<?php if ($product->best_selling_pdt == 'yes') { ?>
            <span class="label label-success"><?php echo 'Yes' ?></span><?php  }else{ ?>
            <span class="label label-danger"><?php echo 'No'; ?>
            	<?php } ?>
            </span>
            </th>
            <th>
             	<?php if ($product->featured_pdt == 'yes') { ?>
            <span class="label label-success"><?php echo 'Yes' ?></span><?php  }else{ ?>
            <span class="label label-danger"><?php echo 'No'; ?>
            	<?php } ?>
            </span>
            </th>
            <th>
              <?php if ($product->top_twenty_pdt == 'yes') { ?>
            <span class="label label-success"><?php echo 'Yes' ?></span><?php  }else{ ?>
            <span class="label label-danger"><?php echo 'No'; ?>
              <?php } ?>
            </span>
            </th>
             <th><?php echo $product->pdt_specification; ?></th>
             <th><?php echo $product->pdt_desc; ?></th>
             <th><?php echo $product->new_pdt_cost; ?></th>
             <th><?php echo $product->old_pdt_cost; ?></th>
             <th><?php echo $product->pdt_stk; ?></th>
             <th><img src="<?php echo asset_url();?>/images/products/<?php echo $product->pdt_image; ?>" alt="" style="width: 100px; height: 100px;" ></th>
             <th>
             	<?php if ($product->is_active == 1) { ?>
            <span class="label label-success"><?php echo 'Yes' ?></span><?php  }else{ ?>
            <span class="label label-danger"><?php echo 'No'; ?>
            	<?php } ?>
            </span>
            </th>
            <th><?php echo $product->created_at; ?></th>
             <th><span class="label label-primary" ><a href="<?php echo base_url().'admin/upload_products/'.$product->id; ?>" class="button" style="color: yellow;">Edit</a></span></th>
             <th><a href="<?php echo base_url().'admin/add_to_banner/'.$product->id; ?>" class="button" style="color: orange;">Add</a></th>
             <th><a href="<?php echo base_url().'admin/remove_banner/'.$product->id; ?>" class="button" style="color: red;">Remove</a></th>
             <th><a href="<?php echo base_url().'admin/add_to_spl_offer/'.$product->id; ?>" class="button" style="color: orange;">Add</a></th>
             <th><a href="<?php echo base_url().'admin/remove_from_spl_offer/'.$product->id; ?>" class="button" style="color: red;">Remove</a></th>
             <th><a href="<?php echo base_url().'admin/add_to_best_selling/'.$product->id; ?>" class="button" style="color: orange;">Add</a></th>
             <th><a href="<?php echo base_url().'admin/remove_from_best_selling/'.$product->id; ?>" class="button" style="color: red;">Remove</a></th>
             <th><a href="<?php echo base_url().'admin/add_to_featured_product/'.$product->id; ?>" class="button" style="color: orange;">Add</a></th>
             <th><a href="<?php echo base_url().'admin/remove_from_featured_product/'.$product->id; ?>" class="button" style="color: red;">Remove</a></th>
             <th><a href="<?php echo base_url().'admin/add_in_top_twenty/'.$product->id; ?>" class="button" style="color: orange;">Add</a></th>
             <th><a href="<?php echo base_url().'admin/remove_from_top_twenty/'.$product->id; ?>" class="button" style="color: red;">Remove</a></th>
             <th><span class="label label-danger"><a href="<?php echo base_url().'admin/delete_products/'.$product->id; ?>" class="button" style="color: white;">Deactivate</a></span></th>

            </tr>
           <?php } ?>
          </tbody>
        </table>
      </div>

				<div class="footer">
					<p style="color: black;">&copy; 2020 Outlookmobiles . All Rights Reserved </p>
				</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
          $(document).ready( function () {
    $('#myTable').DataTable();
} );
        </script>
</body>