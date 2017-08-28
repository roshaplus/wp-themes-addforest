<?php
global $adforest_theme;
?>
<!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
<div class="colored-header">
<?php get_template_part( 'template-parts/layouts/top','bar' ); ?>
 <!-- Navigation Menu -->
<div class="clearfix"></div>
 <!-- menu start -->

    <nav id="menu-1" class="mega-menu">
<!-- menu list items container -->
<section class="menu-list-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- menu logo -->
                <ul class="menu-logo">
                    <li> 
                <?php get_template_part( 'template-parts/layouts/site','logo' ); ?>
                    </li>
                </ul>
                <?php get_template_part( 'template-parts/layouts/main','nav' ); ?>
                
                <ul class="menu-search-bar">
                    <li>
                    <?php get_template_part( 'template-parts/layouts/ad','button' ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>      
</section>

</nav>

<!-- menu end -->

</div>
<!-- Navigation Menu End -->
<!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->





