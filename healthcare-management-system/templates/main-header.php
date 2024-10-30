<?php include 'model/fetch_brgy_info.php' ?>

<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header">
        <a href="dashboard.php" class="logo">
            <img src="assets/img/masili.png " alt="navbar brand" class="navbar-brand"><span class="text-light ml-2 fw-bold" style="font-size:20px">HSS</span>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
        <div class="container-fluid">
            <div class="ml-auto">
                <div id="google_translate_element"></div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

<style>
    .navbar-header[data-background-color="blue2"]{
        background: #4682B4 !important;
    }

    .logo-header {
        background: #4B9CD3 !important;
    }

    #google_translate_element {
        padding: 10px;
    }
</style>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
