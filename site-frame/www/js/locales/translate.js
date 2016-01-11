/**
 * Translation object
 */

Translate = {

    data : {},
    timeout : null,

    /**
     * Saves the translations that are used in Javascript
     */
    save : function() {

        var request = {
            DATA : this.data
        };

        $.ajax({
            type : "POST",
            url : '/translate/index',
            data : request
        });

    },

    /**
     * Gets the JS translation
     */
    get : function(sLabel) {

        var me = this;

        try {

            sLabel = sLabel.toUpperCase();

            if (undefined != this.data[sLabel]) {
                return this.data[sLabel];
            } else {

                var sTranslation = this.getTranslation(sLabel);

                this.data[sLabel] = sTranslation;

                //clear the timeout - maybe it was triggered before
                clearTimeout(this.timeout);

                //set the timeout
                this.timeout = setTimeout(function(){
                    me.save();
                }, 1000);

                return sTranslation;
            }
        } catch (e) {
        }
    },

    /**
     * Returns a default translation LB_ will be cut off from the begin.
     *
     * @example: LB_ASSET_CLASS will return 'Asset Class'
     */
    getTranslation : function(str) {

        // cut of the LB_ if it's there
        if (0 == str.indexOf("LB_")) {
            str = str.slice(3);
        }

        str = str.toLowerCase();

        var a = str.split("_");
        for ( var i = 0; i < a.length; i++) {
            a[i] = a[i].charAt(0).toUpperCase() + a[i].slice(1);
        }

        return a.join(' ');
    }
};

tup = function() {
    Translate.save();
};

tget = function(s) {
    return Translate.get(s);
};
