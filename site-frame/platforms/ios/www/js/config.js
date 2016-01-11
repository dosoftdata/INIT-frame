/**
 * configure RequireJS
 * prefer named modules to long paths, especially for version mgt
 * or 3rd party libraries
 */
    require.config({
    	//context: "app",
    	waitSeconds: 5,
        baseUrl: 'js/',
        urlArgs: "_j=" + Math.round( new Date().getTime() / 300000 ) * 300000, /*5 min cache*/
        paths: {
            jquery: 'jquery/jquery2.1.4',
            jqueryMobile: 'jquery/jquery.mobile1.4.5',
            backbone: 'backbone/backbone',
            backboneModal: 'backbone/plugins/backbone.ModalDialog',
            backboneModel: 'backbone/model',
            backboneModelCollection: 'backbone/collection',
            backboneModelCollectionRoute: 'backbone/route',
            backboneModelCollectionView: 'backbone/view',
            underscore : 'underscore/underscore',
            routers: 'backbone/route',
            views: 'backbone/views',
            text : 'requirejs/plugins/text',
            template : 'underscore/template'
        },
        /**
         * for libs that either do not support AMD out of the box, or
         * require some fine tuning to dependency mgt'
         */
        shim: {
            'backbone': {
                deps: ['underscore', 'jquery'],
                exports: 'Backbone'
            },
            'underscore': {
                exports: '_'
            },
            'jqueryMobile': {
                deps: ['jquery'],
                exports: 'mobile'
            },
        },
        deps: [
            // kick start application... see bootstrap.js
            './app'
        ]
    });

    window.app         = window.app  || {};
    app.Router         = null;
    app.RouterContent  = null;
    app.Views          = app.Views || {};
    app.Model          = null;
    app.deviceApi      = app.deviceApi || {};

    define(['routers/route','underscore'], 

        function( router ,_ ){
        
        _.templateSettings = {
            interpolate: /\{\{\=(.+?)\}\}/g,
            evaluate: /\{\{(.+?)\}\}/g
        };

        $(document).ready(function(){
            router.start();
            navigator.notification.alert("PhoneGap is initialized...");
         $(document).bind("deviceready", function(){
             navigator.notification.alert("PhoneGap is initialized...");
           });
        });
    });