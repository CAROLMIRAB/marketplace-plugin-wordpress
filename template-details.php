<?php
/*
*Template Name: Details
*/
get_header();
$custom = hotmagazine_custom();


global $wpdb;

$slug = basename(get_permalink());


$tablename = $wpdb->prefix . "products_services";
$tablename2 = $wpdb->prefix . "business";
$tablename3 = $wpdb->prefix . "rating";
$tablename4 = $wpdb->prefix . "adherent";


$registros = $wpdb->get_results("
SELECT 
$tablename.img,  
$tablename.description,
$tablename.title, 
$tablename.price, 
$tablename.categories, 
$tablename.type, 
$tablename.slug, 
$tablename.status, 
$tablename.id_user, 
$tablename.post_id, 
$tablename.id as product_id,
$tablename2.name,
$tablename2.address,
$tablename2.workers,
$tablename2.email,
$tablename2.rut,
$tablename2.video,
$tablename2.description as des,
$tablename2.phone,
$tablename2.image,
$tablename4.name as aname,
$tablename4.lastname
from $tablename
left join $tablename2 on $tablename.id_user = $tablename2.id_user
left join $tablename4 on $tablename.id_user = $tablename4.id_user
where $tablename.slug='" . $slug . "' ", ARRAY_A);


global $postid;

echo $postid;

foreach ($registros as $details) {
    $postid = $details['post_id'];
    $id_adherent = get_current_user_id();
    $id_product = $details['product_id'];

    $registros3 = $wpdb->get_results("
SELECT count($tablename3.rating) as cant,
sum($tablename3.rating) as perc,
$tablename3.id_product,  
$tablename3.id_adherent,
$tablename3.rating
 FROM  " . $tablename3 . " where $tablename3.id_product='" . $id_product . "'", ARRAY_A);

    $rating5 = '';
    $rating4 = '';
    $rating3 = '';
    $rating2 = '';
    $rating1 = '';

    foreach ($registros3 as $row3) {
        $rating = ($row3['cant'] > 0 && $row3['perc'] > 0) ? round($row3['perc'] / $row3['cant']) : 0;
        $rat = round($rating);
        $rating5 = ($rat == 5) ? "selected='selected'" : '';
        $rating4 = ($rat == 4) ? "selected='selected'" : '';
        $rating3 = ($rat == 3) ? "selected='selected'" : '';
        $rating2 = ($rat == 2) ? "selected='selected'" : '';
        $rating1 = ($rat == 1) ? "selected='selected'" : '';

    }

    $registros4 = $wpdb->get_results("
SELECT count(img) as cont, img, slug FROM  " . $tablename . " where categories='" . $details['categories'] . "'", ARRAY_A);

    $relacionados = $wpdb->get_results("
SELECT 
img,  
description,
title, 
price, 
categories, 
type, 
slug, 
status, 
id_user, 
post_id, 
id as product_id
from $tablename where id_user = '" . $details['id_user'] . "' and status = 1 and post_id != '" . $details['post_id'] . "'", ARRAY_A);


    if ($details['status'] == 2) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        get_template_part(404);
        exit();
    }

    $table_business = $wpdb->prefix . "business";

    $query_ad = "select name, id_user from $table_business where name <> '' ";

    $content_ad = $wpdb->get_results($query_ad);

    ?>


    <style>

        .carousel {
            margin-bottom: 0;
            padding: 0 40px 30px 40px;
        }

        /* The controlsy */
        .carousel-control {
            left: -12px;
            height: 40px;
            width: 40px;
            background: none repeat scroll 0 0 #222222;
            border: 4px solid #FFFFFF;
            border-radius: 23px 23px 23px 23px;
            margin-top: 90px;
        }

        .carousel-control.right {
            right: -12px;
        }

        /* The indicators */
        .carousel-indicators {
            right: 50%;
            top: auto;
            bottom: -10px;
            margin-right: -19px;
        }

        /* The colour of the indicators */
        .carousel-indicators li {
            background: #cecece;
        }

        .carousel-indicators .active {
            background: #428bca;
        }
    </style>
    <div class="container">
        <div style="padding-top: 30px; padding-bottom: 25px">
            <div class="row">
                <?php
                $cu = wp_get_current_user();
                if (is_user_logged_in()) {
                    echo "
                                <div class='col-md-3'><img src='" . get_template_directory_uri() . "/marketplace/img/logo_MNE.png' style='padding: 20px'> </div>
<div style='padding-right:20px; padding-left: 10px; padding-top:25px; text-align:right' class='col-md-3 col-xs-12 col-md-offset-1' ><span style='padding: 11px 12px;' align='right'>Bienvenido, <strong style='padding-right: 15px ' >" . $cu->user_login . "</strong> </span></div>
<div class='col-md-5'>
                                        <a style='padding: 11px 12px; font-size: 14px; color:#666; background: #f18802; color:white; display: table-cell; vertical-align: middle; width:60%; border-radius: 8px; text-decoration:none; margin-left:10px; border:5px solid #FFF '
                                        href='" . esc_url(home_url('/')) . "marketplace/agregar-producto/'>Publica tu Producto o Servicio</a>
                                        <a style='padding: 11px 12px; font-size: 14px; color:#666; background: #f18802; color:white; display: table-cell; vertical-align: middle; width:20%; border-radius: 8px; text-decoration:none; margin-left:10px; border:5px solid #FFF'
                                        href='" . esc_url(home_url('/')) . "marketplace/mi-perfil/'>Mi Perfil</a>
                                
								<a href=" . wp_logout_url(get_permalink()) . " style='padding: 11px 12px; font-size: 14px; color:#666; background: #ebebeb; display: table-cell; vertical-align: middle; width:20%; border-radius: 8px; padding-top:10px; margin-left: -13px; text-decoration: none; border: 5px solid #FFF'>Salir</a></div>";


                } else {

                    echo "
								   <div class='col-md-3'><img src='" . get_template_directory_uri() . "/marketplace/img/logo_MNE.png' style='padding: 20px'> </div>
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
        <div class="row">
            <div class="col-sm-12 content">

                <!-- block content -->
                <div class="content paginafull">
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-12">
                                <ul class="breadcrumb" style="background:#efefef">
                                    <li><a href="http://nucleoemprendedor.cl/">Inicio</a></li>
                                    <li><a href="http://nucleoemprendedor.cl/marketplace/">MarketPlace</a></li>
                                    <li>Detalles</li>
                                </ul>
                            </div>

                            <section class="block-wrapper col-md-9" style="transform: none;">
                                <div class="row"
                                     style=" background: #efefef; border-radius: 6px; margin-right:0; margin-left:0; padding-bottom: 10px">
                                    <div class="col-lg-6 col-md-6" style="margin-top: 20px">
                                        <div id="content-car">
                                            <?php $images = explode("|", $details['img']); ?>
                                            <img id="bigimage" src="<?php echo $images[0] ?>" style="width: 100%"/>
                                            <div id="carrusel">
                                                <!--<a href="#" class="izquierda_flecha"><img src="<?php //echo get_template_directory_uri() . '/marketplace/' ?>img/flecha_01.png" /></a>
        <a href="#" class="derecha_flecha"><img src="<?php //echo get_template_directory_uri() . '/marketplace/' ?>img/flecha_02.png" /></a>-->
                                                <div class="carrusel">
                                                    <div id="imagen_0"
                                                         style="display: flex; justify-content: center; align-items: center;">
                                                        <img class="img_carrusel" src="<?php echo $images[0] ?>"
                                                             width="195px" height="100px"/></div>
                                                    <?php if (!empty($images[1])) ?>
                                                    <div id="imagen_1"
                                                         style="display: flex; justify-content: center; align-items: center">
                                                        <img class="img_carrusel" src="<?php echo $images[1] ?>"
                                                             width="195px" height="100px"/></div>
                                                    <?php if (!empty($images[2]) || $images['2'] == '') ?>
                                                    <div id="imagen_2"
                                                         style="display: flex; justify-content: center; align-items: center">
                                                        <img class="img_carrusel" src="<?php echo $images[2] ?>"
                                                             width="195px" height="100px"/></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-product-info-holder">
                                            <h3 class="uppercase-title"
                                                style="color: #284596; text-transform: uppercase">
                                                <?php echo $details['title'] ?>
                                            </h3>
                                            <div style="">
                                                <?php $type = ($details['type'] == 1) ? 'Producto' : 'Servicio'; ?>
                                                <br/>
                                                <span><strong><?php echo $type ?></strong></span><br/>
                                                <?php echo $details['description'] ?><br/><br/>
                                                <span><strong>Condiciones de pago</strong></span><br/>
                                                A convenir con cliente
                                            </div>
                                            <?php if (is_user_logged_in()) { ?>
                                                <br/><span><strong>Precio Desde</strong></span><br/>
                                                <span style="font-size: 24px"><?php echo number_format($details['price'], 0, ",", ".") ?></span>
                                                <br/>
                                                <br/><span><strong>Calificación</strong></span><br/>
                                                <div style="padding: 10px 0">
                                                    <select id="star-rating-1">
                                                        <option value="">Califícame</option>
                                                        <option value="5" <?php echo $rating5 ?>>Excelente</option>
                                                        <option value="4" <?php echo $rating4 ?>>Bueno</option>
                                                        <option value="3" <?php echo $rating3 ?>>Normal</option>
                                                        <option value="2" <?php echo $rating2 ?>>Regular</option>
                                                        <option value="1" <?php echo $rating1 ?>>Malo</option>
                                                    </select>
                                                    <input type="hidden" value="<?php echo $id_product ?>"
                                                           id="id_product">
                                                    <input type="hidden" value="<?php echo $id_adherent ?>"
                                                           id="id_adherent">
                                                </div>
                                                <div class="buttons-holder">
                                                    <div class="add-cart-holder inline">


                                                        <!--<a class="md-button " data-toggle="modal"
                                                           data-target="#modalContact"
                                                           href="#"
                                                           style="padding: 15px 50px; background: #84b600; font-size: 15px; text-decoration: none; color:#FFFFFF">Contactar
                                                            Empresa</a>-->
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="buttons-holder">
                                                    <div class="" style="padding-top: 30px">
                                                        <strong>Para ver más de este producto <a
                                                                    href="<?php echo esc_url(home_url('/')) . 'marketplace' ?>">Ingresa
                                                                Aquí</a> o <a
                                                                    href="<?php echo esc_url(home_url('/')) . 'registro-marketplace' ?>">Registrate</a>
                                                        </strong>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="social-buttons">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <p style="color: #ddd; padding: 5px;background: #999;font-size: 12px; border-radius: 3px; margin-top: 15px">
                                            *IMPORTANTE: Mutual de Seguridad no se hace responsable por las
                                            transacciones que se realicen en este sitio web (compra y venta de productos
                                            y servicios), siendo de exclusiva responsabilidad de oferentes y
                                            compradores.</p>
                                    </div>
                                </div>
                            </section>
                            <section class="block-wrapper col-md-3" style="transform: none;">

                                <div class="single-product-info-holder"
                                     style="background:#efefef; padding:15px; border-radius: 6px; color:#7c7c7c;">
                                    <span><strong>Perfil de empresa</strong></span>
                                    <img src="<?php echo $details['image'] ?>" width="100%">

                                    <div class="excerpt" style="">
                                        <h3><?php echo $details['name'] ?> </h3>
                                        <p style="text-align: justify;">
                                            <?php echo $details['des'] ?>
                                        </p>
                                        <?php if ($details['video'] != '') { ?>
                                            <button class="md-button info-business-a" data-toggle="modal"
                                                    data-target="#modalBusiness" href="#"
                                                    style="text-decoration: none; color: #7c7c7c; background:#CCC; width:100%; margin-bottom:10px ">
                                                <strong>Ver video</strong></button>
                                        <? }
                                        if (is_user_logged_in()) { ?>
                                            <button class="md-button info-business-a" data-toggle="modal"
                                                    data-target="#modalContact" href="#"
                                                    style="text-decoration: none; color: #7c7c7c; background:#CCC; width:100%">
                                                <strong>Contáctanos<strong></button>
                                            <br>
                                            <button class="md-button info-business-a" data-toggle="modal"
                                                    data-target="#modalRedactar" href="#"
                                                    style="text-decoration: none; color: #7c7c7c; background:#CCC; width:100%">
                                                <strong>Enviar Mensaje<strong></button>

                                        <?php } ?>
                                    </div>

                                    <div class="social-buttons">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <p></p>
                    <p></p>
                    </section>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($relacionados)) { ?>
            <div class="col-md-9">
                <div class="well" style="margin-left:15px; width: 97%; background: #efefef; border:none">
                    <div id="myCarousel" class="carousel slide">

                        <!--<ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        </ol>-->

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row-fluid">
                                    <div class="col-md-12"><p style="text-transform:uppercase">Más Productos de esta
                                            empresa</p></div>
                                    <?php
                                    $i = 0;
                                    foreach ($relacionados as $rel => $item) {
                                        $images = explode("|", $item['img']); ?>
                                        <div class="col-md-3"><a href="<?php echo $item['slug'] ?>" class="thumbnail"
                                                                 style="margin-bottom: 0; text-decoration: none; height: 150px; color: #999; background: #ddd">

                                                <div style="height: 100px; background:url(<?php echo $images[0] ?>); background-repeat: no-repeat;background-size: cover; display: flex; background-color: #fff"></div>
                                                <div style="text-align: center; height: 42px; display: flex; justify-content: center; align-items: center"><?php echo $item['title'] ?> </div>
                                            </a>


                                        </div>

                                        <?php
                                        if ($rel == 3) break;
                                        $i++;
                                    } ?>
                                </div>
                            </div>

                            <!-- <div class="item">
                                 <div class="row-fluid">
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                 </div>
                </div>

                             <div class="item">
                                 <div class="row-fluid">
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                     <div class="col-md-3"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" /></a></div>
                                 </div>
                               </div>
                             </div>-->

                            <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if (is_user_logged_in()) { ?>
            <div class="col-md-12" style="margin-top: 60px; ">
                <div class="title-section">
                    <h1><span>
              Comentarios sobre el producto
              </span>
                    </h1>
                </div>
                <ol class="commentlist" style="list-style: none">
                    <?php
                    //Gather comments for a specific page/post
                    $comments = get_comments(array(
                        'post_id' => $postid,
                        'status' => 'approve' //Change this to the type of comments to be displayed
                    ));

                    //Display the list of comments
                    wp_list_comments(array(
                        'per_page' => 10, //Allow comment pagination
                        'reverse_top_level' => false //Show the latest comments at the top of the list
                    ), $comments);

                    ?>
                </ol>

                <?php

                $args = array(
                    // Change the title of send button
                    'label_submit' => __('Enviar Comentario', 'textdomain'),
                    // Change the title of the reply section
                    'title_reply' => __('', 'textdomain'),
                    // Remove "Text or HTML to be displayed after the set of comment fields".
                    'comment_notes_after' => '',
                    // Redefine your own textarea (the comment body).
                    'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Escribe tu comentario', 'noun') . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
                );

                comment_form($args, $postid);
                ?>
            </div>
        <?php } ?>
    </div>
    </div>


    <div class="modal" id="modalBusiness" tabindex="-1" role="dialog" style="margin-top: 50px; z-index: 999999">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2> <?php echo $details['name'] ?></h2>

                    <?php $video = explode("watch?v=", $details['video']); ?>
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/<?php echo $video[1] ?>"
                            style="width: 100%"
                            frameborder="0" allowfullscreen></iframe>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modalContact" tabindex="-1" role="dialog" style="margin-top: 50px; z-index: 999999">
        <div class="modal-dialog" role="document" style="background: #efefef; padding: 10px;">
            <div class="modal-content" style="background: #EFEFEF; padding: 5px; border: 1px solid #000">
                <div class="modal-header" style="border:none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 align="center"> Contacto</h2>

                    <p><img src="http://nucleoemprendedor.cl/wp-content/themes/hotmagazine/marketplace/img/telefono.png"
                            width="40" height="40" style="padding: 5px">Teléfono: <?php echo $details['phone'] ?></p>

                    <p><img src="http://nucleoemprendedor.cl/wp-content/themes/hotmagazine/marketplace/img/mail.png"
                            width="40" height="40" style="padding: 5px">Email: <?php echo $details['email'] ?></p><br/>

                    <p>Nombre de contacto: <?php echo $details['aname'] . " " . $details['lastname'] ?></p>

                </div>
                <div class="modal-footer" style="border:none">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalRedactar" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true"
         style="top: 5px; z-index: 999999; bottom: auto">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close close-modal-email" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-marketplace-email">
                        <label>Receptor</label>
                        <select class=" form-control" id="select_business" name="state" >
                           <option value='<?php echo $details['id_user'] ?>'><?php echo $details['name'] ?></option>

                        </select>
                        <br>
                        <br>
                        <label>Asunto</label>
                        <input type="text" class="form-control" id="marketplace_asunto"
                               name="marketplace_asunto" value="">
                        <br>
                        <label>Mensaje</label>
                        <textarea class="form-control" id="marketplace_message"
                                  name="marketplace_message"
                                  maxlength="360"></textarea>

                        <?php wp_nonce_field('marketplace_nonce', 'marketplace_nonce_field'); ?>

                    </form>

                </div>
                <div class="modal-footer">
                    <button id="btn-enviar" value='Enviar'
                            class='btn btn-success'
                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    </div>


<?php } ?>


<?php
$wpdb->flush();
get_footer();
?>