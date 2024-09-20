<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages application">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_application.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">APPLICATIONS</div>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php" title="index" itemprop="item"></a>
                <meta itemprop="position" content="1">
                <span itemprop="name">Home</span>
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Applications</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Aerospace Processing and Application Industry</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>


        <section>
          <div class="topBox">
            <div class="bg">
              <div class="dot"></div>
            </div>
            <div class="container">

              <div class="contentBox">


                <div class="infoBox">
                  <h1 class="title">Aerospace Processing and Application Industry</h1>
                  <div class="description">The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.The machining parts of the 5th axis rotating table with the machine tool include engine blades, casings, ring parts, aircraft cabin seat structural parts, national defense aerospace, unmanned aerial vehicles, and other processing industries.</div>
                </div>
                <div class="sideBox">
                  <div class="picBox">
                    <div class="pic"><img src="../images/in/a1.jpg" alt=""></div>
                  </div>

                  <div class="changePage wow fadeInUp" data-wow-delay="0.4s">
                    <a class="prev arrows" href="news_detail.php">Previous</a>
                    <a class="next arrows" href="news_detail.php">Next</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottomBox">
            <div class="container">

              <h2 class="blockTitle">RELATED <span>PRODUCTS</span></h2>
              <div class="listBox">

                <? for ($i = 0; $i < 8; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s" data-type="News">
                    <a href="products_detail.php">
                      <div class="picBox">
                        <div class="pic"><img src="../images/in/p5.jpg" alt=""></div>
                      </div>
                      <h2 class="title">Swivel Axis1</h2>
                      <div class="more"></div>
                    </a>
                  </div>
                <? } ?>
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

      $('.application .bottomBox .listBox').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: true,
        responsive: [{
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });
      $('.mainMenu > ul > li').eq(1).addClass('active');
    });
  </script>
</body>

</html>