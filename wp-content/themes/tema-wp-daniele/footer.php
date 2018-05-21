<?php if(is_front_page()) : ?>
<footer class="front-footer container-fluid text-center">

<?php else : ?>
<footer class="page-footer container text-center">

<?php endif; ?>

    <p>&copy; Company <?php echo Date('Y') ?> - <?php bloginfo('name');?></p>
    <p>
    <a href="#">Back to top</a>
  </p>
</footer>
    <?php wp_footer();?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.slim.min.js"><\/script>')</script> -->
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src=" <?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
  </body>
</html>
  </body>
</html>




