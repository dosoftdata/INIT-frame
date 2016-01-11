define(['jquery','underscore', 'backbone', 'routers/routeUriPage'], 
    function ($, _, Backbone, uriContent) {
    var router = Backbone.Router.extend({
        routes: {
            '':'home',
            'home':'home',
            'homedetail':'homedetail'
        },
        initialize: function() {
            var routeName;
            for (var route in this.routes) {
                routeName = this.routes[route];
                this.route(route, routeName, $.proxy(uriContent[routeName], uriContent));
            }
        },
        start: function () {
            Backbone.history.start();
        }
    });
    app.Router  = new router();
    return app.Router;
});