/**
* Города
*/

App.CityModel = DS.Model.extend({
    cid: DS.attr('number'),
    name_en: DS.attr('string'),
    name_ru: DS.attr('string'),
    country_id: DS.attr('number'), 
    country_name_en: DS.attr('string'), 
    country_name_ru: DS.attr('string')
});

App.CityView = Ember.View.extend({
    classNames: ['full-height'],
    didInsertElement: function(){
        
        //$('.intro-side').css('width', '20%');
        //$('.covert-side').css('width', '30%');
        //$('.content-side').css('width', '50%');
        
        $('.layout').addClass('covert-display');

        this.qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "http://travelino.appros.ru/cities/2",
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
        $('.layout').removeClass('covert-display');
        //$('.intro-side').css('width', '25%');
        //$('.covert-side').css('width', '0%');
        //$('.content-side').css('width', '75%');
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
        App.rerenderGridline(this);
    }
});