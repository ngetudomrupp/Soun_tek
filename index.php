<!Doctype html>
<?php
include_once("actions/db.php");
$db = new Database();
if (isset($_POST['id_nbr']) && isset($_POST['code_nbr'])) {
  $con = "cus_products.nbr_id='" . $_POST['id_nbr'] . "' AND cus_products.code='" . $_POST['code_nbr'] . "'";
  $result = $db->getProductByCode($con);
}

?>
<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="front-pages">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/v4-shims.min.js">
  <link rel="stylesheet" href="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/css/rtl/front-page.css" />
  <script src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/js/helpers.js"></script>
  <script src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/js/template-customizer.js"></script>
  <script src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/js/front-config.js"></script>
  <title><?= isset($_POST['id_nbr']) && isset($_POST['code_nbr']) && $result == true ? $result['name'] : 'SOUN TEK' ?></title>
</head>

<body>
  <!-- Navbar: Start -->
  <nav class="layout-navbar shadow-none py-0">
    <div class="container">
      <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
          <!-- Mobile menu toggle: Start-->
          <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true" style="font-size: 18px;"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="landing-page.html" class="app-brand-link">
            <span>
              <img src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/img/logos/STCO-B.png" alt="" width="100">
            </span>
          </a>
        </div>
        <!-- Menu logo wrapper: End -->
        <!-- Menu wrapper: Start -->
        <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-x ti-sm"></i>
          </button>
          <ul class="navbar-nav me-auto">
            <li class="nav-item active">
              <a class="nav-link fw-medium" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link fw-medium" href="#landingContact">Contact us</a>
            </li>

          </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <!-- Menu wrapper: End -->
        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <i class='bx bx-sun' style="margin-right: 10px; font-size: 22px;"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                  <span class="align-middle"><i class='bx bx-sun' style="margin-right: 10px; font-size: 20px;"></i>Light</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                  <span class="align-middle"><i class='bx bx-moon' style="margin-right: 10px; font-size: 20px; "></i>Dark</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- / Style Switcher-->

          <!-- navbar button: Start -->
          <li>
            <a href="auth-login-cover.html" class="btn btn-primary" target="_blank">
              <span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
              </span><span class="d-none d-md-block">Login/Register</span>
            </a>
          </li>
          <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
      </div>
    </div>
  </nav>
  <!-- Navbar: End -->

  <!-- Sections:Start -->

  <div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="hero-animation">
      <div id="landingHero" class="section-py landing-hero position-relative">
        <div class="container">
          <div class="hero-text-box text-center">
            <h1 class="text-primary hero-title display-6 fw-bold">PRODUCTS DETAILS</h1>
            <h2 class="hero-sub-title h6 mb-4 pb-1">
              Please Enter ID NBR and Code NBR<br class="d-none d-lg-block" />
              To Find Products Details
            </h2>
            <div class="card">
              <div class="card-body">
                <?php
                if (isset($result) && $result != TRUE) {
                  ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      Product Not Found.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php
                }
                if (isset($result) && $result == TRUE) {
                  ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      Scroll Down to See Product Details
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php
                }
                ?>
                <form action="index.php" method="POST">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="id_nbr" value="<?= isset($_POST['id_nbr']) ? $_POST['id_nbr'] : '' ?>" id="contact-form-fullname" placeholder="#ID NBR." required />
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="contact-form-email" name="code_nbr" value="<?= isset($_POST['code_nbr']) ? $_POST['code_nbr'] : '' ?>" class="form-control" placeholder="#CODE NBR." required />
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero: End -->
    <!-- Results: Start -->
    <?php
    if (isset($_POST['id_nbr']) && isset($_POST['code_nbr']) && $result) {
    ?>
      <section class="section-py bg-body landing-contact">
        <div class="container">
          <div class="col-lg-12">
            <h4 class="text-center">RESULTS</h4>
            <div class="card">
              <div class="card-body">
                <h5 class="mb-3 float-end">ONLINE VERIFICATION SERVICES - GFCO GEM LAB*</h5><br>
                <table>
                  <tr>
                    <td class="pe-4">REPORT ID NBR</td>
                    <td>:</td>
                    <td class="ps-2 fw-bold text-black"><?= $result['nbr_id']; ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">CODE</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['code']; ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">DATE (DD/MM/YY)</td>
                    <td>:</td>
                    <td class="ps-2"><?= $db->date_format($result['date']); ?></td>
                  </tr>
                  <tr>
                    <td class="pt-3"><img src="<?= $result['image_link'] ?>" alt="" width="150"></td>
                  </tr>
                  <tr>
                    <td class="pe-4 pt-3">FAMILY/SPECIE</td>
                    <td class="pt-3">:</td>
                    <td class="ps-2 pt-3 fw-bold text-black"><?= $result['cate_name'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">TRADE NAME</td>
                    <td>:</td>
                    <td class="ps-2 text-danger fw-bold"><?= $result['name'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">WEIGHT</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['p_weight'] ?> CARATS</td>
                  </tr>
                  <tr>
                    <td class="pe-4">COLOR</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['var_name'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">SHAPE</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['shape'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">DEMESIONS</td>
                    <td>:</td>
                    <td class="ps-2">12.85 x 10.17 x 8.60 mm</td>
                  </tr>
                  <tr>
                    <td class="pe-4">CROWN CUT</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['crown_cut'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">PAVILLION CUT</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['pavillion_cut'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4 pt-4">ORIGIN</td>
                    <td class="pt-4">:</td>
                    <td class="ps-2 pt-4 fw-bold text-black"><?= $result['origin'] ?></td>
                  </tr>
                </table>
                <div>
                  <hr class="w-100 mt-5 border-2 text-dark">
                </div>
                <table>
                  <h6 class="fw-bold fst-italic">TESTING METHODS & RESULTS</h6>
                  <tr>
                    <td class="pe-4">REFRACTIVE INDEX</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['refractive_index'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">SPECIFIC GRAVITY</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['specific_gravity'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">POLARISCOPE</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['polarisscope'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">SPECTROSCOPE 400-700NM</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['spectroscope'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">STANDARD FLUORESCENCE LW/SW</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['standard_fluorescence'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">DICHROSCOPE</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['dichroscope'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">COBALT/CHROMIUM FILTER</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['cobalt'] ?></td>
                  </tr>
                  <tr>
                    <td class="pe-4">MICROSCOPE MAGNIFICATION 80X</td>
                    <td>:</td>
                    <td class="ps-2"><?= $result['microscope'] ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php
        }
    ?>

    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body landing-contact">
      <div class="container">
        <div class="text-center mb-3 pb-1">
          <span class="badge bg-label-primary">Contact US</span>
        </div>
        <h3 class="text-center mb-1">
          <span class="position-relative fw-bold z-1">Let's work together</span>
        </h3>
        <p class="text-center mb-4 mb-lg-5 pb-md-3">Any question or remark? just write us a message</p>
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="contact-img-box position-relative border p-2 h-100">
              <img
                src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/img/front-pages/icons/contact-border.png"<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/js/helpers.js"
                alt="contact border"
                class="contact-border-img position-absolute d-none d-md-block scaleX-n1-rtl" />
              <img
                src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/img/front-pages/icons/contact-customer-service.png"
                alt="contact customer service"
                class="contact-img w-100 scaleX-n1-rtl" />
              <div class="pt-3 px-4 pb-1">
                <div class="row gy-3 gx-md-4">
                  <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="d-flex align-items-center">
                      <div class="badge bg-label-primary rounded p-2 me-2"><i class="fa fa-envelope"></i></div>
                      <div>
                        <p class="mb-0">Email</p>
                        <h5 class="mb-0">
                          <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-12 col-xl-6">
                    <div class="d-flex align-items-center">
                      <div class="badge bg-label-success rounded p-2 me-2">
                        <i class="fa fa-phone"></i>
                      </div>
                      <div>
                        <p class="mb-0">Phone</p>
                        <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-1">Send a message</h4>
                <p class="mb-4">
                  If you would like to discuss anything related to payment, account, licensing,<br
                    class="d-none d-lg-block" />
                  partnerships, or have pre-sales questions, you’re at the right place.
                </p>
                <form>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label" for="contact-form-fullname">Full Name</label>
                      <input type="text" class="form-control" id="contact-form-fullname" placeholder="FullName" />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="contact-form-email">Email</label>
                      <input
                        type="text"
                        id="contact-form-email"
                        class="form-control"
                        placeholder="Email" />
                    </div>
                    <div class="col-12">
                      <label class="form-label" for="contact-form-message">Message</label>
                      <textarea
                        id="contact-form-message"
                        class="form-control"
                        rows="8"
                        placeholder="Write a message"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Send Inquiry</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us: End -->
  </div>
<!-- Results Us: End -->
</div>

<!-- / Sections:End -->

<!-- Footer: Start -->
<footer class="landing-footer bg-body footer-text">
  <div class="footer-bottom py-3">
    <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-text">©
          <script>
            document.write(new Date().getFullYear());
          </script>
        </span>
        <span class="footer-text">Copyright By</span>
        <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">eCloudView</a>
        <span class="footer-text">. All Right Reserved</span>
      </div>
    </div>
  </div>
</footer>
<!-- Footer: End -->
<!-- Main JS -->
<script src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/js/front-main.js"></script>
<script src="<?= $db->url(); ?>/SUNFIX/Soun_tek/assets/vendor/js/bootstrap.js"></script>
</body>

</html>