<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contact">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="pic"><img src="../images/in/banner_contact.jpg" alt=""></div>
        <div class="pageTitleBox">
          <div class="titleBox wow fadeInUp" data-wow-delay="0s">
            <h1 class="title">CONTACT</h1>
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
                <a href="index.php" title="index" itemprop="item">
                  <span itemprop="name">Home</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">Contact</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>

        <section>
          <div class="container">
            <div class="notice wow fadeInUp" data-wow-delay="0s">If there is any need for assistance, please leave your contact information through the form, we will contact you as soon as possible, thank you.</div>
            <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
              <div class="item">
                <a href="products_detail.php">
                  <div class="titleF">Request a Quote</div>
                  <div class="pic"><img src="../images/in/p5.jpg" alt=""></div>
                  <div class="infoBox">
                    <div class="subTitle">Turning and Milling Centers / Swivel Head Spindle</div>
                    <div class="title">Swivel Axis1</div>
                  </div>
                  <div class="del"></div>
                </a>
              </div>
            </div>
            <div class="contentBox">
              <div class="contentBg"></div>
              <form class="formBox wow fadeInLeft" data-wow-delay="0.2s">
                <ul>
                  <li class="inputItem wow fadeInUp required">
                    <label for="company">Company</label>
                    <input type="text" class="inputControl" id="company">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="name">Name</label>
                    <input type="text" class="inputControl" id="name">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="email">E-mail</label>
                    <input type="text" class="inputControl" id="email">
                  </li>
                  <li class="inputItem wow fadeInUp required">
                    <label for="tel">Tel</label>
                    <input type="text" class="inputControl" id="tel">
                  </li>
                  <li class="inputItem wow fadeInUp">
                    <label for="fax">Fax</label>
                    <input type="text" class="inputControl" id="fax">
                  </li>
                  <li class="inputItem wow fadeInUp">
                    <label for="email">Country</label>
                    <input type="text" class="inputControl" id="country">
                  </li>
                  <li class="inputItem full wow fadeInUp">
                    <label for="type">Address</label>
                    <input type="text" class="inputControl" id="address">
                  </li>
                  <li class="textareaItem full wow fadeInUp required">
                    <label for="message">Message</label>
                    <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                  </li>

                  <li class="inputItem wow fadeInUp required">
                    <label for="password">Code</label>
                    <input type="password" class="inputControl" id="password">
                    <span class="checkImg"><img src="../images/check_img.jpg"></span>
                    <button class="reBtn"></button>
                  </li>
                </ul>
                <div class="pageBtnBox wow fadeInUp">
                  <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
                </div>
              </form>
            </div>
          </div>

          <div class="bottomBox">
            <div class="infoBox">
              <div class="info wow fadeInLeft" data-wow-delay="0s">
                <div class="title">Posa Machinery Co., Ltd.</div>
                <ul>
                  <li><span>ADD.</span>No. 379, Yi Sin Street, East Dist., Taichung City, Taiwan</li>
                  <li><span>TEL</span><a href="tel:+886422135988">+886-4-22135988</a></li>
                  <li><span>FAX</span>+886-4-22135996</li>
                  <li><span>E-mail</span><a href="mailto:posa.posa@msa.hinet.net">posa.posa@msa.hinet.net</a></li>
                </ul>
              </div>
            </div>

            <div class="map wow fadeInRight" data-wow-delay="0.2s"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.9113220048325!2d120.7022179!3d24.139752199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d543e729a47%3A0xc856304ec5f8c50!2z5pmu5qOu57K-5a-G5Li76Lu45bel5qWt5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1721473903987!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

          </div>
        </section>

      </div>


    </main>


    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.mainMenu > ul > li').eq(6).addClass('nowPage');
    })
  </script>
</body>

</html>