<?php
/*
*Template Name: MarketPlace2
*/
?>
<?php get_header();
$custom = hotmagazine_custom(); ?>
    <link rel="stylesheet" href="<?php echo plugins_url() . '/marketplace/assets/css/theme-marketplace.css' ?>" type="text/css" media="all">

<?php
global $wpdb;
$tablenamecat = $wpdb->prefix . "categories";
$registroscat = $wpdb->get_results("SELECT * FROM  " . $tablenamecat, ARRAY_A);

$tablename = $wpdb->prefix . "products_services";

$tablebusiness = $wpdb->prefix . "business";



/*$registros = $wpdb->get_results("SELECT name, title, description, price, ".$tablenamecat.".slug as slugcat, ".$tablename.".slug, categories, img FROM  " . $tablename . ", ".$tablenamecat." where status=1 and ".$tablenamecat.".slug = ".$tablename.".categories ", ARRAY_A);*/

$registros = $wpdb->get_results("SELECT ".$tablenamecat.".name, ".$tablename.".title, ".$tablebusiness.".name as business, ".$tablename.".description, ".$tablename.".price, ".$tablenamecat.".slug as slugcat, ".$tablename.".slug, ".$tablename.".categories, ".$tablename.".img 
FROM  $tablename
left join ".$tablenamecat." on ".$tablename.".categories = ".$tablenamecat.".slug
left join ".$tablebusiness." on ".$tablename.".id_user = ".$tablebusiness.".id_user
where status=1" , ARRAY_A);



?>

    <div class="container">
        <?php if (!is_user_logged_in()) { ?>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner vc_custom_1504800672856">
                    <div class="wpb_wrapper">
                        <a href="<?php echo esc_url(home_url('/')) . 'registro-marketplace' ?>">
                            <img src="http://nucleoemprendedor.cl/wp-content/uploads/2018/02/banner20feb.png"
                                 style="border: 1px solid #CCCCCC">
                        </a>
                        <br><br></div>
                </div>
            </div>
        <?php } ?>

        <div style="padding-top: 30px; padding-bottom: 25px">
            <div class="row">
                <?php
                $cu = wp_get_current_user();
                if (is_user_logged_in()) {
                    echo "
                                <div class='col-md-3 llkjhjh'><img src='".get_template_directory_uri()."/marketplace/img/logo_MNE.png' style='padding: 20px'> </div>
<div style='padding-right:20px; padding-left: 10px; padding-top:25px; text-align:right' class='col-md-3 col-xs-12 col-md-offset-1' ><span style='padding: 11px 12px;' align='right'>Bienvenido, <strong style='padding-right: 15px ' >" . $cu->user_login . "</strong> </span></div>
<div class='col-md-5'>
                                        <a style='padding: 11px 12px; font-size: 14px; color:#666; background: #f18802; color:white; display: table-cell; vertical-align: middle; width:60%; border-radius: 8px; text-decoration:none; margin-left:10px; border:5px solid #FFF '
                                        href='" . esc_url(home_url('/')) . "marketplace/agregar-producto/'>Publica tu Producto o Servicio</a>
                                        <a style='padding: 11px 12px; font-size: 14px; color:#666; background: #f18802; color:white; display: table-cell; vertical-align: middle; width:20%; border-radius: 8px; text-decoration:none; margin-left:10px; border:5px solid #FFF'
                                        href='" . esc_url(home_url('/')) . "marketplace/mi-perfil/'>Mi Perfil</a>
                                
								<a href=" . wp_logout_url(get_permalink()) . " style='padding: 11px 12px; font-size: 14px; color:#666; background: #ebebeb; display: table-cell; vertical-align: middle; width:20%; border-radius: 8px; padding-top:10px; margin-left: -13px; text-decoration: none; border: 5px solid #FFF'>Salir</a></div>";


                } else {

                    echo "
								   <div class='col-md-3'><img src='".get_template_directory_uri()."/marketplace/img/logo_MNE.png' style='padding: 20px'> </div>
								<div style='padding-top:40px; padding-right: 40px; font-size: 15px; color: #f18802; text-align:right' class='col-md-3 col-xs-12'>
                           <strong>¿Ya eres usuario? Ingresa aquí <span class='dashicons dashicons-arrow-right-alt'></span></strong> 
                                 </div>
                                 <div style='float: right; padding: 4px 14px;' class='col-md-6 col-xs-12'>" . do_shortcode('[marketplace-login]') . "</div> 
								 <div class='col-md-6 col-xs-12 col-md-offset-6' >Si aun no estas registrado <a href='" . esc_url(home_url('/')) . "registro-marketplace/'>Registrate Aquí</a></div>
								 ";
                }
                ?>
            </div>
        </div>

        <section id="options" class="clearfix">
            <ul id="categories-products" class="option-set clearfix" data-option-key="filter">
                <li><a href="#filter" data-option-value="*" class="selected">TODAS</a></li>
                <li><a href="#filter" data-option-value=".service">SERVICIOS</a></li>
                <li><a href="#filter" data-option-value=".product">PRODUCTOS</a></li>
                <?php foreach ($registroscat as $rowcat) { ?>
                    <li><a href="#filter" data-option-value=".<?php echo $rowcat['slug'] ?>">
                            <?php echo $rowcat['name'] ?></a></li>
                <?php } ?>

            </ul>
        </section>
        <div class="grid" id="games-container" style="position: relative; height: 18457.3px;">


            <?php
            foreach ($registros as $products) {
                $service = ($products['type'] == 1) ? 'product': 'service';
                ?>

                <div class="filter-item game-content <?php echo $products['categories'] ." ". $service ?>"
                     style="left: 0px; top: 0px;">
                    <div class="relative-item">
                        <a href="<?php echo $products['slug'] ?>" target="_blank" class="item-a-relative" style="text-decoration: none">
                            <?php $images = explode("|", $products['img']); ?>
                            <p class="prices-offer" style="display: flex; align-items:center; padding-left: 15px">
                                <?php echo $products['business'] ?>
                            </p>
                            <div style="height:62%; background:url(<?php echo $images[0] ?>); background-repeat: no-repeat;background-size: cover; display: flex; border-left: 10px solid #efefef; border-right: 10px solid #efefef">
                            </div>
                            <div class="text-descuento" data-toggle="tooltip" title="" style="background: url('<?php echo get_template_directory_uri() . '/marketplace/img/PESTANA.png' ?>'); background-repeat: no-repeat;background-size: cover; display: flex;justify-content: center; align-items: center;">
                                <span style="padding-left:10px; color:#FFF" >Desde</span>
                                <span style="padding:5px; font-size: 15px; color:#FFF"> <strong><?php echo number_format($products['price'], 0 , "," , "." ) ?></strong></span>
                            </div>

                            <div class="name">
                                <span class="title-blue"><strong><?php echo $products['title'] ?> </strong></span><br />
                                <div class="product-description" style="padding-right: 10px; color:#555">
                                    <?php echo $products['description'] ?>
                                </div>
                                <div style="float:left; margin-top:3px; color:#FFF; background:#AAA; border-radius: 10px; padding: 0px 3px; font-size:10px; text-transform: uppercase;
"><?php echo $products['name'] ?></div>
                                <div style="float:right"></div>
                            </div>
                            <div style="float:left"></div>

                        </a>
                    </div>
                </div>



                <?
            }

            ?>


        </div>
    </div>

<?php
$wpdb->flush();

get_footer(); ?>