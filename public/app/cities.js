/**
* Города
*/

App.CityModel = DS.Model.extend({
    cid: DS.attr('number'),
    name: DS.attr('string')
});

App.CityView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){
        
        $('.intro-side').css('width', '20%');
        $('.covert-side').css('width', '30%');
        $('.content-side').css('width', '50%');
        
        $('.place-information').mCustomScrollbar({
            theme: 'dark',
            horizontalScroll: false,
            autoDraggerLength: false
        });
        
        return;
        
        $('.intro-side').animate({
            width: '20%'
        }, 200);
        $('.covert-side').animate({
            width: '30%'
        }, 200, function(){
            $('.place-information').mCustomScrollbar({
                theme: 'dark',
                horizontalScroll: false,
                autoDraggerLength: false
            });
        });
        $('.content-side').animate({
            width: '50%'
        }, 200);
        
        return;
        
        $('.scrollbar').mCustomScrollbar({
            theme: 'dark-thick',
            horizontalScroll: true,
            autoDraggerLength: false
        });
    },
    willDestroyElement: function(){
        $('.intro-side').css('width', '25%');
        $('.covert-side').css('width', '0%');
        $('.content-side').css('width', '75%');
        return;
        $('.intro-side').animate({
            width: '25%'
        }, 200);
        $('.covert-side').animate({
            width: '0%'
        }, 200);
        $('.content-side').animate({
            width: '75%'
        }, 200);
    }
});


//App.CitiesModel = DS.Store.extend();

App.CitiesRoute = Ember.Route.extend({
    model: function(){
        //if (this.get('isLoaded')) return;
        return this.store.find('city', {page: 1});
    }
});

App.CitiesView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){        
        $('.scrollbar').mCustomScrollbar({
            theme: 'dark-thick',
            horizontalScroll: true,
            autoDraggerLength: false
        });
    }
});

App.CitiesController = Ember.ArrayController.extend({
    actions: {
        briefAboutCity: function(){
            //
        }
    }
});