<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding
 */

?>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="cell"><i class="fas fa-phone-alt"></i> +88 0170000111</div>
          </div>
          <div class="col-md-6">
            <div class="social">
              <span>Follow us on Social Media</span>
              <ul class="social-icons">
                <li>
                  <a href="#"><i class="icofont-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icofont-pinterest"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="widget-item">
                <?php dynamic_sidebar('footer1'); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget-item">
                <?php dynamic_sidebar('footer2'); ?>
              </div>
            
            <div class="col-md-3">
              <div class="widget-item">
                <?php dynamic_sidebar('footer3'); ?>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget-item">
                <?php dynamic_sidebar('footer4'); ?>
              </div>
            </div>
          </div>
			  </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul>
                <li><a href="#">Site map</a></li>
                <li><a href="#">Terms of condition</a></li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <p class="text-right">© 2019 biyebazaar. All Right reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>