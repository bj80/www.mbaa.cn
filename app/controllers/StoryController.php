<?php

class StoryController extends BaseController {

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

	public function StoryList()
	{
	    
	    $storyList = DB::connection('zenkr.hz')->select('SELECT * FROM `mbaa`.`story` ORDER BY sid DESC  LIMIT 50');
	    //$storyList = $storyLis;
		return View::make('static.story', array('head_title' => '故事 - MBAA.cn' , 'storyList' => $storyList));
	}
	
    public function StoryShow($sid)
	{
	    $story = DB::connection('zenkr.hz')->select('select * from story where sid = ?', array($sid));
	    $story = (array)$story[0];
	    //$story = DB::select('select * from story where id = ?', array($sid));
		return View::make('static.storyshow', array('head_title' => $story['stitle']." - MBAA.cn" ,'stitle' => $story['stitle'], 'scontent' => $story['scontent'] , 'stime' => $story['stime'] , 'author' => $story['author'] , 'sid' => $story['sid']));
        //return $story['scontent'];
		//return gettype($story);
	}

}
