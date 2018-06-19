<?php
/*
*Template Name: MarketPlace2
*/
?>
<?php get_header();
$custom = hotmagazine_custom(); ?>
    <style>
        .totalmost{
            position: absolute;
            margin-top: 20px;

        }
        .isotope-pager .pager {
            display: inline-block;
            text-align: right;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            color: #7c7c7c;
            font-size: 15px;
            padding: 6px 11px;
            border: 1px solid #f0f0f0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            margin-left: 5px;
        }

        .isotope-pager a:hover {
           background: #8fbe00;
            color: #FFFFFF;
        }

        .isotope-pager .active {
             background: #8fbe00;
             color: #FFFFFF;
         }

        .isotope-pager{
            text-align: right;
            padding-right: 30px;
        }


        #categories-products {
            font-size: 11px;
            list-style: none;
            margin: 0;
            padding: 0;
            margin-top: 12px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        #categories-products li {
            float: left;
            color: #8fbe00;
            margin-left: 2px;
			margin-bottom: 12px;

        }

        #categories-products li a {
            color: #595959;
            text-decoration: none;
			padding: 8px;
			background: -webkit-linear-gradient(top, #efefef 0%,#ebebeb 50%,#d1d1d1 100%);
			background: linear-gradient(to bottom, #efefef 0%,#ebebeb 50%,#d1d1d1 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efefef', endColorstr='#d1d1d1',GradientType=0 );
			border-radius: 6px 6px 0 0;
			font-weight: 400;
			border: 1px solid #efefef;
			
        }

        #categories-products li a:hover {
            color: #FFF;
            border-color: #dcdcdc;
          
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#bfe298+0,b1d655+50,8fbe00+100 */
background: #bfe298; /* Old browsers */
background: -moz-linear-gradient(top, #bfe298 0%, #b1d655 50%, #8fbe00 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #bfe298 0%,#b1d655 50%,#8fbe00 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #bfe298 0%,#b1d655 50%,#8fbe00 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfe298', endColorstr='#8fbe00',GradientType=0 ); /* IE6-9 */
        }

        #categories-products li a.active {
            color: #666;
            border-color: #ebebeb;
            background-color: #dcdcdc;
            margin-left: 2px;
        }

        /* GAMES */

        .game-content {
            width: 320px;
            float: left;
            padding: 5px;
			height: 470px;
        }

        .game-content img {
            height: 100%;
        }

        .game-content p {
            background: #ebebeb;
            text-align: left;
			padding: 10px;
            color: #000000;
            font-size: 11px;
            font-weight: bold;
            overflow: hidden;
            margin: 0;
            position: relative;
        }

        .game-content .prices-offer {
            background: #8fbe00;
			line-height: 13px;
            color: #FFFFFF;
            font-weight: bold;
            font-size: 13px;
			text-transform: uppercase;
            height: 50px;
			padding: 5px;
			border-right: 10px solid #ebebeb;
			border-left: 10px solid #ebebeb;
			border-top: 10px solid #ebebeb;
			border-top-left-radius: 6px;
            border-top-right-radius: 6px;
			
        }
 .game-content .name{
	 border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
			height:95px;
			background:#ebebeb;
			padding-left:10px;
			padding-right:10px
	 }
    

        .text-descuento {
            position: absolute;
            left: 30px;
            bottom: 38%;
            transition: 1s;
            height: 40px;
            width: 150px;
        }

        span.text-descuento {
            font-size: 20px;
            color: #FFFFFF;
            transition: 2s;
            background: rgba(86, 141, 66, 9);
            border-top-left-radius: 3px;
            border-bottom-right-radius: 3px;
            padding: 3px;
        }

        .text-descuento .number {
            font-size: 20px;
            font-weight: bold;
        }

        .text-descuento .dcto {
            display: block;
            font-size: 10px;
            margin-top: -8px;
        }

        .text-descuento .percent {
            font-size: 12px;
        }

        .prices-offer .before {
            color: #FFFFFF;
            font-size: 12px;
            float: left;
            margin-left: 3px;
        }

        .prices-offer .now {
            background: #69880b;
            font-size: 14px;
            float: right;
            margin-right: 3px;
            text-align: right;
            padding: 2px;
            border-radius: 3px;
        }

        .prices-offer .symbol {
            font-size: 12px;
        }

        .prices-offer .before .price-before {
            font-size: 12px;
        }

        .prices-offer .now .price-now {
            font-size: 14px;
        }

        /*RIBORN*/

        .ribbon {
            position: absolute;
            right: -4px;
            top: -4px;
            z-index: 1;
            overflow: hidden;
            width: 80px;
            height: 80px;
            text-align: right;
        }

        .ribbon span {
            font-size: 10px;
            font-weight: bold;
            color: #FFF;
            text-transform: uppercase;
            text-align: center;
            line-height: 17px;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            width: 100px;
            display: block;
            position: absolute;
            top: 21px;
            right: -20px;
        }

        .ribbon.nuevo span {
            background: #79A70A;
            background: linear-gradient(#9BC90D 0%, #79A70A 100%);
        }

        .ribbon.gratis span {
            background: #F70505;
            background: linear-gradient(#F70505 0%, #8F0808 100%);
        }

        .ribbon span::before {
            content: "";
            position: absolute;
            left: 0px;
            top: 100%;
            z-index: -1;
            border-left: 3px solid #6B0000;
            border-right: 3px solid transparent;
            border-bottom: 3px solid transparent;
            border-top: 3px solid #6B0000;
        }

        .ribbon span::after {
            content: "";
            position: absolute;
            right: 0px;
            top: 100%;
            z-index: -1;
            border-left: 3px solid transparent;
            border-right: 3px solid #6B0000;
            border-bottom: 3px solid transparent;
            border-top: 3px solid #6B0000;
        }

        .ribbon.nuevo span::before {
            border-left: 3px solid #196E00;
            border-top: 3px solid #196E00;
        }

        .ribbon.nuevo span::after {
            border-right: 3px solid #196E00;
            border-top: 3px solid #196E00;
        }

        .relative-item {
    position: relative;
    float: left;
    border-radius: 3px;
    width: 95%;
    height: 400px;
    max-height: 400px;
    margin: auto;
    border-radius: 6px;
    border: 1px solid rgba(255, 255, 255, 0.15);
}

        .force-container {
            width: 100% !important;
            padding: 0 !important;
            overflow: hidden;
        }

        .grid {
            background: none !important;
            min-height: 800px;
			margin-bottom:50px;

        }

        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        @media (min-width: 1200px) {
            .filter-item {
                width: 33.3%;
			    height: 400px;
              
            }
			
		.text-descuento {
            bottom: 33%;
        }

        @media (max-width: 767px) {
            .filter-item {
                width: 50%;
				height: 400px;
            }
        }

        @media screen and (max-width: 480px) {
            .filter-item {
                width: 100%;
                margin-left: unset;
				height: 400px;

            }
        }

        /* Smartphones (portrait and landscape) ----------- */
        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            .filter-item {
                width: 100%;
                margin-left: unset;
            }

        }

        /* Smartphones (landscape) ----------- */
        @media only screen and (max-device-width: 375px) and (max-device-width: 680px) {
            .filter-item {
                width: 100%;
                margin-left: unset;
            }
        }

        /* Smartphones (portrait) ----------- */
        @media only screen and (max-width: 320px) {
            .filter-item {
                width: 100%;
                margin-left: unset;
		        height: 400px;

            }
        }

        /* iPads (portrait and landscape) ----------- */
        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
            .filter-item {
                width: 50%;
                margin-left: unset;
				height: 400px;

            }
        }

        /* Desktops and laptops ----------- */
        @media only screen and (min-width: 800px) {
            .filter-item {
                width: 50%;
                margin-left: unset;
				height: 400px;

            }
        }

        /* Desktops and laptops ----------- */
        @media only screen and (min-width: 1224px) {
            .filter-item {
                width: 33.3%;
                margin-left: unset;
				height: 400px;

            }
        }
		
	     @media only screen and (min-width: 1000px) {
            .filter-item {
                width: 33.3%;
                margin-left: unset;
				height: 400px;

            }
        }


        /* Large screens ----------- */
        @media only screen and (min-width: 1824px) {
            .filter-item {
                width: 33.3%;
                margin-left: unset;
            }
        }

        .relative-item a:hover {
            background-color: rgba(0, 0, 0, 0.5);
            text-decoration: none;
            z-index: 999999;
        }

        /*ksdsdkskdskdksd*/

        /*Modello - Responsive eCommerce Template
PSD Designer: MichaÅ‚ Kowalski <aodteam@wp.pl>
Front-End Developer : Amin Diary <amindiary@gmail.com>


Content Tabel
+---------------+
1-General Classes
2-Transitions
22-Icons
3-Fonts
4-Modello Classes (Custom buttons...)
5-Preloader
...
*/

        /*  General classes  */
        .no-margin {
            padding: 0;
            margin: 0;
        }

        .no-margin-right {
            padding-right: 0;
            margin-right: 0;
        }

        .wrapper {
            background-color: #FBFBFB;
            margin: 0px 25px;
        }

        ::-webkit-input-placeholder {
            text-transform: uppercase;
        }

        :-moz-placeholder { /* Firefox 18- */
            text-transform: uppercase;
        }

        ::-moz-placeholder { /* Firefox 19+ */
            text-transform: uppercase;
        }

        :-ms-input-placeholder {
            text-transform: uppercase;
        }

        ::-moz-selection {
            background-color: #34a994;
            color: #fff;
            text-shadow: none;
            -webkit-text-shadow: none;
        }

        ::selection {
            background-color: #34a994;
            color: #fff;
            text-shadow: none;
            -webkit-text-shadow: none;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .bold {
            font-weight: bold;
        }

        .inline {
            display: inline-block;
        }

        .anim {
            opacity: 0;
        }

        .animated {
            opacity: 1;
        }

        /* ------- General classes ------- */

        /*  Transitions  */

        .menu a, .sort-dropdown-holder .dropdown a, .md-input, .masonry-banners a, .social-buttons ul li a,
        .style-2 .top-cart-holder .hover-holder, .color-option, .color-option a {
            -webkit-transition: all 100ms ease;
            -moz-transition: all 100ms ease;
            -ms-transition: all 100ms ease;
            -o-transition: all 100ms ease;
            transition: all 100ms ease;

        }

        .style-2 .top-cart-holder .hover-holder .bottom-holder {
            -webkit-transition: all 600ms ease;
            -moz-transition: all 600ms ease;
            -ms-transition: all 600ms ease;
            -o-transition: all 600ms ease;
            transition: all 600ms ease;
        }

        .search-holder input,
        .section-brands-slider .brands-next, .section-brands-slider .brands-prev, .single-product-vertical-gallery .up-btn, .single-product-vertical-gallery .down-btn,
        .top-cart-holder .hover-holder, .section-products-grid .nav-tabs li .hover-holder, .section-products-grid .nav-tabs > li > a,
        .accordion-widget .accordion-toggle, .product-item, .checkout-accordions .payment-method-buttons .payment-option {
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        /* ------ Transitions  ------  */

        /*Icons*/

        .ic-sm-user:before,
        .ic-sm-phone:before,
        .ic-sm-basket:before,
        .ic-sm-heart:before {
            position: relative;
            width: 27px;
            height: 27px;
            display: inline-block;
            vertical-align: middle;
            background: url('../images/icons.png') no-repeat;
        }

        .ic-sm-user:before {
            content: "";

            background-position: 0px -52px;

        }

        .ic-sm-heart:before {
            content: "";
            background-position: 0px -114px;
        }

        .ic-sm-heart:hover:before {
            content: "";
            background-position: 0px -139px;
        }

        .ic-sm-basket:before {
            content: "";
            background-position: 0px -84px;
        }

        .ic-sm-phone:before {
            content: "";
            background-position: 0px -1px;
        }

        /* ------- Fonts ------------ */

        /*Modello Classes*/
        .md-button:hover {
            background-color: #6d9004;
            color: #fff;
        }

        .md-button.gray {
            background-color: #CCCCCC;

        }

        .md-button.gray:hover {
            background-color: #999;
        }

        .md-button.black {
            background-color: #595959;

        }

        .md-button.black:hover {
            background-color: #333;
        }

        .md-button.full-width {
            width: 100%;

        }

        .md-button.large {
            padding: 18px 50px;
            font-size: 18px;
            line-height: 18px;
        }

        .product-item .md-button {
            padding: 9px 43px;
        }

        .md-button {
            text-align: center;
            border: none;
            color: #fff;
            letter-spacing: 1px;
            text-transform: uppercase;
            background-color: #8fbe00;
            font-weight: bold;
            padding: 9px 15px;
            display: inline-block;

        }

        .md-select:hover {
            cursor: pointer;
        }

        .md-select:focus, .md-select:hover {
            outline: none;
            border-color: #34a992;
        }

        .md-select.full-width {

            width: 100%;
            display: block;
        }

        .md-select {

            text-indent: 0.01px;
            text-overflow: '';
            display: inline-block;
            padding: 9px 10px;
            color: #595959;
            border: 1px solid #DEDEDE;
            font-weight: bold;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            min-width: 74px;
            position: relative;
            background-repeat: no-repeat;

            background-image: url(../images/dropdown-arrow.png);
            background-position: 94% 50%;
        }

        .md-select.quantity {
            background-image: url(../images/inc-icon.jpg);
            background-position: 87% 50%;
        }

        /*Preloader*/

        @-webkit-keyframes bubble {

            0% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

            12% {
                -moz-transform: scale(1.5, 1.5);
                -webkit-transform: scale(1.5, 1.5);
                -o-transform: scale(1.5, 1.5);
                -ms-transform: scale(1.5, 1.5);
                transform: scale(1.5, 1.5)
            }

            23% {
                -moz-transform: scale(0.5, 0.5);
                -webkit-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5)
            }

            34% {
                -moz-transform: scale(1.2, 1.2);
                -webkit-transform: scale(1.2, 1.2);
                -o-transform: scale(1.2, 1.2);
                -ms-transform: scale(1.2, 1.2);
                transform: scale(1.2, 1.2)
            }

            45% {
                -moz-transform: scale(1, 1);
                -webkit-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1)
            }

            85% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }
        }

        @-moz-keyframes bubble {
            0% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

            12% {
                -moz-transform: scale(1.5, 1.5);
                -webkit-transform: scale(1.5, 1.5);
                -o-transform: scale(1.5, 1.5);
                -ms-transform: scale(1.5, 1.5);
                transform: scale(1.5, 1.5)
            }

            23% {
                -moz-transform: scale(0.5, 0.5);
                -webkit-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5)
            }

            34% {
                -moz-transform: scale(1.2, 1.2);
                -webkit-transform: scale(1.2, 1.2);
                -o-transform: scale(1.2, 1.2);
                -ms-transform: scale(1.2, 1.2);
                transform: scale(1.2, 1.2)
            }

            45% {
                -moz-transform: scale(1, 1);
                -webkit-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1)
            }

            85% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

        }

        @-o-keyframes bubble {
            0% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

            12% {
                -moz-transform: scale(1.5, 1.5);
                -webkit-transform: scale(1.5, 1.5);
                -o-transform: scale(1.5, 1.5);
                -ms-transform: scale(1.5, 1.5);
                transform: scale(1.5, 1.5)
            }

            23% {
                -moz-transform: scale(0.5, 0.5);
                -webkit-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5)
            }

            34% {
                -moz-transform: scale(1.2, 1.2);
                -webkit-transform: scale(1.2, 1.2);
                -o-transform: scale(1.2, 1.2);
                -ms-transform: scale(1.2, 1.2);
                transform: scale(1.2, 1.2)
            }

            45% {
                -moz-transform: scale(1, 1);
                -webkit-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1)
            }

            85% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

        }

        @keyframes bubble {
            0% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

            12% {
                -moz-transform: scale(1.5, 1.5);
                -webkit-transform: scale(1.5, 1.5);
                -o-transform: scale(1.5, 1.5);
                -ms-transform: scale(1.5, 1.5);
                transform: scale(1.5, 1.5)
            }

            23% {
                -moz-transform: scale(0.5, 0.5);
                -webkit-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5)
            }

            34% {
                -moz-transform: scale(1.2, 1.2);
                -webkit-transform: scale(1.2, 1.2);
                -o-transform: scale(1.2, 1.2);
                -ms-transform: scale(1.2, 1.2);
                transform: scale(1.2, 1.2)
            }

            45% {
                -moz-transform: scale(1, 1);
                -webkit-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1)
            }

            85% {
                -moz-transform: scale(0, 0);
                -webkit-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0)
            }

        }

        .bubble-loader {
            display: inline-block;
            margin-top: 25px;

            text-align: center;
        }

        .bubble-loader div {
            animation: bubble 1100ms forwards infinite;
            -webkit-animation: bubble 1100ms forwards infinite;
            -moz-animation: bubble 1100ms forwards infinite;
            -o-animation: bubble 1100ms forwards infinite;

            background: #34A994;
            border-radius: 50%;

            display: inline-block;
            height: 10px;
            margin: 6px;
            -moz-transform: scale(0, 0);
            -webkit-transform: scale(0, 0);
            -o-transform: scale(0, 0);
            -ms-transform: scale(0, 0);
            transform: scale(0, 0);
            width: 10px;
        }

        .bubble-loader div:nth-child(2), .bubble-loader div:nth-child(4) {
            animation-delay: 125ms;
            -webkit-animation-delay: 125ms;
            -moz-animation-delay: 125ms;
            -o-animation-delay: 125ms;

        }

        .bubble-loader div:nth-child(1), .bubble-loader div:nth-child(5) {
            animation-delay: 250ms;
            -webkit-animation-delay: 250ms;
            -moz-animation-delay: 250ms;
            -o-animation-delay: 250ms;
        }

        .preloader {
            position: absolute;

            display: none;
        }

        .preloader.loading {
            display: block;
            width: 100%;
            height: 20px;
            margin: auto;
            z-index: 100;
            width: 300px;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            height: 20px;
        }

        /*Homepage 1*/

        .top-area {

            min-height: 200px
        }

        .style-one-header {
            padding: 42px 0 0 0;

            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .lang-bar {
            padding: 20px 0;

            background-color: #fff;

        }

        .lang-bar ul {
            list-style: none;
            text-transform: uppercase;

        }

        .lang-bar ul li {
            display: inline-block;
            margin-right: 4px;
        }

        .lang-bar ul li a {

            font-weight: normal;
        }

        .lang-bar li.active a {
            font-weight: bold;
        }

        .login-menu-holder {
            position: relative;
            padding: 0;
        }

        .login-menu-holder a {
            font-weight: 800;
        }

        .hotline-holder label {
            font-weight: 500;
        }

        .hotline-holder {
            margin: 21px 0 0 0;

        }

        .hotline-holder span {
            font-size: 18px;
            font-weight: bold;
            line-height: 18px;
        }

        .top-drop-menu {
            width: 100%;
            padding: 10px;
            margin: 0 0 20px 0;
            border: 1px solid #32a992;
        }

        .top-logo-holder {
            text-align: center;
            display: block;
        }

        .top-logo {
            position: absolute;
            top: -103px;
            left: 0;
            right: 0;
        }

        .wishlist-holder span {
            font-weight: bold;
            font-size: 16px;
        }

        .wish-cart-holder {
            margin-left: 32px;
        }

        .wishlist-holder {

            margin-right: 20px;
            display: inline-block;
            float: left;
        }

        .top-cart-holder:hover .hover-holder {
            opacity: 1;
            display: block;

        }

        .top-cart-holder:hover {
            z-index: 1500;
        }

        .top-cart-holder {
            float: left;
            position: relative;
            display: inline-block;

            z-index: 1000;
            min-width: 200px;
        }

        .top-shopping-cart-area:hover .hover-holder {
            opacity: 1;

        }

        .top-cart-holder .hover-holder {
            opacity: 0;
            background-color: #fff;
            position: absolute;
            z-index: -1;
            padding: 10px 10px;
            width: 119%;
            left: -17px;
            top: -18px;
            box-shadow: 0px 0px 3px #dedede;

            display: none;
        }

        .style-2 .top-cart-holder .hover-holder {
            box-shadow: none;
            display: block;
            opacity: 1;

            border: 1px solid #dedede;
        }

        .ie .style-2 .top-cart-holder .top-hover-area {
            right: -21px;
        }

        .style-2 .top-cart-holder .top-hover-area {
            content: "";
            border: 1px solid #dedede;

            border-bottom: 0;
            width: 115%;
            z-index: 50;
            height: 47px;
            top: -12px;
            right: -19px;
            display: block;
            background-color: #fff;
            position: absolute;
        }

        .style-2 .top-cart-holder .hover-holder {
            overflow: hidden;
            height: 85px;
            left: -170px;
            top: 34px;
            z-index: 40 !important;
            padding: 10px 0 0 0;
            width: 194%;

        }

        .style-2 .top-cart-holder .hover-holder li {
            display: inline-block;
            margin: 0 0 0px 0;
            min-width: 49%;
        }

        .style-2 .top-cart-holder .hover-holder ul {
            margin: 12px 0px 0px 0px;

        }

        .style-2 .top-cart-holder:hover .hover-holder {
            height: 117px;

        }

        .style-2 .top-cart-holder:hover .hover-holder .bottom-holder {

            display: block;
            bottom: 0;
        }

        .style-2 .top-cart-holder .hover-holder .bottom-holder {
            bottom: -100%;
            position: relative;
            background-color: #34a992;
            margin: 6px 0 0px 0px;

        }

        .style-2 .top-cart-holder .hover-holder .bottom-holder a {
            display: inline-block;
            padding: 8px 20px 9px 26px;
            margin: 0px 0 0 0px;
            font-weight: bold;

            color: #fff;
            background-color: #34a992;
        }

        .style-2 .top-cart-holder .hover-holder .bottom-holder a span.plus {
            font-size: 30px;
            margin: 0 7px;
        }

        .style-2 .top-cart-holder .hover-holder .bottom-holder a span {
            font-size: 21px;
            line-height: 20px;
            font-weight: 100;
            margin: 0 8px 0 0px;
            vertical-align: top;
            display: inline-block;
        }

        .style-2 .top-cart-holder .hover-holder .bottom-holder a:hover {
            background-color: #2d8e7d;
            color: #fff;
        }

        .top-cart-holder .hover-holder .top-chk-out {
            display: block;
            margin: -3px auto 18px auto;
            padding: 7px 0px;
            min-width: 137px;
            max-width: 137px;
        }

        .top-cart-holder .hover-holder ul {
            list-style: none;

            margin: 65px 0 0 0;
        }

        .top-cart-holder .hover-holder ul li {
            margin: 0 0 18px 0;
        }

        .top-cart-holder .hover-holder .body {
            padding: 0 0px 0 28px;

        }

        .top-cart-holder .hover-holder .remove-item {
            position: absolute;
            right: 18px;
            top: 8px;
            color: #595959;
        }

        .top-cart-holder .hover-holder h5 {
            font-size: 12px;

        }

        .total-buble {
            position: absolute;
            width: 17px;
            height: 17px;
            border-radius: 20px;
            -webkit-border-radius: 20px;
            background-color: #34a994;
            top: -4px;
            left: -4px;
            vertical-align: text-bottom;
            color: #fff;
            font-weight: bold;
            text-align: center;

        }

        .total-buble span {
            margin-top: -10px;
            font-size: 11px;
            height: 15px;
            width: 11px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            display: inline-block;
            letter-spacing: 0px;
        }

        .top-cart-price {
            color: #34a994;
            font-weight: bold;
            font-size: 16px;
            line-height: 16px;
        }

        .search-holder {
            margin: 13px 7px 0 0;
            display: inline-block;
            float: right;
            z-index: 1000;
            position: relative;
            min-width: 276px;
        }

        .search-holder:after {
            content: "";
            background-image: url(../images/icons.png);
            background-position: 0px -26px;
            display: inline-block;
            width: 27px;
            height: 27px;
            position: absolute;
            top: 7px;
            right: 9px;
        }

        .search-holder input {
            border: 1px solid #dddddd;

            padding: 10px 10px 10px 20px;
            width: 100%;

        }

        .search-holder input:focus {
            border: 1px solid #34A994;
            outline: none;
        }

        .search-holder ::-webkit-input-placeholder {
            font-weight: bold;
            color: #8D8D8D;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .search-holder :-moz-placeholder { /* Firefox 18- */
            font-weight: bold;
            color: #8D8D8D;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .search-holder ::-moz-placeholder { /* Firefox 19+ */
            font-weight: bold;

            color: #8D8D8D;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        .search-holder :-ms-input-placeholder {
            font-weight: bold;
            color: #8D8D8D;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: 1px;
        }

        /*Top Menu*/
        header {
            position: relative;
        }

        header:after {
            display: none;
            content: "";
            width: 100%;
            height: 6px;
            display: block;
            left: 0;
            bottom: 0px;
            background-color: #34a992;
            position: absolute;
        }

        .top-menu {
            min-height: 48px;
            position: relative;
            border-bottom: 6px solid #34a994;
        }

        .top-menu > ul {
            list-style: none;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 16px;
            padding: 6px 0 0 0;

        }

        .top-menu > ul > li {
            margin: 0px;
            display: inline-block;
        }

        .top-menu > ul > li > a {

            padding: 24px 24px;

        }

        .mega-menu > a:after {
            content: "ïƒ—";
            font-family: fontawesome;
            position: absolute;

        }

        .mega-banner {
            overflow: hidden;
        }

        .mega-menu > a {
            position: relative;
            overflow: hidden;

        }

        .mega-menu.active > a:before, .mega-menu.active > a:after {
            left: 30%;
            opacity: 1;

        }

        .mega-menu.active > a:before {

        }

        .mega-menu.active > a:after {

        }

        .mega-menu > a:before {
            bottom: 2px;
            content: "";
            position: absolute;
            width: 0px;
            height: 0px;
            border-style: solid;
            left: -2000px;
            border-width: 0px 15px 15px 15px;
            border-color: transparent transparent #ffffff transparent;

            z-index: 500;

        }

        .mega-menu > a:after {
            bottom: 3px;
            left: -2000px;
            content: "";
            position: absolute;
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 0 15px 15px 15px;
            border-color: transparent transparent #DBDBDB transparent;

            z-index: 400;

        }

        .ff2 .mega-menu-holder, .ie .mega-menu-holder {
            margin: 19px auto;
        }

        .mega-menu-holder {

            display: none;
            position: absolute;
            left: 0;
            z-index: 300;
            padding: 23px;
            width: 100%;
            margin: 20px auto;
            border: 1px solid #DBDBDB;
            border-top: 0;
            background-color: #fff;
        }

        .mega-menu-column ul {
            list-style: none;
            padding: 12px 0 0 17px;
            font-size: 15px;
            font-weight: normal;
            text-transform: capitalize;
        }

        .mega-menu-column li {
            line-height: 25px;
            font-weight: 500;
        }

        .mega-menu-column li a, .mega-menu-column h5 {
            text-align: left;
            display: block;

        }

        .mega-menu-column {

            margin: 0 0 37px 10px;
        }

        .mega-menu-column h5 {
            font-weight: bold;
            border-bottom: 1px solid #D9D9D9;
            padding-bottom: 10px;
            font-size: 16px;
        }

        .top-menu .dropdown .dropdown-menu li a {
            text-align: left;
            display: inherit;
            font-weight: bold;
            line-height: 40px;

        }

        .top-menu .dropdown .dropdown-menu li {
            border-bottom: 1px solid #D9D9D9;
        }

        .top-menu .dropdown .dropdown-menu li:last-child {
            border-bottom: none;
        }

        .top-menu .dropdown {
            z-index: 999;
        }

        .top-menu .dropdown .dropdown-menu {
            padding: 0;
            top: 40px;
            left: 20px;

            border-radius: 0;
            -webkit-border-radius: 0;
            border: 1px solid #D9D9D9;
            border-top: 0;
            box-shadow: none;
        }

        .top-menu .dropdown > a:after {
            content: "ïƒ—";
            font-family: fontawesome;

            margin-left: 5px;
        }

        .homepage3 .section-banners {
            margin: 75px 0 0 0;
        }

        .section-banners {
            margin: 10px 0 0 0;
        }

        /*section-products-grid*/
        #products-grid-sidebar .banner {
            overflow: hidden;
        }

        #products-grid-sidebar .banner img {
            width: 100%;
        }

        .section-products-grid .nav-tabs {
            list-style: none;
            margin: 60px auto 10px auto;
            display: inline-block;
            text-align: center;

            border: 0;
        }

        .tab-nav-holder {
            text-align: center;
        }

        .section-products-grid .nav-tabs li:first-child:after {
            content: "";
            height: 48%;
            background-color: #D6D6D6;
            width: 1px;
            position: absolute;
            right: -53px;
            top: 16px;
        }

        .section-products-grid .nav-tabs li {
            position: relative;
            display: inline-block;
            font-size: 49px;
            line-height: 49px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: lighter;
            margin-right: 57px;
            margin-left: 28px;
            border: 0;
        }

        .section-products-grid .nav-tabs li a, .section-products-grid .nav-tabs li a:hover {
            border: 0;
            background-color: transparent;
        }

        .section-products-grid .nav-tabs li a:hover {
            color: #000;
        }

        .section-products-grid .nav-tabs li a {
            background-color: transparent;
        }

        .section-products-grid .nav-tabs li a {

            position: relative;
        }

        .section-products-grid .nav-tabs .hover-holder a {
            font-weight: 100;
        }

        .section-products-grid .nav-tabs li a:after {
            content: "ï„‡";
            font-family: "fontawesome";
            font-weight: 100;
            font-size: 28px;
            right: -40px;
            position: absolute;
            top: 10px;
            margin: 0 0 0 7px;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            background-color: transparent;
            border: none;
        }

        .section-products-grid .nav-tabs li.active {
            font-weight: bold;
        }

        .tab-tag-line {
            text-align: center;
            font-size: 14px;
            letter-spacing: 1px;
            margin: 7px 0 0 0;
        }

        .product-grid .product-item {
            background-color: #fff;
            padding: 0 35px 35px 35px;

        }

        .product-grid .product-item hr {
            border: 1px solid #CECECE;
            width: 40px;
            margin: 24px auto 12px auto;
        }

        .product-grid .product-item .title {
            margin: 5px 0 0 0;
            font-size: 18px;
            z-index: 100;
            position: relative;
            letter-spacing: 1px;
            line-height: 20px;
        }

        .product-grid .product-item .price {
            color: #8C8C8C;
            margin: 4px 0 0 0;
        }

        .product-grid .product-item .price .previous-price {

            font-size: 14px;

        }

        .previous-price {
            text-decoration: line-through;
        }

        .product-grid .product-item .price span {
            margin-left: 3px;
        }

        .product-grid .product-item .price {
            font-size: 18px;

        }

        .product-grid .product-item .buttons-holder {
            width: 100%;

            margin: 10px 0 0 0;
        }

        .product-grid .product-item .add-to-wishlist {
            display: inline-block;
            vertical-align: middle;
        }

        #homepage-products-tab .product-grid {
            margin: 40px 0 0 0;
        }

        .no-move-down .product-holder {

            min-height: 425px;
        }

        .ie .no-move-down .product-holder {
            height: 500px !important;
            min-height: 500px !important;
        }

        .product-grid.no-move-down .row {
            margin-bottom: 14px;
        }

        .product-item {
            box-shadow: 0px 0px 0px 0px #f5f5f5;
            position: relative;
            z-index: 100;
            border: 1px solid #fff;
            margin-bottom: 12px;

        }

        .no-move-down .product-item {
            position: absolute;
        }

        .product-grid.move-down .product-item {
            animation: height-product-reset 500ms forwards;
            -webkit-animation: height-product-reset 500ms forwards;
            -moz-animation: height-product-reset 500ms forwards;
            -o-animation: height-product-reset 500ms forwards;
        }

        .product-item .image {
            min-height: 230px;
        }

        .product-item .buttons-holder {
            position: relative;
            display: none;
            opacity: 0;
            top: -5px;
            z-index: 100;
        }

        .ie .product-item .buttons-holder {
            opacity: 1;

        }

        .product-grid .product-holder.small .product-item:hover {

            animation: height-product-small 300ms forwards;
            -webkit-animation: height-product-small 300ms forwards;
            -moz-animation: height-product-small 300ms forwards;
            -o-animation: height-product-small 300ms forwards;
        }

        .product-grid.no-move-down .product-item:hover {
            z-index: 1000;

            animation: height-product-nomargin 300ms forwards;
            -webkit-animation: height-product-nomargin 300ms forwards;
            -moz-animation: height-product-nomargin 300ms forwards;
            -o-animation: height-product-nomargin 300ms forwards;
        }

        .product-grid.move-down .product-item:hover {
            animation: height-product 500ms forwards;
            -webkit-animation: height-product 500ms forwards;
            -moz-animation: height-product 500ms forwards;
            -o-animation: height-product 500ms forwards;
        }

        .product-item .buttons-holder .add-wishlist-holder {
            margin: 6px 0 0 0;
            position: relative;
            z-index: 400;
        }

        .product-item:hover .buttons-holder {
            display: block;
            animation: appear-product-button 200ms 200ms forwards;
            -webkit-animation: appear-product-button 200ms 200ms forwards;
            -moz-animation: appear-product-button 200ms 200ms forwards;
            -o-animation: appear-product-button 200ms 200ms forwards;

        }

        .product-item:hover {
            max-height: 100%;
            border: 1px solid #ECECEC;
        }

        .product-item:hover {
            box-shadow: 0px 0px 0px 10px #f5f5f5;
            overflow: hidden;
        }

        .product-item .add-cart-holder {
            position: relative;

            z-index: 100;
        }

        .product-item .add-cart-holder:after {
            content: "";
            width: 136%;
            left: -18%;
            height: 1px;

            position: absolute;
            z-index: -1;
            top: 50%;
            background-color: #ECECEC;
        }

        .product-item:hover:after {

            animation: appear-border-product 500ms forwards;
            -webkit-animation: appear-border-product 500ms forwards;
            -moz-animation: appear-border-product 500ms forwards;
            -o-animation: appear-border-product 500ms forwards;

        }

        @keyframes appear-border-product {
            from {
                opacity: 0;
                -moz-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
            }
            to {
                opacity: 1;
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes appear-border-product /* Safari and Chrome */
        {
            from {
                opacity: 0;
                -moz-transform: scale(1.1);
                -webkit-transform: scale(1.1);
                -o-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
            }
            to {
                opacity: 1;
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes appear-product-button {
            from {
                opacity: 0;
                top: -5px
            }
            to {

                opacity: 1;
                top: 0;
            }
        }

        @-webkit-keyframes appear-product-button /* Safari and Chrome */
        {
            from {
                opacity: 0;
                top: -5px
            }
            to {

                opacity: 1;
                top: 0;
            }
        }

        @keyframes height-product {
            from {
                margin-bottom: 12px;
                height: 425px;

            }
            to {

                margin-bottom: 40px;
                height: 490px;
            }
        }

        @-webkit-keyframes height-product /* Safari and Chrome */
        {
            from {
                margin-bottom: 12px;

                height: 425px;
            }
            to {

                margin-bottom: 40px;

                height: 490px;
            }
        }

        @keyframes height-product-small {
            from {

                height: 350px;

            }
            to {

                height: 400px;
            }
        }

        @-webkit-keyframes height-product-small /* Safari and Chrome */
        {
            from {

                height: 350px;
            }
            to {

                height: 400px;
            }
        }

        @keyframes height-product-nomargin {
            from {

                height: 425px;

            }
            to {

                min-height: 490px;
            }
        }

        @-webkit-keyframes height-product-nomargin /* Safari and Chrome */
        {
            from {

                min-height: 425px;
            }
            to {

                min-height: 490px;
            }
        }

        @keyframes height-product-reset {
            from {
                margin-bottom: 40px;
                height: 505px;
            }
            to {
                height: 425px;
                margin-bottom: 12px;
            }
        }

        @-webkit-keyframes height-product-reset /* Safari and Chrome */
        {
            from {
                margin-bottom: 40px;

                height: 505px;
            }
            to {
                height: 425px;
                margin-bottom: 12px;
            }
        }

        .product-item .image img {
            display: inline-block;

        }

        .mini-next, .mini-prev {
            z-index: 300;
            position: absolute;
            color: #CDCDCD;
            font-family: "fontawesome";
            font-weight: 100;
            font-size: 28px;
            top: 126px;
            opacity: 0;
            height: 36px;
            width: 36px;
            background-color: #fff;
            display: inline-block;
            border: 1px solid #EEEEEE;
        }

        .mini-next:after {
            content: "ï„…";
            display: block;
            line-height: 36px;
        }

        .product-item:hover .mini-next,
        .product-item:hover .mini-prev {
            opacity: 1;

        }

        .product-item:hover .mini-prev {
            left: 0px;

        }

        .product-item:hover .mini-next {
            right: 0px;

        }

        .mini-prev:hover, .mini-next:hover {
            border-color: #34a994;
        }

        .mini-prev {
            left: 11px;
            border-left: 0;
        }

        .mini-next {
            right: 11px;
            border-right: 0;
        }

        .mini-prev:after {
            content: "ï„„";
            display: block;
            line-height: 36px;
        }

        .homepage3 .load-more-holder {
            margin: 42px 0 0 0;
        }

        .load-more-holder {
            text-align: center;
            text-transform: uppercase;
            color: #595959;
            font-size: 24px;
            line-height: 25px;
            margin: 53px 0 0 0;
            font-weight: 100;

        }

        .load-more-holder span {
            color: #000;
            vertical-align: top;
            margin-right: 5px;
            font-size: 33px;
            display: inline-block;
        }

        .brands-slider .brand-item a img {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;

        }

        .brands-slider .brand-item a {
            display: block;
            position: relative;
            width: 264px;
            min-height: 81px;
            text-align: center;
        }

        .brands-slider .brand-item {
            display: inline-block;
            max-width: 220px;

        }

        .section-brands-slider {
            margin: 40px 0 0 0;
            padding: 45px 0 0px 0;
            background-color: #fff;
            min-height: 167px;
        }

        .section-brands-slider .container {
            position: relative;
        }

        .section-brands-slider .brands-next, .section-brands-slider .brands-prev {
            position: absolute;
            font-size: 30px;
            color: #C7C7C7;
            z-index: 400;
            display: block;
            line-height: 30px;
            top: 22px;
        }

        .section-brands-slider .brands-next:after, .section-brands-slider .brands-prev:after {
            font-family: "fontawesome";
            font-weight: 100;
            font-size: 45px;

            display: block;
        }

        .section-brands-slider .brands-prev:after {
            content: "ï„„";
        }

        .section-brands-slider .brands-next:after {
            content: "ï„…";
        }

        .section-brands-slider .brands-next:hover {
            right: -5px;
        }

        .section-brands-slider .brands-prev:hover {
            left: -5px;
        }

        .section-brands-slider .brands-next {
            right: 0;
        }

        .section-brands-slider .brands-prev {
            left: 0;
        }

        .footer-logo-holder {
            margin: 50px 0 0 0;
            position: relative;
            text-align: center;

        }

        .footer-logo-holder img {
            position: relative;
            z-index: 10;
        }

        .footer-logo-holder:before {
            content: "";
            width: 100%;
            height: 1px;
            background-color: #D6D6D6;
            position: absolute;
            top: 50%;
            left: 0;
            z-index: 0;
        }

        .footer-column h4 {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 17px;

            border-bottom: 1px solid #D6D6D6;
            padding-bottom: 13px;

        }

        .footer-column .content {
            margin: 20px 0 0 0;
            font-size: 15px;

        }

        .adress-column p {
            text-transform: capitalize;
        }

        .adress-column .bold {
            margin-bottom: 17px;
        }

        .footer-holder {
            margin: 60px 0 0 0;
        }

        .square-icons li {
            padding-left: 0;
        }

        .footer-socials {
            margin: 30px 0 0 0;
        }

        .footer-socials ul {
            list-style: none;
        }

        .footer-socials ul li {
            display: inline-block;
            font-size: 20px;
            width: 20px;
            height: 20px;
            text-align: center;
            margin: 16px 30px 0 0;
        }

        .footer-socials ul li a {
            display: block;
        }

        .footer-products {
            list-style: none;
            padding: 0;
            margin: 27px 0 0 0;
        }

        .footer-products li {
            margin: 0 0 33px 0;
            padding: 0;
        }

        .footer-products li h5 {
            margin-bottom: 8px;
            line-height: 16px;
        }

        .footer-products .thumb {

            text-align: left;
        }

        .footer-products .thumb img {
            margin-left: -15px;
            width: 60px;
            height: 60px;
        }

        .footer-column
        .link-list li {
            text-transform: capitalize;
            color: #595959;
            line-height: 25px;
            font-size: 15px;
            list-style: none;
        }

        .footer-column
        .link-list {
            margin: 0 0 0 4px;
        }

        .footer-column
        .link-list li:before {
            content: "-";
            color: #595959;
        }

        .footer-payment-icons {
            text-align: center;
            background-color: #fff;
            margin: 50px 0 30px 0;
            padding: 20px 0 0 0;
        }

        .footer-payment-icons li {
            margin: 0 -8px;
        }

        .section-products-grid .nav-tabs li {
            position: relative;
        }

        .section-products-grid .nav-tabs > li > a {
            position: relative;
            z-index: 1000;

        }

        .section-products-grid .nav-tabs > li:hover > a {
            position: relative;
            z-index: 2000;
            opacity: 1;
        }

        .section-products-grid .nav-tabs .hover-holder {
            background-color: #fff;
            border: 2px solid #ECECEC;
            top: 0px;
            left: -24px;
            z-index: 1000;
            opacity: 0;
            width: 141%;
            position: absolute;
            padding: 70px 0 0 0;
        }

        .section-products-grid .nav-tabs li:hover .hover-holder {
            opacity: 1;
            z-index: 1900;
        }

        .section-products-grid .nav-tabs .hover-holder ul {
            width: 118%;
            background-color: #fff;
            position: relative;
            left: -2px;
            border: 2px solid #ECECEC;
            border-top: 0;
            top: 2px;

        }

        .section-products-grid .nav-tabs .hover-holder ul:after {
            width: 14.2%;
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            background-color: #ECECEC;
            height: 2px;
        }

        .section-products-grid .nav-tabs .hover-holder li:first-child:after {
            display: none;
        }

        .section-products-grid .nav-tabs .hover-holder li {
            display: block;
            font-size: 30px;
            line-height: 60px;
            padding-left: 15px;
            text-align: left;
        }

        .section-products-grid .nav-tabs .hover-holder li a:after {
            content: "ï„…";
            left: -30px;
            top: -10px;
        }

        /*Products full width page*/

        .top-subcategories-holder {
            position: absolute;
            top: 65px;
            z-index: 100;

        }

        .top-subcategories-holder .current-page a {
            font-weight: 800;
            color: #34a994;
        }

        .top-subcategories-holder ul li {
            position: relative;
            margin: 0 21px;
            display: inline-block;
            text-transform: uppercase;
        }

        .top-subcategories-holder ul li a {
            font-weight: 600;
            font-size: 17px;
        }

        .top-subcategories-holder ul li:last-child:after {
            content: "";
        }

        .top-subcategories-holder ul li:after {
            content: "|";
            position: absolute;
            right: -28px;
        }

        #fullwidth-products-grid {
            margin: 65px 0 0 0;
        }

        #fullwidth-products-grid .pagination-buttons {
            margin: 30px 0 0 0;
        }

        .pagination-buttons {
            list-style: none;
            text-align: center;
        }

        .pagination-buttons li {
            display: inline-block;
        }

        .pagination-buttons li.current a, .pagination-buttons li a:hover {
            background-position: -54px 3px;
            color: #fff;

        }

        .pagination-buttons a {
            width: 10px;
            height: 10px;
            display: inline-block;
            background: url('../images/paginations-btns.png') no-repeat 2px 3px;
            cursor: pointer;
            width: 50px;
            height: 50px;
            color: #cfcfcf;
            font-weight: 600;
            font-size: 14px;
            padding: 15px 0 0px 0;
        }

        /*Products sidebar page*/
        .price-filter.widget {
            margin: 0 0 76px 0;
        }

        .accordion-widget a {
            text-transform: uppercase;
            color: #595959;
        }

        .accordion-widget .accordion-toggle:hover {
            color: #34a994;
        }

        .filter-accordions .accordion-toggle:after {
            background-color: #70543F;
        }

        .accordion-widget .accordion-toggle.collapsed:after {
            display: none;
        }

        .accordion-widget .accordion-toggle {
            position: relative;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 0px;
            padding: 0 0 0 37px;

        }

        .accordion-widget .accordion-toggle.collapsed {
            padding: 0 0 0 26px;
        }

        .accordion-widget .accordion-group {
            border: 0;
            margin-bottom: 17px;
        }

        .gecko .accordion-widget .accordion-toggle:before {

            left: 2px;

            top: -3px;
        }

        .accordion-widget .accordion-toggle:before {
            content: "ï„‡";
            font-size: 18px;
            font-family: fontawesome;
            z-index: 10;
            font-weight: 100;
            left: 8px;
            top: -3px;
            position: absolute;
            color: #A7A7A7;
            display: inline-block;
            vertical-align: super;
        }

        .accordion-widget .accordion-toggle.collapsed:before {
            content: "ï„…";

        }

        .accordion-widget .accordion-inner ul {
            list-style: none;
            margin: 0;
        }

        .category-accordions .accordion-inner ul li:before {
            content: "-";
            margin-right: 2px;
        }

        .accordion-widget .accordion-body a {
            margin-left: 0px;
            font-size: 15px;
        }

        .accordion-widget .accordion-inner li {
            margin-bottom: 5px;
        }

        .accordion-widget .accordion-inner ul li a:hover {
            color: #34a994;
        }

        .accordion-widget .accordion-inner ul li {
            font-size: 13px;
            text-transform: capitalize;
        }

        .accordion-widget .accordion-inner {
            border-top: none;
            padding: 16px 10px 3px 48px;
            max-width: auto;
        }

        .price-slider {
            visibility: hidden;
        }

        .price-range-holder {
            padding: 39px 0px 35px 0px;
            position: relative;
        }

        .price-range.in {
            overflow: visible;
        }

        .slider .tooltip {

            margin-top: 55px;
        }

        .price-range-holder .min-value, .price-range-holder .max-value {
            position: absolute;
            font-size: 15px;
            font-weight: bold;
            display: inline-block;
            top: 67px;
        }

        .price-range-holder .min-value {
            left: 0;

        }

        .price-range-holder .max-value {
            right: 0;
        }

        #products-grid-sidebar {
            margin: 20px 0 0 0;
        }

        #products-grid-sidebar .product-grid {
            margin: 15px 0 14px 0;
        }

        #products-grid-sidebar .paging-holder {
            margin: 32px 0 0px 0;
        }

        .section-products-grid .sidebar {
            margin: 19px 0 0 -13px;
        }

        .sidebar h2 {
            font-size: 20px;
            border-bottom: 1px solid #CCCCCC;
            padding-bottom: 10px;
        }

        .category-accordions .accordion {
            margin: 33px 0 0px 0;
        }

        .size-filter a:hover {
            color: #34a992;
        }

        .sort-dropdown-holder {
            margin: 18px 0 0 0px;
        }

        .sort-dropdown-holder .dropdown {
            display: inline-block;

            font-size: 12px;
            line-height: 21px;
            font-weight: bold;
            text-transform: uppercase;

        }

        .sort-dropdown-holder .dropdown > a:hover {
            border: 1px solid #34A994;
        }

        .sort-dropdown-holder .dropdown > a {
            border-radius: 2px;

            border: 1px solid #DDDDDD;
            display: block;
            padding: 10px 13px;

        }

        .sort-dropdown-holder .dropdown .fa {
            font-size: 17px;
            vertical-align: bottom;
            margin-left: 22px;
        }

        .grid-list-buttons {
            text-align: right;
            margin: 28px 0 0 0;
        }

        .grid-list-buttons li {
            margin-right: 5px;
        }

        .grid-list-buttons li:last-child {
            margin-right: 0px;
        }

        .grid-list-buttons li a {
            text-transform: uppercase;
            letter-spacing: 0px;
            color: #909090;
        }

        .grid-list-buttons li.active a {
            font-weight: bold;

        }

        .grid-list-buttons li.active i {
            color: #34a992;
        }

        .grid-list-buttons li i {
            font-size: 19px;
            line-height: 19px;
            vertical-align: bottom;
        }

        .category-accordions {
            margin: 0 0 82px 0;
        }

        .right-sidebar .widget {
            margin: 0 0 50px 0;
        }

        .size-filter.widget ul {
            list-style: none;
            margin: 33px 0 0 0;
            font-weight: bold;
            font-size: 16px;
        }

        .size-filter.widget ul li {
            margin-bottom: 17px;

        }

        .size-filter.widget ul li a {
            letter-spacing: 0px !important;
        }

        .size-filter.widget ul li span {
            letter-spacing: 1px;
        }

        .star-holder .star {
            display: inline-block;
            min-width: 100%;
        }

        .star {

        }

        .star img {
            padding-right: 0px;
        }

        #list-view .products-list-holder {
            margin: 30px 0 0 0;
        }

        #list-view .product-list-item {

            margin: 0 0 10px 0;
            padding: 24px 0 0 0;
            min-height: 300px;
            background-color: #fff;
        }

        #list-view .product-list-item .image-holder {
            text-align: center;
        }

        #list-view .paging-holder {
            margin: 58px 0 0 0;
        }

        #list-view .product-list-item .title {
            color: #454545;
            line-height: 36px;
        }

        #list-view .product-list-item .excerpt {
            color: #818181;
            margin: 22px 0 21px 0;
        }

        .color-option {
            height: 25px;
            width: 25px;
            border: 0;
        }

        .color-option.active, .color-option.focus, .color-option:hover {
            border: 1px solid #34a992;
        }

        #list-view .product-list-item .star {
            margin: 2px 0 0 0;
        }

        #list-view .product-list-item .star img {
            margin-right: -6px;
            text-align: center;
        }

        #list-view .item-details-holder {
            margin-left: 10px;
        }

        #list-view .product-list-item .price {
            margin: 11px 60px 0 0;
            font-size: 25px;
            font-weight: bold;
            letter-spacing: 0px;
            color: #595959;
            display: inline-block;

        }

        #list-view .product-list-item .price .previous-price {
            font-size: 15px;
            letter-spacing: 2px;
            font-weight: 400;
        }

        #list-view .product-list-item .buttons-holder, #list-view .product-list-item .add-cart-holder, #list-view .product-list-item .add-wishlist-holder {
            display: inline-block;
            vertical-align: bottom;
        }

        #list-view .product-list-item .add-cart-holder a {
            padding: 6px 43px;

        }

        #list-view .product-list-item .add-cart-holder {
            margin-right: 12px;
        }

        /*contact us page*/

        .map {

            width: 100%;
            height: 100%;
        }

        .map-holder img {
            max-width: none;
        }

        .map-holder label {
            width: auto;
            display: inline;
        }

        .section-contact-page.style-2 .map-holder {
            height: 360px;
            margin: 0 auto;
            max-width: 1535px;

        }

        .map-holder {
            background-color: #000;
            width: 100%;
            position: relative;
            height: 540px;
            margin: 20px 0 0 0;

        }

        .section-aboutus-page .map-holder {
            height: 500px;
            width: 100%;
        }

        .section-contact-page.style-2 {
            margin: 0 0 70px 0;
        }

        .section-contact-page {
            margin-bottom: 120px;
        }

        .section-contact-page .contact-info-holder {
            position: absolute;

            left: 0;
            right: 0;
            top: -25px;
            bottom: 0;
            margin: auto;
            height: 361px;
            width: 361px;
            background-image: url(../images/contactus-middle-holder.png);
            z-index: 200;
            text-align: center;

        }

        .section-contact-page .contact-info-holder .contact-info-holder {
            position: absolute;
            top: -20px;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
            width: 300px;
            z-index: 9000;
            height: 100px;

        }

        .section-contact-page .contact-info-holder .contact-info-holder .logo-holder {
            margin: 0 0 22px 0;
            line-height: 23px;
        }

        .section-contact-page .contact-info-holder .contact-info-holder p {
            line-height: 23px;
            font-size: 14px;
            padding: 0 15px;
        }

        .section-contact-page .contact-info-holder .contact-info-holder p a {
            border-bottom: 1px solid #34a992;
            display: inline-block;
            margin: 2px 0 0 0;
            color: #34a992;
            height: 19px;
        }

        /*shopping-cart-page*/

        .section-shopping-cart-page {
            margin: 57px 0 0 0;

        }

        .section-shopping-cart-page .cart-item {
            position: relative;
            margin: 0 0 32px 0;
            border-bottom: 1px solid #DFDFDF;
            padding: 0 0 40px 0;
        }

        .section-shopping-cart-page .cart-item .brand {
            margin: 12px 0 0 0;

        }

        .section-shopping-cart-page .cart-item .title {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 18px;
            color: #595959;
            line-height: 18px;
        }

        .section-shopping-cart-page .cart-item .total-price {
            font-weight: bold;
            display: inline-block;
            font-size: 18px;
            margin: 0 0 0 31px;

        }

        .section-shopping-cart-page .cart-item .unit-price {
            display: inline-block;
            line-height: 25px;
            font-size: 18px;
            color: #595959;
            margin: 0 10px 0 27px;
        }

        .section-shopping-cart-page .cart-item .quantity {
            display: inline-block;
            margin: 0 0 0 14px;
        }

        .section-shopping-cart-page .cart-item .details {
            padding: 18px 0 0 0;
        }

        .section-shopping-cart-page .cart-item .close-btn {
            position: absolute;
            right: 15px;
            top: 34px;
            background-image: url(../images/close-btn.png);
            display: inline-block;
            width: 11px;
            height: 11px;
            background-repeat: no-repeat;
        }

        .section-shopping-cart-page .cart-item .close-btn:hover {
            opacity: 0.5;
        }

        .md-bordered-title {
            border-bottom: 2px solid #DDDDDD;
            padding-bottom: 11px;

        }

        .right-sidebar {
            margin: 0 0 0 33px;
        }

        .shopping-cart-summary label, .shopping-cart-summary a {
            text-transform: uppercase;
        }

        .shopping-cart-summary fieldset span, .shopping-cart-summary fieldset label {

            padding: 0;
        }

        .shopping-cart-summary form {
            margin: 22px 0 0 0;
        }

        .shopping-cart-summary fieldset {
            margin: 6px 0;
        }

        .shopping-cart-summary hr {
            margin: 13px 0;

        }

        .shopping-cart-summary fieldset .value {
            font-weight: bold;
            text-align: right;
            font-size: 18px;
            letter-spacing: 0;
            line-height: 18px;

        }

        .shopping-cart-summary label {
            font-weight: normal;

        }

        .shopping-cart-summary fieldset.total {
            margin: 20px 0 16px 0;
        }

        .shopping-cart-summary fieldset.total label {
            font-size: 15px;
            font-weight: bold;
        }

        .shopping-cart-summary fieldset.total .value {
            font-size: 25px;
            line-height: 18px;

            vertical-align: bottom;
            font-weight: bold;
        }

        .shopping-cart-summary a {
            text-align: center;
            font-size: 12px;
            display: block;
            margin: 15px 0 0 0;
        }

        .shopping-cart-summary h4 {
            font-size: 16px;
            line-height: 21px;
        }

        .coupon-widget p {
            margin: 15px 0;
            font-size: 12px;
            line-height: 20px;
        }

        .coupon-widget .md-input {

        }

        .md-input {
            border: 1px solid #DCDCDC;
            color: #8d8d8d;
            letter-spacing: 1px;
            padding: 8px 19px;

            outline: none;
        }

        .md-input:focus, .md-input:hover {
            border-color: #34a992;
        }

        .coupon-widget button {
            margin: 9px 0;
            min-width: 50%;
        }

        .md-button.small {
            padding: 7px 0;
            font-size: 14px;
            line-height: 16px;
        }

        /*About Us page*/

        .section-aboutus-page .banner {
            position: relative;

            max-width: 1540px;
            margin: 0 auto 32px auto;
            max-height: 391px;
            overflow: hidden;
        }

        .section-aboutus-page .banner img {
            text-align: center;
            width: 100%;
            position: relative;
        }

        .section-contact-form-holder .content-holder.about-us {
            margin: 0px 0 0 50px;
        }

        .content-holder.about-us {
            margin: 34px 0 0 50px;
        }

        .content-holder.about-us h3 {
            font-size: 30px;
            text-transform: none;
            line-height: 35px;
            font-weight: 400;
            margin-bottom: 31px;
        }

        .content-holder.about-us p {
            line-height: 23px;

            margin: 0 0 26px 0;
        }

        .content-holder.about-us p a {
            color: #34a992;
            border-bottom: 1px solid #34a992;
            display: inline-block;
            line-height: 15px;
        }

        .content-holder.about-us p a:hover {
            color: #000;
            border-bottom: 1px solid #000;
        }

        .content-holder.about-us blockquote {
            margin: 50px 0 0 0;
        }

        .md-quote {
            border: none;
            margin: 0;
            padding: 0;
        }

        .md-quote p {
            display: inline-block;
            width: 80%;
            font-style: italic;
            font-size: 15px;
            padding: 0px 0 0px 38px;
            vertical-align: sub;
        }

        .md-quote:before {
            content: "ï„";
            color: #DDDDDD;
            display: inline-block;
            font-size: 130px;
            line-height: 121px;
            vertical-align: middle;
            font-family: "fontawesome";
        }

        .section-aboutus-page hr {
            margin: 56px 0 0px 0;
        }

        .section-aboutus-page .members-holder {
            margin: 55px 0 0 0;
        }

        .section-aboutus-page .members-holder .member-info {
            margin: 34px 0 0 0;
            text-align: center;
            text-transform: capitalize;

        }

        .section-aboutus-page .member-item {
            margin-bottom: 30px;
        }

        .section-aboutus-page .member-item .image {
            text-align: center;
        }

        .section-aboutus-page .members-holder .member-item .devider {
            margin: 0 5px;
            color: #DEDEDE;
            font-size: 20px;
            vertical-align: top;
        }

        .section-aboutus-page .members-holder .member-item .position {
            color: #34a992;
        }

        .section-aboutus-page .members-holder .member-item .name, .section-aboutus-page .members-holder .member-item .position {
            font-weight: 600;
            font-size: 21px;
            display: inline;

        }

        .section-aboutus-page .members-holder .member-item p {
            margin: 18px 0 13px 0;
            font-size: 15px;
            line-height: 23px;
        }

        .section-aboutus-page .members-holder .member-socials {
            margin-left: 23px;
        }

        .section-aboutus-page .members-holder .member-socials a {
            font-size: 22px;
            margin-right: 8px;
        }

        .section-we-hire .container {
            margin: 82px auto;
            border: 1px solid #D6D6D6;
            border-left: 0;
            border-right: 0;
            padding: 46px 0 33px 0;
        }

        .hire-body .title {
            text-transform: uppercase;
            font-size: 30px;
            font-weight: 100;
            line-height: 30px;
            margin: 0 0 5px 0;
        }

        .hire-body p {
            font-size: 16px;
            letter-spacing: 0px;
            line-height: 18px;
        }

        .hire-button {
            padding: 21px 45px !important;
            font-size: 16px !important;

        }

        .hire-body {
            margin: 0 0 0 34px;
        }

        .section-about-us-more {
            margin: 90px 0 106px 0;
        }

        .more-info-item h3 {
            font-size: 21px;
            line-height: 25px;
            margin: 0 0 30px 0;
        }

        .more-info-item p {
            font-size: 15px;
            line-height: 23px;
        }

        .section-stats .stat-item {
            text-align: center;
        }

        .section-stats {
            margin: 0 0 93px 0;
            background-color: #FFF;
            padding: 52px 0;
        }

        .section-stats .stat-item span {
            display: block;
        }

        .section-stats .stat-item .value {
            font-size: 60px;
            font-weight: 600;
            line-height: 60px;
            color: #34a992;
        }

        .section-stats .stat-item .title {
            text-transform: capitalize;
            font-size: 19px;
            line-height: 20px;
            margin: 6px 0;
        }

        .sign-in-holder {
            margin: 60px 165px 60px 165px;
            position: relative;

        }

        .sign-in-holder:before {
            content: "";
            display: block;
            width: 2px;
            height: 130%;
            top: -20px;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            background-color: #DDDDDD;
        }

        .sign-in-holder h3 {
            font-size: 22px;
            line-height: 22px;
            margin: 0 0 24px 0;
        }

        .sign-in-holder form p {
            font-size: 15px;
            margin: 0 0 25px 0;
            line-height: 20px;
        }

        .sign-in-holder form .md-input {
            margin: 15px 0 0px 0;

        }

        .sign-in-holder form .forget-link {
            display: inline-block;
            color: #34a992;
            text-transform: capitalize;
            font-size: 14px;
            letter-spacing: 1px;

            margin: 22px 0 0 0;
        }

        .sign-in-holder form .forget-link:hover {
            text-decoration: underline;
        }

        .md-button.narrow {
            padding: 7px 25px;

        }

        .sign-in-holder .md-button {
            margin: 15px 0 0 0;
            float: right;
        }

        .sign-in-holder .form-login {
            margin: 0 50px 0 0;

        }

        .form-guest-checkout {
            margin: 0 0 0 40px;
        }

        .checkout-accordions {
            margin: 50px 0 0 0;

        }

        .checkout-accordions .panel {
            background-color: transparent;
            border: none;
            box-shadow: none;
            overflow: visible !important;
            margin: 0 0 20px 0;
        }

        .checkout-accordions .panel-title {
            font-size: 25px;
        }

        .checkout-accordions .panel-title a.collapsed {
            color: #9c9c9c;
        }

        .checkout-accordions .panel-heading {
            background-color: transparent;
            border: none;
            padding: 6px 0 0 0;
            position: relative;

        }

        .checkout-accordions .panel-heading:after {
            content: "";
            top: 60%;
            width: 100%;

            height: 1px;
            background-color: #DCDCDC;
            z-index: 1;
            position: absolute;

        }

        .checkout-accordions .panel-heading a {
            letter-spacing: 0px;
            position: relative;
            z-index: 100;
            padding-right: 5px;

            background-color: #FBFBFB;
        }

        .checkout-accordions .panel-body {
            border-top: none !important;
            padding: 36px 0 0 0;
        }

        .checkout-accordions .panel-body .md-input {
            width: 100%;
        }

        .checkout-accordions .md-input {
            padding: 11px 17px;
            font-size: 11px;
            font-weight: bold;
        }

        .checkout-accordions .field-row {
            margin: 0px 0 28px 0;
        }

        .checkout-accordions .field-row .button-holder {

            margin-top: -3px;
        }

        .checkout-accordions .field-row .button-holder button {
            margin-left: 14px;
        }

        .checkout-accordions .field-row div {
            padding-left: 0;
        }

        .button-holder.left {
            text-align: left;
        }

        .button-holder.right {
            text-align: right;
        }

        .checkout-button-row {
            margin: -3px 0 0 0 !important;
        }

        .step-3 .checkout-button-row .checkbox-holder {
            margin-bottom: 20px;
        }

        .step-3 .checkout-button-row {
            margin: 800px 0 0 0;
        }

        .checkout-button-row .checkbox-holder {
            font-size: 13px;
            letter-spacing: 1px;
            vertical-align: bottom;

        }

        .checkout-button-row .checkbox-holder a:hover {
            color: #000;
        }

        .checkout-button-row .checkbox-holder a {
            vertical-align: bottom;
            color: #34a992;
            text-decoration: underline;
        }

        .checkout-button-row .checkbox-holder input {
            margin-right: 4px;
        }

        .md-check {
            vertical-align: middle;
            display: inline-block;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            appearance: none;
            background-color: #fff;
            border: 1px solid #ddd;
            width: 17px;
            outline: none;
            height: 17px;
        }

        .md-check:hover {
            cursor: pointer;

        }

        .md-check:checked, .md-check.checked {
            border: 1px solid #000;
            background-color: #34a994;
            outline: none;
        }

        .md-check:checked, .md-check:focus, .md-check:hover {
            outline: none;
            border: 1px solid #34a994;

        }

        .step-btn {
            padding: 7px 23px;
            font-size: 13px;

            vertical-align: top !important;
        }

        .checkout-accordions .step-2 {
            padding: 43px 0 0 0;
        }

        .checkout-accordions .step-2 .payments-title {

            vertical-align: middle;
            display: inline-block;
            padding-top: 60px;
            padding-right: 0;
            font-size: 15px;
        }

        .checkout-accordions .step-2 .payments-title label {
            font-weight: normal !important;
        }

        .checkout-accordions .payment-method-buttons {
            margin: 3px 0 0 0;
        }

        .checkout-accordions .payment-method-buttons .payment-option {
            background-color: transparent;
            box-shadow: 0px 0px 0px 1px #DCDCDC;
            padding: 14px 18px;
            border: none;

            margin: 0 0px 20px 15px;
        }

        .checkout-accordions .payment-method-buttons .payment-option:focus, .checkout-accordions .payment-method-buttons .payment-option:active, .checkout-accordions .payment-method-buttons .payment-option:hover {
            box-shadow: 0px 0px 0px 2px #34a992;
            outline: none;
        }

        .checkout-accordions .payment-method-buttons .payment-option.selected {

        }

        .checkout-accordions .step-2 .text {
            margin: 63px 0 0 0;

        }

        .checkout-accordions .step-2 .text h4 {
            margin: 0 0 20px 0;
        }

        .order-summary-row {

            text-align: center;
        }

        .order-summary-row .order-info-item .body {
            min-height: 145px;

        }

        .order-summary-row .order-info-item p {
            margin: 14px 0 25px 0;
            font-size: 17px;
        }

        .summary-table {
            margin: 41px 0 0 0;
        }

        .summary-table th {
            text-transform: uppercase;
            font-size: 18px;
            text-align: right;
        }

        .summary-table th {
            border: 0 !important;
            padding-bottom: 30px !important;
        }

        .summary-table td {
            text-align: right;
        }

        .summary-table .order-price {
            font-weight: bold;
            font-size: 18px;
        }

        .summary-table .order-price i {
            font-weight: normal;
            font-size: 15px;
            color: #9A9A9A;
        }

        .summary-table label {
            font-weight: bold;
            color: #9A9A9A;
            font-size: 15px;
            text-transform: uppercase;
        }

        .summary-table .order-title {
            font-weight: bold;

            text-transform: uppercase;
        }

        .summary-table td {
            border-top: 0 !important;
        }

        .summary-table tbody tr {
            padding: 0 0 55px 0 !important;
        }

        .summary-table th:nth-child(-n+2), .summary-table td:nth-child(-n+1) {
            text-align: left;
        }

        .summary-table tr.summary td {
            height: 10px !important;
        }

        .summary .clearfix {
            padding-left: 630px;
        }

        .summary-table .line {
            border-top: 1px solid #DFDFDF;
        }

        /*homepage2*/

        .homepage2 .wishlist-holder {
            margin-left: 0px;
        }

        .homepage2 .search-holder {
            margin: 13px 7px 0 0;
            float: none;
        }

        .homepage2 .footer-logo-holder {
            margin: -30px 0 0 0;
        }

        .homepage2 .hotline-holder {
            margin: 7px 0 0 0;
        }

        .homepage2 .hotline-holder span {
            font-size: 17px;
        }

        .homepage2-banners-holder {
            margin: 10px 0 0 0;
        }

        .masonry-banners a {
            margin: 9px;
            display: inline-block;
            float: left;
        }

        .masonry-banners a:hover {
            opacity: 0.8;
        }

        .masonry-banners a img {
            vertical-align: top;
        }

        .section-category-slider {
            margin: 50px 0 0 0;
            background-color: #fff;
            padding: 40px 0 30px 0;
        }

        .section-category-slider h2 {
            display: inline-block;
            font-weight: 100;
            vertical-align: middle;
            margin: 20px 0 0 0;
        }

        .section-category-slider .cat-item {
            display: inline-block;
            text-transform: uppercase;
            margin-right: 83px;
            text-align: center;

        }

        .section-category-slider .cats-holder {
            display: inline-block;
            vertical-align: middle;
            margin: 0px;
        }

        .section-category-slider .cat-item span {
            display: block;
        }

        .section-related-products {
            margin: 63px 0 0px 0;
        }

        .section-related-products h2 {
            font-weight: 100;
            font-size: 37px;
            text-align: center;
            margin-bottom: 17px;

        }

        .product-holder {
            display: inline-block;
        }

        .product-holder.small {

            margin-right: 10px;
        }

        .product-holder.small .image {
            margin-left: -13px;
        }

        .product-holder.small, .product-holder.small .product-item {
            width: 220px;
        }

        .product-holder.small .product-item .add-cart-holder:after {

            width: 149%;
            left: -24%;
        }

        .product-holder.small .product-item hr {
            margin: 0px auto 3px auto;

        }

        .product-holder.small .product-item .title {
            font-size: 13px;
        }

        /*Homepage3*/

        .section-home-banner {
            text-align: center;
        }

        .section-home-banner img {
            width: 100%;
        }

        .section-newsletter {
            background-color: #fff;
            margin: 45px 0 0 0;
            padding: 65px 0;
        }

        .news-letter-holder {
            margin: 0 60px;

        }

        .newsletter-title h2, .newsletter-title h3 {
            color: #595959;

            text-align: right;
        }

        .newsletter-title h2 {
            font-size: 17px;
            letter-spacing: 0;
            line-height: 17px;
            font-weight: 700;

        }

        .newsletter-title h3 {
            font-weight: 100;

            font-size: 14px;

        }

        .newsletter-body {
            margin: 0 0 0 30px;
        }

        .newsletter-body button {
            margin: 2px 0 0 20px;
        }

        .section-from-out-blog {
            margin: 75px 0 65px 0;
        }

        .section-from-out-blog h2 {
            font-weight: 100;
            text-align: center;
        }

        .section-from-out-blog .items-holder {
            margin: 70px 0 0 0;
        }

        .section-from-out-blog .from-blog-item .body h4 {
            margin: 0 0 15px 0;
            font-size: 16px;
            line-height: 16px;
        }

        .section-from-out-blog .from-blog-item .body .date {
            font-size: 12px;
            line-height: 12px;
        }

        .section-from-out-blog .from-blog-item .body .excerpt {
            margin: 8px 0 23px 0;
        }

        .section-from-out-blog .from-blog-item .body .comment {
            color: #595959;
        }

        .section-from-out-blog .from-blog-item .body .comment span {
            margin-right: 5px;
        }

        .shop-cart-info-holder {
            display: inline-block;
            position: relative;
            z-index: 100;
        }

        .contact-form-holder h3 {
            font-size: 19px;
        }

        .contact-form-holder p {
            margin: 24px 0 14px 0;
            width: 80%;
        }

        .contact-form {
            margin: 40px 0 21px 0;
        }

        .contact-form
        label.error {
            color: #DD4B39;
        }

        .contact-form .controls {
            margin: 0 0 16px 0;
        }

        #loading {
            visibility: hidden;
            display: inline-block;

        }

        .section-contact-form-holder {
            margin: 0 0 75px 0;
        }

        .section-addresses h3 {
            font-size: 20px;
            position: relative;
            font-weight: 600;
            border-bottom: 1px solid #D6D6D6;
            padding: 0 0 11px 0;
        }

        .section-addresses h3:before {
            content: "ï";
            margin: 0 7px 0 0;
            font-family: fontawesome;
        }

        .address-column p {
            margin: 20px 0 0 0;
            line-height: 24px;
        }

        .address-column p a {
            color: #34a994;
            text-decoration: underline;
        }

        .address-column p a:hover {
            color: #000;
        }

        .section-addresses {
            margin: 0 0 85px 0;
        }

        /*Removed custom Tabs from Bootstrap 3  hack*/
        .tabs-below > .nav-tabs,
        .tabs-right > .nav-tabs,
        .tabs-left > .nav-tabs {
            border-bottom: 0;
        }

        .tab-content > .tab-pane,
        .pill-content > .pill-pane {
            display: none;
        }

        .tab-content > .active,
        .pill-content > .active {
            display: block;
        }

        .tabs-below > .nav-tabs {
            border-top: 1px solid #ddd;
        }

        .tabs-below > .nav-tabs > li {
            margin-top: -1px;
            margin-bottom: 0;
        }

        .tabs-below > .nav-tabs > li > a {
            -webkit-border-radius: 0 0 4px 4px;
            -moz-border-radius: 0 0 4px 4px;
            border-radius: 0 0 4px 4px;
        }

        .tabs-below > .nav-tabs > li > a:hover,
        .tabs-below > .nav-tabs > li > a:focus {
            border-top-color: #ddd;
            border-bottom-color: transparent;
        }

        .tabs-below > .nav-tabs > .active > a,
        .tabs-below > .nav-tabs > .active > a:hover,
        .tabs-below > .nav-tabs > .active > a:focus {
            border-color: transparent #ddd #ddd #ddd;
        }

        .tabs-left > .nav-tabs > li,
        .tabs-right > .nav-tabs > li {
            float: none;
        }

        .tabs-left > .nav-tabs > li > a,
        .tabs-right > .nav-tabs > li > a {
            min-width: 74px;
            margin-right: 0;
            margin-bottom: 3px;
        }

        .tabs-left > .nav-tabs {
            float: left;
            margin-right: 19px;
            border-right: 1px solid #ddd;
        }

        .tabs-left > .nav-tabs > li > a {
            margin-right: -1px;
            -webkit-border-radius: 4px 0 0 4px;
            -moz-border-radius: 4px 0 0 4px;
            border-radius: 4px 0 0 4px;
        }

        .tabs-left > .nav-tabs > li > a:hover,
        .tabs-left > .nav-tabs > li > a:focus {
            border-color: #eeeeee #dddddd #eeeeee #eeeeee;
        }

        .tabs-left > .nav-tabs .active > a,
        .tabs-left > .nav-tabs .active > a:hover,
        .tabs-left > .nav-tabs .active > a:focus {
            border-color: #ddd transparent #ddd #ddd;
            *border-right-color: #ffffff;
        }

        .tabs-right > .nav-tabs {
            float: right;
            margin-left: 19px;
            border-left: 1px solid #ddd;
        }

        .tabs-right > .nav-tabs > li > a {
            margin-left: -1px;
            -webkit-border-radius: 0 4px 4px 0;
            -moz-border-radius: 0 4px 4px 0;
            border-radius: 0 4px 4px 0;
        }

        .tabs-right > .nav-tabs > li > a:hover,
        .tabs-right > .nav-tabs > li > a:focus {
            border-color: #eeeeee #eeeeee #eeeeee #dddddd;
        }

        .tabs-right > .nav-tabs .active > a,
        .tabs-right > .nav-tabs .active > a:hover,
        .tabs-right > .nav-tabs .active > a:focus {
            border-color: #ddd #ddd #ddd transparent;
            *border-left-color: #ffffff;
        }

        /*Single product page*/

        .single-product-vertical-gallery ul {
            list-style: none;
            margin: 25px 0 0 0;
        }

        .single-product-vertical-gallery {
            position: relative;
            display: inline-block;
            height: 100%;
        }

        .single-product-vertical-gallery li {
            display: inline-block;
            margin: 0 0 8px 0;
        }

        .vertical-gallery-item {
            display: block;
            min-width: 113px;
            height: 146px;
        }

        .single-product-vertical-gallery .up-btn, .single-product-vertical-gallery .down-btn {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            text-align: center;
            color: #AFAFAF;
            font-size: 25px;
            line-height: 25px;
            font-weight: 100;
            z-index: 1000;
            display: block;

        }

        .single-product-vertical-gallery .up-btn:hover {
            color: #34a992;
            top: -3px;
        }

        .single-product-vertical-gallery .down-btn:hover {
            color: #34a992;
            bottom: -16px;
        }

        .single-product-vertical-gallery .up-btn {
            top: 0;
        }

        .single-product-vertical-gallery .down-btn {
            bottom: -13px;
        }

        .section-single-product-page {
            position: relative;
            margin: 15px 0 0 0;
        }

        .section-single-product-page.sidebar-single-page {
            margin: 22px 0 0 0;

        }

        .section-single-product-page .sidebar {
            margin: 16px 0 0 0;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-gallery {
            margin: 0;
        }

        .single-product-gallery {
            width: 100%;

            height: 100%;
            position: relative;
        }

        .single-product-gallery
        .nav-holder a {
            position: absolute;
            top: 45%;
            font-size: 25px;
            width: 50px;
            height: 50px;
            z-index: 200;
            color: #AFAFAF;
        }

        .single-product-gallery
        .nav-holder a:hover {
            color: #34a992;
        }

        .single-product-gallery
        .nav-holder .prev-btn {
            left: 21px;
        }

        .single-product-gallery
        .nav-holder .next-btn {
            right: 21px;
            text-align: right;
        }

        .section-single-product-page.sidebar-single-page .single-product-info-holder {
            margin: 0px 0 0 15px;
        }

        .single-product-info-holder {

        }

        .single-product-info-holder
        .nav-area-holder {
            border-bottom: 1px solid #D6D6D6;
            padding: 0 0 9px 0;
        }

        .single-product-info-holder
        .nav-area-holder .back a {
            text-transform: capitalize;
            color: #34a992;

        }

        .single-product-info-holder
        .nav-area-holder .back a:hover {
            color: #000;
            text-decoration: underline;
        }

        .single-product-info-holder
        .nav-area-holder .next-prev {
            text-align: right;
            text-transform: capitalize;
        }

        .single-product-info-holder
        .nav-area-holder .next-prev a {
            font-size: 26px;
            vertical-align: middle;
            font-weight: 100 !important;
            width: 26px;

        }

        .single-product-info-holder .brand {
            margin: 33px 0 6px 0;
        }

        .single-product-info-holder .star {
            min-width: 200px !important;
            margin: 4px 0 0 0;

        }

        .star img {
            margin: 0 -6px 0 0;

        }

        .single-product-info-holder .price {
            margin: 21px 0 0 0;
            font-size: 35px;
            font-weight: bold;
            vertical-align: middle;
        }

        .single-product-info-holder .previous-price {
            font-size: 16px;
            font-weight: 100;
        }

        .single-product-info-holder .excerpt {
            margin: 25px 0 0 0;
        }

        .single-product-info-holder .color-options {
            margin: 31px 0 0 0;
        }

        .single-product-info-holder .drop-down-holder {
            margin: 25px 0 0 0;
        }

        .drop-down-holder h5 {
            letter-spacing: 0;
        }

        .drop-down-holder select {
            margin: 10px 10px 0 0px;
            min-width: 196px;
        }

        .drop-down-holder select.quantity {
            min-width: 80px;

        }

        .single-product-info-holder .buttons-holder {
            margin: 28px 0 0 0;
        }

        .single-product-info-holder .buttons-holder a {
            margin: 0 10px 0 0px;
        }

        .single-product-info-holder .add-cart-holder a {
            padding: 20px 56px;
            font-size: 16px;
        }

        .single-product-info-holder .add-wishlist-holder {
            font-size: 12px;
            vertical-align: middle;

        }

        .single-product-info-holder .social-buttons {
            margin: 36px 0 0 0;

            text-transform: uppercase;
        }

        .social-buttons span {
            font-size: 12px;
            color: #a0a0a0;

            letter-spacing: 1px;
            line-height: 12px;
        }

        .social-buttons ul {
            margin: 0 0 0px 20px;
        }

        .social-buttons ul li:nth-child(2n+1) a {
            background-color: #DADADA;
        }

        .social-buttons ul li:nth-child(2n) a {
            background-color: #CACACA;
        }

        .social-buttons ul li a {
            padding: 16px;

            position: relative;
            display: inline-block;
            vertical-align: middle;
        }

        .social-buttons ul li a:hover {
            background-color: #333;
        }

        .social-buttons .facebook a:hover {
            background-color: #3B5999;
        }

        .social-buttons .twitter a:hover {
            background-color: #3CC7F4;
        }

        .social-buttons .rss a:hover {
            background-color: #FB7200;
        }

        .social-buttons .linkedin a:hover {
            background-color: #007AB9;
        }

        .social-buttons .gplus a:hover {
            background-color: #D43D2F;
        }

        .social-buttons .dribbble a:hover {
            background-color: #EB4D88;
        }

        .social-buttons ul li i {

            color: #FAFAFA;
            width: 100%;
            vertical-align: middle;
            height: 18px;
            font-weight: 100;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            text-align: center;

            display: inline-block;
            font-size: 18px;
        }

        .single-product-gallery-item {
            display: inline-block;
        }

        .section-review-comment {
        }

        .section-review-comment .nav-tabs li {
            border: none;
            border-radius: 0px;
            color: #595959;
            text-transform: uppercase;
            font-size: 13px;
            width: 100%;
            background-color: transparent;

        }

        .section-review-comment .nav-tabs li:hover a, .section-review-comment .nav-tabs li:focus a {
            border-radius: 0 !important;
            border-bottom: 0;
        }

        .section-review-comment .nav-tabs {
            border-bottom: 0;
            position: relative;
            z-index: 1000;

        }

        .section-review-comment .nav-tabs li a, .section-review-comment .nav-tabs li a:hover, .section-review-comment .nav-tabs li a:focus, .section-review-comment .nav-tabs li.active a {
            line-height: 25px;
        }

        .section-review-comment .nav-tabs li.active a {
            font-weight: bold;
            background-color: transparent;
            border-radius: 0px;
            border: 1px solid #DFDFDF;
            border-right: 1px solid #FBFBFB;
        }

        .section-review-comment .tab-content {
            padding: 30px;
            position: relative;
            z-index: 100;
            border: 1px solid #dfdfdf;
        }

        .comment-item {
            margin: 15px 0 0px 0;
        }

        .comment-item .avatar {
            text-align: left;

        }

        .comment-item .avatar img {
            display: inline-block;
        }

        .comment-item .author a {
            color: #34a992;
            text-transform: capitalize;
        }

        .comment-item .author a:hover {
            color: #000;
        }

        .comment-item .comment-body {
            border: 1px solid #DFDFDF;
            padding: 23px;
            background-color: #fbfbfb;
        }

        .comment-item .comment-body:after {
            content: "";
            position: absolute;
            left: 4px;
            z-index: -1;
            top: 14px;
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 7.5px 12px 7.5px 0;
            border-color: transparent #DFDFDF transparent transparent;
        }

        .comment-item .comment-body:before {
            content: "";
            position: absolute;
            left: 6px;
            top: 14px;
            width: 0px;
            height: 0px;
            border-style: solid;
            border-width: 7.5px 12px 7.5px 0;
            border-color: transparent #fbfbfb transparent transparent;
        }

        .comment-item .comment-text {
            margin: 10px 0 0 0;
        }

        .section-review-comment
        .additional-info .star, .section-review-comment
        .additional-info h4 {
            margin: 0 0 10px 0;

        }

        .single-product-page.section-related-products {
            margin: 50px 0 -48px 0;
        }

        .single-product-gallery:after {
            content: "";
            display: block;
            position: absolute;
            top: 12px;
            right: 14px;
            background-image: url(../images/magnifier-icon.png);
            width: 37px;
            height: 37px;
            z-index: 200;

            cursor: pointer;
        }

        .single-product-gallery:hover:after {
            cursor: pointer;
            background-position: -38px 0px;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder .star-holder {
            margin: -7px 0 0 0;

        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder
        .nav-area-holder {
            margin: 22px 0 0 0;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder h1 {
            line-height: 35px;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder .price {
            margin: 14px 0 0px 0;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder .excerpt {
            margin: 21px 0 0 0;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder .color-options {
            margin: 25px 0 0 0;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder
        .drop-down-holder .color select {
            margin-bottom: 20px;

            width: 242px;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder
        select.quantity {
            margin-right: 0px;
        }

        .section-single-product-page.sidebar-single-page
        .single-product-info-holder
        .add-wishlist-holder {
            text-align: center;
            margin: 31px 0 0 0;
        }

        .section-single-product-page.sidebar-single-page
        .social-buttons ul {
            margin: 10px 0 0 0;
        }

        .single-product-horizontal-gallery {
            position: relative;
            margin: 17px 0 0 0px;
        }

        .single-product-horizontal-gallery ul li {
            display: inline-block;
            text-align: center;
        }

        .horizontal-gallery-item {
            min-width: 114px;
            display: inline-block;
            margin: 0 11px 0 0;
            height: 146px;
        }

        .single-product-horizontal-gallery .next-btn, .single-product-horizontal-gallery .prev-btn {
            position: absolute;
            top: 41%;
            font-size: 25px;
            display: inline-block;
            width: 25px;
            height: 25px;
            color: #AFAFAF;
            z-index: 100;
        }

        .single-product-horizontal-gallery .next-btn:hover, .single-product-horizontal-gallery .prev-btn:hover {
            color: #34a992;
        }

        .single-product-horizontal-gallery .next-btn {
            right: -30px;
        }

        .single-product-horizontal-gallery .prev-btn {
            left: -15px;
        }

        ul.list-products > li img {
            width: 200px;
            margin-right: 20px;
            float: left;
        }

        ul.list-products > li .post-content > a {
            display: inline-block;
            padding: 3px;
            font-size: 15px;
            color: #e68a00 !important;
        }

        .product-title a {
            color: #e68a00 !important;
            text-transform: uppercase !important;
        }
		
		.name .title-blue {
			font-size: 12px;
			color: #284596 !important;
			text-transform: uppercase;
			}

    </style>
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