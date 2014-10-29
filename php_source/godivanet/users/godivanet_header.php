<body>
  <div id="header_container">
    <div id="header_menu"></div>
  </div>

  <div id="left_sidebar">
    <div class="box_container">
	  <?php
      if ($_SESSION['auth']) {
          include_once "../php_source/godivanet/users/logout_button.php";
      }
	  include_once "../php_source/header_data.php";
	  ?>
    </div>
  </div>
</body>
