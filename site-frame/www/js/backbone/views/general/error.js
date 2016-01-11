define(['jquery', 
        'underscore', 
        'backbone', 
         'text!template/general/error.html'
        ],
    function ( $, _, Backbone,viewTPL) {

    app.Views.Error = Backbone.View.extend({
        el: $("body") ,
        template : _.template( viewTPL),
        
        initialize: function (options) {
        	this.status = options && options.status || 500;
            this.statusText = options && options.statusText || '';
            _.bindAll(this, "render");

            //this.render();
           },
           
        render: function () {

        	var $this = this;

            $this.$el.html( $this.template( {
                status: $this.status,
                statusText: $this.statusText
            }) );

            return this;

    },

    
    });

    return app.Views.Error;
});