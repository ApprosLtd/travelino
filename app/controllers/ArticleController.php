<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 17.05.2014
 * Time: 23:57
 */

class ArticleController extends BaseController {

    public $layout = 'home.layout-2-7-3';

    public function getArticle($translit)
    {
        $article = Article::cacheArticleNode($translit);

        $this->layout->title = $article['title'];

        $this->layout->content = View::make('home.article_full', $article);
    }

} 