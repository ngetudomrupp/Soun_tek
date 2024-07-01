<!Doctype html>
<?php
include_once("actions/db.php");
$db = new Database();
if (isset($_POST['id_nbr']) && isset($_POST['code_nbr'])) {
  $con = "cus_products.nbr_id='" . $_POST['id_nbr'] . "' AND cus_products.code='" . $_POST['code_nbr'] . "'";
  $result = $db->getProductByCode($con);
}
include_once("views/header.php");
?>

<body>
  <?php
  include_once("views/navbar.php");
  ?>
  <!-- Sections:Start -->
  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <?php
    include_once("views/hero_section.php");
    ?>
    <!-- Hero: End -->
    <!-- Results: Start -->
    <?php
    include_once("views/product_detail.php");
    ?>
    <!-- Results Us: End -->
  </div>
  <!-- / Sections:End -->

  <!-- Footer: Start -->
  <?php
  include_once("views/footer.php");
  ?>
  <!-- Footer: End -->
  <!-- Main JS -->
  <script src="<?= $db->url(); ?>/assets/vendor/js/front-main.js"></script>
  <script src="<?= $db->url(); ?>/assets/vendor/js/bootstrap.js"></script>
</body>

</html>