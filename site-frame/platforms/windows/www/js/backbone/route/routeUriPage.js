define(['jquery', 
        'jqueryMobile',
        'underscore', 
        'backbone',
        'views/homeView',
        'views/homedetail'], 
    function ($, mobile,_, Backbone,HomeView,HomeViewDetail) {
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
            
            var self = this;

                self.showloader('body');

                self.changePage(new HomeView( {} ));

            setTimeout(function() {

              $('body').removeClass('ui-loading');  
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
            }, 2e3);

              
       },
       homedetail: function () {

            var self = this;

                self.showloader('body');

                self.changePage(new HomeViewDetail( {} ));

                setTimeout(function() {

              $('body').removeClass('ui-loading');   //remove class
               
            }, 1e3);
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
