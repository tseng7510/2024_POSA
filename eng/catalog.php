<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages catalog">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_catalog.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">CATALOG</h1>
          </div>
        </div>
      </div>

      <div class="mainBox">
        <div class="bg">
          <div class="dot"></div>
        </div>
        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php" title="index" itemprop="item"></a>
                <meta itemprop="position" content="1">
                <span itemprop="name">Home</span>
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Catalog</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">

                <?php for ($i = 0; $i < 7; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s" data-type="News">
                    <a class="box" href="#">
                      <div class="pic"><img src="../images/in/c1.jpg" alt=""></div>
                      <div class="infoBox">
                        <h2 class="title">Posa-English version catalog-20P</h2>
                      </div>
                      <div class="download">Download</div>
                    </a>
                  </div>
                <?php } ?>

              </div>
              <div class="arrowsBox"></div>
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
      $('.mainMenu > ul > li').eq(5).addClass('active');

      $('.catalog .contentBox .listBox').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 900,
        infinite: true,
        appendArrows: $('.catalog .contentBox .arrowsBox'),
        responsive: [{
            breakpoint: 1000,
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
    });
  </script>
</body>

</html>