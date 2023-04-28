define(["uiComponent"], (Component) => {
    "use strict";

    return Component.extend({
        defaults: {
            simple: "Hello World - text on page"
        },
        initialize: function () {
            this._super();
            console.log("Hello World 222");
        }
    })
});
