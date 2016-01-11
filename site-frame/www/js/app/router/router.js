define( function (require) {
	var $     = require('jquery'), 
    _         = require('underscore'), 
    Backbone  = require('backbone'),
    Container = require('./module/general/container'),
	container = new Container( { el: '#container'} );
    
    var Router = Backbone.Router.extend({
        routes: {
            '':'index',
            'home':'index',
            '*actions' : 'error' // default action,mapping
        },
        error : function() {
            console.log('error');
            var ErrorView = require( './module/general/error' ),
            view = new ErrorView ( { status: 404 } );
            this.showView( view );
        },
        index : function(actions) {
            var IndexView = require( './module/home/index' ),
                view = new IndexView(),
                eventType = 'renderCompleted:Home';
            this.showView( view, { back_button: false } );
        },
        showView: function( newView, options ) {

            container.changeView( newView, options );

        }
            
    });
    
    return Router;
});