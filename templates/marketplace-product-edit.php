<?php
$dbh = new wpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);

$table_adherent = $wpdb->prefix . "adherent";
$table_business = $wpdb->prefix . "business";
$table_cat = $wpdb->prefix . "categories";
$tablename = $wpdb->prefix . "products_services";


$user = wp_get_current_user()->ID;

//$query = "SELECT $table_business.name as bname, $table_business.address, $table_business.workers, $table_business.rut, $table_business.video, $table_business.description, $table_business.phone, $table_business.image, $table_adherent.name, $table_adherent.lastname, $table_adherent.lastname2  FROM $table_adherent, $table_business where $table_adherent.id_user = $user and $table_business.id_user = $table_adherent.id_user";

$content = $wpdb->get_results("SELECT 
" . $table_cat . ".name, 
" . $tablename . ".title, 
" . $tablename . ".slug, 
" . $tablename . ".categories, 
" . $tablename . ".img, 
" . $tablename . ".description, 
" . $tablename . ".price, 
" . $tablename . ".type, 
" . $table_business . ".name as bname, 
" . $table_business . ".workers,
" . $table_cat . ".slug as slugcat, 
FROM  $tablename
left join " . $table_cat . " on " . $tablename . ".categories = " . $table_cat . ".slug
left join " . $table_adherent . " on " . $tablename . ".id_user = " . $table_adherent . ".id_user
left join " . $table_business . " on " . $tablename . ".id_user = " . $table_business . ".id_user
where " . $tablename . ".slug = " . $_GET['product'] . " and
where status=1", ARRAY_A);


//$content = $dbh->get_results($query);


$price = "";
$title = "";
$slug = "";
$categories = "";
$description = "";
$img = "";
$price = "";
$type = "";

foreach ($content as $row) {

    $price = $row->price;
    $title = $row->title;
    $slug = $row->slug;
    $categories = $row->categories;
    $description = $row->description;
    $img = $row->img;
    $price = $row->price;
    $type = $row->type;

}
if ($type == 1) {
    $type1 = "checked";
} else {
    $type1 = "";
}
if ($type == 2) {
    $type2 = "checked";
} else {
    $type2 = "";
}


$querycat = "select slug, name from $table_cat";
$contentcat = $dbh->get_results($querycat);

?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="title-card-top" style=""><h4 class="card-title"><strong>Editar Producto o Servicio</strong>
                    </h4></div>
                <div class="card-header card-header-icon" data-background-color="green">
                    <img src="<?php echo get_template_directory_uri() . '/' . 'marketplace/img/product.png'; ?>"
                         style="width: 33px; height: 33px"></div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="table-responsive table-sales">
                                <br id='marketplace-container' class="col-md-5">
                                <form id='form-marketplace-edit' method='post'
                                      enctype="multipart/form-data"
                                      class="form-newsletter ">

                                    <label class="">Titulo de Producto o Servicio *</label>
                                    <input type='text'
                                           name='marketplace_title'
                                           id='marketplace_title'
                                           size='40'
                                           class='form-control'  readonly value="<?php echo $title ?>">
                                    <br>
                                    <label class="">Precio (desde)</label>
                                    <input
                                            type='text' name='marketplace_price'
                                            id='marketplace_price'
                                            size='10'
                                            class='form-control' value="<?php echo $price ?>">
                                    <br>

                                    <label class="">Tipo *</label></br>

                                    <label> Servicio <input
                                                type='radio' name='marketplace_type'
                                                id='marketplace_type'
                                                value="1"
                                                class='' <?php echo $type1 ?> >
                                    </label>
                                    <label> Producto <input
                                                type='radio' name='marketplace_type'
                                                id='marketplace_type'
                                                value="2"
                                                class='' <?php echo $type2 ?> >
                                    </label>
                                    <br>

                                    <label class="">Categorias *</label>
                                    <select id="marketplace_categories" data-placeholder="Seleccione sus categorias"
                                            class="form-control">
                                        <?php foreach ($contentcat as $rowcat) {
                                            $checked = "";
                                            if ($rowcat->slug == $slug) {
                                                $checked = "selected";
                                            } else {
                                                $checked = "";
                                            }
                                            ?>
                                            <option value="<?php echo $rowcat->slug ?>" <?php echo $checked ?> > <?php echo $rowcat->name ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>

                                    <div class="inbox-form-group">
                                        <label class="">Description Producto o Servicio *</label>
                                        <textarea
                                                type='text' name='marketplace_description'
                                                id='marketplace_description'
                                                class=''><?php echo $description ?></textarea></br>
                                    </div>
                                    <br>

                                    <p style="font-size: 10px">Los campos con asterisco (*) son obligatorios para enviar
                                        tu producto o servicio.</p>

                                    <?php wp_nonce_field('marketplace_nonce', 'marketplace_nonce_field'); ?>
                                    <button id="btn-save-edit" value='Enviar'
                                            class='btn btn-success '
                                            data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Enviando">
                                        Enviar
                                    </button>
                                </form>

                            </div>

                        </div>
                        <div class="col-md-6 col-xs-12">

                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="preview" style="display: table-cell; width: 100%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





