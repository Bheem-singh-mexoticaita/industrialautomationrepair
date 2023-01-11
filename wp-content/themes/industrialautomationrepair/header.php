<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Industrial Automation Repair</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/font-awesome/all.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/css/bootstrap.min.css" />
    <!--slick CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/css/slick.css" />
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/css/slick-theme.css" />
    <!-- main.css -->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri( __FILE__);?>/assets/css/main.css" />
</head>

<body>
    <header>
        <div class="top_header">
            <div class="container">
                <div class="header_links">
                    <div class="social_c d-flex align-items-center">
                        <div class="icon_img"><img src="<?= get_field('company_contact_details','option')['icon'];?>">
                        </div><a
                            href="tel:<?= get_field('company_contact_details','option')['content'];?>"><?= get_field('company_contact_details','option')['content'];?></a>
                    </div>
                    <ul class="d-flex align-items-center">
                        <?php foreach (get_field('company_social_site_details','option') as $key => $value) {?>
                        <li><a href="<?= $value['content'];?>"><img src="<?= $value['icon'];?>"></a></li>
                        <?php }  ?>
                    </ul>
                    <div class="social_c d-flex align-items-center">
                        <div class="icon_img"><img src="<?= get_field('company_contact_email_','option')['icon'];?>">
                        </div><a
                            href="tel:<?= get_field('company_contact_email_','option')['content'];?>"><?= get_field('company_contact_email_','option')['content'];?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_header">
            <div class="container">
                <div class="menu_header">
                    <div class="main_logo">
                        <a href="<?=site_url();?>">
                            <h1><?= get_bloginfo('name');?></h1>
                        </a>
                    </div>
                    <?php wp_nav_menu(array('container' => 'ul','menu_class'=> 'menu_links')); ?>
                </div>
            </div>
        </div>
    </header>