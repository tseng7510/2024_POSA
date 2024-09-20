<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages milestone">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_milestone.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">MILESTONE</h1>
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
                <span itemprop="name">Company</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Milestone</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">

            <div class="contentBox">
              <div class="listBox">
                <div class="item">
                  <div class="year">2023</div>
                  <div class="info">
                    <div class="description">The high-efficiency intelligent spindle PGM series won the 2023 Taiwan Excellence Award.</div>
                    <div class="pic"><img src="../images/in/h1.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">2019</div>
                  <div class="info">
                    <div class="description">The UT-30 Wireless Power Transmission Ultrasonic Tool Holder won the 2019 Taiwan Excellence Award.</div>
                    <div class="pic"><img src="../images/in/h2.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">2016</div>
                  <div class="info">
                    <div class="description">POSA MACHINERY CO., LTD. received the Taichung Golden Hand Award. </div>
                    <div class="pic"><img src="../images/in/h3.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">2012</div>
                  <div class="info">
                    <div class="description">The PHB-130 telescopic boring spindle received the National Brand Yushan Award for Best Product. </div>
                    <div class="pic"><img src="../images/in/h4.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">2009</div>
                  <div class="info">
                    <div class="description">Republic of China Patent --- Utility Model No. M 365809 for the spindle device of machine tools.</div>
                    <div class="pic"><img src="../images/in/h5.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">2006</div>
                  <div class="info">
                    <div class="description">The expansion of the POSA Plant 2 facility has been completed.</div>
                    <div class="pic"><img src="../images/in/h6.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">2001</div>
                  <div class="info">
                    <div class="description">Leading the industry, we have implemented and obtained ISO-9001 (2000 version) quality assurance system certification.</div>
                    <div class="pic"><img src="../images/in/h7.jpg" alt=""></div>
                  </div>
                </div>
                <div class="item">
                  <div class="year">1994</div>
                  <div class="info">
                    <div class="description">POSA MACHINERY CO., LTD. established POSA Plant 1, specializing in the development and manufacturing of precision spindles for machine tools, such as grinding spindles, CNC lathe spindles, and CNC cutting center spindles.</div>
                    <div class="pic"><img src="../images/in/h8.jpg" alt=""></div>
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
    $('.block01 .listBox').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
  </script>
</body>

</html>