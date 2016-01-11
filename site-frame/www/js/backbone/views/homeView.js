define(['jquery', 
        'underscore', 
        'backbone', 
        'jqueryMobile',
        'backboneModelCollection/homeCollection',
         'text!template/home.html'
        ],
    function ( $, _, Backbone,mobile,ModelCollect,viewTPL) {

    app.Views.HomeView = Backbone.View.extend({
        //el: $( "body" ),
        render: function (eventName) {
        var params = { message: "page one sub heading" };

        var template = _.template( viewTPL , params);

        $(this.el).html(template);

        return this;
    },

    events: {
        "change #drpOne": "handleChange",
        "click #button1": "handleClick"
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

    return app.Views.HomeView;
});