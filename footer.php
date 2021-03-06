
  </div>
  <footer class="footer2">
    
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>

  </footer>
  <!-- footer -->
  <footer class="footer" role="contentinfo">

  <!-- copyright -->
    <p class="copyright">
      &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <!-- <?php _e('Powered by', 'html5blank'); ?>
      <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>. -->
    </p>
  <!-- /copyright -->

    <section>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-google-plus"></a>
    </section>

    <button class="back-to-top"><i class="fa fa-chevron-up"></i></button>

  </footer>
  <!-- /footer -->

  <!-- /wrapper -->

  <?php wp_footer(); ?>

  <!-- analytics -->
  <script>
    (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
    (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
    l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
  </script>
<script>
 $(function() {
    var header = $(".nav");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 1) {
            header.addClass("fixed");
        } else {
            header.removeClass('fixed');
        }
    });
});

  </script>
  </body>
</html>
