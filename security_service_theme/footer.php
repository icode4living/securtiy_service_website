<footer>
    <section class="footer-items">
        <div class="footer-nav">
            <h3>Site Maps</h3>
            <ul>
                <li><a href="#">&#11162; Home </a></li>
                <li><a href="#">&#11162; About </a></li>
                <li><a href="#">&#11162; Contact </a></li>
                <li><a href="#">&#11162; Blog </a></li>
            </ul>
        </div>
        <div class="footer-nav">
            <h3>Our Services</h3>
            <ul>
                <li>&#11162; CCTV installation</li>
                <li>&#11162; CCTV installation</li>
                <li>&#11162; CCTV installation</li>
                <li>&#11162; CCTV installation</li>
            </ul>
        </div>
        <div class="footer-nav">
            <h3>Contacts</h3>
            <ul>
                <li><i class="fa-solid fa-house"></i>6B, example corner uk</li>
                <li><i class="fa-solid fa-phone"></i>09036000258</li>
                <li><i class="fa-solid fa-envelope"></i>info@example.com</li>
            </ul>
        </div>
        <div class="footer-nav">
            <h3>Social Media</h3>
            <ul>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li>
                <li><a href="#"><i class="fa-brands fa-square-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a></li>
            </ul>
        </div>
    </secton>
</footer> 
<div class="copyright">
    <p> &copy; Tobros security InC 2024</p>
 </div> 
 <script src="./js/nav-control.js"></script>
<script src="wow.js/dist/WOW.js"></script>
<script>
    new WOW().init();
</script>
<?php wp_footer(); ?>

</body>

</html>

<?php
$wowsrc = get_stylesheet_directory_uri().'/assets/donate/wow.js/dist/WOW.js';
$src = get_stylesheet_directory_uri().'/assets/donate/js/paymaster.js';
$slide = get_stylesheet_directory_uri().'/assets/donate/js/donate_slide.js';
?>
<script src="<?php echo esc_url($wowsrc); ?>"></script>
<script src="<?php echo esc_url($slide); ?>"></script>

<script type="module" src="<?php echo esc_url($src); ?>"></script>