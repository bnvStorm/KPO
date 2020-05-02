<!DOCTYPE html>
<html lang="en">
<?php include '../includes/head.php'; ?>
<body>
<div class="body-wrapper">
<?php include '../includes/navbar.php'; ?>
  <!--/.navbar -->
    <div id="home" class="section">
    <div class="light-wrapper">
      <div class="fullscreenbanner-container revolution" style="height:1vh;">
     
        <!-- /.fullscreenbanner --> 
      </div>
      <!-- /.fullscreenbanner-container --> 
    </div>
  </div>
  <div id="contact" class="section anchor">
    <div class="dark-wrapper">
      <div class="container inner">
        <div class="thin text-center">
          <h2 class="section-title text-center">СВЯЖИТЕСЬ С НАМИ!</h2>
          <p class="lead main text-center">НАПИШИТЕ ИЛИ ПОЗВОНИТЕ:</p>
         <!--  <p>Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.</p> -->
          <ul class="contact-info">
            <li><i class="icon-location"></i>100019, Республика Казахстан, Карагандинская область, г. Караганда, ул. Механическая, строение 1/1</li>
            <li><i class="icon-phone"></i><a href="tel:+7 708 439 87 54">+7 708 439 87 54</a></li>
            <li><i class="icon-mail"></i><a href="mailto:vs@qwmo.net">vs@qwmo.net</a> </li>
          </ul>
          <div class="divide50"></div>
          <div class="form-container">
            <div class="response alert alert-success"></div>
            <form class="forms" action="contact/form-handler.php" method="post">
              <fieldset>
                <ol class="row">
                  <li class="form-row text-input-row name-field col-sm-6">
                    <input type="text" name="name" class="text-input defaultText required" title="Имя"/>
                  </li>
                  <li class="form-row text-input-row email-field col-sm-6">
                    <input type="text" name="email" class="text-input defaultText required email" title="Email"/>
                  </li>
                  <li class="form-row text-area-row col-sm-12">
                    <textarea name="message" class="text-area required" title="Ваше сообщение"></textarea>
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="nocomment">
                    <label for="nocomment">Оставьте ваше сообщение</label>
                    <input id="nocomment" value="" name="nocomment" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Отправить сообщение" name="submit" class="btn btn-submit bm0" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>
          </div>
          <!-- /.form-container -->
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4f10be7339f39b0a5d515eaf12123dd46976eb1cb2bac5182e262eb1215642fc&amp;source=constructor" width="100%" height="519" frameborder="0"></iframe>
  </div>

  <!-- /#contact -->
<?php include '../includes/footer.php'; ?>
</body>
</html>