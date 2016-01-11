define( function (require) {
	var $              = require('jquery'), 
	    mobile         = require('jqueryMobile'),
	    _              = require('underscore'), 
	    Backbone       = require('backbone');
	
    app.RouterContent = {

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
              /*
              app.deviceApi = {
                init : function(){
    var element = document.getElementById('deviceProperties');
        element.innerHTML = 'Device Name: '     + device.name     + '<br />' +
                            'Device Cordova: '  + device.cordova  + '<br />' +
                            'Device Platform: ' + device.platform + '<br />' +
                            'Device UUID: '     + device.uuid     + '<br />' +
                            'Device Model: '    + device.model    + '<br />' +
                            'Device Version: '  + device.version  + '<br />';
                   console.info('app.deviceApi.test'); 
                }
              }
     app.deviceApi.init();
              */
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
           ErrorView      = require('views/error');
           
               self.showloader('body');
               
               self.changePage(new ErrorView( {status: 404} ));
               
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
}

    return app.RouterContent;
});
