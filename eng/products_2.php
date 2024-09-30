<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

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
                <span itemprop="name"><a href="products.php" title="products">Products</a></span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Turning and Milling Centers</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>


        <section>
          <div class="container ">
            <div class="contentBox">
              <div class="topBox">
                <div class="titleBox">
                  <div class="bg">
                    <div class="dot"></div>
                  </div>
                  <h1 class="title wow fadeInUp" data-wow-delay="0s">Turning and Milling Centers</h1>
                </div>
                <div style="display:none">
                  <div class="subTitle wow fadeInUp" data-wow-delay="0.2s">Product Description</div>
                </div>
                <div class="description wow fadeInUp" data-wow-delay="0.4s">POSA MACHINERY CO., LTD. offers Turning and Milling Centers with high-precision spindles, robust construction, and advanced CNC control systems. These centers can perform both turning and milling in a single setup, suitable for various materials, featuring efficient chip management and customization options, making them ideal for aerospace, automotive, and precision engineering industries.</div>
              </div>
              <div class="listBox">

                <? for ($i = 0; $i < 2; $i++) { ?>
                  <div class="item wow fadeInUp" data-wow-delay="0s" data-type="News">
                    <a href="products_3.php">
                      <div class="pic"><img src="../images/in/p5.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="info">
                          <h2 class="title">Swivel Head Spindle</h2>
                          <div class="description">
                            <ul>
                              <li>Equipped with asynchronous motor (High Speed Spindle) and permanent magnet synchronous motor (B Axis)</li>
                              <li>High rigidity structure</li>
                              <li>Customized functionality design (Automatic tool clamping system, water-through, ring spray, closed-loop feedback system).</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="more"></div>
                    </a>
                  </div>
                <? } ?>


              </div>
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
    $('.mainMenu > ul > li').eq(0).addClass('nowPage');
  </script>
</body>

</html>