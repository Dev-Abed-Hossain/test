<?php include_once __DIR__ . "/templates/header.php" ?>

<!--////////////////////////////////////Container Slider-->
<div class="zerogrid">
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">

            <?php foreach($hero_data as $item): ?>
            <li>
                <img src="<?php echo $item['image'] ?>" alt="">
                <div class="caption">
                    <h2><?php echo $item['title'] ?></h2></br>
                    <p><?php echo $item['descrip'] ?></p>
                </div>
            </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>

<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
    <div class="wrap-container zerogrid">
        <!-----------------content-box-1-------------------->
        <section class="content-box box-1">
            <div class="zerogrid">
                <div class="row box-item">
                    <!--Start Box-->
                    <h2>“<?php echo $company['title'] ?>”</h2>
                    <span><?php echo $company['descrip'] ?></span>
                </div>
            </div>
        </section>
        <!-----------------content-box-2-------------------->
        <section class="content-box box-2">
            <div class="zerogrid">
                <div class="row wrap-box">
                    <!--Start Box-->
                    <div class="header">
                        <h2><?php echo $foods['title'] ?></h2>
                        <hr class="line">
                        <span><?php echo $foods['descrip'] ?></span>
                    </div>

                    <div class="row">

                        <?php foreach($food_items as $item): ?>
                        <div class="col-1-3">
                            <div class="wrap-col">
                                <div class="box-item">
                                    <span class="ribbon"><?php echo $item['title'] ?><b></b></span>
                                    <img src="<?php echo $item['image'] ?>" alt="">
                                    <p><?php echo $item['descrip'] ?></p>
                                    <a href="<?php echo $item['btn_link'] ?>"
                                        class="button button-1"><?php echo $item['btn_text'] ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>


                    </div>

                </div>
            </div>
        </section>
    </div>
</section>


<!--////////////////////////////////////Footer-->
<?php include_once __DIR__ . "/templates/footer.php" ?>

<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
$(function() {
    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });
});
</script>
</div>
</body>

</html>