<style type="text/css">
	
.card-body.p-b-20 .list-group{
	display: unset;
}
</style>

<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Upload Brands</h2>
        <?php //echo '<pre>'; print_r($edit);exit; ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="username">
				<span class="username">Brand Name:</span>
				<?php if (!empty($edit)) { ?>
				<input type="text" name="brand_name" class="name" placeholder="" value="<?php echo $edit->brand_name; ?>" required="true">
			      <?php	}else{ ?>
			      	<input type="text" name="brand_name" class="name" placeholder=""  required="true">
			      <?php } ?>

				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Brand Image</span>
				<?php if (!empty($edit)) { ?>
				<input type="file" name="brand_image" class="password" placeholder=""  required="true">
			      <?php	}else{ ?>
			      	<input type="file" name="brand_image" class="password" placeholder=""  required="true">
			      <?php } ?>

				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" name="submit" value="Upload">
			</div>
			<div class="clearfix"></div>
		</form>
		<div class="card-header">

                                    <h3>Brands</h3>
                                </div>
                                <div class="card-body p-b-20" >
                                    <div class="list-group">
                                    	<?php foreach ($brands as $key => $brand) { ?>
                                             <div class="pull-left">
                                                <img class="lg-item-img" src="<?php echo asset_url();?>/images/brands/<?php echo $brand->brand_image; ?>" alt="">
                                                	<b><?php echo $brand->brand_name; ?></b>
                                            </div>
                                            <div class="media-body">
                                                <div class="pull-right">
                                                	<a href="<?php echo base_url().'admin/upload_brands/'.$brand->id; ?>" class="button" style="color: yellow;">Edit</a>
                                                	<a href="<?php echo base_url().'admin/delete_brand/'.$brand->id; ?>" class="button" style="color: red;">Delete</a>

                                                </div>
                                            </div>
                                    	<?php } ?>
                                   	</div>
                                </div>

				<div class="footer">
					<p>&copy; 2020 Outlookmobiles . All Rights Reserved </p>
				</div>
	</div>
	</div>
	</div>
</body>