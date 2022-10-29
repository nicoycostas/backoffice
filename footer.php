  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </main>
      <footer>
          <nav>
              <ul>
              <!-- replace with dynamic menu -->
                <li><a href="<?php echo get_home_url(); ?>">HOME</a></li>
                <li><a href="<?php echo get_home_url(); ?>/journal">JOURNAL</a></li>
                <li><a href="<?php echo get_home_url(); ?>/note">NOTES</a></li>
                <li><a href="<?php echo get_home_url(); ?>/decision">DECISIONS</a></li>
                <li><a href="<?php echo get_home_url(); ?>/strategy">STRATEGIES</a></li>
                <!-- <li><a href="">BLOG</a></li> -->
                <li><a href="<?php echo get_home_url(); ?>/goal">GOALS</a></li>
                
              </ul>
          </nav>
          <p>&copy; 2021 - Costas Nicou  <br/> Linux System Admin & Wordpress Web Developer</p>
      </footer>

    
    <script src="https://kit.fontawesome.com/5a00dc9b71.js" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
  </body>
</html>
