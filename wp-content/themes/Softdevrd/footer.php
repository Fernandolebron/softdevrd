<button onclick="topFunction()" id="myBtn" title="Go to top">
	<i class="fa fa-sort-asc fa-5x" aria-hidden="true"></i>

</button>

<footer class="blog-footer">
   <br>
   <br>
      <!--</section>-->
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>

      <p>Todos los derechos reservados  by <a href="https://softdevrd.com">SoftDev</a>.</p></p>
      
    </footer>
    <?php wp_footer();?>
  <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?> /js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?> /js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?> /js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?> /js/scrolling-nav.js"></script>

    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>

</html>