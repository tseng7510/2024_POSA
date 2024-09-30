<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages newsDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_news.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <div class="title">BLOG</div>
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
                <span itemprop="name">Blog</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <?php include('include_news.php'); ?>

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="topBox">
                <div class="pic"><img src="../images/in/n1.jpg" alt=""></div>
                <div class="infoBox">
                  <div class="changePage wow fadeInUp" data-wow-delay="0.4s">
                    <a class="prev arrows" href="blog_detail.php">Previous</a>
                    <a class="next arrows" href="blog_detail.php">Next</a>
                  </div>
                  <h1 class="title wow fadeInUp" data-wow-delay="0s">The MM1552B High speed and compact through-hole rotary hydraulic</h1>
                </div>
              </div>

              <div class="editor wow fadeInUp" data-wow-delay="0.2s">
                <div class="editorBg"></div>
                Venue : Taipei Nangang Exhibition Hall 1 Booth no. : K0116 Date : March 27 to 31, 2024Venue : Taipei Nangang Exhibition Hall 1 Booth no. : K0116 Date : March 27 to 31, 2024Venue : Taipei Nangang Exhibition Hall 1 Booth no. : K0116 Date : March 27 to 31, 2024Venue : Taipei Nangang Exhibition Hall 1 Booth no. : K0116 Date : March 27 to 31, 2024
                <br /><br /><br />
                <img src="../images/in/n2.jpg" alt="">
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
      $('.navBox li').eq(3).addClass('active');
      $('.mainMenu > ul > li').eq(2).addClass('nowPage');
    })
  </script>
</body>

</html>