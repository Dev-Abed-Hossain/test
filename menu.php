<?php 
if(file_exists(__DIR__ . "/autoload.php")){
	require_once __DIR__ . "/autoload.php";
}
?>


<?php include_once __DIR__ . "/templates/header.php" ?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">
                    <?php foreach($menu_item as $items): ?>
                    <div class="col-1-3">
                        <div class="wrap-col">
                            <h3><?php echo $items["title"]; ?></h3>

                            <?php
							$k = 0;
							foreach($items["items"] as $item): 
							if ($k >= 3) {
								break;
							}
							?>
                            <div class="post">
                                <a href="<?php echo $item["link"]; ?>"><img src="<?php echo $item["image"]; ?>" /></a>
                                <div class="wrapper">
                                    <h5><a href="<?php echo $item["image"]; ?>"><?php echo $item["name"]; ?></a></h5>
                                    <span><?php echo $item["price"]; ?></span>
                                </div>
                            </div>
                            <?php $k++; endforeach; ?>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
    <div class="wrap-footer">
        <div class="row">
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4>Customer Testimonials</h4>
                    <div class="row">
                        <img src="images/a-1.jpg">
                        <h5>Nick Roach</h5>
                        <p>Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac,
                            placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean
                            lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean
                            lectus nisl, ellentesque in fermentum sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4>Location</h4>
                    <div class="wrap-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434"
                            width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <h4>Open Daily</h4>
                    <p><span>mon.</span> 17:00 - 21:00</p>
                    <p><span>tue.-wed.</span> 16:30 – 21:00</p>
                    <p><span>thu.-sat.</span> 16:30 – 21:00</p>
                    <p><span>sun.</span> 11:00 – 21:00</p>
                    <p><span>Need help getting home?</span></br>
                        We will call a cab for you!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="wrapper">
            Copyright 2015 - Designed by <a href="https://www.zerotheme.com"
                title="free website templates">ZEROTHEME</a>
            <ul class="quick-link f-right">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
            </ul>
        </div>
    </div>
</footer>


<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>

</div>
</body>

</html>