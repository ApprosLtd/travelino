App.ContinentsMap = null;

/**
* Континенты
*/
App.ContinentsView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){
        google.maps.event.addDomListener(window, 'load', function(){
            App.ContinentsMap = new google.maps.Map(document.getElementById('map-continents'), {
                zoom: 2
            });
        });
    },
    willDestroyElement: function(){
        //
    }
});
