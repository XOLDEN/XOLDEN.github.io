<footer class="main-footer">

    <div class="footer-cnt">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3 col-sm-6">
            
            

          </div>

          <div class="col-md-7 hidden-sm hidden-xs">
            
            <nav class="footer-mnu">
              
              <?php if ($informations) { ?>
                <ul class="nav navbar-nav">
                  <?php foreach ($informations as $information) { ?>
                  <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
                  <?php } ?>
                  <li><a href="<?php echo $contact; ?>">Контакты</a></li>
                </ul>
              <?php } ?>

            </nav>

          </div>

          <div class="col-md-2 col-sm-6">
            
            <nav class="nav-social">
              <ul>
                <li><a href="http://vk.com" rel="nofollow" target="_blank"><i class="fa fa-vk"></i></a></li>
                <li><a href="http://facebook.com" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="http://instagram.com" rel="nofollow" target="_blank"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </nav>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-phone">
      <div class="container">
        <div class="col-sm-12">
          
          <div class="site-phone_wrap">
            <div class="site-phone"><h1>8-903-829-99-00</h1></div>
          </div>

        </div>
      </div>
    </div>

  </footer>
  
    


</body>
</html>