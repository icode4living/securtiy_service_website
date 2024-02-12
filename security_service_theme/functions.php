<?php
if ( ! function_exists( "security_service_theme") ) :
/**
 * Sets up theme defaults and registers support for various WordPress  
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 *  @since ngoplus 1.0
 */
add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' ); 
   // set_post_thumbnail_size( 1200, 800 );
    remove_filter( 'term_description','wpautop' );
function security_service_theme() { 
    
  
    if (is_single() || is_page()){
          
        /*
      * Let WordPress manage the document title.
      * By adding theme support, we declare that this theme does not use a
      * hard-coded <title> tag in the document head, and expect WordPress to
      * provide it for us.
      */
        add_theme_support( 'automatic-feed-links' );
       /* Add default posts and comments RSS feed links to <head>.
        */
 
        add_theme_support( 'title-tag' );
      }
}

 
 function theme_slug_setup(){
    add_theme_support( 'title-tag' );
  }
  add_action('after_setup_theme','theme_slug_setup');
 function ngotheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'ngotheme_custom_excerpt_length', 999 );
//register styles
function ngoplus_script(){
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'about', get_template_directory_uri().'/assets/css/about.css',array(),
    '1.1','all');

    wp_enqueue_style( 'tablet', get_template_directory_uri().'/assets/css/tablet.css',array(),
    '1.2','all');
    wp_enqueue_script('nav-control',get_template_directory_uri().'/assets/js/nav-control.js',
    array(), 1.1,true);
    wp_enqueue_script('slide',get_template_directory_uri().'/assets/js/slide.js',
    array(), 1.1,true);

    //Ajax form 
    wp_enqueue_script('control',get_template_directory_uri().'/js/control.js',
    array('jquery'), ' ',true);
    
    wp_localize_script( 'control', 'localize', array( '_ajax_url' => admin_url( 'admin-ajax.php' ),
    '_ajax_nonce'=> wp_create_nonce( '_ajax_nonce' )));
}
add_action('wp_enqueue_scripts','ucv_script');

 /**Add custom meta tag to a post */
 function ucv_blog_custom_meta(){

if(is_single()){
    global $post;
    $meta_description = strip_tags($post->post_content);
  $meta_description = strip_shortcodes($post->post_content);
  $meta_description = str_replace(array("\n", "\r", "\t"), ' ', $meta_description);
  $meta_description = substr($meta_description, 0, 160);
  echo '<meta name="description" content="' . $meta_description . '" />' . "\n";
  echo '<meta property="og:url" content="" />'. "\n";
  echo '<meta property="og:type"  content="website" />' . "\n";
  echo '<meta property="og:title" content="'.$post->post_title.'/>' . "\n";
  echo '<meta property="og:image"         content="" />'. "\n";
  echo '<!--Twitter Card--->'. "\n";
  echo '<meta name="twitter:card" content="summary" />'."\n";
  echo '<meta name="twitter:site" content="" />'."\n";
  echo '<meta name="twitter:creator" content="" />'."\n";
}
  
  /*if ( is_category() ) {
    $meta_description = strip_tags(category_description());
    echo '<meta name="description" content="' . $meta_description . '" />' . "\n";
    }*/
   }
   add_action( 'wp_head', 'easy_blog_custom_meta');

   

add_action( 'wp_head', 'ucv_blog_custom_meta');

  /* //add cron job for sending enquiry contact email 
   add_filter('cron_schedules', 'is_send_enquiry');

   function is_send_enquiry($schedules){
    $schedules['send_contact_enquiry'] = array(
        'interval' => 60 * 5,
        'display' => _('Send Equiry', 'textdomain')

    );
    return $schedules;
   }
   //schedule an action if it is not already scheduled
   if(! wp_next_scheduled( 'is_send_enquiry')){
    wp_schedule_event( time(),'send_contact_enquiry' );

   }
   */
   //Action that will fire form submission
  /* add_action('is_send_enquiry', 'is_send_enquiry_func');

   function is_send_enquiry_func(){
    //Get enquiry form  details from database
$subject = "New Enquiries";
$to="samuelsamafolabi@gmail.com";
//send email from ajax form submission
global $wpdb;
$contact = $wpdb->get_results("SELECT * FROM contact_form WHERE is_mail_sent=false ;");
$message= '
<style>
table{
font-family:Arial;
border: 1px solid #f6f7f6;
max-width:fit-content;
margin: auto;
border-collapse:collapse;
}
tr,td,th{
border: 1px solid #f6f7f6;
padding:10px;
}
tr >
#message{
flex-wrap:wrap;
}
#header{
background-color:#2E6FF2;
color:#fff;
}

</style>
<table>
<tr id="header">
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th id="#message">Message</th>
</tr>'
+ '
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
';


   }
   //Get contact from databae
function get_contact_from_database(){
    global $wpdb;

    $contact = $wpdb->get_results("SELECT * FROM contact_form WHERE is_mail_sent=false ;");
    $table_header = '<style>
    table{
    font-family:Arial;
    border: 1px solid #f6f7f6;
    max-width:fit-content;
    margin: auto;
    border-collapse:collapse;
    }
    tr,td,th{
    border: 1px solid #f6f7f6;
    padding:10px;
    }
    tr >
    #message{
    flex-wrap:wrap;
    }
    #header{
    background-color:#2E6FF2;
    color:#fff;
    }
    
    </style>
    <table>
    <tr id="header">
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th id="#message">Message</th>
    </tr>';
foreach($contact as $ct){
     '';
}
}
*/
   //Create form submission database
   function create_contactform_database(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
  
    $sql = "CREATE TABLE IF NOT EXISTS ucv_contact_form (
      id INT auto_increment,
      email VARCHAR(255) NOT NULL,
      first_name VARCHAR(255) NOT NULL,
      phone VARCHAR(255) NOT NULL,
      message_text VARCHAR(255) NOT NULL,
      date_created datetime,
      is_mail_sent BOOLEAN DEFAULT false, 
      PRIMARY KEY (id)
    ) $charset_collate;";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
  }
  add_action('init', 'create_contactform_database');

  //Ajax  handler to save contact form

  function save_contact_form(){

    // Check if action was fired via Ajax call. If yes, JS code will be triggered, else the user is redirected to the post page
      // Check if action was fired via Ajax call. If yes, JS code will be triggered, else the user is redirected to the post page
   if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
     $result = json_encode($result);
     echo $result;
  }
  else {
     header("Location: ".$_SERVER["HTTP_REFERER"]);
 }
 $email = test_input($_POST(['email']));
$fname = test_input($_POST(['fname']));
//$lname = test_input($_POST(['lname']));
$phone = test_input($_POST(['phone']));
$text = test_input($_POST(['message']));
 //save form content
global $wpdb;
date_default_timezone_get('Africa/Lagos');
  $now = date('Y-m-d H:i:s');
//$now->format('Y-m-d H:i:s');
$wpdb->insert('ucv_contact_form',
array('email'=>$email,'date_created'=>$now,'first_name'=>$fname,
'phone'=>$phone, 'message_text'=>$text),
array('%s','%d'));

}
add_action( 'wp_ajax_nopriv_save_contact_form', 'save_contact_form' );
add_action( 'wp_ajax_save_contact_form', 'save_contact_form' );


//sanitize data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
endif;


