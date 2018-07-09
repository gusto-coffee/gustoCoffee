<?php
    //echo basename(__FILE__);
    get_header();

?>
<div id="content">
    <?php 

        while(have_posts()) 
        {
            the_post();
            echo "<h1>".get_the_title()."</h1>";
            echo "<article class='article'>";
            echo "<p>".get_the_content()."</p>";;
            echo "</article>";
        }

     ?>
</div>
<?php
    get_sidebar();
?>
<?php 
    get_footer();
?>