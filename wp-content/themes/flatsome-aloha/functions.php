<?php
add_filter( 'the_title', 'short_title_product', 10, 2 );
function short_title_product( $title, $id ) {
    if (get_post_type( $id ) === 'product' & !is_single() ) {
        return wp_trim_words( $title, 5 ); // thay đổi số từ muốn thêm
    } else {
        return $title;
    }
}

add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3 );
function add_percentage_to_sale_badge( $html, $post, $product ) {
    if( $product->is_type('variable')){
        $percentages = array();

        // Get all variation prices
        $prices = $product->get_variation_prices();

        // Loop through variation prices
        foreach( $prices['price'] as $key => $price ){
            // Only on sale variations
            if( $prices['regular_price'][$key] !== $price ){
                // Calculate and set in the array the percentage for each variation on sale
                $percentages[] = round(100 - ($prices['sale_price'][$key] / $prices['regular_price'][$key] * 100));
            }
        }
        // We keep the highest value
        $percentage = max($percentages) . '%';
    } else {
        $regular_price = (float) $product->get_regular_price();
        $sale_price    = (float) $product->get_sale_price();

        $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
    }
    
    // Add a custom CSS class for the sale badge
    $class = 'woocommerce-onsale-badge';
    
    // Add the CSS styles inline
    $styles = "
        .woocommerce-onsale-badge {
            background-color: #ff0000;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 3px;
            font-weight: bold;
        }
    ";
    
    return '<style>' . $styles . '</style><span class="' . $class . '">' . esc_html__( '-', 'woocommerce' ) . $percentage . '</span>';
}


function xem_them_wptangtoc_add_button_content($content){
if (is_product()){
$content .= '<div class="wptangtoc_readmore_woo"><span title="Xem thêm">Xem thêm</span></div>';
}
return $content;
}

add_filter( 'the_content', 'xem_them_wptangtoc_add_button_content', 100 );


add_action('wp_footer','wptangtoc_readmore_woocommerce');
function wptangtoc_readmore_woocommerce(){
if (is_product()){
?>

<style>
    .single-product div#tab-description {
        overflow: hidden;
        position: relative;
        max-height: 600px;
    }

    .wptangtoc_readmore_woo {
        text-align: center;
        cursor: pointer;
        position: absolute;
        z-index: 9999;
        bottom: 0;
        width: 100%;
        background: #fff;
    }

    .wptangtoc_readmore_woo:before {
        height: 55px;
        margin-top: -45px;
        content: "";
        background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff00', endColorstr='#ffffff', GradientType=0);
        display: block;
    }

    .wptangtoc_readmore_woo span {
        color: #6c6d70;
        display: block;
        border: 1px solid;
        margin-left: auto;
        display: flex;
        width: 130px;
        margin-right: auto;
        text-transform: uppercase;
        text-align: center;
        justify-content: center;
	}
</style>
<script>
    let xemThemButtonMore = document.querySelector(".wptangtoc_readmore_woo");
    let xemThemNoiDung = document.getElementById("tab-description");
    const divInnerContentHeight = document.querySelector('.woocommerce-Tabs-panel--description').scrollHeight;
    let your_height = 599;
    if (divInnerContentHeight > your_height) {
        xemThemButtonMore.addEventListener("click", () => {
            xemThemNoiDung.style.maxHeight = "none";
            xemThemButtonMore.style.display = "none";
        })
    } else {
        xemThemNoiDung.style.maxHeight = "none";
        xemThemButtonMore.style.display = "none";
    };
</script>
<?php
	}
}




