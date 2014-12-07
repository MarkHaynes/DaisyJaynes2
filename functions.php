<?php 
// Support Thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'featured-home', 300, 226, true);
add_image_size( 'featured-single', 600, 9999, false);
add_image_size( 'featured-full', 1024, 768, true);
add_image_size( 'featured-home', 697, 512, true);

//Image Quality 100%
add_filter('jpeg_quality', function($arg){return 100;});


// Registering first sidebar
function widgets_init() {
register_sidebar(array(
'name' => __( 'Sidebar 1'),
'id' => 'sidebar-1',
'before_widget' => '',
'after_widget' => '<br>',
'before_title' => '<h4 class="side">',
'after_title' => '</h4>',
));
}
add_action( 'init', 'widgets_init' );


// Registering Custom Menu
function register_my_menus() {
  register_nav_menus(
    array(
      'mobile-menu' => __( 'Mobile Menu' ),
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Custom Link Header Menu FULL

add_filter( 'wp_nav_menu_items','add_social_full', 10, 2 );
function add_social_full( $items, $args ) {

    $templateurl = get_bloginfo('template_url');
    if ($args->theme_location == 'header-menu') {
        $items .= '
        <li id="menu-item-follow" class="menu-item-follow"><a href="#">Follow Us...</a>
        <ul class="sub-menu">
            <li id="menu-item-twitter"><a href="https://twitter.com/thedaisyjaynes"><img src="'. $templateurl .'/images/twitter.png" width="30" alt="Connect with us on Twitter">@TheDaisyJaynes</a><div style="clear:both"></div></li>
            <li id="menu-item-facebook"><a href="http://facebook.com/thedaisyjaynes"><img src="'. $templateurl .'/images/facebook.png" width="30" alt="Connect with us on Facebook">The Daisy Jaynes</a><div style="clear:both"></div></li>
            <li id="menu-item-googleplus"><a href="https://plus.google.com/100213557674063325769" rel="publisher"><img src="'. $templateurl .'/images/googleplus.png" width="30" alt="Connect with us on Google+">+1 The Daisy Jaynes</a><div style="clear:both"></div></li>
            <li id="menu-item-pinterest"><a href="http://instagram.com/thedaisyjaynes"><img src="'. $templateurl .'/images/instagram.png" width="30" alt="Connect with us on Instagram">The Daisy Jaynes Instagram</a><div style="clear:both"></div></li>
            <li id="menu-item-mobile-pinterest" class="menu-item-social"><a href="http://pinterest.com/thedaisyjaynes1"><img src="'. $templateurl .'/images/pinterest.png" width="30" alt="Connect with us on Pinterest">The Daisy Jaynes Pinterest</a></li>
        </ul>
        </li>
        <li class="link-mag-wrap"><a href="#" class="link-mag">search</a></li>
        ';
    }

    else if ($args->theme_location == 'footer-menu') {
        $items .= '<li id="menu-item-follow" class="menu-item-follow"><a href="#">Follow Us...</a>
        <ul class="sub-menu">
            <li id="menu-item-googleplus"><a href="https://plus.google.com/100213557674063325769" rel="publisher">Google+</a><div style="clear:both"></div></li>
        </ul>
        </li>
        ';
    }


    else if ($args->theme_location == 'mobile-menu') {
        $bloginfourl = get_bloginfo('home');
        $items .= '
        <li class="menu-item-mobile-header">Search...</li>
            <li id="menu-item-mobile-search" class="menu-item-search">
                <form id="mobile-search" method="get" action="' . $bloginfourl . '">';


        $items .='<input type="text" name="s" id="searchBox" onblur="this.value=(this.value==' . "'') ? 'Search...' : this.value;" . '" onfocus="this.value=(this.value==' . "'Search...') ? '' : this.value;" . '" value="Search...">
                        <button type="submit" id="search-bar-button" name="search-bar-button" value="Search"> Search
                        </button>
                </form>
                <div style="clear:both"></div>
            </li>
        <li class="menu-item-mobile-header" >Follow Us...</li>
            <li id="menu-item-mobile-twitter"  class="menu-item-social"><a href="https://twitter.com/thedaisyjaynes"><img src="'. $templateurl .'/images/twitter.png" width="30" alt="Connect with us on Twitter">@TheDaisyJaynes</a></li>
            <li id="menu-item-mobile-facebook" class="menu-item-social"><a href="http://facebook.com/thedaisyjaynes"><img src="'. $templateurl .'/images/facebook.png" width="30" alt="Connect with us on Facebook">The Daisy Jaynes</a></li>
            <li id="menu-item-mobile-googleplus" class="menu-item-social"><a href="https://plus.google.com/100213557674063325769" rel="publisher"><img src="'. $templateurl .'/images/googleplus.png" width="30" alt="Connect with us on Google+">+1 The Daisy Jaynes</a></li>
            <li id="menu-item-mobile-pinterest" class="menu-item-social"><a href="http://instagram.com/thedaisyjaynes"><img src="'. $templateurl .'/images/instagram.png" width="30" alt="Connect with us on Instagram">The Daisy Jaynes Instagram</a></li>
            <li id="menu-item-mobile-pinterest" class="menu-item-social"><a href="http://pinterest.com/thedaisyjaynes1"><img src="'. $templateurl .'/images/pinterest.png" width="30" alt="Connect with us on Pinterest">The Daisy Jaynes Pinterest</a></li>
            ';
    }        
    return $items;
}

// Custom Link Header Menu MOBILE


// Title Home page 
function get_the_short_title(){
    $hometitle = get_the_title();
    $the_title = substr($hometitle, 0, 60);
    if (strlen($the_title) == 60) {
        $the_title .= "...";
    }

    return $the_title;
}

// Excerpt Home page 
function get_the_short_excerpt(){
    $permalink = get_permalink();
    $title = get_the_title();
    $excerpt = get_the_excerpt();
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $the_str = substr($excerpt, 0, 150);
    $the_str .= "...";
    $the_str .= <<< EOD
        <a href="$permalink" title="$title"> Read More </a>
EOD;
    return $the_str;
}

function marks_catid ($categoryid, $categoryname, $thepostid){
    $GLOBALS['daisy_sidebar_categoryid'] = $categoryid;
    $GLOBALS['daisy_sidebar_categoryname'] = $categoryname;
    $GLOBALS['daisy_sidebar_postid'] = $thepostid;
}

function line_break () {
    return '<div style="clear:both"></div>';
}

add_shortcode('break', 'line_break');

//signature

function signature() {
    return '<div class="signature-box"> 
        Victoria <br> x
    </div>';
}
add_shortcode('signature', 'signature');
add_shortcode('sig', 'signature');



?>