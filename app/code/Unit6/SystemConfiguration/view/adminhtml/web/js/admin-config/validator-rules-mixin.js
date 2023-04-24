define([
    'jquery'
], function ($) {
    'use strict';
    return function (target) {
        $.validator.addMethod(
            'validate-float-five',
            function (value) {
                return value === '' || value == null || value.length === 0 || /^\s+$/.test(value) || /^\d+(\.\d{1,5})?$/.test(value);
            },
            $.mage.__('Please enter number with 5 decimal places.')
        );
        return target;
    };
});
