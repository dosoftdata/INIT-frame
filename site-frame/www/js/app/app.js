define( ['jquery', 'backbone','router'], function( $, Backbone, Router) {
    'use strict';
    return {

        initialize: function () {

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

            var router = new Router();

            //add it to global so it can be accessed
            window.bnpipad = {};
            window.bnpipad.router = router;
            window.bnpipad.backstate = {};
            window.bnpipad.backstate.isFromBack = false;
            window.bnpipad.backstate.pages = {};

            Backbone.history.start();

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
    };
} );



