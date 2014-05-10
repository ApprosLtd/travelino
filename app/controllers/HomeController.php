<?php

use \Michelf\Markdown;

class HomeController extends BaseController {

    public $layout = 'home.layout';
    
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getIndex()
	{
        //$this->layout->regions = Region::paginate(30);
        
		//$this->layout->regions = Region::city()->paginate(30);
        
        $this->layout->content = '';
	}
    
    
    public function getNode($id)
    {
        $node = Article::find($id);
        
        $this->layout->content = $node->content;
    }
    
    
    public function getInfo()
    {
        //
        
        return;
        
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
        
        $content = Markdown::defaultTransform($content);
        
        return $content;
    }

}