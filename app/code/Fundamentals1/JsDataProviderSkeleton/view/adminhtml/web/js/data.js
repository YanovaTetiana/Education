define(["uiComponent", "jquery"], (Component, jquery) => {
    "use strict";

    return Component.extend({
        defaults: {
            imports: {
                _list: '${$.provider}:data.list'
            },
            tracks: {
                list: true,
                output: true
            },
            list: [],
            output: [],
        },

        initialize: function () {
            this._super();
            this.add();
        },

        add: function () {
            this.output.push({text: "name"});
            this.output.push({text: "lastname"});
        },

        _list: function (list) {
            let me = this;
            list.forEach((element) => {
                element.output = me.output;
                me.list.push(element);
            });
            jquery('#test_template').parent().find("div[data-role='spinner']").css('display', 'none');
            return true;
        }
    });
});