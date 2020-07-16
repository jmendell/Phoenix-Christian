<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

class Side_Menu_Walker extends Walker_Page {
  function start_lvl(&$output, $depth = 0, $args = Array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class='side-menu__sub-menu'>\n";
  }
  
  function start_el(&$output, $page, $depth = 0, $args = Array(), $current_page = 0) {
    if ( $depth )
      $indent = str_repeat("\t", $depth);
    else
      $indent = '';
    extract($args, EXTR_SKIP);
  
    if ($depth === 0) {
      $class_attr = 'side-menu__item ';
      $link_class = 'menu__link';
    } else {
      $class_attr = 'sub-menu__item ';
      $link_class = 'sub-menu__link';
    }

    // add some active stuff
    if ( !empty($current_page) ) {
      $_current_page = get_page( $current_page );
      if ( (isset($_current_page->ancestors) && in_array($page->ID, (array) $_current_page->ancestors)) || ( $page->ID == $current_page ) || ( $_current_page && $page->ID == $_current_page->post_parent ) ) {
        $class_attr .= 'active';
      }
    } elseif ( (is_single() || is_archive()) && ($page->ID == get_option('page_for_posts')) ) {
      $class_attr .= 'active';
    }
    
    if ( $class_attr != '' ) {
      $class_attr = ' class="' . $class_attr . '"';
    }
    

    $output .= $indent . '<li' . $class_attr . '><a href="' . get_page_link($page->ID) . '" class="' . $link_class .'">' . $link_before . apply_filters( 'the_title', $page->post_title, $page->ID ) . $link_after . '</a>';
  }
}


function pc_list_child_pages() { 
  global $post;
  
  if ($post->post_parent) {
    $ancestors=get_post_ancestors($post->ID);
    $root=count($ancestors)-1;
    $parent = $ancestors[$root];
  } else {
    $parent = $post->ID;
  }


  wp_list_pages( array(
    'sort_column' => 'menu_order post_title',
    'title_li' => '',
    'child_of' => $parent,
    'walker' => new Side_Menu_Walker()
  ));
}

  
add_shortcode('pc_childpages', 'pc_list_child_pages');

function the_breadcrumb() {
 
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  global $post;
  $homeLink = get_bloginfo('url');
 
  if (is_home() || is_front_page()) {
 
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
 
  } else {
 
    echo '<div id="crumbs">';
 
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      // if ($showCurrent == 1) echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
} // end the_breadcrumb()

//Subscriber -> read private posts
$subRole = get_role( 'subscriber' );
$subRole->add_cap( 'read_private_pages' );

//Redirect after login --------------->

function my_login_redirect( $url, $request, $user ){
  if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
  if( $user->has_cap( 'administrator') or $user->has_cap( 'author')) {
    $url = admin_url();
  } else {
    $url = home_url('/alumni/alumni-directory');
    }
  }
  return $url;
  }
add_filter('login_redirect', 'my_login_redirect', 10, 3 );

//End redirect ------------>


// Redirect back to custom login page if user/password is either incorrect or the user has not been approved as an alumni

/**
 * Function Name: front_end_login_fail.
 * Description: This redirects the failed login to the custom login page instead of default login page with a modified url
**/
add_action( 'wp_login_failed', 'front_end_login_fail' );
function front_end_login_fail( $username ) {

  // Getting URL of the login page
  $referrer = $_SERVER['HTTP_REFERER'];    
  // if there's a valid referrer, and it's not the default log-in screen
  if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) {
    wp_redirect( get_permalink( LOGIN_PAGE_ID ) . "?login=failed" ); 
    exit;
  }
}

/**
 * Function Name: check_username_password.
 * Description: This redirects to the custom login page if user name or password is empty with a modified url
**/
add_action( 'authenticate', 'check_username_password', 1, 3);
function check_username_password( $login, $username, $password ) {

// Getting URL of the login page
$referrer = $_SERVER['HTTP_REFERER'];

// if there's a valid referrer, and it's not the default log-in screen
if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) { 
    if( $username == "" || $password == "" ){
        wp_redirect( get_permalink( 1469 ) . "?login=empty" );
        exit;
    }
}

}
//End Redirect back to custom login page ------------------>


//New User Approve email contents upon approval ---------->

function custom_approved_email_subject() {
  $subject = __( 'Class in Session', 'new-user-approve' ) . "\r\n\r\n";
  
  return $subject;
}
add_filter( 'new_user_approve_approve_user_subject', 'custom_approved_email_subject', 5); 

function custom_approved_email() {
  $message = __( 'Welcome to our Alumni Directory!', 'new-user-approve' ) . "\r\n\r\n";
  $message = __( 'Welcome to our Alumni Directory! 

We’re glad you’re part of the PC family! You can now log in and reconnect with classmates through the Alumni Directory. 

For Class Reunion activities, updates on Homecoming, and transcript requests, visit http://www.phoenixchristian.org/alumni/alumni-log-in/', 'new-user-approve' ) . "\r\n\r\n"; 

  return $message;

}
add_filter( 'new_user_approve_approve_user_message', 'custom_approved_email', 5);

//End New User Approve email contents upon approval ---------->

//Options page

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Global Options',
    'menu_title'  => 'Global Options',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}

//Custom Post Type for Staff & Faculty

function cptui_register_my_cpts_staff_and_faculty() {

  /**
   * Post Type: Staff & Faculty.
   */

  $labels = array(
    "name" => __( "Staff & Faculty", "custom-post-type-ui" ),
    "singular_name" => __( "Staff & Faculty", "custom-post-type-ui" ),
    "menu_name" => __( "Staff & Faculty", "custom-post-type-ui" ),
    "all_items" => __( "All Staff & Faculty", "custom-post-type-ui" ),
  );

  $args = array(
    "label" => __( "Staff & Faculty", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "For PC staff and faculty",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "delete_with_user" => false,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "staff_and_faculty", "with_front" => false ),
    "query_var" => true,
    "menu_position" => 6,
    "menu_icon" => "dashicons-admin-users",
    "supports" => array( "title", "editor", "thumbnail" ),
    "taxonomies" => array( "category" ),
  );

  register_post_type( "staff_and_faculty", $args );
}

add_action( 'init', 'cptui_register_my_cpts_staff_and_faculty' );
