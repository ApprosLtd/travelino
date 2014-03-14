App = Ember.Application.create();

App.ApplicationView = Em.View.extend({
    classNames: ['full-height']
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
    host: '/api'
});

App.Router.map(function(){
    this.resource('continents');
    this.resource('countries', function(){
        this.resource('country', { path: "/:country_id" });
    });
    this.resource('cities', function(){
        this.resource('city', { path: '/:city_id' });
    });
    this.resource('airports');
    this.resource('hotels');
    this.resource('tours');
    this.resource('places');
    this.resource('trails');
});


/**
* Страны
*/

App.CountryModel = DS.Model.extend({
    cid: DS.attr('number'),
    name: DS.attr('string')
});

App.CountryView = Ember.View.extend({
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

App.CountriesRoute = Ember.Route.extend({
    model: function(){
        return this.store.find('country', {page: 1});
    }
});

App.CountriesView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){        
        $('.scrollbar').mCustomScrollbar({
            theme: 'dark-thick',
            horizontalScroll: true,
            autoDraggerLength: false
        });
    }
});

App.CountriesController = Ember.ArrayController.extend({
    actions: {
        briefAboutCity: function(){
            //
        }
    }
});




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
