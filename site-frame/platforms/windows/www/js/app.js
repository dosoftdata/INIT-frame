
define(['jquery','jqueryMobile'], function($,mobile){
       'use strict';
       $(document).ready(function(){
    	   $.mobile.ajaxEnabled = false;
    	   $.mobile.linkBindingEnabled = false;
    	   $.mobile.hashListeningEnabled = false;
    	   $.mobile.pushStateEnabled = false;
         $.mobile.allowCrossDomainPages = true;
    	   $.mobile.defaultPageTransition = "slide";
    	    // Remove page from DOM when it's being replaced.
    	    $("div[data-role='page']").on("pagehide", function (event, ui) {
    	        $(event.currentTarget).remove();
    	    }); 
    	    $( document ).on( "pageinit", "#home-page", function() {
    			$( document ).on( "swipeleft", "#home-page", function( e ) {
    				
    				$( "#main-menu" ).panel( "open" );

    			});
    		});
          
    	    console.log('pagehide');
       });

});