(function(w, d, $){
    
    function App(){
        
        this.dynamicContent = $('#dynamic-content');
        
        this.scrollWindow = false;
        
        this.router = new Backbone.Router();
        Backbone.history.start({pushState: true, hashChange: false});
        
        this.views  = {};
        this.models = {};
        this.collections = {};
        
        this.init();
    }
    
    App.prototype.init = function(){
        
        var self = this;
        
        Backbone.sync = function(method, model, options){
            $.ajax($.extend({
                url: '/api/' + model,
                dataType: 'json'
            }, options));
        }
        
        this.initRoutes(); 
        this.initModels(); 
        this.initCollections(); 
        this.initViews();
        
        this.windowScrolling(); 
        
        this.articlesCollection = new this.collections.articles();
        this.articlesCollection.load(function(){
            self.showArticles();
        });      
    }
    
    App.prototype.windowScrolling = function(){
        
        var self = this;
        
        $(window).scroll(function(){
            console.log('scroll');
        });
    }
    
    App.prototype.showArticles = function(){
        var self = this;
        self.dynamicContent.html('');
        _.each(self.articlesCollection.models, function(model, key){
            var view = new  self.views.articleMin({model:model});
            view.$el.appendTo(self.dynamicContent);              
        });
    }
    
    App.prototype.loadCollection = function(collection){
        //
    }
    
    App.prototype.initRoutes = function(){
        
        var self = this;
        
        self.router.route('', 'index', function(nodeId){
            self.showArticles();
        });
        
        self.router.route('node/:nodeId(/)', 'node', function(nodeId){            
            self.articlesCollection.get(nodeId).full(function(model){
                model.articles = self.articlesCollection.models;
                var view = new  self.views.articleFull({model: model});
                self.dynamicContent.html('');
                view.$el.appendTo(self.dynamicContent);
                $('body').scrollTop(0);
                //console.log(model.get('note'));
                /*$('.shares').html(VK.Share.button({
                    url: 'http://travelino/node/'+model.get('id'),
                    title: model.get('title'),
                    description: model.get('note'),
                    image: 'http://travelino' + model.get('image'),
                    noparse: true
                },{
                    type: 'custom',
                    text: '<img src="http://vk.com/images/vk32.png" />'
                }));*/
            });
        });
    }
    
    App.prototype.initModels = function(){
        
        var self = this;
        
        this.models.article = Backbone.Model.extend({
            full: function(callback){
                var model = this;
                this.sync('read', 'articles/' + this.id, {
                    success: function(data){
                        model = $.extend(model, data);              
                        callback(model);
                    }
                });
            }
        });
    }
    
    App.prototype.initCollections = function(){
        
        var self = this;
        
        this.collections.articles = Backbone.Collection.extend({
            model: self.models.article,
            getFill: function(id){
                //
            },
            load: function(success){
                var self = this;
                this.sync('read', 'articles', {
                    data: {
                        page: 1,
                    },
                    success: function(data){                
                        if (data.results && data.results.length > 0) {
                            self.add(data.results);
                        }
                        if (success) success(data);
                    }
                });
            }
        });
    }
    
    App.prototype.initViews = function(){
        
        var self = this;
        
        this.views.articleMin = Backbone.View.extend({
            template: Handlebars.compile( $('#tpl-article-item-mini').html() ),
            render: function() {
                this.$el = $(this.template(this.model.attributes));
                return this;
            },
            events: {
                'click a' : function(){
                    self.router.navigate('/node/' + this.model.get('id'), {trigger: true});
                    return false;
                }
            },
            initialize: function(){
                this.render();
            }
        });
        
        this.views.articleFull = Backbone.View.extend({
            template: Handlebars.compile( $('#tpl-article-item-full').html() ),
            render: function() {
                this.$el = $(this.template(this.model));
                return this;
            },
            events: {
                'click .articles-list a' : function(e){
                    self.router.navigate($(e.currentTarget).attr('href'), {trigger: true});
                    return false;
                }
            },
            initialize: function(){
                this.render();
            }
        });
    }
    
    w.App = new App();
    
})(window, document, jQuery);