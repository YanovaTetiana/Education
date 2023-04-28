define(["ko", "uiComponent", "jquery"], (ko, Component, jquery) => {
    "use strict";

    return Component.extend({
        defaults: {
            imports: {
                showList: '${ $.provider }:data',
                list: '${ $.provider }:data.list',

            }
        },
        // list: ko.observable([]),
        myFunction: function () {
            if (jquery('#test_lists ul').length > 0) {
                jquery('#test_lists ul').remove();
            }
            let list = this.list;
            if (!list || list.length == 0) {
                return;
            }
            jquery('#test_lists').append('<ul>');
            let ul = jquery('#test_lists ul');
            jquery.each( list, function( key, value ) {
                ul.append(jquery('<li>').text(value.name));
            });

        },
        initialize: function () {
            this._super();
            console.log('initialize!');
            this.set('list', [{'name': 'Veronica','lastname': 'Costello'}, {'name': 'Veronica2','lastname': 'Costello2'}]);
        },
        showList: function() {
            this.myFunction();
        },

    });
});
