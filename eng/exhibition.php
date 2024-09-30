<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">EXHIBITIONS</h1>
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
                <span itemprop="name">Media</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Exhibition</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>


        <?php include('include_news.php'); ?>

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">

                <?php for ($i = 0; $i < 7; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s" data-type="News">
                    <a href="exhibition_detail.php">
                      <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="info">
                          <h2 class="title">POSA’s “High Efficiency Smart Spindle PGM Series” won the 2023 Taiwan Excellence Award!</h2>
                          <div class="description">POSA’s is not only the only company in the precision spindle industry to win the Taiwan Excellence Award, but it has also won the award for the second time!</div>
                        </div>
                      </div>
                      <div class="more"></div>
                    </a>
                  </div>
                <?php } ?>

              </div>
              <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
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
      $('.navBox li').eq(1).addClass('active');
      $('.mainMenu > ul > li').eq(2).addClass('nowPage');
    })
  </script>
</body>

</html>