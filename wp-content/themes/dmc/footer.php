<div class="footer">
          <div class="footer-top">
            <div class="footer-logo container">
              <div class="row justify-content-center">
                <div class="row company-logo-row col-lg-4 col-12">
                  <a href="<?= get_home_url()?>" class="company-logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo.png" alt="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/logo-text.png" class="company-logo-text" alt="logo-text">
                  </a>
                </div>
                <!-- <div class="col-lg-2 col-0"></div> -->
                <div class="footer-contact col-lg-8 d-flex justify-content-end">
                  <a class="" href="https://www.facebook.com/" target="_blank">
                    <div class="logo-circle rounded-circle">
                      <i class="fa-brands fa-facebook-f"></i>
                    </div>
                  </a>
                  <a class="" href="https://www.twitter.com/" target="_blank">
                    <div class="logo-circle rounded-circle">
                      <i class="fa-brands fa-twitter"></i>
                    </div>
                  </a>
                  <a class="" href="https://www.instagram.com" target="_blank">
                    <div class="logo-circle rounded-circle">
                      <i class="fa-brands fa-instagram"></i>
                    </div>
                  </a>
                  <a class="" href="https://www.skype.com" target="_blank">
                    <div class="logo-circle rounded-circle">
                      <i class="fa-brands fa-skype"></i>
                    </div>
                  </a>
                  <a class="" href="https://www.pinterest.com" target="_blank">
                    <div class="logo-circle rounded-circle">
                      <i class="fa-brands fa-pinterest-p"></i>
                    </div>
                  </a>
                </div>
                
            </div>
          </div>
          <div class="footer-content">
            <div class="footer-content-container container">
              <div class="row">
                <div class="col-md-4">
                  <div class="company-info">
                    <h2>COMPANY</h2>
                    <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur et adipisicing eiusmod tempor incididunt labore</p>
                    <div class="company-detail">
                      <div class="location-detail">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>420 Love Sreet 133/2 Mirpur City, Dhaka</span>
                      </div>
                      <div class="phone-detail">
                        <i class="fa-solid fa-phone"></i>
                        <span>+(066) 19 5017 800 628</span>
                      </div>
                      <div class="mail-detail">
                        <i class="fa-solid fa-envelope"></i>
                        <span>info.contact@gmail.com</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="news-feeds-footer">
                    <h2>NEWS FEEDS</h2>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Marce 9, 2020</span>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>April 3, 2020</span>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Marce 10, 2020</span>
                    <hr>
                    <i class="fa-solid fa-user"></i>
                    <span>By Admin</span>
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>April 3, 2020</span>
                    <hr>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="newslater">
                    <h2>NEWSLATER</h2>
                    <p>Lorem ipsum dolor sit amet,</p>
                    <div class="subcribe-form d-flex">
                      <input class="form-control" type="text" name="mail" id="mail" placeholder="Your Mail">
                      <button class="btn btn-success">Subcribe</button>
                    </div>
                    <h2 class="house-tags">HOUSE TAGS</h2>
                    <div class="house-tags-list">
                      <div class="house-tags-item d-inline-block text-center">
                        <span>CREATIVE</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>DEVELOPMENT</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>BEACH</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>VILLA</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>CLEAN</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>SEO</span>
                      </div>
                      <div class="house-tags-item d-inline-block text-center">
                        <span>APARTMENT</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        <div class="copyright">
          <hr>
          <div class="copyright-detail">
            <div class="container">
              <span class="copyright-text">©2020, Copy Right By Ijm NH. All Rights Reserved copy</span>
            </div>
            <?php if(is_home()):?>
            <a href="#header">
              <button class="go-header-btn">
                <i class="fa-solid fa-chevron-up"></i>
              </button>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/slick/slick.min.js"></script>
    <?php if(is_home()):?>  
    <script type="text/javascript">
      $(document).ready(function(){
        $('.user-feedback-slide').slick({
          infinite: true,
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          arrow: true,
          // prevArrow: '<div class="prev-slider"><i class="fa-solid fa-circle-chevron-left"></i></div>',
          // nextArrow: '<div class="next-slider"><i class="fa-solid fa-circle-chevron-right"></i></div>',
          prevArrow: `<button type='button' class='slick-prev slick-arrow'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
          nextArrow: `<button type='button' class='slick-next slick-arrow'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
          ]
        });
      });

      var player = document.getElementById("video-home");
      var playerStatus = false;
      
      player.addEventListener("click", function() {
        if (playerStatus) {
          player.pause();
          playerStatus = !playerStatus;
        }
        else {
          player.play();
          playerStatus = !playerStatus;
        };
      });

      var liked1 = false;
      var button1 = document.getElementById('house-like1');
      button1.addEventListener('click', function() {
        if(!liked1) {
          this.style.color = 'red';
          liked1 = !liked1;
        }
        else {
          button1.removeAttribute('style');
          this.style.color = '#f9f9f9';
          liked1 = !liked1;
        }
      });
        
      
    </script>
    <?php endif;?>
  </body>
</html>