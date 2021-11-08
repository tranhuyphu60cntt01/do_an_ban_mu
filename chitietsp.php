<!DOCTYPE php>
<php>
	<head>
		<title>THE HATS SHOP</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
	<?php
		require('./header.php');
		?>
	<?php 
    require './config.php';
    $result =mysqli_query($conn,"SELECT * FROM `sanpham`,`loaisanpham` WHERE sanpham.id_lsp=loaisanpham.id_lsp  AND `id_sp`=".$_GET['id_sp']);
    $product =mysqli_fetch_assoc($result);

    ?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">Chung</a></span> / <span>Chi tiêt</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
						<div class="product-entry border ">
							<a href="#" class="prod-img " >
								<img width="600px" height="800px" src="<?=$product['anh']?>" class="img-fluid " alt="Free php5 bootstrap 4 template">
							</a>
						</div>
							
					</div>
					<div class="col-sm-4 border">
						<div class="product-desc">
							<h3>Thông tin cụ thể của <br> <?=$product['ten_sp']?> </h3> <hr> <hr>
							<p>Giá: <?=$product['gia']?> đồng </p> <hr> <hr>
							<p>Mô tả cụ thể: <?=$product['mo_ta']?> </p> <hr> <hr>
							<p>Số lượng sản phẩm  </p>
							
                     <div class="input-group mb-4">
                     	<span class="input-group-btn">
                        	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                           <i class="icon-minus2"></i>
                        	</button>
                    		</span>
                     	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="1000">
                     	<span class="input-group-btn ml-1">
                        	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                             <i class="icon-plus2"></i>
                         </button>
                     	</span>
                  	</div>
                  	<div class="row">
	                  	<div class="col-sm-12 text-center">
									<p class="addtocart"><a href="cart.php" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> MUA</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
								  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								    <li class="nav-item">
								      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Mũ nón nước ta</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Chế tạo</a>
								    </li>
								  
								  </ul>

								  <div class="tab-content" id="pills-tabContent">
								    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
								      <p>Chiếc mũ vải có ba phần. Chóp mũ hình xoáy trôn ốc. Thân mũ có nhiều hình tam giác cân, cũng có thể gồm nhiều vành, nhiều vòng to nhỏ khác nhau. Vành mũ xoè rộng ra hình tròn hoặc hình vẹt. Mũ được may bằng lụa hoặc thứ vải cứng pha ni-lông. Màu sắc thật đa dạng, phong phú. Có mũ vải trắng nõn hoặc xanh lơ một màu.
Các cô lớp năm, lốp sáu hay đội loại mũ này. Có mũ vải màu hồng hoặc phối hợp các màu xanh, trắng, đỏ, tím, vàng... Học sinh lớp Hai, lớp Ba thích đội mũ nhiều màu. Phải tùy theo khuôn mặt, nước da, mái tóc mà chọn kiểu mũ thì lúc đội mũ mới đẹp.</p>
										<p>Em có nước da trắng hồng nên mẹ chọn cho chiếc mũ vải màu xanh da trời có thêm cành hoa hồng và đôi bướm trắng. Cái Lụa bạn em lại đội mũ màu hồng có thêu đôi chim bồ câu trắng, xanh. Chiều nào tan học, hàng trăm học sinh từ cổng trường toả về các nẻo đường, lưng đeo ba-lô cóc, đầu đội mũ vải, tựa những chiếc nấm màu xinh xắn biết chuyển động..</p>
										
								    </div>

								    <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
								    <ul>
											<li>Bước 1: Tách riêng từng bộ phận của chiếc nón lưỡi trai cũ.</li>
											<li>Bước 2: Vẽ phác thảo các bộ phận vừa thu được lên giấy.</li>
											<li>Bước 3: Cắt vải theo các mẫu phác thảo..</li>
											<li>Bước 4: May ráp các bộ phận với nhau.</li>
											<li>Bước 5: Đội thử lên đầu và cân chỉnh kích thước.</li>
											<li>Bước 6: Hoàn thành phần sau nón.</li>
									</ul>
								</div>

								 
								  </div>
								</div>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
			require('./footer.php');
		?>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>


	</body>
</php>

