App = Ember.Application.create();

App.ApplicationView = Em.View.extend({
    classNames: ['full-height']
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
    host: '/api'
});

App.Router.reopen({
    location: 'history'
})


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