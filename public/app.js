App = Ember.Application.create();

App.ApplicationView = Em.View.extend({
    classNames: ['full-height']
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
    host: '/ajax'
});

App.Router.map(function(){
    this.resource('continents');
    this.resource('countries');
    this.resource('cities');
    this.resource('airports');
    this.resource('hotels');
    this.resource('tours');
    this.resource('places');
    this.resource('trails');
});

App.City = DS.Model.extend({
    name: DS.attr('name')
});

App.Cities = DS.Store.extend();

App.CitiesRoute = Ember.Route.extend({
    model: function(){
        return this.store.all(App.City);
        return this.store.find('City');
    }
});