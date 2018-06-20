<?php
$dbh = new wpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);

$table_business = $wpdb->prefix . "business";

$query_ad = "select name, id_user from $table_business where name <> '' ";

$content_ad = $dbh->get_results($query_ad);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div id="menu">
                <button class="btn redactar-email " id="redactar-email" data-toggle="modal" data-target="#modalRedactar"
                        style="width: 100%">Redactar
                </button>
                <ul>
                    <li><a href="#recibidos" data-toggle="tab">Recibidos</a></li>
                    <li><a href="#enviados" data-toggle="tab">Enviados</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
                <div class="tab-content">
                    <div class="tab-pane active" id="recibidos">
                        <h5>Bandeja de Entrada</h5>
                        <div class="section section-custom" id="inbox">
                            <table class="table table-striped table-bordered table-hover flip-content" id="email-inbox" style="width:100%">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="tab-pane" id="enviados">
                        <h5>Bandeja de Salida</h5>
                        <div class="section section-custom" id="outbox">
                            <table class="table table-striped table-bordered table-hover flip-content" id="email-outbox" style="width:100%">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
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
                    <h5>Mensaje Nuevo</h5>
                    <label>Receptor</label>
                    <select class=" form-control" id="select_business" name="state" multiple="multiple">
                        <?php

                        foreach ($content_ad as $row_ad) {
                            echo "<option value='$row_ad->id_user'>$row_ad->name</option>";
                        }

                        ?>
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

<div class="modal fade" id="modalLeer" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true"
     style="top: 5px; z-index: 999999; bottom: auto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close-modal-leer" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <b><h5 id="leer-title" style="text-align: center"></h5></b><br>

                <span><b id="title-adherent"></b></span> <span id="leer-name"></span><br><br>
                <span><b>Asunto: </b></span> <span id="leer-subject"></span><br><br>
                <span><b>Mensaje: </b></span><br><div id="leer-message"></div>

            </div>
            <div class="modal-footer">
                <button value='Cancelar'
                        class='btn btn-default close-modal-leer'
                        data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>

