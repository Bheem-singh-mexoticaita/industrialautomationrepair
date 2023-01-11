<?php 
/* Template Name: Home */
get_header();
?>

<div class="wraper">
    <section class="hero_slider">
        <div class="hero_slider_content">
            <div class="hero_slider-img bg_style"
                style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/hero.jpg')">
                <div class="container">
                    <div class="hero_slider_txt text-center">
                        <h1>Servo <span>Motor Repair</span> Experience Matters</h1>
                        <p>IAR are repairing electric motors of all types for quite a while, and over the years we've
                            collected detailed repair information and OEM specifications for many different electric
                            motors.</p>
                        <div class="hero_btn">
                            <a href="#" class="theme_btn">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero_slider-img bg_style"
                style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/hero.jpg')">
                <div class="container">
                    <div class="hero_slider_txt text-center">
                        <h1>Servo <span>Motor Repair</span> Experience Matters</h1>
                        <p>IAR are repairing electric motors of all types for quite a while, and over the years we've
                            collected detailed repair information and OEM specifications for many different electric
                            motors.</p>
                        <div class="hero_btn">
                            <a href="#" class="theme_btn">Get in touch</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="slide_controls d-flex align-items-center">
            <div class="slide-prev slick-arrow" aria-disabled="false">
                <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/right-ar.png" />
            </div>
            <div class="slide-next slick-arrow" aria-disabled="false">
                <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/left-ar.png" />
            </div>
        </div>
    </section>
    <section class="about_sec p_8">
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
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. </p>
                        <a href="#" class="theme_btn">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_us p_8 bg_style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/why-us.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <div class="why_text title_head">
                        <h2>Why Us</h2>
                        <h4>Industrial Automation Repair Inc.</h4>
                        <p>Is a full service repair company, specializing in the repair of industrial/automation
                            controls and accessories such as servo motors, encoders, drives, servo valves, A.C.- D.C.
                            motors, generators, electronic equipments and OEM parts. We repair any and all brand models
                            of motors and drives. To better serve our customers we also supply remanufactured units,
                            accessories and all other parts that may be.</p>
                        <a href="#" class="theme_btn">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="why_img">
                        <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/why-sec.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service_sec p_8">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <div class="about_img">
                        <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/service-sec.png">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="about_text service_txt title_head">
                        <h2>Our Services</h2>
                        <p>We are committed to provide excellence service and quality that we advertised, which means we
                            have original factory test equipment,</p>
                        <div class="service_cat">
                            <h4>Industry Category</h4>
                            <ul>
                                <?php foreach (get_categories(['hide_empty' => 0,'pad_counts' => true])as $key => $value) {?>
                                <li catagory_id="<?= $value->term_id;?>"><?=$value->name ?></li>
                                <?php } ?>
                            </ul>
                        </div>


                        <a href="#" class="theme_btn">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_different_sec bg_style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/different.jpg')">
        <div class="why_diff_row">
            <div class="row g-0 align-items-center">
                <div class="col-md-6">
                    <div class="why_text title_head">
                        <h2>Why We Are Different ?</h2>
                        <p>Industrial Automation Repair has had a long and prosperous history. From the firm's founding
                            days to the present, Industrial Automation Repair has been a loyal and hardworking company,
                            which is a result of our continued growth and success.</p>
                        <p>At Industrial Automation Repair Inc., we recognize that no two repairs are alike. We have the
                            flexibility to meet a wide variety of customer repair requirements.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why_diff_img">
                        <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/diff-img.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq_sec p_8 bg_style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/faq-bg.jpg')">
        <div class="faq_box">
            <div class="faq_text title_head">
                <h2>Frequently Asked Questions</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of.</p>
            </div>
            <div class="faq_accordion">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Lorem Ipsum is simply dummy text of the printing?
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body title_head">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Lorem Ipsum is simply dummy text of the printing?
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body title_head">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials_sec p_8">
        <div class="testi_bg">
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <div class="testi_head title_head">
                        <h2>What Our Client Say About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testi_para title_head">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of.</p>
                    </div>
                    <div class="slide_controls_1 d-flex align-items-center justify-content-end">
                        <div class="slide-prev slick-arrow" aria-disabled="false">
                            <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/right-ar.png" />
                        </div>
                        <div class="slide-next slick-arrow" aria-disabled="false">
                            <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/left-ar.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials_wrap">
            <div class="textimonial_inner_box">
                <div class="testimonials_box">
                    <div class="testimonials_decrip title_head text-center">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                        <h4>John Doe</h4>
                    </div>
                </div>
                <div class="testimonials_box">
                    <div class="testimonials_decrip title_head text-center">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                        <h4>John Doe</h4>
                    </div>
                </div>
                <div class="testimonials_box">
                    <div class="testimonials_decrip title_head text-center">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                        <h4>John Doe</h4>
                    </div>
                </div>
                <div class="testimonials_box">
                    <div class="testimonials_decrip title_head text-center">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a more.</p>
                        <h4>John Doe</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_chosse_sec bg_style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/chosse-bg.png')">
        <div class="choose_text title_head">
            <h2>Why Choose Us</h2>
            <ul>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            </ul>
        </div>
    </section>
    <section class="join_team">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="jteam_img">
                        <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/teams-img.png">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="jteam_text title_head">
                        <h4>Join Our Team</h4>
                        <h2>An <span>inspiring career</span>
                            awaits you.</h2>
                        <a href="#" class="theme_btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="commissioning_sec">
        <div class="row g-0 align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="jteam_text title_head commission_txt">
                    <h2>Commissioning<br>
                        and <span>Onsite Suppport</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <h4>Consultation: 24/7 Customer Support</h4>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="comission_img">
                    <img src="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/comission.jpg">
                </div>
            </div>
        </div>
    </section>

    <section class="contact_sec p_8 bg_style"
        style="background-image: url('<?= get_stylesheet_directory_uri( __FILE__);?>/assets/img/contact-sec.jpg')">
        <div class="container">
            <div class="contact_form_sec">
                <div class="title_head">
                    <h2>Contact Us</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when .</p>
                </div>
                <form class="cntct-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="cstm_input">
                                <input type="text" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cstm_input">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="cstm_input">
                                <input type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cstm_input">
                                <textarea>Message</textarea>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </section>
</div>
<?php 
get_footer()

?>