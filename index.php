<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="res/js/smoothscroll.js"></script>
    <link rel="stylesheet" href="res/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    <title>mehdi</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <script src="https://kit.fontawesome.com/226a54ec5e.js" crossorigin="anonymous"></script>

    <script src="res/js/pace.js"></script>
    <script src="res/js/swiper.min.js"></script>
    <!-- Core CSS file -->
    <link rel="stylesheet" href="res/css/photoswipe.css" />

    <link rel="stylesheet" href="res/default-skin/default-skin.css" />
    <link rel="stylesheet" href="res/css/swiper.min.css" />

    <!-- Core JS file -->
    <script src="res/js/photoswipe.min.js"></script>

    <!-- UI JS file -->
    <script src="res/js/photoswipe-ui-default.min.js"></script>
	 <script src="res/js/object-fit-videos.js"></script>
  </head>

  <body>
    <div id="preloader" class="preloader"></div>

    <script>
      $(window).on("beforeunload", function() {
        $(window).scrollTop(0);
      });

      paceOptions = {
        ajax: false,
        document: false,
        eventLag: false
      };

      Pace.on("done", function() {
        $("#preloader")
          .delay(300)
          .animate({ top: "-140%", opacity: "70%" }, 1500);
        $(".logo").addClass("test");
        $(".header__content h1, .header__buttons").addClass("fadeInDown");
        setTimeout(function() {
          $("body").css("overflow", "auto");
        }, 100);
		  setTimeout(function(){
			  $("video").get(0).play();
		  }, 300);

      });
    </script>
    <header class="header" id="top">
      <div class="header__mobile">
        <div class="menu-icon-toggle"><span></span></div>
        <div class="header__mobile-background">
          <i class="menu-background"></i>
          <i class="menu-background"></i>
          <i class="menu-background"></i>
        </div>
      </div>
      <div class="logo">
        <a href="#"><img src="res/img/logo-mehdi.png" alt=""/></a>
      </div>
      <div class="header__nav container">
        <div class="nav__links">
          <a href="#ubermich">Über Mich</a>
          <a href="#timeline">Competition</a>
          <a href="#packages">Packages</a>
			  <a href="#packages"><?php
 			 	echo $_SERVER['REMOTE_ADDR'] ?></a>

        </div>
        <div class="nav__links nav__links--social">
          <a class="" href="#"><i class="fab fa-instagram"></i></a>
          <a class="" href="#"><i class="fas fa-mobile-alt"></i></a>
          <a class="" href="mailto:test@test.at?Subject=Hello"><i class="far fa-envelope"></i></a>
        </div>
      </div>
      <div class="header__wrapper">
        <div class="header__content">
          <h1>
            BE STRONG / BE FIT / BE HEALTY<br />
            <span>TRAIN WITH ME</span>
          </h1>
          <div class="header__buttons">
            <div class="button button--header"><a href="https://google.com">Train 1 to 1</a></div>
            <div class="button button--header"><a href="#">Train Online</a></div>
          </div>
        </div>
        <video playsInline loop muted="muted" muted poster="res/img/poster.jpg" preload>
			  <source src="res/img/video-mehdi.mp4" type="video/mp4" media="only screen and (min-device-width: 768px)"></source>
			  <source src="res/img/video-mehdi-mobile.mp4" type="video/mp4" media="only screen and (max-device-width: 768px)"></source>
		  </video>


      </div>
      <div class="header__overlay"></div>
    </header>
    <main>
      <section id="packages" class="pakette container">
        <h2 class="pakette__headline">Choose Your Journey</h2>
        <div class="pakette__wrapper">
          <div class="pakette__item anim" data-animation="test">
            <h2>Fat Loss Program</h2>
            <p class="pakette__price"><i class="fas fa-euro-sign"></i>100<span>/mo</span></p>
            <ul>
              <li><i class="far fa-check-square"></i>Lorem ipsum dolor sit amet</li>
              <li><i class="far fa-check-square"></i>Lorem ipsum</li>
            </ul>
            <div class="pakette__button">
              <a href="#">Buy</a>
            </div>
          </div>
          <div class="pakette__item anim" data-animation="center">
            <div class="pakette__hot"><i class="fab fa-hotjar"></i>HOT</div>
            <h2>Bulk Program</h2>
            <p class="pakette__price"><i class="fas fa-euro-sign"></i>100<span>/mo</span></p>
            <ul>
              <li><i class="far fa-check-square"></i>Lorem ipsum dolor sit amet</li>
              <li><i class="far fa-check-square"></i>Lorem ipsum dolor sit amet</li>
              <li><i class="far fa-check-square"></i>Lorem ipsum dolor sit amet</li>
              <li><i class="far fa-check-square"></i>Lorem ipsum dolor sit amet</li>
            </ul>
            <div class="pakette__button">
              <a href="#">Buy</a>
            </div>
          </div>
          <div class="pakette__item anim" data-animation="test">
            <h2>Prep Program</h2>
            <p class="pakette__price"><i class="fas fa-euro-sign"></i>100<span>/mo</span></p>
            <ul>
              <li><i class="far fa-check-square"></i>Blabla</li>
              <li><i class="far fa-check-square"></i>Blabla</li>
              <li><i class="far fa-check-square"></i>Blabla</li>
              <li><i class="far fa-check-square"></i>Blabla</li>
            </ul>
            <div class="pakette__button">
              <a href="#">Buy</a>
            </div>
          </div>
        </div>
      </section>
      <section id="ubermich" class="twocolumns container container--nopadding anim" data-animation="test">
        <div class="twocolumns__wrapper">
          <div class="twocolumns__item twocolumns__item">
            <h2>Über mich</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit
            </p>
            <div class="twocolumns__button">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </section>
      <section id="timeline" class="timeline container">
        <h2 class="timeline__headline">Timeline</h2>
        <div class="timeline__wrapper">
          <div class="timeline__item">
            <div class="timeline__img"></div>
            <div class="timeline__content anim" data-animation="test">
              <h2>Title</h2>
              <div class="timeline__date">
                1 MAY 2010
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, numquam! Harum maiores quia
                assumenda, magnam natus perferendis quas et exercitationem nihil dicta! Incidunt ex architecto adipisci
                quidem omnis necessitatibus temporibus.
              </p>
            </div>
          </div>
          <div class="timeline__item timeline__item--right">
            <div class="timeline__img"></div>
            <div class="timeline__content timeline__content--right anim" data-animation="test">
              <h2>Title</h2>
              <div class="timeline__date timeline__date--right">
                1 MAY 2010
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, numquam! Harum maiores quia
                assumenda, magnam natus perferendis quas et exercitationem nihil dicta! Incidunt ex architecto adipisci
                quidem omnis necessitatibus temporibus.
              </p>
            </div>
          </div>
          <div class="timeline__item">
            <div class="timeline__img"></div>
            <div class="timeline__content anim" data-animation="test">
              <h2>Title</h2>
              <div class="timeline__date">
                1 MAY 2010
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, numquam! Harum maiores quia
                assumenda, magnam natus perferendis quas et exercitationem nihil dicta! Incidunt ex architecto adipisci
                quidem omnis necessitatibus temporibus.
              </p>
            </div>
          </div>
          <div class="timeline__item timeline__item--right">
            <div class="timeline__img"></div>
            <div class="timeline__content timeline__content--right anim" data-animation="test">
              <h2>Title</h2>
              <div class="timeline__date timeline__date--right">
                1 MAY 2010
              </div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, numquam! Harum maiores quia
                assumenda, magnam natus perferendis quas et exercitationem nihil dicta! Incidunt ex architecto adipisci
                quidem omnis necessitatibus temporibus.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="fitness" class="fitness container">
        <h2>Facts</h2>

        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper fitness__wrapper">
            <!-- Slides -->
            <div class="swiper-slide fitness__item">
              <img src="res/img/fitness2.jpg" />
              <div class="fitness__wrapper-content">
                <h3>Lorem Ipsum</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a class="trigger" href="#">Read More</a>
                <div class="modal">
                  <div class="modal-content">
                    <span class="close-button">x</span>
                    1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide fitness__item">
              <img src="res/img/fitness2.jpg" />
              <div class="fitness__wrapper-content">
                <h3>Lorem Ipsum</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a class="trigger" href="#">Read More</a>
                <div class="modal">
                  <div class="modal-content">
                    <span class="close-button">x</span>
                    2 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide fitness__item">
              <img src="res/img/fitness2.jpg" />
              <div class="fitness__wrapper-content">
                <h3>Lorem Ipsum</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a class="trigger" href="#">Read More</a>
                <div class="modal">
                  <div class="modal-content">
                    <span class="close-button">x</span>
                    1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide fitness__item">
              <img src="res/img/fitness2.jpg" />
              <div class="fitness__wrapper-content">
                <h3>Lorem Ipsum</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a class="trigger" href="#">Read More</a>
                <div class="modal">
                  <div class="modal-content">
                    <span class="close-button">x</span>
                    1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide fitness__item">
              <img src="res/img/fitness2.jpg" />
              <div class="fitness__wrapper-content">
                <h3>Lorem Ipsum</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a class="trigger" href="#">Read More</a>
                <div class="modal">
                  <div class="modal-content">
                    <span class="close-button">x</span>
                    1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide fitness__item">
              <img src="res/img/fitness2.jpg" />
              <div class="fitness__wrapper-content">
                <h3>Lorem Ipsum</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a class="trigger" href="#">Read More</a>
                <div class="modal">
                  <div class="modal-content">
                    <span class="close-button">x</span>
                    1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <section id="gallery" class="gallery container">
        <h2>Gallery</h2>
        <p class="gallerry__content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.
        </p>
        <div id="gallery" class="gallery__wrapper" itemscope itemtype="http://schema.org/ImageGallery">
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                class="open"
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
          <div class="gallery__item">
            <!-- Use figure for a more semantic html -->
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <!-- Link to the big image, not mandatory, but usefull when there is no JS -->
              <a
                href="https://unsplash.it/1200/900/?image=702"
                data-caption="Sea side, south shore<br><em class='text-muted'>© Dominik Schröder</em>"
                data-width="1200"
                data-height="900"
                itemprop="contentUrl"
              >
                <!-- Thumbnail -->
                <img src="https://unsplash.it/400/300/?image=702" itemprop="thumbnail" alt="Image description" />
              </a>
            </figure>
            <div class="gallery__slideup">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
        </div>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
          <!-- Background of PhotoSwipe.
			           It's a separate element as animating opacity is faster than rgba(). -->
          <div class="pswp__bg"></div>
          <!-- Slides wrapper with overflow:hidden. -->
          <div class="pswp__scroll-wrap">
            <!-- Container that holds slides.
			              PhotoSwipe keeps only 3 of them in the DOM to save memory.
			              Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>
            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                  <div class="pswp__preloader__icn">
                    <div class="pswp__preloader__cut">
                      <div class="pswp__preloader__donut"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
              </div>
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
              <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
              </div>
            </div>
          </div>
        </div>

        <div id="loadMore" class="button">
          <a href="#">Load More</a>
        </div>
      </section>
      <section id="contact" class="contact container">
        <h2>Contact</h2>
        <div class="contact__wrapper">
          <div class="contact__item">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam.
            </p>
            <p>E-mail: adsadas@adsada.at</p>
            <p>Telefon: 30000234324230</p>
          </div>
          <div class="contact__item">
            <form>
              <div class="contact__column-wrapper">
                <div class="contact__columns">
                  <label for="first name">First Name*</label>
                  <input type="text" name="Email" required id="Email" />
                </div>
                <div class="contact__columns">
                  <label for="Last name">Last Name*</label>
                  <input type="text" name="Email" required id="Email" />
                </div>
                <div class="contact__columns">
                  <label for="first name">Email*</label>
                  <input type="text" name="Email" required id="Email" />
                </div>
                <div class="contact__columns">
                  <label for="textarea">Message*</label>
                  <textarea> </textarea>
                </div>
              </div>
              <div class="contact__submit">
                <div class="button"><a href="#">Send</a></div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>
    <footer>
		 <div class="footer">
			 <div class="footer__wrapper">
				 	<div class="footer__item"><a href="#"><i class="fab fa-instagram"></i></a></div>
					<div class="footer__item"><a href="#"><i class="fab fa-facebook-f"></i></a></div>
					<div class="footer__item"><a href="#"><i class="fab fa-facebook-messenger"></i></a></div>
					<div class="footer__item"><a href="#"><i class="fab fa-youtube"></i></a></div>
					<div class="footer__item"><a href="#"><i class="far fa-envelope"></i></a></div>
			 </div>

			 <p>© Copyright Mehdi</p>
		 </div>
	 </footer>
	 <div class="backtotop">
		 <a href="#top"><i class="fas fa-arrow-up"></i></a>
	 </div>


	 <script>

	 var images = document.querySelectorAll('.anim');

	 observer = new IntersectionObserver(function(entries, aaaa){
		 entries.forEach(function(entry){
			 if(entry.intersectionRatio > 0){
				 entry.target.style.animation = entry.target.dataset.animation + ".9s forwards ease-out";
				 observer.unobserve(entry.target);
			 } else{
				 entry.target.style.animation = "none";
			 }
		 });
	 }, {
		  rootMargin: "0px 0px -200px 0px"
	 });

	 images.forEach(function(image){
		  observer.observe(image);
	 });




	 var links = document.querySelectorAll('a[href^="#"]');
	 for(i = 0; i < links.length; i++){

	 	links[i].addEventListener('click', function (e){
	 		let hash = this.getAttribute("href");
	 		let elem = document.getElementById(hash.replace("#",""));

	 		elem.scrollIntoView({ left: 0, block: 'start', behavior: 'smooth' });
	 		e.preventDefault();
	 	});
	 };
	 </script>

    <script>
      if ($(window).width() < 768) {
        var swiper = new Swiper(".swiper-container", {
          slidesPerView: 1.5,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          }
        });
      }

      var prevScrollpos = window.pageYOffset;

      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;

        if (window.pageYOffset > 800) {
            document.querySelector(".backtotop").classList.add("active-top");
        } else{
			  document.querySelector(".backtotop").classList.remove("active-top");
		  }
      };

		objectFitVideos();
    </script>
    <script>
      $(function() {
        $(".gallery__item")
          .slice(0, 8)
          .addClass("display");
        $("#loadMore").on("click", function(e) {
          e.preventDefault();
          $(".gallery__item:hidden")
            .slice(0, 8)
            .addClass("display");
          if ($(".gallery__item:hidden").length == 0) {
            $("#load").fadeOut("slow");
            $("#loadMore").remove();
          }
        });
      });
      var inputs = document.querySelectorAll(".fitness__item p");

      $(".fitness__item p").each(function() {
        len = $(this).text().length;
        str = $(this)
          .text()
          .substr(0, 120);
        lastIndexOf = str.lastIndexOf(" ");
        if (len > 120) {
          $(this).text(str.substr(0, lastIndexOf) + "…");
        }
      });

      $(".trigger").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this)
          .siblings(".modal")
          .toggleClass("show-modal");
      });

      $(".close-button").on("click", function() {
        if ($(".modal").hasClass("show-modal")) {
          $(".modal").removeClass("show-modal");
        }
      });

      //   window.onclick = function(e) {
      //     if ($(".modal").hasClass("show-modal")) {
      //       $(".modal").removeClass("show-modal");
      //     }
      //   };

      $(".menu-icon-toggle").on("click", function(e) {
        $("body").toggleClass("open");
        $("body").toggleClass("open-overflow");
        e.preventDefault();
      });


			$(".nav__links a").click(function(){
				if ($("body").hasClass("open")) {
						$("body").toggleClass("open");
					 	$("body").toggleClass("open-overflow");
					 }
			});


      // $('.fitness__item a').click(function(){
      // 	$('#modal-container').addClass('two');
      // 	$('body').addClass('modal-active');
      // })
      //
      // 	$('#modal-container').click(function(){
      // 	  $(this).addClass('out');
      // 	  $('body').removeClass('modal-active');
      // 	});

      // $('a[href=#top]').click(function () {
      //  $('body,html').animate({
      // 	  scrollTop: 0
      //  }, 600);
      //  return false;
      // });

      // $(window).scroll(function () {
      //  if ($(this).scrollTop() > 50) {
      // 	  $('.totop a').fadeIn();
      //  } else {
      // 	  $('.totop a').fadeOut();
      //  }
      // });

      // 	var modal = document.querySelector(".modal");
      // 	var trigger = document.querySelector(".trigger");
      // 	var closeButton = document.querySelector(".close-button");
      //
      //
      // 	trigger.addEventListener('click', function(){
      // 		 toggleModal();
      // 	});
      //
      // 	closeButton.addEventListener("click", toggleModal);
      //
      //
      // function toggleModal(){
      // 	modal.classList.toggle("show-modal");
      // }
    </script>

    <script>
      "use strict";

      /* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */

      (function($) {
        // Init empty gallery array
        var container = [];

        // Loop over gallery items and push it to the array
        $("#gallery")
          .find("figure")
          .each(function() {
            var $link = $(this).find("a"),
              item = {
                src: $link.attr("href"),
                w: $link.data("width"),
                h: $link.data("height"),
                title: $link.data("caption")
              };
            container.push(item);
          });

        // Define click event on gallery item
        $(".open").click(function(event) {
          // Prevent location change
          event.preventDefault();

          // Define object and gallery options
          var $pswp = $(".pswp")[0],
            options = {
              index: $(this)
                .parent("figure")
                .index(),
              bgOpacity: 0.85,
              showHideOpacity: true
            };

          // Initialize PhotoSwipe
          var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
          gallery.init();
        });
      })(jQuery);
    </script>
  </body>
</html>
