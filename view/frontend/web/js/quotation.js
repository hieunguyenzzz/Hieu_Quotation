define([
    'jquery'
], function ($) {
    return function (config, node) {
        let products = [];
        checkoutConfig.quoteItemData.map(item => {
            const {product} = item;
            const {entity_id, name, description, sku, small_image, thumbnail, weight, status, manufacturer} = product;
            products.push({entity_id, name, description, sku, small_image, thumbnail, weight, status, manufacturer});
        });
        let postData = {
            products
        };
        $(node).on('click', () => {
            $.ajax({
                url: config.quotePostUrl,
                method: 'POST',
                data: JSON.stringify(postData),
                contentType: 'application/json',
                success: function (data) {
                    /**
                     * @todo handle returned value
                     */
                    console.log('quote data has sent')
                }
            });
        });

    };
});