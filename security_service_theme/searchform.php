<form class="form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="form-group">
    <label for="Search">Search</label>
<input role="search" type="text" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>"> 
</div>            
   <button aria-label="search button" type="submit" Value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>