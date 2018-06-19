<?php ob_start();

if (!defined('ABSPATH')) exit;
if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class MarketPlace_List_Adherent extends WP_List_Table
{
    function __construct()
    {
        parent::__construct(array(
            'singular' => 'aderente',
            'plural' => 'aderentes',
            'ajax' => false
        ));
    }

    function extra_tablenav($which)
    {
        if ($which == "top") { ?>

        <?php }
        if ($which == "bottom") {
        }
    }

    function get_columns()
    {
        $columns = array(
            'name' => __('Nombre', 'marketplace'),
            'address' => __('Dirección', 'marketplace'),
            'workers' => __('Trabajadores', 'marketplace'),
            'rut' => __('Rut', 'marketplace'),
            'phone' => __('Teléfono 1', 'marketplace'),
            'phone2' => __('Teléfono 2', 'marketplace'),
            'email' => __('Correo', 'marketplace'),
            'web' => __('Web', 'marketplace'),
        );

        return $columns;
    }

    function prepare_items($search = NULL)
    {
        global $wpdb, $_wp_column_headers;
        $screen = get_current_screen();
        $table_name = $wpdb->prefix . "business";

        $query = "SELECT * FROM $table_name ORDER BY id DESC";

        $orderby = !empty($_GET["orderby"]) ? mysql_real_escape_string($_GET["orderby"]) : 'ASC';
        $order = !empty($_GET["order"]) ? mysql_real_escape_string($_GET["order"]) : '';
        if (!empty($orderby) & !empty($order)) {
            $query .= ' ORDER BY ' . $orderby . ' ' . $order;
        }
        $totalitems = $wpdb->query($query);
        $perpage = 20;
        $paged = !empty($_GET["paged"]) ? esc_sql($_GET["paged"]) : '';
        if (empty($paged) || !is_numeric($paged) || $paged <= 0) {
            $paged = 1;
        }
        $totalpages = ceil($totalitems / $perpage);
        if (!empty($paged) && !empty($perpage)) {
            $offset = ($paged - 1) * $perpage;
            $query .= ' LIMIT ' . (int)$offset . ',' . (int)$perpage;
        }

        $this->set_pagination_args(array(
            "total_items" => $totalitems,
            "total_pages" => $totalpages,
            "per_page" => $perpage
        ));
        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();
        $this->_column_headers = array($columns, $hidden, $sortable);

        $this->items = $wpdb->get_results($query);
    }

    function display_rows()
    {
        $records = $this->items;

        list($columns, $hidden) = $this->get_column_info();

        if (!empty($records)) {
            foreach ($records as $rec) {

                echo '<tr id="record_' . $rec->id . '">';
                foreach ($columns as $column_name => $column_display_name) {

                    $class = "class='$column_name column-$column_name'";
                    $style = "";
                    if (in_array($column_name, $hidden)) $style = ' style="display:none;"';
                    $attributes = $class . $style;

                    $paged = !empty($_GET["paged"]) ? esc_sql($_GET["paged"]) : '';
                    $viewlink = sprintf('<a href="?page=%s&action=%s&marketplace=%s&paged=%s">' . __('Ver info', 'marketplace') . '</a>', $_REQUEST['page'], 'edit', (int)$rec->id, $paged);
                    //$url_publish = plugins_url('marketplace/templates/marketplace-publish.php');
                    //$images = explode("|", $rec->img);
                    //$us= get_user_by( 'ID', $rec->id_user );
                   // $status = ($rec->status == 1) ? 'Activo' : "<button class='marketplace_publish' data-post='$rec->post_id' data-url='$url_publish' data-slug='$rec->slug' data-email='$us->user_email'>Publicar</button>";
                    switch ($column_name) {
                        case "name":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->name) . '</td>';
                            break;
                        case "address":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->address) . '</td>';
                            break;
                        case "workers":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->workers) . '</td>';
                            break;
                        case "rut":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->rut) . '</td>';
                            break;
                        case "phone":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->phone) . '</td>';
                            break;
                        case "phone2":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->phone2) . '</td>';
                            break;
                        case "email":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->email) . '</td>';
                            break;
                        case "web":
                            echo '<td ' . $attributes . '>' . stripslashes($rec->web) . '</td>';
                            break;
                    }
                }

                echo '</tr>';
            }
        }
    }
}

ob_end_flush();