/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'payscrowgateway',
                component: 'Payscrow_PayscrowGateway/js/view/payment/method-renderer/payscrowgateway'
            }
        );
        return Component.extend({});
    }
);