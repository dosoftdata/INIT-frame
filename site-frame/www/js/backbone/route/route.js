define( function (require) {
	var $          = require('jquery'), 
    mobile         = require('jqueryMobile'),
    _              = require('underscore'), 
    Backbone       = require('backbone');
	
    var router = Backbone.Router.extend({
        routes: {
            '':'home',
            'home':'home',
            'homedetail':'homedetail',
            '*actions' : 'error' // default action,mapping
        },
        showloader : function(selector){
            
            $(selector).addClass('ui-loading');

          },
          
          hideloader : function(selector,timer){
          return
            setTimeout(function() {

                $(selector).removeClass('ui-loading');   //remove class
                 
              }, timer);
          },
          home: function() {
              
              var self       = this,
              HomeView       = require('views/homeView');

                  self.showloader('body');

                  self.changePage(new HomeView( {} ));

              setTimeout(function() {

                $('body').removeClass('ui-loading');  
              }, 2e3);

                
         },
         homedetail: function () {
              var self           = this,
                  HomeViewDetail = require('views/homedetail');
                  self.showloader('body');
                  self.changePage(new HomeViewDetail( {} ));
                  setTimeout(function() {
                $('body').removeClass('ui-loading');   //remove class              
              }, 1e3);
         },
         error : function () {
             var self    = this,
                 options = {
          	   status : 404,
          	   statusText : 'Page nor found!'
             },
             ErrorView      = require('views/general/error');
             
                 self.showloader('body');
                 
                 self.changePage(new ErrorView( options ));
                 
                 setTimeout(function() { $('body').removeClass('ui-loading'); }, 1e3);
        },
          changePage:function (page) {
              
          $(page.el).attr('data-role', 'page');

          page.render();
          
          $('body').append($(page.el));

          var transition = $.mobile.defaultPageTransition;
          
          // We don't want to fade the first page. Slide, and risk the annoying "jump to top".
          //if (this.firstPage) {
            //  transition = "none";
             // this.firstPage = false;
          //}
          $.mobile.changePage($(page.el), { changeHash:false, transition: transition });
         },
        /*
        initialize: function() {
            var routeName;
            for (var route in this.routes) {
                routeName = this.routes[route];
                this.route(route, routeName, $.proxy(uriContent[routeName], uriContent));
            }
        },
        */
        start: function () {
            Backbone.history.start();
            
            var loading = $( '#loading' );
            $( function() {
                $(document).ajaxStart( function (){
                    loading.show();
                } );
                $( document ).ajaxComplete( function() {
                    loading.hide();
                } );
                loading.hide();
            } );
            //add it to global so it can be accessed
            window.$Molbile =  {};
            window.$Molbile.router = router;
            window.$Molbile.backstate = {};
            window.$Molbile.backstate.isFromBack = false;
            window.$Molbile.backstate.pages = {};
            
            var ios_status = {
                    iphone  :{},
                    android :{},
                    windows : {},
                    Opera : {},
                    BlackBerry : {},
                    Others :{}
                };

                ios_status.iphone.standalone = window.navigator.standalone,
                ios_status.iphone.userAgent  = window.navigator.userAgent.toLowerCase(),
                ios_status.iphone.safari     = /safari/.test(ios_status.iphone.userAgent),
                ios_status.iphone.ios        = /iphone|ipod|ipad/.test(ios_status.iphone.userAgent),
                ios_status.iphone.webview    = (!ios_status.iphone.standalone && !ios_status.iphone.safari) && ios_status.iphone.ios;

                ios_status.android.standalone = window.navigator.standalone,
                ios_status.android.userAgent  = window.navigator.userAgent.toLowerCase(),
                ios_status.android.browser    = /chrome|firefox/.test(ios_status.android.userAgent),
                ios_status.android.ios        = /Android/.test(ios_status.android.userAgent),
                ios_status.android.webview    = (!ios_status.android.standalone && !ios_status.android.browser) && ios_status.android.ios;

                ios_status.windows.standalone = window.navigator.standalone,
                ios_status.windows.userAgent  = window.navigator.userAgent.toLowerCase(),
                ios_status.windows.browser    = /MSIE/.test(ios_status.windows.userAgent),
                ios_status.android.ios        = /Windows Phone/.test(ios_status.windows.userAgent),
                ios_status.android.webview    = (!ios_status.windows.standalone && !ios_status.windows.browser) && ios_status.windows.ios;

                ios_status.Opera.standalone = window.navigator.standalone,
                ios_status.Opera.userAgent  = window.navigator.userAgent.toLowerCase(),
                ios_status.Opera.browser    = /Opera/.test(ios_status.Opera.userAgent),
                ios_status.Opera.ios        = /Opera/.test(ios_status.Opera.userAgent),
                ios_status.Opera.webview    = (!ios_status.Opera.standalone && !ios_status.Opera.browser) && ios_status.Opera.ios;

                ios_status.BlackBerry.standalone = window.navigator.standalone,
                ios_status.BlackBerry.userAgent  = window.navigator.userAgent.toLowerCase(),
                ios_status.BlackBerry.browser    = /BlackBerry|BB/.test(ios_status.BlackBerry.userAgent),
                ios_status.BlackBerry.ios        = /BlackBerry/.test(ios_status.BlackBerry.userAgent),
                ios_status.BlackBerry.webview    = (!ios_status.BlackBerry.standalone && !ios_status.BlackBerry.browser) && ios_status.BlackBerry.ios;

            
        }
    });
    app.Router  = new router();
    return app.Router;
});