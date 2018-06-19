<?php
$dbh = new wpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);


$table_products = $wpdb->prefix . "products_services";

$table_business = $wpdb->prefix . "business";


$user = wp_get_current_user()->ID;

$query = "SELECT * FROM $table_products where id_user = $user";
$content = $dbh->get_results($query);

$queryb = "SELECT * FROM $table_business where id_user = $user";
$contentb = $dbh->get_results($queryb);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <?php
            if (count($contentb) > 0) {
                foreach ($contentb as $rowb) {
                    ?>
                    <div class="card card-chart">
                        <div class="card-header" data-background-color="white" data-header-animation="true" style="font-size: 80%; width: 100%; padding: 5px; margin: auto">
                            <?php if (empty($rowb->image) || is_null($rowb->image)) { ?>
                                <i class="material-icons">photo</i>
                            <?php } else { ?>
                                <img src="<?php echo $rowb->image ?>" width="90%">

                            <?php } ?>
                        </div>
                        <div class="card-content">
                            <div class="card-actions">
                                <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                    <i class="material-icons">build</i> Fix Header!
                                </button>
                                <a href="<?php echo esc_url(home_url('/')) . 'marketplace/mi-perfil/' ?>"
                                   class="btn btn-default btn-simple" rel="tooltip"
                                   data-placement="bottom" title="Change Date">
                                    <i class="material-icons">edit</i>
                                </a>
                            </div>

                            <h4 class="card-title"><?php echo $rowb->name; ?></h4>
                            <p class="category">
                                <?php echo $rowb->description ?>
                            </p>
                        </div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="title-card-top" style=""><h4 class="card-title"><strong>Mi Vitrina</strong></h4></div>
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">loyalty</i>
                </div>
                <div class="card-content">
                    <div class="row">
                        <?php
                        if (count($content) > 0) {
                            foreach ($content as $row) {
                                $status = ($row->status == 1) ? '<span style="padding: 5px; font-size: 12px; background: #84b600; color: #FFFFFF">Publicado<span>' : '<span style="padding: 5px; font-size: 12px; background: #ff9800; color: #FFFFFF">Pendiente<span>';
                                $images = explode("|", $row->img);
                                echo "<div class='col-md-12'>
                            <div class='table-responsive table-sales'>
                                <div class='col-md-3'>
                                    <img src='" . $images[0] . "'
                                         width='320'>
                                </div>
                                <div class='col-md-6'>
                                    <p>" . $row->title . "</p>
                                    <div class='product-description' data-truncate-lines='3'>" . $row->description . "</div>
                                </div>
                                <div class='col-md-2'>
                                    <div>" . $status . "</div>
                                </div>
                                <div class='col-md-1'>
                                    <a data-toggle='modal' href='#modalEdit' class='btn-simple btn-default btn-edit-product' style='background: none'><i class='material-icons'>edit</i></a>
                                    <a href='' class='btn-default btn-baja' style='background: none'>Dar de baja</a>

                                </div>
                            </div>
                        </div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalEdit" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form id='form-product-edit' method='post'
                      enctype="multipart/form-data"
                      class="form-newsletter ">
                    <!--<h2>Agregar Producto</h2>-->

                    <label class="">Titulo de Producto o Servicio *</label>
                    <input type='text'
                           name='marketplace_title'
                           id='marketplace_title_edit'
                           size='40'
                           class='form-control'>
                    <br>
                    <label class="">Precio (desde)</label>
                    <input
                            type='text' name='marketplace_price'
                            id='marketplace_price_edit'
                            size='10'
                            class='form-control'>
                    <br>

                    <label class="">Tipo *</label></br>

                    <label> Servicio <input
                                type='radio' name='marketplace_type'
                                id='marketplace_type_edit'
                                value="1"
                                class='' required></label>
                    <label> Producto <input
                                type='radio' name='marketplace_type'
                                id='marketplace_type_edit'
                                value="2"
                                class='' checked>
                    </label>
                    <br>

                    <label class="">Categorias *</label>
                    <select id="marketplace_categories" data-placeholder="Seleccione sus categorias"
                            class="form-control">
                        <?php foreach ($contentcat as $rowcat) { ?>
                            <option value="<?php echo $rowcat->slug ?>"><?php echo $rowcat->name ?></option>
                        <?php } ?>
                    </select>
                    <br>

                    <div class="inbox-form-group">
                        <label class="">Description Producto o Servicio *</label>
                        <textarea
                                type='text' name='marketplace_description'
                                id='marketplace_description_edit'
                                class=''></textarea></br>
                    </div>
                    <br>

                    <label class="">Tags</label>
                    <input type='text' name='marketplace_tags'
                           id='marketplace_tags_edit'
                           class='form-control'>

                    <p style="font-size: 10px">Los campos con asterisco (*) son obligatorios para enviar tu producto o servicio.</p>

                    <?php wp_nonce_field('marketplace_nonce', 'marketplace_nonce_field'); ?>
                    <button id="btn-save-edit" value='Enviar'
                            class='btn btn-success '
                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">
                        Enviar
                    </button>
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


