<footer class="footer_wrap bg_style"
    style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/footer-bg.jpg')">
    <div class="container">
        <div class="footer_row p_8">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="company_bio">
                        <div class="footer_logo">
                            <a href="<?=site_url();?>">
                                <h1><?= get_bloginfo('name');?></h1>
                            </a>
                        </div>
                        <div class="title_head">
                            <p>
                                <?= get_bloginfo('description');?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_links">
                        <div class="title_head">
                            <h4>Quick Links</h4>
                        </div>
                        <?php   wp_nav_menu(array()); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_links">
                        <div class="title_head">
                            <h4>Quick Supoort</h4>
                        </div>
                        <ul>
                            <?php foreach (get_field('office_location','option') as $key => $value) {?>
                            <li><a><?= $value['content'];?></a></li>
                            <?php   }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_sec">
        <div class="container">
            <div class="text-center">
                <p><?= get_field('copyright','option');?></p>
            </div>
        </div>
    </div>
</footer>
<!-- jquery -->
<script src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/js/jquery.min.js"></script>
<!-- Bootstrap Bundle (includes Popper) -->
<script src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/js/bootstrap.bundle.min.js"></script>
<!--slick js -->
<script src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/js/slick.min.js"></script>
<!-- main.js -->
<script src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/js/main.js"></script>
</body>

</html>