<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages about">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>


      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_about.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">ABOUT</h1>
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
                <span itemprop="name">About</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>
        <section>
          <div class="block block01 wow fadeInUp" data-wow-delay="0s">
            <div class="container">
              <div class="content">
                <div class="blockTitle">Posa Machinery is a professional spindle manufacturer which owns complete product range. </div>
                <div class="description">Product range includes lathe spindles, machining center spindles, grinder spindles, and boring machine spindles. </div>
              </div>
            </div>
          </div>

          <div class="block block02">
            <div class="container">
              <div class="pic">
                <picture>
                  <source srcset="../images/in/a2_s.jpg" media="(max-width: 767px)" />
                  <img src="../images/in/a2.png" alt="">
                </picture>
              </div>
            </div>
          </div>

          <div class="block block03">
            <div class="container">
              <div class="content">
                <div class="infoBox">
                  <div class="box">
                    <div class="blockTitle wow fadeInUp" data-wow-delay="0.2s">Posa Machinery markets its product globally</div>
                    <div class="description wow fadeInUp" data-wow-delay="0.4s">including Mainland China, the United States, Germany, Japan, India, Indonesia, Brazil, Turkey, Singapore, Malaysia, more than twenty countries.</div>
                  </div>
                </div>
                <div class="pic wow fadeInUp" data-wow-delay="0s"><img src="../images/in/a3.png" alt=""></div>
              </div>
            </div>
          </div>

          <div class="block block04">
            <div class="content">
              <div class="picBox">
                <div class="pic wow fadeInLeft" data-wow-delay="0s"><img src="../images/in/a4.png" alt=""></div>
                <div class="title"><span>EXTRENMELY TIGHT</span>
                  <span>QUALITY CONTROL</span>
                </div>
              </div>
              <div class="infoBox wow fadeInRight" data-wow-delay="0s">
                <div class="info">
                  <div class="year">2000</div>
                  <div class="description">In 2000, Posa Machinery developed the first intelligent spindle test lab in Taiwan. In addition, Posa also cooperated with Feng Chia University and National Chinyi University of Technology to build spindle simulation lab. We test and develop for intelligent spindles design and inspection in the lab.<br /><br />
                    We expect to enhance high-end technology of precision spindle, so that Taiwan machine tool industry can gain a firm foothold in global automation industry. </div>
                  <div class="pic wow fadeInLeft" data-wow-delay="0s"><img src="../images/in/a5.png" alt=""></div>
                </div>
              </div>
            </div>
          </div>

          <div class="block block05">
            <div class="container">
              <div class="content">
                <div class="blockTitle wow fadeInUp" data-wow-delay="0s">Solution</div>
                <div class="description wow fadeInUp" data-wow-delay="0.2s">In order to provide clients with total solutions, Posa Machinery expands its R&D personnel which accounts for 10% of the total employees. When contacting with clients, we fully understand clients’ actual demand and provide them with professional solutions.</div>
              </div>
            </div>
          </div>


          <div class="block block06">
            <div class="bg">
              <div class="dot"></div>
            </div>
            <div class="container">
              <div class="content">
                <div class="slogan wow fadeInUp" data-wow-delay="0s">Posa Machinery was established in 1994. Since our founding, </div>
                <div class="blockTitle wow fadeInUp" data-wow-delay="0.2s">Sincere Business Management,<br /> Always Loyal to Customers</div>
                <div class="description wow fadeInUp" data-wow-delay="0.4s">has been at the core of Posa’s business philosophy. We appreciate the supports from international and domestic clients and partners. This enables us to trace the development of Taiwan machine tool industry, continuously grow up and become the leading company of Taiwan spindle manufacturers. </div>
              </div>
            </div>
            <div class="pic"><img src="../images/in/a8.jpg" alt=""></div>
          </div>

          <div class="block block07">
            <div class="container">
              <div class="content">
                <div class="pic wow fadeInLeft" data-wow-delay="0s"><img src="../images/in/a7.png" alt=""></div>
                <div class="infoBox wow fadeInRight" data-wow-delay="0.2s">
                  <div class="blockTitle">Innovation</div>
                  <div class="description">In the future, POSA will view Japan, Korea, European and the United States as the target markets. In addition, POSA will research and develop various high-end precision spindles.</div>
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
      $('.block01 .listBox').magnificPopup({
        delegate: 'a',
        type: 'image'
      });
      $('.mainMenu > ul > li').eq(3).addClass('nowPage');
    })
  </script>
</body>

</html>