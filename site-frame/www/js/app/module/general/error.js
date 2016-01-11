define(['jquery', 
        'underscore', 
        'backbone', 
         'text!template/general/error.html'
        ],
    function ( $, _, Backbone,viewTPL) {
      
	 return Backbone.View.extend( {

	        //initialize template
	        template: _.template( viewTPL ),

	        initialize : function( options ) {

	            this.status = options && options.status || 500;
	            this.statusText = options && options.statusText || '';

	        },

	        //render the content into div of view
	        render: function() {

	            var $this = this;

	            $this.$el.html( $this.template( {
	                status: $this.status,
	                statusText: $this.statusText
	            }) );

	            return this;

	        }

	    } );
    
});