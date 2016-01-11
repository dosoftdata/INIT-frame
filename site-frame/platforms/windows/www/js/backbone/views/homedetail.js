define(['jquery', 
        'underscore', 
        'backbone', 
        'jqueryMobile',
        'backboneModelCollection/homeCollection',
         'text!template/homeDetail.html'
        ],
    function ( $, _, Backbone,mobile,ModelCollect,viewTPL) {

    app.Views.HomeDetailView = Backbone.View.extend({
        //el: $( "body" ),
        render: function (eventName) {
        var params = { message: "page two sub heading" };
        //console.log('page 2');
        var template = _.template( viewTPL , params);

        $(this.el).html(template);

        return this;
    },

    events: {
        "change #drpTwo": "handleChange",
        "click #button2": "handleClick"
    },

    handleClick: function (e) {
        e.preventDefault();

        alert("clicked");
    },

    handleChange: function (e) {
        e.preventDefault();

        var $this = $(e.target);

        alert($this.val());
    },

    initialize: function (options) {
        _.bindAll(this, "render");

        this.render();
    }
});

    return app.Views.HomeDetailView;
});