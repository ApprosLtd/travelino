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
        
        $('.intro-side').css('width', '20%');
        $('.covert-side').css('width', '30%');
        $('.content-side').css('width', '50%');
        
        this.qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "Албания, Европа: http://travelino.appros.ru/countries/34",
            width: 128,
            height: 128,
            colorDark : "#A01515",
            colorLight : "#ffffff",
            //correctLevel : QRCode.CorrectLevel.H
        });

        $('.place-information').mCustomScrollbar({
            theme: 'dark',
            horizontalScroll: false,
            autoDraggerLength: true
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