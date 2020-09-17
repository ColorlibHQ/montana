<!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'           => 'primary-menu',
                                        'theme_location' => 'primary-menu',
                                        'menu_id'        => 'navigation',
                                        'container'      => false,
                                        'menu_class'     => null,
                                        'depth'          => 3
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <?php
                                echo montana_theme_logo( 'navbar-brand' );
                            ?>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="book_room">
                            <div class="socail_links">
                                <?php
                                    // Social links
                                    $social_opt = montana_opt('montana_social_profile_toggle');
                                    if ( $social_opt == true ) {
                                        $social_items = montana_opt('montana_social_profiles');
                                        if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                            echo '<ul>';
                                                foreach ($social_items as $value) {
                                                    echo '<li><a href="'. esc_url($value['social_url']) .'"><i class="'. esc_attr($value['social_icon']) .'"></i></a><li>';
                                                }
                                            echo '</ul>';
                                        }          
                                    }  
                                ?>
                            </div>
                            
                            <?php 
                            if ( !empty( montana_opt('montana_book_btn_label') )) { 
                                $btn_label  = montana_opt('montana_book_btn_label');
                                $btn_url   = montana_opt('montana_book_btn_url');
                                ?>
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form" href="<?php echo esc_url( $btn_url )?>"><?php echo esc_html( $btn_label )?></a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->