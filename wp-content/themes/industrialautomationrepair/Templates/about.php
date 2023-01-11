<?php 
/* Template Name: About */
get_header();
global $post;
?>
<div class="wraper">
    <section class="inner_banner bg_style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/about-banner.jpg')">
        <div class="container">
            <div class="inner_bnner_txt text-center">
                <h1 class="mb-0">About Us</h1>
            </div>
        </div>
    </section>
    <section class="about_sec abt_pg p_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="about_img">
                        <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/about-sec.png">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="about_text title_head">
                        <h6>ABOUT</h6>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                        <?=$post->post_content;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners_slider p_8">
        <div class="container">
            <div class="partner_head text-center title_head">
                <h2>Servo Motor</h2>
            </div>
        </div>
        <div class="partner_wrap">
            <div class="partner_box">
                <div class="partner_img">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/p-1.png">
                </div>
                <div class="partner_img">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/p-2.png">
                </div>
                <div class="partner_img">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/p-3.png">
                </div>
                <div class="partner_img">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/p-4.png">
                </div>
                <div class="partner_img">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/p-5.png">
                </div>
            </div>
        </div>
    </section>
    <section class="about_sec history_sec p_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <div class="about_text title_head">
                        <h6>our History</h6>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
                        <?= get_field('history');?>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_img">
                        <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/history.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="warrenty_sec bg-style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/warrenty.jpg')">
        <div class="container">
            <div class="warrenty_card">
                <div class="warrenty_img text-center">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/year-img.png">
                </div>
                <div class="warrenty_txt text-center">
                    <h2>1 year</h2>
                    <h6>Service Warrenty</h6>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer()

?>