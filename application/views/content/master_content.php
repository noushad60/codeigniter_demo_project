<html>
    <head>
        <title><?= $page_title ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'..assets/js/page_view.js'; ?>" ></script>

    </head>
    <body ng-app="">
        
        <!--content-->
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" id="home" href="<?= base_url('site/index') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('site/info') ?>">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('site/create') ?>">New User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('site/logout') ?>">logout</a>
                </li>
            </ul>
            <?php $this->load->view($page); ?>
            
        </div>

    </body>

    <footer class="row justify-content-center">This site reserved by CIBL</footer>
</html>