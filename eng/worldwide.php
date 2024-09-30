<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/worldwide.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages worldwide">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_worldwide.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">WORLDWIDE</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">

        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php" title="index" itemprop="item">
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Worldwide</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">

            <div class="contentBox">

              <div class="wordMap">
                <div class="pic wow fadeInUp" data-wow-delay="0s"><img src="../images/in/word_map.svg" alt=""></div>
                <div class="target">
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">North America
                      <ul>
                        <li>Canada</li>
                        <li>USA</li>
                        <li>Mexico</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Europe
                      <ul>
                        <li>Germany</li>
                        <li>Austria</li>
                        <li>Italy</li>
                        <li>Netherlands</li>
                        <li>Ireland</li>
                        <li>Hungary</li>
                        <li>Czech Republic</li>
                        <li>Ukraine</li>
                        <li>Bulgaria</li>
                        <li>Romania</li>
                        <li>Lithuania</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Asia
                      <ul>
                        <li>Taiwan</li>
                        <li>Japan</li>
                        <li>Korea</li>
                        <li>Chinese</li>
                        <li>Thailand</li>
                        <li>Indonesia</li>
                        <li>Philippines</li>
                        <li>Malaysia</li>
                        <li>Singapore</li>
                        <li>India</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>Posa Taiwan Head Office</button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Africa
                      <ul>
                        <li>Morocco</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">South America
                      <ul>
                        <li>Colombia</li>
                      </ul>
                    </div>
                  </button>
                  <button class="item wow fadeInUp" data-wow-delay="0.2s" type="button"><i></i>
                    <div class="slide">Oceania
                      <ul>
                        <li>Australia</li>
                      </ul>
                    </div>
                  </button>
                </div>
              </div>

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
      $('.mainMenu > ul > li').eq(4).addClass('nowPage');
    })

    function init() {
      if (window.innerWidth > 1000) {
        $('.wordMap button').off().on('mouseenter', function() {
          $(this).toggleClass('active').siblings().removeClass('active');
          $(this).find('.slide ul').slideToggle('fast');
          $(this).siblings().find('.slide ul').slideUp('fast');
        });
      } else {
        $('.wordMap button').off().on('click', function() {
          $(this).toggleClass('active').siblings().removeClass('active');
          $(this).find('.slide ul').slideToggle('fast');
          $(this).siblings().find('.slide ul').slideUp('fast');
        })
      }
    };
    $(window).on('load resize', init);
  </script>
</body>

</html>