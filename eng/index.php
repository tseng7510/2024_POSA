<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner">
          <div class="dotBox">
            <div class="container"></div>
          </div>
          <div class="listBox">
            <div class="item">
              <div class="pic">
                <img src="../images/index/banner.jpg" alt="">
              </div>
            </div>

            <div class="item">
              <div class="pic">
                <img src="../images/index/banner.jpg" alt="">
              </div>
            </div>

            <div class="item">
              <div class="pic">
                <img src="../images/index/banner.jpg" alt="">
              </div>
            </div>
          </div>
        </div>

        <section class="aboutBox">
          <div class="container">
            <div class="content">
              <div class="picBox wow fadeInUp" data-wow-delay="0s">
                <div class="title">Innovative R&D Quality Control</div>
                <div class="pic"><img src="../images/index/about.jpg" alt=""></div>
              </div>
              <div class="infoBox">
                <div class="topBox wow fadeInUp" data-wow-delay="0.2s">
                  <div class="box">
                    <div class="count count1">30</div>
                    <div class="info">Development experience</div>
                  </div>
                  <div class="box">
                    <div class="count count2">2000</div>
                    <div class="info">Number of customers worldwide</div>
                  </div>
                </div>
                <div class="bottomBox wow fadeInUp" data-wow-delay="0.4s">
                  <div class="title">ABOUT</div>
                  <h1 class="title2">POSA Machinery</h1>
                  <div class="description">Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
                  <a href="#" class="indexMore">READ MORE</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="productBox">
          <div class="container">
            <div class="infoBox wow fadeInLeft" data-wow-delay="0s">
              <h2 class="title"><span>HOT</span> PRODUCTS</h2>
              <div class="arrowsBox"></div>
            </div>
            <div class="products">
              <div class="listBox wow fadeInRight" data-wow-delay="0.2s">
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/p1.jpg" alt=""></div>
                    <div class="subTitle">Turning and Milling Centers</div>
                    <h3 class="title">Swivel Head</h3>
                    <div class="model">Spindle</div>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/p2.jpg" alt=""></div>
                    <div class="subTitle">Machining Center</div>
                    <h3 class="title">Built-in Spindle</h3>
                    <div class="model">EMS-30</div>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/p3.jpg" alt=""></div>
                    <div class="subTitle">Machining Center</div>
                    <h3 class="title">Gear-drive Spindle</h3>
                    <div class="model">MGB-50-1</div>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/p4.jpg" alt=""></div>
                    <div class="subTitle">Grinder</div>
                    <h3 class="title">Built-in Grinder Spindle</h3>
                    <div class="model">POSA-62</div>
                  </a>
                </div>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/p1.jpg" alt=""></div>
                    <div class="subTitle">Turning and Milling Centers</div>
                    <h3 class="title">Swivel Head</h3>
                    <div class="model">Spindle</div>
                  </a>
                </div>
              </div>
            </div>
        </section>


        <section class="technologyBox">
          <div class="container">
            <div class="infoBox wow fadeInLeft" data-wow-delay="0s">
              <h2 class="title">TECHNOLOGY</h2>
              <div class="subTItle">Absolute Perfection</div>
              <div class="description">With in-depth knowledge of spindle design and engineering, Posa is perfectly placed to deliver the ideal solution for your unique requirements. Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
            </div>
            <div class="listBox wow fadeInRight" data-wow-delay="0.2s">
              <div class="item">
                <div class="pic"><img src="../images/index/t1.png" alt="">
                  <div class="dot"></div>
                </div>
                <div class="title">Technology</div>
              </div>
              <div class="item">
                <div class="pic"><img src="../images/index/t2.png" alt="">
                  <div class="dot"></div>
                </div>
                <div class="title">Service</div>
              </div>
              <div class="item">
                <div class="pic"><img src="../images/index/t3.png" alt="">
                  <div class="dot"></div>
                </div>
                <div class="title">Innovation</div>
              </div>
            </div>
          </div>
        </section>

        <section class="newsBox">
          <div class="container">
            <div class="infoBox wow fadeInLeft" data-wow-delay="0s">
              <h2 class="title">MEDIA</h2>
              <a href="#" class="indexMore">READ MORE</a>
            </div>
            <div class="listBox wow fadeInRight" data-wow-delay="0.2s">
              <? for ($i = 0; $i < 5; $i++) { ?>
                <div class="item">
                  <a href="">
                    <time datetime="">2023.6.10</time>
                    <h3 class="title">2024 TMTS</h3>
                  </a>
                </div>
              <? } ?>
            </div>
          </div>
        </section>
      </div>
    </main>


    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>


  <script>
    $(function() {

      $('.banner .listBox').slick({
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        autoplay: true,
        infinite: true,
        appendDots: $('.banner .dotBox .container'),
      });


      $('.productBox .listBox').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: true,
        appendArrows: $('.productBox .arrowsBox'),
        responsive: [{
            breakpoint: 1250,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });
    });

    (function() {

      const count11 = document.querySelector('.aboutBox .count1');
      const count12 = document.querySelector('.aboutBox .count2');
      const check = document.querySelector('.aboutBox');
      const options = {
        root: null,
        rootMargin: '0px 0px 0px 0px',
        threshold: 0.2,
      };
      const callback = (entries, observer) => {
        if (entries[0].isIntersecting && !check.classList.contains('active')) {
          check.classList.add('active');
          setTimeout(() => {
            animateNumber(count11, 0, 30, 1000);
            animateNumber(count12, 0, 2000, 2000);
          }, 500);
        }
      };

      const observer = new IntersectionObserver(callback, options);
      observer.observe(check);
    })()
  </script>
</body>

</html>