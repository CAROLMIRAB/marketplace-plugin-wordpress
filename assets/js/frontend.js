jQuery('#btn-enviar').click(function (jQuery) {
    jQuery(this).button('loading');
    var select_bus = jQuery('#select_business').val();
    jQuery.ajax({
        type: 'post',
        dataType: 'json',
        url: ajaxurl,
        data: {
            action: 'marketplace_messages',
            message: jQuery('#marketplace_message').val(),
            asunto: jQuery('#marketplace_asunto').val(),
            receptor: select_bus.toString(),
            marketplace_nonce_field: jQuery('#marketplace_nonce_field').val(),
        },
        success: function (data) {
            jQuery('#marketplace_message').val('');
            jQuery('#marketplace_asunto').val('');
            jQuery('#select_business').val('');

        },

        complete: function () {
            jQuery('#btn-enviar').button('reset');
            jQuery('#modalRedactar').modal('hide');
        }
    });
});

jQuery('.close-modal-email').click(function () {
    jQuery('#modalRedactar').modal('hide');
});


jQuery('#antofagasta').mouseover(function () {
    jQuery('.antofagasta').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#antofagasta').mouseout(function () {
    jQuery('.antofagasta').css({'stroke': 'none'});
});

jQuery('#arica').mouseover(function () {
    jQuery('.arica').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#arica').mouseout(function () {
    jQuery('.arica').css({'stroke': 'none'});
});

jQuery('#iquique').mouseover(function () {
    jQuery('.iquique').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#iquique').mouseout(function () {
    jQuery('.iquique').css({'stroke': 'none'});
});

jQuery('#copiapo').mouseover(function () {
    jQuery('.copiapo').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#copiapo').mouseout(function () {
    jQuery('.copiapo').css({'stroke': 'none'});
});

jQuery('#laserena').mouseover(function () {
    jQuery('.laserena').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#laserena').mouseout(function () {
    jQuery('.laserena').css({'stroke': 'none'});
});

jQuery('#vinadelmar').mouseover(function () {
    jQuery('.vinadelmar').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#vinadelmar').mouseout(function () {
    jQuery('.vinadelmar').css({'stroke': 'none'});
});

jQuery('#vinadelmar2').mouseover(function () {
    jQuery('.vinadelmar').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#vinadelmar2').mouseout(function () {
    jQuery('.vinadelmar').css({'stroke': 'none'});
});

jQuery('#santiago').mouseover(function () {
    jQuery('.santiago').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#santiago').mouseout(function () {
    jQuery('.santiago').css({'stroke': 'none'});
});

jQuery('#talca').mouseover(function () {
    jQuery('.talca').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#talca').mouseout(function () {
    jQuery('.talca').css({'stroke': 'none'});
});

jQuery('#rancagua').mouseover(function () {
    jQuery('.rancagua').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#rancagua').mouseout(function () {
    jQuery('.rancagua').css({'stroke': 'none'});
});

jQuery('#concepcion').mouseover(function () {
    jQuery('.concepcion').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#concepcion').mouseout(function () {
    jQuery('.concepcion').css({'stroke': 'none'});
});

jQuery('#concepcion2').mouseover(function () {
    jQuery('.concepcion').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#concepcion2').mouseout(function () {
    jQuery('.concepcion').css({'stroke': 'none'});
});

jQuery('#temuco').mouseover(function () {
    jQuery('.temuco').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#temuco').mouseout(function () {
    jQuery('.temuco').css({'stroke': 'none'});
});

jQuery('#valdivia').mouseover(function () {
    jQuery('.valdivia').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#valdivia').mouseout(function () {
    jQuery('.valdivia').css({'stroke': 'none'});
});

jQuery('#puertomont').mouseover(function () {
    jQuery('.puertomont').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#puertomont').mouseout(function () {
    jQuery('.puertomont').css({'stroke': 'none'});
});

jQuery('#puntarenas').mouseover(function () {
    jQuery('.puntarenas').css({'stroke': '#8fbe00', 'stroke-width': '1px'});
});
jQuery('#puntarenas').mouseout(function () {
    jQuery('.puntarenas').css({'stroke': '#929292'});
});

jQuery('.tutu').click(function () {
    var url = jQuery(this).data('city-url');
    jQuery(location).attr('href', url);
})

jQuery('#vinadelmar').click(function () {
    var url = jQuery(this).data('city-url');
    jQuery(location).attr('href', url);
})

jQuery('.product-description').trunk8({
    lines: 1
});

jQuery('#categories-products .selected').addClass('active');

jQuery(document).on('click', '.gl-star-rating-stars span', function () {
    jQuery.ajax({
        type: 'post',
        url: ajaxurl,
        data: {
            action: 'marketplace_rating',
            rating: jQuery(this).data('value'),
            id_adherent: jQuery('#id_adherent').val(),
            id_product: jQuery('#id_product').val()
        },
        success: function (data) {
        }
    });

});

var numeroImatges = 4;
if (numeroImatges <= 3) {
    jQuery('.derecha_flecha').css('display', 'none');
    jQuery('.izquierda_flecha').css('display', 'none');
}

jQuery('.img_carrusel').live('click', function () {
    jQuery('#bigimage').attr('src', jQuery(this).attr('src'));
    return false;
});

jQuery('.izquierda_flecha').live('click', function () {
    if (posicion > 0) {
        posicion = posicion - 1;
    } else {
        posicion = numeroImatges - 3;
    }
    jQuery('.carrusel').animate({'left': -(jQuery('#imagen_' + posicion).position().left)}, 600);
    return false;
});

jQuery('.izquierda_flecha').hover(function () {
    jQuery(this).css('opacity', '0.5');
}, function () {
    jQuery(this).css('opacity', '1');
});

jQuery('.derecha_flecha').hover(function () {
    jQuery(this).css('opacity', '0.5');
}, function () {
    jQuery(this).css('opacity', '1');
});

jQuery('.derecha_flecha').live('click', function () {
    if (numeroImatges > posicion + 3) {
        posicion = posicion + 1;
    } else {
        posicion = 0;
    }
    jQuery('.carrusel').animate({'left': -(jQuery('#imagen_' + posicion).position().left)}, 600);
    return false;
});


jQuery('#star-rating-1').starrating({
    clickFn: function (selected) {
        console.log(selected);
    }
});

/*jQuery('.bxslider-product').bxSlider({
//    mode: 'fade',
    captions: true,
    slideWidth: 800
});*/

jQuery('#form-marketplace-register').validate({
    rules: {
        'marketplace_name': {
            required: true
        },
        'marketplace_lastname1': {
            required: true
        },
        'marketplace_lastname2': {
            required: true
        },
        'marketplace_mail': {
            required: true,
            email: true
        },
        'marketplace_rut': {
            minlength: 2,
            maxlength: 10,
            required: true
        },
        'marketplace_username': {
            required: true
        },
        'marketplace_password1': {
            required: true,
            minlength: 5
        },
        'marketplace_password2': {
            equalTo: '#marketplace_password1'
        }
    },

    messages: {
        'marketplace_name': 'Campo requerido',
        'marketplace_mail': 'Correo electrónico no válido.',
        'marketplace_username': 'Campo requerido',
        'marketplace_lastname1': 'Campo requerido',
        'marketplace_lastname2': 'Campo requerido',
        'marketplace_rut': {
            minlength: 'El rut no es válido',
            maxlength: 'El rut no es válido',
            required: 'Este campo es requerido'
        },
        'marketplace_password1': {
            required: 'Campo requerido',
            minlength: 'la contraseña debe tener al menos 6 caracteres'
        },
        'marketplace_password2': {
            equalTo: 'Las contraseñas no coinciden'
        }
    },
    submitHandler: function (form) {
        jQuery('#btn-register').button('loading');
        jQuery.ajax({
            type: 'post',
            url: ajaxurl,
            data: {
                action: 'marketplace_register',
                marketplace_name: jQuery('#marketplace_name').val(),
                marketplace_username: jQuery('#marketplace_username').val(),
                marketplace_lastname1: jQuery('#marketplace_lastname1').val(),
                marketplace_lastname2: jQuery('#marketplace_lastname2').val(),
                marketplace_mail: jQuery('#marketplace_mail').val(),
                marketplace_rut: jQuery('#marketplace_rut').val(),
                marketplace_password1: jQuery('#marketplace_password1').val(),
                marketplace_password2: jQuery('#marketplace_password2').val(),
                marketplace_nonce_field: jQuery('#marketplace_nonce_field').val()
            },
            success: function (data) {
                var obj = JSON.parse(data);
                if (obj.type == 'success') {
                    swal({
                        title: 'Te has registrado de forma exitosa, en breve te enviaremos un correo',
                        text: 'Redireccionando...',
                        type: 'success',
                    }).then(
                        function () {
                            jQuery(location).attr('href', 'http://nucleoemprendedor.cl/marketplace/');
                        });

                } else {

                    swal({
                        title: 'Hubo un error',
                        text: obj.msg,
                        type: 'error',
                    });
                }
            },
            error: function () {
            },
            complete: function () {
                jQuery('#btn-register').button('reset');
            }
        });
    }
});


jQuery('#marketplace_name').on('input', function () {
    this.value = this.value.replace(/[^a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ig, '');
});

jQuery('#marketplace_lastname1').on('input', function () {
    this.value = this.value.replace(/[^a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ig, '');
});

jQuery('#marketplace_lastname2').on('input', function () {
    this.value = this.value.replace(/[^a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_\s]+$/ig, '');
});

jQuery('input#marketplace_rut').rut({formatOn: 'keyup', ignoreControlKeys: false, useThousandsSeparator: false});


var container = jQuery('.grid');
var itemSelector = '.filter-item';

container.isotope({
    itemSelector: itemSelector,
    masonry: {
        columnWidth: itemSelector,
    }
});


var responsiveIsotope = [
    [400, 4],
    [720, 4]

];

var itemsPerPageDefault = 4;
var itemsPerPage = defineItemsPerPage();
var currentNumberPages = 1;
var currentPage = 1;
var currentFilter = '*';
var filterAtribute = 'data-filter';
var pageAtribute = 'data-page';
var pagerClass = 'isotope-pager';
var lastPage = 0;
var firstPage = 1;
var totalreg = 0;
var views = 0;
var itemvar = 0;
var iso = container.data('isotope');


function changeFilter(selector) {
    container.isotope({
        filter: selector
    });
}

function goToPage(n) {
    currentPage = n;

    var selector = itemSelector;
    selector += ( currentFilter != '*' ) ? '[' + filterAtribute + '=' + currentFilter + ']' : '';
    selector += '[' + pageAtribute + '=' + currentPage + ']';

    changeFilter(selector);
}

function defineItemsPerPage() {
    var pages = itemsPerPageDefault;

    for (var i = 0; i < responsiveIsotope.length; i++) {
        if (jQuery(window).width() <= responsiveIsotope[i][0]) {
            pages = responsiveIsotope[i][1];
            break;
        }
    }

    return pages;
}

function setPagination() {

    var SettingsPagesOnItems = function () {

        var itemsLength = container.children(itemSelector).length;

        var pages = Math.ceil(itemsLength / itemsPerPage);
        var item = 1;
        var page = 1;
        var selector = itemSelector;
        selector += ( currentFilter != '*' ) ? '[' + filterAtribute + '=' + currentFilter + ']' : '';

        container.children(selector).each(function () {
            if (item > itemsPerPage) {
                page++;
                item = 1;
            }

            jQuery(this).attr(pageAtribute, page);
            item++;
            totalreg = itemsLength;
            itemvar = item;
        });

        currentNumberPages = page;

    }();

    var CreatePagers = function () {

        var isotopePager = ( jQuery('.' + pagerClass).length == 0 ) ? jQuery('<div class=' + pagerClass + '></div>') : jQuery('.' + pagerClass);

        isotopePager.html('');


        for (var i = 0; i < currentNumberPages; i++) {


            var pager = jQuery('<a href=javascript:void(0) class=pager ' + pageAtribute + '=' + (i + 1) + '></a>');

            pager.html(i + 1);

            pager.click(function () {
                isotopePager.find('.active').removeClass('active');
                var page = jQuery(this).eq(0).attr(pageAtribute);
                jQuery('#next-page').eq(0).attr('data-page', parseInt(page));
                goToPage(page);
                jQuery(this).addClass('active');

                var filteredElement = iso.filteredItems.length;
                jQuery('.viewss').html('<b>' + filteredElement + '</b>');
            });

            pager.appendTo(isotopePager);
            lastPage = i + 1;

        }


        jQuery('.isotope-pager a:first').addClass('active').click();
        var total = jQuery('<div class=totalmost>Productos <b>' + totalreg + ' </b>| Mostrados <span class=viewss><b>' + iso.filteredItems.length + '</b></div></div>')


        total.prependTo(isotopePager);
        container.before(isotopePager);

    }();

}

setPagination();
goToPage(1);

//Adicionando Event de Click para as categorias
jQuery('.filters a').click(function () {
    var filter = jQuery(this).attr(filterAtribute);
    currentFilter = filter;

    setPagination();
    goToPage(1);


});

//Evento Responsivo
jQuery(window).resize(function () {
    itemsPerPage = defineItemsPerPage();
    setPagination();
    goToPage(1);
});


var optionSets = jQuery('#options .option-set'),
    optionLinks = optionSets.find('a');


optionLinks.click(function () {
    var thiss = jQuery(this);
    if (thiss.hasClass('selected')) {
        return false;
    }

    var optionSet = thiss.parents('.option-set');
    optionSet.find('.selected').removeClass('selected');
    thiss.addClass('selected');

    // make option object dynamically, i.e. { filter: '.my-filter-class' }
    var options = {},
        key = optionSet.attr('data-option-key'),
        value = thiss.attr('data-option-value');
    // parse 'false' as false boolean
    value = value === 'false' ? false : value;
    options[key] = value;
    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
        // changes in layout modes need extra logic
        changeLayoutMode(thiss, options)
    } else {
        // otherwise, apply new options
        container.isotope(options);
    }
    jQuery('.viewss').html('<b>' + iso.filteredItems.length + '</b>');
    return false;
});

