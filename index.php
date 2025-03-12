<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'products';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from database
$sql = "SELECT * FROM products_t";
$result = $conn->query($sql);
?>









<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	</head>
<body>

	<?php include 'header.php';
	?>

	<!-- Hero Start -->
	<div class="container-fluid py-5 mb-5 hero-header">
		<div class="container py-5">
			<div class="row g-5 align-items-center">
				<div class="col-md-12 col-lg-7">
					<h4 class="mb-3" style="color: white; margin-top: 80px;">Artify-Quality & Elegance Guaranteed!</h4>
					<h1 class="mb-5 display-3" style="color: white; margin-top: 40px;"><strong>Gift,Art & More - Unwrap
							Joy Today!</strong></h1>
							<div class="position-relative mx-auto" style="margin-top: 40px;">
								<a href="shop.html">
									<button class="btn btn-primary border-2 border-secondary py-3 px-4 text-white" 
										style="border-radius: 8px;">
										Shop Now
									</button>
								</a>
							
								<a href="blog.html">
									<button class="btn btn-primary border-2 border-secondary py-3 px-4 text-white" 
										style="border-radius: 8px;">
										Explore More
									</button>
								</a>
							</div>
							

				</div>



				<div class="col-md-12 col-lg-5">
					<div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
						<div class="carousel-inner h-75" role="listbox">
							<div class="carousel-item active rounded">
								<img src="images/arts.jpg" class="img-fluid w-100  rounded" alt="First slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Arts</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/camera.jpg" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Camera</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/greeting card.jpg" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Greeting Cards</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/wallet2.webp" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Wallet</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/hand beg.jpg" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Hand Bags</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/watch4.jpg" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Watch</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/files.jpg" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Files</a>
							</div>
							<div class="carousel-item rounded">
								<img src="images/doll4.jpg" class="img-fluid w-100 rounded" alt="Second slide"
									style="height: 350px;">
								<a href="#" class="btn px-4 py-2 text-white rounded">Dolls</a>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselId"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>


				<!-- Hero End -->
                

				<!-- catagory -->

				<section class="category-section">
					<div class="section-header">
						<h2>Category</h2>
						<div class="swiper-buttons">
							<a href="#" class="btn btn-primary">View All</a>
							<button class="swiper-button-prev">❮</button>
							<button class="swiper-button-next">❯</button>
						</div>
					</div>
					<div class="swiper-container category-slider">
						<div class="swiper-wrapper">
                                  

							<div class="swiper-slide">
								<img src="images/paint 4.jpg" alt="Meat Products">
								<h4 class="category-title">Wall Art</h4>
							</div>



							<div class="swiper-slide">
								<img src="images/handbags3.webp" alt="Fruits & Veges">
								<h4 class="category-title">Hand Bag</h4>
							</div>
							<div class="swiper-slide">
								<img src="images/wallet.webp" alt="Breads & Sweets">
								<h4 class="category-title">Men's Wallet</h4>
							</div>
							<div class="swiper-slide">
								<img src="images/perfume3.webp" alt="Fruits & Veges">
								<h4 class="category-title">Perfume</h4>
							</div>
							<div class="swiper-slide">
								<img src="images/doll3.webp" alt="Beverages">
								<h4 class="category-title">Dolls</h4>
							</div>
							<div class="swiper-slide">
								<img src="images/watch3.jpg" alt="Meat Products">
								<h4 class="category-title">Watch</h4>
							</div>

							<div class="swiper-slide">
								<img src="images/greeting card.jpg" alt="Meat Products">
								<h4 class="category-title">Greeting Cards</h4>
							</div>

							<div class="swiper-slide">
								<img src="images/beauty2.webp" alt="Meat Products">
								<h4 class="category-title">Beauty Products</h4>
							</div>
						</div>
					</div>
				</section>
				
				<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
				<script>
					var swiper = new Swiper('.category-slider', {
						slidesPerView: 4,
						spaceBetween: 20,
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						},
						loop: true,
						autoplay: {
							delay: 3000,
							disableOnInteraction: false,
						},
						breakpoints: {
							320: { slidesPerView: 1 },
							480: { slidesPerView: 2 },
							768: { slidesPerView: 3 },
							1024: { slidesPerView: 4 }
						}
					});
				</script>
				<!-- catagory -->


</head>
<body>
<div class="product-container">
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="product-card">
            <div class="image-container">
                <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['product_name']; ?>">
                <button class="add-to-cart" 
    data-id="<?php echo htmlspecialchars($row['id']); ?>" 
    data-name="<?php echo htmlspecialchars($row['product_name']); ?>" 
    data-price="<?php echo htmlspecialchars($row['price']); ?>" 
    data-image="<?php echo htmlspecialchars($row['image_path']); ?>">
    Add to Cart
</button>

            </div>
            <div class="product-info">
                <h3><?php echo $row['product_name']; ?></h3>
                <p>$<?php echo number_format($row['price'], 2); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", function() {
            let productId = this.getAttribute("data-id");
            let productName = this.getAttribute("data-name");
            let productPrice = this.getAttribute("data-price");
            let productImage = this.getAttribute("data-image");

            let formData = new FormData();
            formData.append("add_to_cart", true);
            formData.append("id", productId);
            formData.append("name", productName);
            formData.append("price", productPrice);
            formData.append("image", productImage);

            fetch("add_to_cart.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert("Your product has been successfully added to the cart!");
            })
            .catch(error => console.error("Error:", error));
        });
    });
});

</script>
















				<!-- Start Why Choose Us Section -->
				<div class="why-choose-section">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-6">
								<h2 class="section-title" style="color: #3b5d50 ;">Why Choose Us?</h2>
								<p>At Artify, we prioritize quality, convenience, and customer satisfaction. Here’s why
									thousands trust us for their favorite products:</p>

								<div class="row my-5">
									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/truck.svg" alt="Image" class="imf-fluid">
											</div>
											<h3>Fast &amp; Free Shipping</h3>
											<p>Enjoy swift and hassle-free delivery right to your doorstep, without any
												extra cost.</p>
										</div>
									</div>


									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/support.svg" alt="Image" class="imf-fluid">
											</div>
											<h3>24/7 Support</h3>
											<p>Need help? Our dedicated support team is available round the clock to
												assist you with any queries.</p>
										</div>
									</div>

									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/bag.svg" alt="Image" class="imf-fluid">
											</div>
											<h3>Easy to Shop</h3>
											<p>DA seamless shopping experience with an intuitive interface, secure
												payments, and a wide range of premium products.</p>
										</div>
									</div>

									<div class="col-6 col-md-6">
										<div class="feature">
											<div class="icon">
												<img src="images/return.svg" alt="Image" class="imf-fluid">
											</div>
											<h3>Hassle Free Returns</h3>
											<p>Shop with confidence! If you're not satisfied, our easy return policy
												ensures a smooth process for exchanges or refunds.</p>
										</div>
									</div>

								</div>
							</div>

							<div class="col-lg-5">
								<div class="img-wrap">
									<img src="images/choose us.jpg" alt="Image" class="img-fluid">
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- End Why Choose Us Section -->

				<!-- Start We Help Section -->
				<div class="we-help-section">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-7 mb-5 mb-lg-0">
								<div class="imgs-grid" data-aos="fade-up"
								data-aos-duration="3000">
									<div class="grid grid-1"><img src="images/greeting card2.jpg" alt="Untree.co"></div>
									<div class="grid grid-2"><img src="images/doll3.webp" alt="Untree.co"></div>
									<div class="grid grid-3"><img src="images/beauty.jpg" alt="Untree.co"></div>
								</div>
							</div>
							<div class="col-lg-5 ps-lg-5">
								<h2 class="section-title mb-4" style="color: #3b5d50 ;">We Help You Create a Modern &
									Stylish Interior</h2>
								<p>Transform your space with artistic elegance and timeless charm. Whether you're
									decorating your home or workspace, our handpicked collection adds a touch of
									creativity and sophistication.</p>

								<ul class="list-unstyled custom-list my-4">
									<li><strong style="color: black;">✔ Premium Craftsmanship </strong>– Each piece is
										designed to blend seamlessly with modern interiors.</li>
									<li><strong style="color: black;">✔ Versatile & Aesthetic</strong> – From wall art
										to décor essentials, find products that suit every style.</li>
									<!-- <li><strong style="color: black;">✔ Curated for You </strong>– Carefully selected to bring warmth, luxury, and personality to any space.</li>
						<li><strong style="color: black;">✔ Timeless Appeal  </strong>– Elegant designs that stay stylish for years.</li>
						 -->

								</ul>
								<a href="shop.html">
									<button class="btn">
										Shop Now
									</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End We Help Section -->


				<!-- discount Start -->
				<div class="container-fluid service py-5">
					<div class="container py-5">
						<div class="row g-4 justify-content-center">
							<div class="col-md-6 col-lg-4">
								<a href="#">
									<div class="service-item  rounded border ">
										<img src="images/paint.jpg" class="img-fluid rounded-top w-100" alt=""
											style="height:250px;">
										<div class="px-4 rounded-bottom">
											<div class="service-content text-center p-4 rounded">
												<h5 class="text-white"> Wall Paint</h5>
												<h3 class="mb-0">20% OFF</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-4">
								<a href="#">
									<div class="service-item rounded border ">
										<img src="images/watch3.jpg" class="img-fluid rounded-top w-100" alt=""
											style="height:250px;">
										<div class="px-4 rounded-bottom">
											<div class="service-content  text-center p-4 rounded">
												<h5 class="text-white">Hand Watch</h5>
												<h3 class="mb-0">Free delivery</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-lg-4">
								<a href="#">
									<div class="service-item  rounded border">
										<img src="images/wallet.webp" class="img-fluid rounded-top w-100" alt=""
											style="height:250px;">
										<div class="px-4 rounded-bottom">
											<div class="service-content  text-center p-4 rounded">
												<h5 class="text-white">Mens Wallet</h5>
												<h3 class="mb-0">Discount 30$</h3>
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- discount End -->


				<!-- Start Popular Product -->
				<div class="popular-product">
					<div class="container">
						<div class="row">

							<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
								<div class="product-item-sm d-flex">
									<div class="thumbnail">
										<img src="images/perfume remove bg (1).png" alt="Perfume" class="img-fluid">
									</div>
									<div class="pt-3">
										<h3 class="product-title">Luxury Perfume</h3>
										<p>Elegant fragrance for every occasion.</p>
										<p><a href="shop.html" style="color: #3b5d50 ;"><strong>Shop Now</strong></a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
								<div class="product-item-sm d-flex">
									<div class="thumbnail">
										<img src="images/beauty  3 remove bg.png" alt="Beauty Products"
											class="img-fluid">
									</div>
									<div class="pt-3">
										<h3 class="product-title">Beauty Essentials</h3>
										<p>Enhance your natural beauty effortlessly.</p>
										<p><a href="shop.html" style="color: #3b5d50 ;"><strong>Shop Now</strong></a>
										</p>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
								<div class="product-item-sm d-flex">
									<div class="thumbnail">
										<img src="images/hand bags.jpg" alt="Handbag" class="img-fluid">
									</div>
									<div class="pt-3">
										<h3 class="product-title">Elegant Handbag</h3>
										<p>Stylish and spacious for daily use.</p>
										<p><a href="shop.html" style="color: #3b5d50 ;"><strong>Shop Now</strong></a>
										</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- End Popular Product -->


				<!-- Start Testimonial Slider -->
				<div class="testimonial-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 mx-auto text-center">
								<h2 class="section-title" style="color: #3b5d50 ;">Testimonials</h2>
							</div>
						</div>

						<div class="row justify-content-center">
							<div class="col-lg-12">
								<div class="testimonial-slider-wrap text-center">

									<div id="testimonial-nav">
										<span class="prev" data-controls="prev"><span
												class="fa fa-chevron-left"></span></span>
										<span class="next" data-controls="next"><span
												class="fa fa-chevron-right"></span></span>
									</div>

									<div class="testimonial-slider">

										<!-- 1st Team Member -->
										<div class="item">
											<div class="row justify-content-center">
												<div class="col-lg-8 mx-auto">
													<div class="testimonial-block text-center">
														<blockquote class="mb-5">
															<p>&ldquo;Creativity is the heart of Artify, and I love
																bringing unique designs to life!&rdquo;</p>
														</blockquote>
														<div class="author-info">
															<div class="author-pic">
																<img src="images/person-1.png" alt="Ali Raza"
																	class="img-fluid">
															</div>
															<h3 class="font-weight-bold">Emily Carter</h3>
															<span class="position d-block mb-3">Creative Designer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END item -->

										<!-- 2nd Team Member -->
										<div class="item">
											<div class="row justify-content-center">
												<div class="col-lg-8 mx-auto">
													<div class="testimonial-block text-center">
														<blockquote class="mb-5">
															<p>&ldquo;I ensure our customers always find the best
																artistic gifts at Artify!&rdquo;</p>
														</blockquote>
														<div class="author-info">
															<div class="author-pic">
																<img src="images/person_2.jpg" alt="Sana Khan"
																	class="img-fluid">
															</div>
															<h3 class="font-weight-bold">Michael Johnson</h3>
															<span class="position d-block mb-3">Marketing Manager</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END item -->

										<!-- 3rd Team Member -->
										<div class="item">
											<div class="row justify-content-center">
												<div class="col-lg-8 mx-auto">
													<div class="testimonial-block text-center">
														<blockquote class="mb-5">
															<p>&ldquo;I love curating exclusive products that add beauty
																to everyday life.&rdquo;</p>
														</blockquote>
														<div class="author-info">
															<div class="author-pic">
																<img src="images/person_3.jpg" alt="Ahmed Bilal"
																	class="img-fluid">
															</div>
															<h3 class="font-weight-bold">David Williams</h3>
															<span class="position d-block mb-3">Product Manager</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END item -->

										<!-- 4th Team Member -->
										<div class="item">
											<div class="row justify-content-center">
												<div class="col-lg-8 mx-auto">
													<div class="testimonial-block text-center">
														<blockquote class="mb-5">
															<p>&ldquo;Managing Artify’s inventory is a challenge I enjoy
																every day!&rdquo;</p>
														</blockquote>
														<div class="author-info">
															<div class="author-pic">
																<img src="images/person_4.jpg" alt="Ayesha Noor"
																	class="img-fluid">
															</div>
															<h3 class="font-weight-bold">Sophia Anderson</h3>
															<span class="position d-block mb-3">Operations Head</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END item -->

										<!-- 5th Team Member -->
										<div class="item">
											<div class="row justify-content-center">
												<div class="col-lg-8 mx-auto">
													<div class="testimonial-block text-center">
														<blockquote class="mb-5">
															<p>&ldquo;I make sure our website runs smoothly and is
																user-friendly!&rdquo;</p>
														</blockquote>
														<div class="author-info">
															<div class="author-pic">
																<img src="images/person_5.jpg" alt="Zain Ali"
																	class="img-fluid">
															</div>
															<h3 class="font-weight-bold">James Miller</h3>
															<span class="position d-block mb-3">Web Developer</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- END item -->

									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Start Blog Section -->
					<div class="blog-section">
						<div class="container">
							<div class="row mb-5">
								<div class="col-md-6">
									<h2 class="section-title" style="color: #3b5d50 ;">Recent Blog</h2>
								</div>
								<div class="col-md-6 text-start text-md-end">
									<a href="blog.html" class="more"
										style="border: 2px solid white; background-color: #3b5d50; color: white; padding: 6px 6px; font-size: 1rem; border-radius: 0.3rem; text-decoration: none;">View
										All Posts</a>
								</div>
							</div>

							<div class="row">

								<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
									<div class="post-entry">
										<a href="#" class="post-thumbnail"><img src="images/perfume 2.webp"
												alt="Perfume" class="img-fluid"></a>
										<div class="post-content-entry">
											<h3><a href="#">Top 5 Perfumes to Elevate Your Style</a></h3>
											<div class="meta">
												<span>by <a href="#">Jessica Smith</a></span> <span>on <a href="#">Feb
														20, 2025</a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
									<div class="post-entry">
										<a href="#" class="post-thumbnail"><img src="images/camera.jpg" alt="Camera"
												class="img-fluid" style="height: 376px;"></a>
										<div class="post-content-entry">
											<h3><a href="#">Choosing the Best Camera for Travel Photography</a></h3>
											<div class="meta">
												<span>by <a href="#">Michael Johnson</a></span> <span>on <a href="#">Feb
														18, 2025</a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
									<div class="post-entry">
										<a href="#" class="post-thumbnail"><img src="images/handbags3.webp"
												alt="Handbag" class="img-fluid"
												style="height: 376px; width: 400px;"></a>
										<div class="post-content-entry">
											<h3><a href="#">Must-Have Handbags for Every Occasion</a></h3>
											<div class="meta">
												<span>by <a href="#">Emily Davis</a></span> <span>on <a href="#">Feb 15,
														2025</a></span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- End Blog Section -->


					<!-- Start Footer Section -->
					<footer class="footer-section">
						<div class="container relative">

							<div class="footer-img" style="text-align: right;">
								<img src="images/artify__1_-removebg-preview.png" alt="Artify Products"
									class="img-fluid" style="height: 200px; width: auto;">
							</div>


							<div class="row">
								<div class="col-lg-8">
									<div class="subscription-form">
										<h3 class="d-flex align-items-center"><span class="me-1"><img
													src="images/envelope-outline.svg" alt="Image"
													class="img-fluid"></span><span>Subscribe Us</span></h3>

										<form action="#" class="row g-3">
											<div class="col-auto">
												<input type="text" class="form-control" placeholder="Enter your name">
											</div>
											<div class="col-auto">
												<input type="email" class="form-control" placeholder="Enter your email">
											</div>
											<div class="col-auto">
												<button class="btn btn-primary">
													<span class="fa fa-paper-plane"></span>
												</button>
											</div>
										</form>

									</div>
								</div>
							</div>

							<div class="row g-5 mb-5">
								<div class="col-lg-4">
									<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo"
											style="font-family: 'Pacifico', cursive;">Artify<span>.</span></a></div>
									<p class="mb-4">Discover unique gifts, beautiful art pieces, stylish handbags, and
										exclusive greeting cards at Artify. Elevate your shopping experience with us.
									</p>

									<ul class="list-unstyled custom-social">
										<li> <a href="https://web.facebook.com/" class="social-icon" target="_blank"><i
													class="fa-brands fa-facebook"></i></a></li>


										<li><a href="https://www.linkedin.com/login" class="social-icon"
												target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>


										<li><a href="https://www.instagram.com/accounts/login/" class="social-icon"
												target="_blank"><i class="fa-brands fa-instagram"></i></a></li>




									</ul>
								</div>



								<div class="col-lg-8">
									<div class="row links-wrap">
										<div class="col-6 col-sm-6 col-md-3">
											<ul class="list-unstyled">
												<li><a href="about.html">About Us</a></li>
												<li><a href="shop.html">Our Products</a></li>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</div>

										<div class="col-6 col-sm-6 col-md-3">
											<ul class="list-unstyled">
												<li><a href="#">Customer Support</a></li>
												<li><a href="#">FAQs</a></li>
												<li><a href="#">Shipping Info</a></li>
											</ul>
										</div>

										<div class="col-6 col-sm-6 col-md-3">
											<ul class="list-unstyled">
												<li><a href="#">Return Policy</a></li>
												<li><a href="#">Terms & Conditions</a></li>
												<li><a href="#">Privacy Policy</a></li>
											</ul>
										</div>

										<div class="col-6 col-sm-6 col-md-3">
											<ul class="list-unstyled">
												<li><a href="#">Art & Paintings</a></li>
												<li><a href="#">Greeting Cards</a></li>
												<li><a href="#">Handbags & Wallets</a></li>
											</ul>
										</div>
									</div>
								</div>

							</div>

							<div class="border-top copyright">
								<div class="row pt-4">
									<div class="col-lg-6">
										<p class="mb-2 text-center text-lg-start">Copyright &copy;
											<script>document.write(new Date().getFullYear());</script>. All Rights
											Reserved. Artify - Your Destination for Unique Gifts & Art.
										</p>
									</div>

									<div class="col-lg-6 text-center text-lg-end">
										<ul class="list-unstyled d-inline-flex ms-auto">
											<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
											<li><a href="#">Privacy Policy</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</footer>
					<!-- End Footer Section -->


					<script src="js/bootstrap.bundle.min.js"></script>
					<script src="js/tiny-slider.js"></script>
					<script src="js/custom.js"></script>
					


					<script>
						AOS.init();
					  </script>


</body>

</html>