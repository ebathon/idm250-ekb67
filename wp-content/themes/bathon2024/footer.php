<footer>
<div>
<a>
    <h1>The Cornerstone</h1>
</a>
<ul class="paraleft">
    <li>3300 Baring Street Philadelphia, PA 19104</li>
    <li>Phone (215) 387-6065</li>
    <a href="info@cornerstonebandb.com"><li>Email: info@cornerstonebandb.com</li></a>
</ul>
</div>
<hr></hr>
<div>
    <p class= "mr-2">&copy; <?php echo date('Y'); ?>  | IDM 250</p>
    <?php wp_nav_menu([
        'theme_location'=> 'footer'
    ]); ?>
 </div>   
</footer>

<?php wp_footer();?>
</body>
</html>