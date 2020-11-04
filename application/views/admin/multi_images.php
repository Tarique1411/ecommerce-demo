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
                       <select name="brand" style="padding: 8px;" >
                       	<?php if (!empty($brands)){ ?>
                       <?php foreach ($brands as $key => $brand) { ?>
             <option value="<?php echo $brand->id;?>"><?php echo $brand->brand_name;?></option>
                        <?php } } ?>
                         </select>
				<div class="clearfix"></div>

            </div><br>
            <div class="username">
        <span class="username" >Select Product:</span>
                       <select name="product" style="padding: 8px;" >
                        <?php if (!empty($products)){ ?>
                       <?php foreach ($products as $key => $product) { ?>
             <option value="<?php echo $product->id;?>"><?php echo $product->pdt_name;?></option>
                        <?php } } ?>
                         </select>
        <div class="clearfix"></div>

            </div><br>
			<div class="username">
				<span class="username">Product Color:</span>
				<input type="text" name="color" class="name" placeholder="" value="" required="true">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Product Image</span>
				<input type="file" name="files[]" class="name" placeholder=""  required="true" multiple="multiple" >
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


				<div class="footer">
					<p style="color: black;">&copy; 2020 Outlookmobiles . All Rights Reserved </p>
				</div>
	
	
</body>