<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wedding
 */

get_header();
?>
    <section class="banner">
      <div class="container">
        <div class="banner-content">
          <h1>Lorem ipsum dolor sit </h1>
          <p>Lorem ipsum dolor sit amet, id vivamus </p>
          <div class="banner-search">
            <form>
              <div class="form-item">
                <label>Area</label>
                <select>
                  <option>Any area</option>
                  <option>Lorem</option>
                </select>
              </div>
              <div class="form-item">
                <label>Venue Type</label>
                <select>
                  <option>Any venue</option>
                  <option>Lorem</option>
                </select>
              </div>
              <div class="form-item">
                <label>Event Type</label>
                <select>
                  <option>Any event</option>
                  <option>Lorem</option>
                </select>
              </div>
              <div class="form-item">
                <label>Maximum Guest</label>
                <select>
                  <option>Any Guest</option>
                  <option>Lorem</option>
                </select>
              </div>
              <div class="form-item">
                <button>Find</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="catagori">
      <div class="container">
        <ul>
          <li>
            <a href="#">
              <i style="color:red; font-size:50px;" class="icofont-ui-love"></i>
              <p>Wedding</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i style="color:red; font-size:50px;" class="icofont-ui-love"></i>
              <p>Reception</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i style="color:red; font-size:50px;" class="icofont-ui-love"></i>
              <p>Gaye Holud</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i style="color:red; font-size:50px;" class="icofont-ui-love"></i>
              <p>Anniversary</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i style="color:red; font-size:50px;" class="icofont-ui-love"></i>
              <p>Engagement</p>
            </a>
          </li>
          <li>
            <a href="#">
                <i style="color:red; font-size:50px;" class="icofont-ui-love"></i>
              <p>Pre-Wedding</p>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="popular-venue">
      <div class="container">
        <h3 class="section-title">Most Popular Venue in Dhaka</h3>
        <div class="venue-items">

          <div class="row">
            <div class="venue-item">
              <div class="col-md-4">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg" alt="venue">
                </div>
              </div>
              <div class="col-md-6">
                <div class="content">
                  <h2>Lorem ipsum dolor sit amet</h2>
                  <h4><i class="icofont-google-map"></i> Lorem ipsum dolor sit amet, id vivamus quam eget nec eget id</h4>
                  <ul>
                    <li><span>Budget:</span> Lorem ipsum dolor sit amet, id vivamus quam eget nec</li>
                    <li><span>Style:</span> Lorem ipsum dolor sit amet, id vivamus quam eget nec eget</li>
                    <li><span>Total Capacity:</span> Lorem ipsum dolor sit amet, id vivamus quam</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, id vivamus quam eget nec eget id, maecenas et ut mollis nostra consectetuer lectus, velit lorem pulvinar iaculis ornare amet, </p>
                  <div class="reviews"><i class="icofont-pencil-alt-2"></i> 29 Reviews</span></div>
                </div>
              </div>
              <div class="col-md-2">
              <div class="button">
                <a href="http://27.147.182.176:8081/udp/wedding/venue/" class="btn-default">Details</a>
                <div class="rating">
                  <i class="icofont-star active"></i>
                  <i class="icofont-star active"></i>
                  <i class="icofont-star active"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="venue-item">
              <div class="col-md-4">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg" alt="venue">
                </div>
              </div>
              <div class="col-md-6">
                <div class="content">
                  <h2>Lorem ipsum dolor sit amet</h2>
                  <h4><i class="icofont-google-map"></i> Lorem ipsum dolor sit amet, id vivamus quam eget nec eget id</h4>
                  <ul>
                    <li><span>Budget:</span> Lorem ipsum dolor sit amet, id vivamus quam eget nec</li>
                    <li><span>Style:</span> Lorem ipsum dolor sit amet, id vivamus quam eget nec eget</li>
                    <li><span>Total Capacity:</span> Lorem ipsum dolor sit amet, id vivamus quam</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, id vivamus quam eget nec eget id, maecenas et ut mollis nostra consectetuer lectus, velit lorem pulvinar iaculis ornare amet, </p>
                  <div class="reviews"><i class="icofont-pencil-alt-2"></i> 29 Reviews</span></div>
                </div>
              </div>
              <div class="col-md-2">
              <div class="button">
                <a href="http://27.147.182.176:8081/udp/wedding/venue/" class="btn-default">Details</a>
                <div class="rating">
                  <i class="icofont-star active"></i>
                  <i class="icofont-star active"></i>
                  <i class="icofont-star active"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="venue-item">
              <div class="col-md-4">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg" alt="venue">
                </div>
              </div>
              <div class="col-md-6">
                <div class="content">
                  <h2>Lorem ipsum dolor sit amet</h2>
                  <h4><i class="icofont-google-map"></i> Lorem ipsum dolor sit amet, id vivamus quam eget nec eget id</h4>
                  <ul>
                    <li><span>Budget:</span> Lorem ipsum dolor sit amet, id vivamus quam eget nec</li>
                    <li><span>Style:</span> Lorem ipsum dolor sit amet, id vivamus quam eget nec eget</li>
                    <li><span>Total Capacity:</span> Lorem ipsum dolor sit amet, id vivamus quam</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, id vivamus quam eget nec eget id, maecenas et ut mollis nostra consectetuer lectus, velit lorem pulvinar iaculis ornare amet, </p>
                  <div class="reviews"><i class="icofont-pencil-alt-2"></i> 29 Reviews</span></div>
                </div>
              </div>
              <div class="col-md-2">
              <div class="button">
                <a href="http://27.147.182.176:8081/udp/wedding/venue/" class="btn-default">Details</a>
                <div class="rating">
                  <i class="icofont-star active"></i>
                  <i class="icofont-star active"></i>
                  <i class="icofont-star active"></i>
                  <i class="icofont-star"></i>
                  <i class="icofont-star"></i>
                </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
      
    <section class="work-process">
      <div class="container">
        <div class="background">
          <div class="overlay">
            <h3>How it Works</h3>
            <div class="row">
              <div class="col-md-4">
                <i style="color:red; font-size:70px;" class="icofont-ui-love"></i>
                <p style="color:#fff;">Lorem ipsum dolor sit amet</p>
              </div>
              <div class="col-md-4">
                <i style="color:red; font-size:70px;" class="icofont-ui-love"></i>
                <p style="color:#fff;">Lorem ipsum dolor sit amet</p>
              </div>
              <div class="col-md-4">
                <i style="color:red; font-size:70px;" class="icofont-ui-love"></i>
                <p style="color:#fff;">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="featured-venues">
      <div class="container">
        <h3>Featured Venues</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="featured-item">
              <a href="#">
                <div class="image"><img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg" alt="venue"></div>
                <div class="content">
                  <h4>Lorem ipsum dolor sit amet, id vivamus quam</h4>
                  <h3>Lorem ipsum dolor</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-item">
              <a href="#">
                <div class="image"><img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg" alt="venue"></div>
                <div class="content">
                  <h4>Lorem ipsum dolor sit amet, id vivamus quam</h4>
                  <h3>Lorem ipsum dolor</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featured-item">
              <a href="#">
                <div class="image"><img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg" alt="venue"></div>
                <div class="content">
                  <h4>Lorem ipsum dolor sit amet, id vivamus quam</h4>
                  <h3>Lorem ipsum dolor</h3>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="featured-button"><a href="#" class="btn">View All <i class="icofont-long-arrow-right"></i></a></div>
      </div>
    </section>

    <section class="bottom-banner">
    </section>

    <section class="home-rev">
      <div class="container">
        <h3>What people say about wedding reception venues</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="rev-item">
              <div class="image"><img style="border-radius: 100%;" src="<?php echo get_template_directory_uri() ?>/assets/images/person.jpg" alt="user"></div>
              <div class="content">
                <h4 class="title"><a href="#">Danial wasken</a> 
                  <div class="star">
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star"></i>
                  </div>
                  <div class="time">15/16/19</div>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse    <a href="#" class="read-more">Read More+</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="rev-item">
              <div class="image"><img style="border-radius: 100%;" src="<?php echo get_template_directory_uri() ?>/assets/images/person.jpg" alt="user"></div>
              <div class="content">
                <h4 class="title"><a href="#">Danial wasken</a> 
                  <div class="star">
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                  </div>
                  <div class="time">15/16/19</div>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse     <a href="#" class="read-more">Read More+</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="rev-item">
              <div class="image"><img style="border-radius: 100%;" src="<?php echo get_template_directory_uri() ?>/assets/images/person.jpg" alt="user"></div>
              <div class="content">
                <h4 class="title"><a href="#">Danial wasken</a> 
                  <div class="star">
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star "></i>
                    <i class="icofont-star"></i>
                    <i class="icofont-star"></i>
                  </div>
                  <div class="time">15/16/19</div>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse    <a href="#" class="read-more">Read More+</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="rev-item">
              <div class="image"><img style="border-radius: 100%;" src="<?php echo get_template_directory_uri() ?>/assets/images/person.jpg" alt="user"></div>
              <div class="content">
                <h4 class="title"><a href="#">Danial wasken</a> 
                  <div class="star">
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                    <i class="icofont-star active"></i>
                  </div>
                  <div class="time">15/16/19</div>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse     <a href="#" class="read-more">Read More+</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="review-button"><a href="#" class="btn">View All <i class="icofont-long-arrow-right"></i></a></div>
      </div>
    </section>


    <section class="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Venue Blog</h2>
            <div class="venue-blog">
              <div class="col-md-6 no-padding">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue1.jpg">
              </div>
              <div class="col-md-6">
                <h5>Lorem ipsum dolor</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <a href="#" style="color:#000;">Read More <i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="venue-blog">
              <div class="col-md-6 no-padding">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue1.jpg">
              </div>
              <div class="col-md-6">
                <h5>Lorem ipsum dolor</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                <a href="#" style="color:#000;">Read More <i class="icofont-long-arrow-right"></i></a>
              </div>
            </div>
            <div class="review-button"><a href="#" class="btn">View All <i class="icofont-long-arrow-right"></i></a></div>
          </div>
          <div class="col-md-6">
            <div class="offer">
              <h2>Offers</h2>
              <div class="row">
              <div class="col-md-6">
                <div class="offer-item">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="offer-item">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue1.jpg">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="offer-item">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue1.jpg">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="offer-item">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/venue.jpg">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
              </div>
              <div class="review-button"><a href="#" class="btn">View All <i class="icofont-long-arrow-right"></i></a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/bottom-banner.jpg">
    </section>


<?php
get_sidebar();
get_footer();
