<?php
    //echo basename(__FILE__);
    get_header();

?>
<div id="content">
       <!-- <article class="article">
        <h2>Article 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </article> -->

    <?php 

        while(have_posts()) 
        {
            the_post();

            echo "<article class='article'>";
            echo "<h2>".get_the_title()."</h2>";
            echo "<p>".get_the_content()."</p>";
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
