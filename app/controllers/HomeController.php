<?php

class HomeController extends BaseController {

    public $layout = 'home.layout-2-10';

	public function getIndex()
	{
        //$this->layout->regions = Region::paginate(30);
        
		//$this->layout->regions = Region::city()->paginate(30);
        
        $page  = \Input::get('page', 1);
        
        $this->layout->title = 'Главная';
        
        $items = Article::cacheArticlesList($page);
        
        $items_content = '';
        if ($items) {
            foreach ($items as $item) {
                $items_content .= View::make('home.item_content', (array) $item);
            }
        }
        
        $this->layout->paginator = Paginator::make($items, 3500, 30)->links();
        
        $this->layout->content = $items_content;
	}
    
    
    public function getSitemap()
    {
        $sitemap = App::make("sitemap");

        $sitemap->setCache('laravel.sitemap', 360000);

        $articles = Article::where('title', '!=', '')->get();

        if ($articles) {
            foreach ($articles as $article) {
                $url = URL::to('art/' . $article->translit);
                $sitemap->add($url, $article->updated_at, '0.8', 'monthly');
            }
        }

        return $sitemap->render('xml');
    }


    public function getInfo()
    {
        $recs = Article::all();

        foreach ($recs as $rec) {
            $rec->translit = \URLify::filter( $rec->title );
            $rec->save();
        }
        
        return '5';
        
        echo phpinfo();
        
        return '';
    }
    
    
    public function anyContent()
    {
        $titles = Input::get('titles');
        
        $url = 'http://en.wikipedia.org/w/api.php?action=query&prop=revisions&rvprop=content&format=json&titles=' . $titles;
        
        $data = file_get_contents($url);
        
        $data = json_decode($data);
        
        print_r($data);
        
        $pages = (array) $data->query->pages;
        
        $page = current($pages);
        
        
        return '';
        
        $revision = (array) $page->revisions[0];
        
        $content = $revision['*'];
        
        $content = \Michelf\Markdown::defaultTransform($content);
        
        return $content;
    }

}
