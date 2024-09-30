<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsDetail">
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
                <span itemprop="name"><a href="products_2.php" title="Pelletization">Pelletization</a></span>
                <meta itemprop="position" content="3">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name"><a href="products_3.php" title="Swivel Head Spindle">Swivel Head Spindle</a></span>
                <meta itemprop="position" content="4">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Swivel Axis1</span>
                <meta itemprop="position" content="5">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">

            <div class="contentBox">

              <div class="sideBox wow fadeInUp" data-wow-delay="0.2s">
                <div class="picBox">
                  <div class="pic"><img src="../images/in/p5.jpg" alt=""></div>
                </div>
                <a href="contact.php" class="add wow fadeInUp" data-wow-delay="0.4s">INQUIRY</a>
              </div>

              <div class="infoBox wow fadeInUp" data-wow-delay="0.2">
                <h1 class="productsTitle wow fadeInUp" data-wow-delay="0s">Swivel Axis1</h1>
                <div class="box">
                  <div class="subTitle">Features</div>
                  <div class="description">
                    <ul>
                      <li>Rotation Angle : ±120 Degree</li>
                      <li>Max. Speed : 50 RPM</li>
                      <li>Continuous Torque (Air Cooling ) : 117 Nm</li>
                      <li>Continuous Torque (Water Cooling) : 260 Nm</li>
                      <li>Momentary Torque : 490 Nm</li>
                      <li>Continuous Current (Air Cooling) : 6 Arms</li>
                      <li>Continuous Current (Water Cooling) : 15 Arms</li>
                      <li>Torque Constant : 19.57 Nm/Arms</li>
                      <li>Max. Voltages : 750 Vdc</li>
                      <li>Number of Poles : 66</li>
                      <li>Encoder : Absolute Loop Type Optical Ruler</li>
                      <li>Accuracy ±3 arc-sec</li>
                    </ul>
                  </div>
                </div>
                <div class="box">
                  <div class="subTitle">Description</div>
                  <div class="description">Introducing the Swivel Head Spindle from POSA Machinery Co., Ltd. This versatile spindle offers precise multi-axis machining with its swivel head design. Built for durability and reliability, it ensures consistent performance, smooth operation, and superior surface finishes. Upgrade your machining capabilities with the Swivel Head Spindle from POSA Machinery Co., Ltd.. Elevate your machining capabilities with the</div>
                </div>
              </div>
            </div>
          </div>
        </section>

    </main>

    <?php include('include_footer.php'); ?>

  </div>

  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.mainMenu > ul > li').eq(0).addClass('nowPage');

      $('.mainBox .listBox').slick({
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        autoplay: true,
        infinite: true,
        appendDots: $('.mainBox .dotBox'),
      });

      $('.centerBtnBox .navList button').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active')

        window.scrollTo({
          top: $('.mainBox .contentBox .content').eq($(this).index()).offset().top - $('.headerBox').height() - 100,
          behavior: 'smooth',
        });
      });
    })
  </script>
</body>

</html>