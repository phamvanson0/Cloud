  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/Utopia05.jpg" alt="Slide" style="width:46%">
						<div class="caption-group">
							<h2 class="caption title">
								Transformers Square One <span class="primary">MakeToys <strong>Utopia</strong></span>
							</h2>
							<h4 class="caption subtitle">Robot Mode</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
					<li><img src="img/OmegaSupremeWFC.jpg" alt="Slide" style="width:35%">
						<div class="caption-group">
							<h2 class="caption title">
								Transformers Toys <span class="primary">Genegrations War for Cybertron </br>
                                <strong>Omega Supreme</strong></span>
							</h2>
							<h4 class="caption subtitle">WFC Titan</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
					<li><img src="img/StarSaber.jpg" alt="Slide" style="width:30%">
						<div class="caption-group">
							<h2 class="caption title">
								Transformers <span class="primary">Masterpiece <strong>MP-24 Star Saber</strong></span>
							</h2>
							<h4 class="caption subtitle">Transformers Victory</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
					<li><img src="img/transformers-masterpiece-mp-44-convoy-optimus-prime-ver-3.jpg" alt="Slide" style="width:46%">
						<div class="caption-group">
						  <h2 class="caption title">
								Transformers <span class="primary">Masterpiece <strong>MP-44 Convoy Optimus Prime</strong></span>
							</h2>
							<h4 class="caption subtitle">Transformers G1</h4>
							<!-- <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a> -->
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Introduction of functions-->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load product from DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--One product -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                    <div class="product-hover">
                                        <a href="?page=detail&&id=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?></ins> <del><?php echo  $row['oldPrice']?></del>
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/hasbrobrand.png" alt="">
                            <img src="img/TakaraTomybrand.png" alt="">
                            <img src="img/maketoysbrand.png" alt="">                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->