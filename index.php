<!Doctype html>
<?php
include_once("actions/db.php");
$db = new Database();
if (isset($_POST['id_nbr']) && isset($_POST['code_nbr'])) {
  $con = "cus_products.nbr_id='" . $_POST['id_nbr'] . "' AND cus_products.code='" . $_POST['code_nbr'] . "'";
  $result = $db->getProductByCode($con);
}
<<<<<<< HEAD
include_once("views/header.php");
=======
$base_dir = $db->base_dir();
include($base_dir . "/Views/header.php");
>>>>>>> cb0e325461f65f7a1752dfd349fa19c91f11f944
?>

<body>
  <?php
<<<<<<< HEAD
  include_once("views/navbar.php");
=======
  include($base_dir . "/Views/navbar.php");
>>>>>>> cb0e325461f65f7a1752dfd349fa19c91f11f944
  ?>
  <!-- Sections:Start -->
  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <?php
<<<<<<< HEAD
    include_once("views/hero_section.php");
=======
    include($base_dir . "/Views/hero_section.php");
>>>>>>> cb0e325461f65f7a1752dfd349fa19c91f11f944
    ?>
    <!-- Hero: End -->
    <!-- Results: Start -->
    <?php
<<<<<<< HEAD
    include_once("views/product_detail.php");
=======
    include($base_dir . "/Views/product_detail.php");
>>>>>>> cb0e325461f65f7a1752dfd349fa19c91f11f944
    ?>
    <!-- Results Us: End -->
  </div>
  <!-- / Sections:End -->

  <!-- Footer: Start -->
  <?php
<<<<<<< HEAD
  include_once("views/footer.php");
=======
  include($base_dir . "/Views/contact_us.php");
  include($base_dir . "/Views/footer.php");
>>>>>>> cb0e325461f65f7a1752dfd349fa19c91f11f944
  ?>
  <!-- Footer: End -->
  <!-- Main JS -->
  <script src="<?= $db->url(); ?>/assets/vendor/js/front-main.js"></script>
  <script src="<?= $db->url(); ?>/assets/vendor/js/bootstrap.js"></script>
</body>

</html>