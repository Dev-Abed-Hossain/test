<?php include_once __DIR__ . "/templates/header.php" ?>


<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="row">
                    <?php
                    $gallery_i = 0;
foreach($gallery as $item):
    if($gallery_i >= 16) {
        break;
    }
    ?>
                    <div class="col-1-4">
                        <div class="zoom-container">
                            <a href="<?php echo $item["link"]; ?>">
                                <span class="zoom-caption">
                                    <span><?php echo $item["title"]; ?></span>
                                </span>
                                <img src="<?php echo $item["image"]; ?>" />
                            </a>
                        </div>
                    </div>
                    <?php $gallery_i++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--////////////////////////////////////Footer-->
<?php include_once __DIR__ . "/templates/footer.php"; ?>



<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>

</div>
</body>

</html>