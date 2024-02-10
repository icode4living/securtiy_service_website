<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="<?php language_attributes();?> ">
    <meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./css/style.css" type="text/css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<?php wp_head();?>
</head>
<body>
    
<header id="header">
    
   <div class="nav-top">
   <a href="/" >
    <img src="./img/tobros_logo_full_2.png" class="logo" alt="Tobros security service logo"></a>
    <ul class="nav-link">
        <li class="link-item"><a href="/">Home</a></li>
        <?php $page = get_pages(array('orderby'=>'name',
'order'=>'ASC'));
foreach($pages as $page):

?>

<?php  
    $page_id = get_cat_ID( $page->name );
  $page_link = get_category_link( $page_id ); ?>
    <li class="link-item"><a href="<?php echo esc_url( $page_link ); ?>"
    title="<?php echo $page->name; ?>"><?php echo $page->name; ?></a>
</li>
<?php endforeach ?>

     <!--   <li class="link-item"><a href="#">About</a></li>
        <li class="link-item"><a href="#">Contact</a></li>
        <li class="link-item"><a href="#">Blog</a></li>
        <li class="link-item"><a href="#">Services</a></li>-->
        <button id="close-btn"><i class="fa-solid fa-xmark"></i></button>

    </ul>
    <button id="menu-btn"><i class="fa-solid fa-bars"></i></button>

</div>
</header>