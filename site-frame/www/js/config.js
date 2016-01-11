/**
 * configure RequireJS
 * prefer named modules to long paths, especially for version mgt
 * or 3rd party libraries
 */
require.config({
	waitSeconds: 5,
    baseUrl: 'js/',
    urlArgs: "kicker=" + Math.round( new Date().getTime() / 300000 ) * 300000, /*5 min cache*/
    paths:{
    	jquery :'vendor/jquery/jquery',
    	bootstrap :'vendor/bootstrap/bootstrap.min',
    	bootstrapdatetimepicker :'vendor/bootstrap/datetimepicker.min',
    	hammer :'vendor/hammer/hammer.min',
    	highcharts :'vendor/highcharts/highcharts',
    	'moment':'vendor/moment/moment.with.locales.min',
    	backbone :'vendor/backbone/backbone-min',
    	BackoneLocalStorage :'vendor/backbone/backbone.localStorage.min',
    	backboneModal :'vendor/backbone/backbone.ModalDialog',
    	underscore : 'vendor/underscore/underscore'
    	swiper : 'vendor/swiper/swiper.min',
    	titonToolkit :'vendor/toolkit/toolkit.min',
    	text : 'vendor/requirejs/plugins/text',
    	'css' : 'vendor/requirejs/plugins/css.min',
    	module : 'app/module/',
    	model : 'app/model/',
    	modelCollection :'app/collection/',
    	template :'app/template/'
    	router : 'app/router',
    	app : 'app/app'
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
            bootstrap: ['jquery'],
            titonToolkit : ['jquery'],
            bootstrapdatetimepicker: ['css! ../style/bootstrap/datetimepicker.min.css'],
            swiper : ['jquery','css! ../style/swiper/swiper.min.css'],
            backboneModal :['bootstrap', 'backbone','css! ../style/backbone/backbone.modal-min.css','css! ../style/backbone/backbone.modal.theme-min.css'],
        },
        /*Application kick start*/
        deps: ['main'] 		
});