<?php 
/* Template Name: Service */
get_header();

?>

        <div class="wraper">
            <section class="inner_banner bg_style" style="background-image: url('<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/service-banner.jpg')">
                <div class="container">
                    <div class="inner_bnner_txt text-center">
                        <h1 class="mb-0">Our Services</h1>
                    </div>
                </div>
            </section>
            <section class="about_sec our_ser_sec abt_pg p_8">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-5">
                            <div class="about_img">
                                <img src="<?php echo get_stylesheet_directory_uri( __FILE__);?>/assets/img/service-1.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="about_text title_head">
                                <h4>We are committed to provide excellence service</h4>
                                <p>We are committed to provide excellence service and quality that we advertised, which means we have original factory test equipment, documentation, quality repair procedures, and OEM parts inventory. We have highly trained technicians and you will received fast delivery, reliable & knowledgeable communications. Call us and one of our representative will contact you immediately. We are looking forward to serving you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="industrial_cate_sec p_8">
                <div class="container">
                    <div class="title_head text-center">
                        <h2>Industry Category</h2>
                    </div>
                    <div class="industry_row">
                        <div class="row justify-content-center">
                        <?php foreach (get_categories(['hide_empty' => 0,'pad_counts' => true])as $key => $value) {?>
                            <div class="col-md-4 mb-4">
                                <div class="industry_cat_box">
                                    <h5><?=$value->name ?></h5>
                                    <p><?=$value->description ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elec_ensec p_8">
                <div class="container">
                    <div class="title_head text-center">
                        <h2>Our Electronic Engineering Sections</h2>
                    </div>
                    <ul class="elec_ensec_list">
                        <li><a href="#">AC DC Power Supplies</a></li>
                        <li><a href="#">Industrial Automation Equipment</a></li>
                        <li><a href="#">Board Connectors</a></li>
                        <li><a href="#">Industrial Automation Systems</a></li>
                        <li><a href="#">Boards</a></li>
                        <li><a href="#">Industrial Components</a></li>
                        <li><a href="#">Brick And Modular Plcs</a></li>
                        <li><a href="#">Industrial Computer Systems</a></li>
                        <li><a href="#">Cards</a></li>
                        <li><a href="#">Industrial Computers</a></li>
                        <li><a href="#">Circuit Board Assemblies</a></li>
                        <li><a href="#">Industrial Electronics</a></li>
                        <li><a href="#">Circuit Board Refurbishments</a></li>
                        <li><a href="#">Circuit Board Repairs</a></li>
                        <li><a href="#">Circuit Board Assemblies</a></li>
                        <li><a href="#">Industrial Equipment Maintenance</a></li>
                        <li><a href="#">Circuit Board Refurbishments</a></li>
                    </ul>
                </div>
            </section>
        </div>
        <?php 
get_footer()

?>