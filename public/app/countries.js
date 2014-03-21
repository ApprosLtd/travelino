/**
* Страны
*/

App.CountryModel = DS.Model.extend({
    id: 'hello_world',
    cid: DS.attr('number'),
    description_ru: DS.attr('string'),
    short_description_ru: DS.attr('string'),
    name_en: DS.attr('string'),
    name_ru: DS.attr('string'),
    continent_id: DS.attr('number'), 
    continent_name_en: DS.attr('string'), 
    continent_name_ru: DS.attr('string')
});

App.CountryView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){
        
        $('.layout').addClass('covert-display');
        
        this.qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "http://travelino.appros.ru/countries/34",
            width: 128,
            height: 128,
            colorDark : "#A01515",
            colorLight : "#ffffff",
            //correctLevel : QRCode.CorrectLevel.H
        });

        return;
        $('.place-information').mCustomScrollbar({
            theme: 'dark',
            horizontalScroll: false,
            autoDraggerLength: true
        });
        
    },
    willDestroyElement: function(){
        $('.layout').removeClass('covert-display');
    }
});

App.CountriesRoute = Ember.Route.extend({
    model: function(){
        //if (this.get('isLoaded')) return;
        //console.log('CountriesRoute::model');
        return this.store.find('country', {page: 1});
    }
});

App.CountriesView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){        
        App.rerenderGridline(this);
    }
});