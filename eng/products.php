<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
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
                <span itemprop="name">Products</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">
            <div class="contentBox">
              <div class="listBox">
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="products_2.php">
                    <h2 class="title">Turning and Milling Centers</h2>
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/p1.png" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="info">
                        <div class="description">Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
                        <div class="more">READ MORE</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="products_2.php">
                    <h2 class="title">CNC Lathe</h2>
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/p2.png" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="info">
                        <div class="description">Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
                        <div class="more">READ MORE</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="products_2.php">
                    <h2 class="title">Machining Center</h2>
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/p3.png" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="info">
                        <div class="description">Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
                        <div class="more">READ MORE</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="products_2.php">
                    <h2 class="title">Grinder</h2>
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/p4.png" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="info">
                        <div class="description">Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
                        <div class="more">READ MORE</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item wow fadeInUp" data-wow-delay="0s">
                  <a href="products_2.php">
                    <h2 class="title">Boring & Milling Machine</h2>
                    <div class="picBox">
                      <div class="pic"><img src="../images/in/p5.png" alt=""></div>
                    </div>
                    <div class="infoBox">
                      <div class="info">
                        <div class="description">Decades of accumulated experience and an extensive product range enable us to provide world-class spindles for a range of applications. With international certification (SGS ISO9001-2015), rigorous testing procedures, and a total commitment to quality, we guarantee the performance and reliability of our products.</div>
                        <div class="more">READ MORE</div>
                      </div>
                    </div>
                  </a>
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
      $('.mainMenu > ul > li').eq(0).addClass('active');

      $('.mainBox .contentBox .item').each(function(i) {
        $(this).attr('count', i)
        $('.sideMenu .list').append(`<li><button type="button" count=${$(this).index()}>${$(this).find('.title').html()}</button></li>`)
      })

      $('.sideMenu .list button').each(function() {
        let thisContent = $(this).html();
        $(this).attr('content', thisContent)
      });


      $('.sideMenu .list li').eq(0).addClass('active')

      $('.mainBox .bg').height($('.mainBox .contentBox .item').eq(0).outerHeight()).css('top', $('.mainBox .contentBox .item').eq(0)[0].offsetTop + $('.pageTitle').outerHeight(true) + parseInt($('.mainBox').css('padding-top').replace('px', '')));


      $('.sideMenu .list button').on('click', function() {
        $(this).parent('li').addClass('active')
        $(this).parent('li').siblings().removeClass('active')
        let menuNow = $(this).parent('li').index();



        if ($(window).width() < 1000) {

          $('.sideMenu .now').removeClass('active')
          let nowContent = $(this).attr('content')
          $('.now').html(nowContent)
          $('.sideMenu .list').css('display', 'none')
          $('.mainBox .bg').height($('.mainBox .contentBox .item').eq(menuNow).outerHeight()).css('top', $('.mainBox .contentBox .item').eq(menuNow)[0].offsetTop + $('.pageTitle').outerHeight(true) + parseInt($('.mainBox').css('padding-top').replace('px', '')));

          window.scrollTo({
            top: $('.mainBox .contentBox .item').eq(menuNow).offset().top - $('.headerBox').height() - $('.sideMenu .list button').length * $('.sideMenu .list button').outerHeight() - 50,
            behavior: 'smooth',
          });
        } else {

          $('.mainBox .bg').height($('.mainBox .contentBox .item').eq(menuNow).outerHeight()).css('top', $('.mainBox .contentBox .item').eq(menuNow)[0].offsetTop + $('.pageTitle').outerHeight(true) + parseInt($('.mainBox').css('padding-top').replace('px', '')));
          window.scrollTo({
            top: $('.mainBox .contentBox .item').eq(menuNow).offset().top - $('.headerBox').height() - 50,
            behavior: 'smooth',
          });
        }
      });

      $(window).on('scroll', function() {
        let scrollPos = $(document).scrollTop();
        // if ($(window).width() > 1000) {
        $('.mainBox .contentBox .item').each(function() {
          let currSect = $(this);

          if (currSect.offset().top - $('.headerBox').height() - 400 <= scrollPos) {
            let sectIndex = currSect.attr('count');
            $('.sideMenu .list li').eq(sectIndex).addClass('active').siblings().removeClass('active');


            $('.mainBox .bg').height($('.mainBox .contentBox .item').eq(sectIndex).outerHeight()).css('top', $('.mainBox .contentBox .item').eq(sectIndex)[0].offsetTop + $('.pageTitle').outerHeight(true) + parseInt($('.mainBox').css('padding-top').replace('px', '')));
          }
        });
        // }
      })



      $(window).on('resize', function() {
        $('.sideMenu .list').removeAttr()
        $('.sideMenu .now').removeClass('active')
        if ($(window).width() > 1000) {
          $('.sideMenu .list').css('display', 'block')
        } else {
          $('.sideMenu .list').css('display', 'none')

          // $('.mainBox .bg').height($('.mainBox .contentBox .item').eq(0).outerHeight()).css('top', $('.mainBox .contentBox .item').eq(0)[0].offsetTop + $('.pageTitle').outerHeight(true) + parseInt($('.mainBox').css('padding-top').replace('px', '')));
        }
      })
    })
  </script>
</body>

</html>