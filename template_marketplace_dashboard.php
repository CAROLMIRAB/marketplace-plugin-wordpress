<?php ob_start();
/*
*Template Name: Dashboard Maketplace
*/

if (!is_user_logged_in()) {
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_template_part(404);
    exit();
}
?>

<!doctype html>


<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketPlace Dashboard</title>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/datatables/media/css/jquery.dataTables.css' ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/bootstrap/dist/css/bootstrap.css' ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/datatables/media/css/dataTables.bootstrap.css' ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css'; ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/css/material-dashboard.css'; ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/cropper/dist/cropper.css'; ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/sweetalert2/src/sweetalert2.scss'; ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/tags/bootstrap-tagsinput.css'; ?>"
          rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/css/demo.css'; ?>" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/css/frontend.css'; ?>" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri() . '/' . 'marketplace/select2/dist/css/select2.css'; ?>"
          rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    <script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/sweetalert2/dist/sweetalert2.min.js'; ?>"
            type="text/javascript"></script>

</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black"
         data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')) ?>" class="simple-text">
                <img src="http://nucleoemprendedor.cl/wp-content/uploads/2018/02/logo_blanco.png" width="80%">
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="<?php echo esc_url(home_url('/')) ?>" class="simple-text">
                Ct
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav nav-dash">
                <li data-url="<?php echo esc_url(home_url('/')) . 'marketplace/mi-perfil/' ?>">
                    <a href="<?php echo esc_url(home_url('/')) . 'marketplace/mi-perfil/' ?>">
                        <i class="material-icons">person</i>
                        <p><strong>Mi perfil</strong></p>
                    </a>
                </li>
                <li data-url="<?php echo esc_url(home_url('/')) . 'marketplace/agregar-producto/' ?>">
                    <a href="<?php echo esc_url(home_url('/')) . 'marketplace/agregar-producto/' ?>">
                        <i class="material-icons">widgets</i>
                        <p><strong>Agregar Producto</strong></p>
                    </a>
                </li>
                <li data-url="<?php echo esc_url(home_url('/')) . 'marketplace/dashboard/' ?>">
                    <a href="<?php echo esc_url(home_url('/')) . 'marketplace/dashboard/' ?>">
                        <i class="material-icons">dashboard</i>
                        <p><strong>Panel de Control</strong></p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                </div>
                <div class="navbar-header">
                    <div style="float: left;padding: 15px">
                        <a style="font-size: 15px; padding:14px; margin-top: 600px; color: #FFFFFF;"
                           href="<?php echo esc_url(home_url('/')) . 'marketplace/' ?>"><strong><i
                                        class="material-icons" style="font-size: 25px;">arrow_back</i>VOLVER
                                AL MARKETPLACE
                            </strong>
                        </a>
                    </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#"> Dashboard </a>-->
                </div>

                <div class="collapse navbar-collapse">
                    <!--<div style="float: left;padding: 12px">
                        <a style="font-size: 12px; padding:14px; margin-top: 600px; color: #FFFFFF;"
                           href="<?php echo esc_url(home_url('/')) . 'marketplace/' ?>"><STRONG><i
                                        class="material-icons"
                                        style="font-size: 16px;">arrow_back</i>VOLVER
                                AL MARKETPLACE
                            </STRONG>
                        </a>
                    </div>-->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification not-number">5</span>
                                <p class="hidden-lg hidden-md">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">

                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person_pin</i>
                                <strong><?php echo wp_get_current_user()->user_login ?></strong>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href=" <?php echo esc_url(home_url('/')) . 'marketplace/mi-perfil/' ?>">Mi
                                        Perfil</a>
                                </li>
                                <li>
                                    <a href=" <?php echo wp_logout_url(esc_url(home_url('/')) . 'marketplace/') ?>">Salir</a>
                                </li>

                            </ul>
                        </li>
                        <!-- <li>
                             <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">dashboard</i>
                                 <p class="hidden-lg hidden-md">Dashboard</p>
                             </a>
                         </li>-->

                        <!-- <li>
                             <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">person</i>
                                 <p class="hidden-lg hidden-md">Profile</p>
                             </a>
                         </li>-->
                        <li class="separator hidden-lg hidden-md"></li>
                        <li><strong><?php echo $cu->user_login ?></strong></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="content">

            <?php
            while (have_posts()) : the_post();

                the_content();

            endwhile;
            ?>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->

<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/jquery/dist/jquery.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/js/trunk8.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/jquery-ui/jquery-ui.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/bootstrap/dist/js/bootstrap.js'; ?>"
        type="text/javascript"></script>

<script src="<?php echo 'https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/select2/dist/js/select2.js'; ?>"
        type="text/javascript"></script>

<script type="text/javascript">
    var inbox = "<?php echo admin_url('admin-ajax.php'); ?>?action=marketplace_msg_received";
    var outbox = "<?php echo admin_url('admin-ajax.php'); ?>?action=marketplace_msg_sent";
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/wysihtml5x/dist/wysihtml5x-toolbar.min.js'; ?>"
        type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/handlebars/handlebars.runtime.min.js'; ?>"
        type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.js'; ?>"
        type="text/javascript"></script>


<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/cropper/dist/cropper.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/material/js/material.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/js/jquery.rut.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/jquery-validation/dist/jquery.validate.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/jquery.maskedinput.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/moment/src/moment.js'; ?>"
        type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri() . '/' . 'marketplace/packages/bootstrap-notify/js/bootstrap-notify.js'; ?>"
        type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri() . '/' . 'marketplace/packages/sharrre/dist/jquery.sharrre.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/tags/bootstrap-tagsinput.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js'; ?>"
        type="text/javascript"></script>
<script src="<?php //echo get_template_directory_uri() . '/' . 'marketplace/packages/nouislider/distribute/nouislider.min.js'; ?>"
        type="text/javascript"></script>

<script src="<?php //echo get_template_directory_uri() . '/' . 'marketplace/packages/jasny-bootstrap/dist/js/jasny-bootstrap.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/fullcalendar/dist/fullcalendar.min.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/packages/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'; ?>"
        type="text/javascript"></script>


<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/js/material-dashboard.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/js/demo.js'; ?>"
        type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/js/frontend.js'; ?>"
        type="text/javascript"></script>
<?php
if (get_permalink() == esc_url(home_url('/')) . 'marketplace/mi-perfil/') {
    ?>
    <script src="<?php echo get_template_directory_uri() . '/' . 'marketplace/js/frontend2.js'; ?>"
            type="text/javascript"></script>

    <?php
}
?>

<script type="text/javascript">

    (function () {

        $("#marketplace_tags").tagsinput();

        var editor = new wysihtml5.Editor('marketplace_description', { // id of textarea element
            toolbar: "toolbar",
            "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
            "emphasis": true, //Italics, bold, etc. Default true
            "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
            "html": false, //Button which allows you to edit the generated HTML. Default false
            "link": true, //Button to insert a link. Default true
            "image": true, //Button to insert an image. Default true,
            "color": false
        });
    })();

    $('.product-description').trunk8({
        lines: 5
    })

</script>
</html>