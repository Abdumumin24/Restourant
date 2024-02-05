<?php
include_once('include/header.php');
include_once('config.php');
$sql = "SELECT * FROM `admin` ";
$query = $db->query($sql);
include_once('baza.php');
$sll = "SELECT * FROM `admin2` WHERE 1";
$querry = $sql->query($sll);
    
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">

                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
  <?php ?>
                        
                        <?php while($row = $query->fetch_object()):?>
<div class="animated-text">
                            <h1 class="display-3 text-white animated slideInLeft"><?= $row->content_title?><br></h1>
                            <h1 class="display-3 text-white animated slideInLeft"><?= $row->content_title?><br></h1>
                            
                        </div>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?= $row->content_text?></p>
                           
                    
                                
                            <button type="button" class="battn cube cube-hover">
  <div class="bg-top">
  <div class="bg-inner"></div>
  </div>
  <div class="bg-right">
  <div class="bg-inner"></div>
  </div>
  <div class="bg">
  <div class="bg-inner"></div>
  </div>
  <a href="booking.php"><div class="text">Order Food</div></a>
  
</button>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="../eng/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3" >
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>our chefs have 20 years of experience and are true professionals and they are experts in their work.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Our food is appetizing, nutritious and delicious we have 20 different types of food.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>We have a wide range of facilities. Our products are of good quality and delivered quickly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3" style="height: 278px;">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Our call center offers it's services 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                

                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    

                        <h1 class="mb-4"><?= $row->about_title?><i class="fa fa-utensils text-primary me-2"></i></h1>
                    
                        
                        <p class="mb-4"><?= $row->about_text1?></p>
                        <p class="mb-4"><?= $row->about_text2?></p>
                    
                    
                        
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?= $row->about_experience?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Days of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up"><?= $row->about_chefs?></h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="read.php"><button class="buttonn">
    Read More
</button></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5"><?= $row->menu_title?></h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <img src="img/dessert.png" alt="" width="35px" height="35px">
                                <div class="ps-3">
                                    <small class="text-body">Nice</small>
                                    <h6 class="mt-n1 mb-0">Sweets</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                            <img src="img/juice.png" alt="" width="40px" height="40px">
                                <div class="ps-3">
                                    <small class="text-body">Cold</small>
                                    <h6 class="mt-n1 mb-0">Juices</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/simple-grilled.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Simple Grilled Breakfast</span>
                                                <span class="text-primary">$<?= $row->simple_grill_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/breakfast-burger.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Breakfast Burger</span>
                                                <span class="text-primary"> $<?= $row->br_burger_cost?> </span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/healthy-grilled.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Healthy Breakfast</span>
                                                <span class="text-primary">$<?= $row->healthy_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/bbq-breakfast.webp" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>BBQ Breakfast</span>
                                                <span class="text-primary"> $<?= $row->bbq_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/bomb.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bomb Breakfast</span>
                                                <span class="text-primary">$<?= $row->bomb_br_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/pulled-pork.webp" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tako Breakfast</span>
                                                <span class="text-primary">$<?= $row->tako_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/grill.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Grill Breakfast</span>
                                                <span class="text-primary">$<?= $row->grill_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/chicken-breakfast.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Breakfast</span>
                                                <span class="text-primary">$<?= $row->chicken_br_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
  <?php while($roow = $querry->fetch_object()):?>

                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img flex-shrink-0 img-fluid rounded" src="img/chicken-breakfast.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?= $roow->breakfast_name?></span>
                                                <span class="text-primary">$ <?= $roow->breakfast_dollar?></span>
                                            </h5>
                                            <small class="fst-italic">$ <?= $roow->breakfast_title?></small>
                                        </div>
                                    </div>
                                </div>
    <?php endwhile;?>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img4 flex-shrink-0 img-fluid rounded" src="img/Chicken-legs.webp" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Legs</span>
                                                <span class="text-primary">$<?= $row->chicken_leg_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img4 flex-shrink-0 img-fluid rounded" src="img/bomb.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bomb</span>
                                                <span class="text-primary">$<?= $row->bomb_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img4 flex-shrink-0 img-fluid rounded" src="img/chicken.webp" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>KFC</span>
                                                <span class="text-primary">$<?= $row->kfc_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img4 flex-shrink-0 img-fluid rounded" src="img/barbeque.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Barbeque Kebab</span>
                                                <span class="text-primary">$<?= $row->kebab_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img4 flex-shrink-0 img-fluid rounded" src="img/best-burger.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Best Burger</span>
                                                <span class="text-primary">$<?= $row->best_br_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img4 flex-shrink-0 img-fluid rounded" src="img/steak.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Steak</span>
                                                <span class="text-primary">$<?= $row->steak_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>

  
                                
       
                            </div>

                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/grill.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Grill Lovely</span>
                                                <span class="text-primary">$<?= $row->grill_love_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/chicken-lovely.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Lovely</span>
                                                <span class="text-primary">$<?= $row->chicken_love_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/lovely-pizza.webp" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pizza Lovely</span>
                                                <span class="text-primary">$<?= $row->pizza_love_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/spagetti.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Spagetti Lovely</span>
                                                <span class="text-primary">$<?= $row->spagetti_love_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/ceke.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>BBQ Cake</span>
                                                <span class="text-primary">$<?= $row->bbq_cake_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/medovik.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Medovik</span>
                                                <span class="text-primary">$<?= $row->medovik_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/tiramisu.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tiramisu</span>
                                                <span class="text-primary">$<?= $row->tiramisu_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/bounty-cake.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bounty Cake</span>
                                                <span class="text-primary">$<?= $row->bounty_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/napaleon.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Napoleon</span>
                                                <span class="text-primary">$<?= $row->napoleon_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/creme-brulee.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cream Brulee</span>
                                                <span class="text-primary"> $<?= $row->cream_brule_cost?> </span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/orange-juice.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Orange juice</span>
                                                <span class="text-primary">$<?= $row->orange_juic_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/medoviy-mesyach.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Medovi</span>
                                                <span class="text-primary">$<?= $row->medovi_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/morskoy-briz.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sea ​​Breeze</span>
                                                <span class="text-primary">$<?= $row->sea_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/schweppes.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Schweppes</span>
                                                <span class="text-primary">$<?= $row->schweppes_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/spasenie.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>liver rescue</span>
                                                <span class="text-primary">$<?= $row->liver_cost?></span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/cola-colada.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cola Colada</span>
                                                <span class="text-primary"> $<?= $row->cola_cost?> </span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="img2 flex-shrink-0 img-fluid rounded" src="img/cola-colada.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cola Colada</span>
                                                <span class="text-primary"> $11</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                        </div>
                        
                        

                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control input" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                          <option value="1">People 1</option>
                                          <option value="2">People 2</option>
                                          <option value="3">People 3</option>
                                          <option value="3">People 4</option>
                                          <option value="3">People 5</option>

                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                <button class="btn4">
    Book A Table
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                        <iframe width="677" height="381" src="https://www.youtube.com/embed/WHYH4aaeuP8" title="ICONSIAM / Bangkok&#39;s Most Beautiful Restaurant Zone &amp; CAFE&#39;s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?= $row->chefs_name1?></h5>
                            <small>Master</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://web.telegram.org/k/#@chefsuz"><i class="fab fa-telegram"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.youtube.com/watch?v=8DEJOhaqfwk"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.instagram.com/chef_sofra/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?= $row->chefs_name2?></h5>
                            <small>Master</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://web.telegram.org/k/#@chefsuz"><i class="fab fa-telegram"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.youtube.com/watch?v=NTBRThwL-2c"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.instagram.com/chefs_uzb/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?= $row->chefs_name3?></h5>
                            <small>Master</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://web.telegram.org/k/#@chefsuz"><i class="fab fa-telegram"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.youtube.com/watch?v=mCcNv8vTE-I"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.instagram.com/chefsproudss/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?= $row->chefs_name4?></h5>
                            <small>Master</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="https://web.telegram.org/k/#@chefsuz"><i class="fab fa-telegram"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.youtube.com/watch?v=rsMsPMTkRAA"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href="https://www.instagram.com/loverchefstime/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Clients Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>This restourant is really great, but it is true that there are also disadvantages, for example there are dishes thet. I do not like but i love this restaurant and i want to be a guest again.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Lara</h5>
                                <small>Biznes Lady</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>This restourant is really great, but it is true that there are also disadvantages, for example there are dishes thet. I do not like but i love this restaurant and i want to be a guest again.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Jack</h5>
                                <small>Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4"  >
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>This restourant is really great, but it is true that there are also disadvantages, for example there are dishes thet. I do not like but i love this restaurant and i want to be a guest again.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Ferguson</h5>
                                <small>Doctor</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>This restourant is really great, but it is true that there are also disadvantages, for example there are dishes thet. I do not like but i love this restaurant and i want to be a guest again.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Alissa</h5>
                                <small>Hairdresser</small>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
      
                    


                </div>
            </div>
            
        </div>
        <!-- Testimonial End -->
<style>
    .battn {
        width: 200px;
        height: 60px;
 display: block;
 padding: 0.7em 1em;
 background: transparent;
 outline: none;
 border: 0;
 color: #d4af37;
 letter-spacing: 0.1em;
 font-family: monospace;
 font-size: 17px;
 font-weight: bold;
 z-index: 1;
 background-color: #FEA116;
}

.cube {
 position: relative;
 transition: all 0.5s;
}

.cube .bg-top {
 position: absolute;
 height: 10px;
 background: #d4af37;
 bottom: 100%;
 left: 5px;
 right: -5px;
 transform: skew(-45deg, 0);
 margin: 0;
 transition: all 0.4s;
}

.cube .bg-top .bg-inner {
 bottom: 0;
}

.cube .bg {
 position: absolute;
 left: 0;
 bottom: 0;
 top: 0;
 right: 0;
 background: #d4af37;
 transition: all 0.4s;
}

.cube .bg-right {
 position: absolute;
 background: #d4af37;
 top: -5px;
 z-index: 0;
 bottom: 5px;
 width: 10px;
 left: 100%;
 transform: skew(0, -45deg);
 transition: all 0.4s;
}

.cube .bg-right .bg-inner {
 left: 0;
}

.cube .bg-inner {
 background: #28282d;
 position: absolute;
 left: 2px;
 right: 2px;
 top: 2px;
 bottom: 2px;
}

.cube .text {
 position: relative;
 transition: all 0.4s;
}

.cube:hover .bg-inner {
 background: #FEA116;
 transition: all 0.4s;
}

.cube:hover .text {
 color: #28282d;
 transition: all 0.4s;
}

.cube:hover .bg-right,
.cube:hover .bg,
.cube:hover .bg-top {
 background: #28282d;
}

.cube:active {
 z-index: 9999;
 animation: bounce .1s linear;
}

@keyframes bounce {
 50% {
  transform: scale(0.9);
 }
}
.buttonn {
  display: inline-block;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  z-index: 1;
  color: #090909;
  padding: 0.7em 1.7em;
  font-size: 20px;
  border-radius: 0.5em;
  background: #e8e8e8;
  border: 1px solid #e8e8e8;
  
}

.buttonn:active {
  color: #666;
  box-shadow: inset 4px 4px 12px #c5c5c5,
             inset -4px -4px 12px #ffffff;
}

.buttonn:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.buttonn:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #009087;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.buttonn:hover {
    box-shadow: 4px 4px 10px #FEA116,
             -4px -4px 10px #FEA116;
  color: #ffffff;
  border: 1px solid #FEA116;
}

.buttonn:hover:before {
  top: -35%;
  background-color: #FEA116;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.buttonn:hover:after {
  top: -45%;
  background-color: #FEA116;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}
.img{
    width: 70px;
    height: 70px;
    background-size: cover;
}
.img2{
    width: 70px;
    height: 70px;
    background-size: cover;
}
.img4{
    width: 70px;
    height: 70px;
    background-size: cover;
}
.form-control{
    border-radius: 10px;
}
.form-select{
    border-radius: 10px;
}

.btn4 {
    margin-left: 50%;
    transform: translate(-50%);
  display: inline-block;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  z-index: 1;
  color: #090909;
  padding: 0.7em 1.7em;
  font-size: 20px;
  border-radius: 0.5em;
  background: #e8e8e8;
  border: 1px solid #e8e8e8;
  
}

.btn4:active {
  color: #666;
  box-shadow: inset 4px 4px 12px #c5c5c5,
             inset -4px -4px 12px #ffffff;
}

.btn4:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.btn4:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #009087;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.btn4:hover {
    box-shadow: 4px 4px 10px #FEA116,
             -4px -4px 10px #FEA116;
  color: #ffffff;
  border: 1px solid #FEA116;
}

.btn4:hover:before {
  top: -35%;
  background-color: #FEA116;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.btn4:hover:after {
  top: -45%;
  background-color: #FEA116;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}
.animated-text {
    width: 100%;
    height: 82px;
    overflow: hidden;
    position: relative;
    margin-bottom: 10px;
  }
  
  .animated-text h3 {
    color: azure;
    font-size: 23px;
    font-weight: 700;
    line-height: 55px;
    letter-spacing: 1px;
  }
  .animated-text h3:nth-child(1) {
  animation: text-move 10s infinite
}

@keyframes text-move {
  0% {
    margin-top: 0;
  }

  25% {
    margin-top: -70px;
  }

  50% {
    margin-top: -140px;
  }

  75% {
    margin-top: -70px;
  }

  100% {
    margin-top: 0;
  }
}
.animated-text h1 {
    color: crimson;
    font-size: 70px;
    font-weight: 700;
    line-height: 70px;
    letter-spacing: 1px;
  }
  .animated-text h1:nth-child(1) {
  animation: text-move 10s infinite
}

@keyframes text-move {
  0% {
    margin-top: 0;
  }

  25% {
    margin-top: -70px;
  }

  50% {
    margin-top: -140px;
  }

  75% {
    margin-top: -70px;
  }

  100% {
    margin-top: 0;
  }
}
</style>
<?php
include_once('include/footer.php');
?>  