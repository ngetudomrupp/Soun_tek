<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="<?= $db->url(); ?>/assets/vendor/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/v4-shims.min.js">
    <link rel="stylesheet" href="<?= $db->url(); ?>/assets/vendor/css/rtl/front-page.css" />
    <script src="<?= $db->url(); ?>/assets/vendor/js/helpers.js"></script>
    <script src="<?= $db->url(); ?>/assets/vendor/js/template-customizer.js"></script>
    <script src="<?= $db->url(); ?>/assets/vendor/js/front-config.js"></script>
    <title><?= isset($_POST['id_nbr']) && isset($_POST['code_nbr']) && $result == true ? $result['name'] : 'STCO' ?></title>
</head>