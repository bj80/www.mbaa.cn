<?php

class InscribeController extends BaseController {

	public function InscribeList()
	{
	    
	    $inscribeList = DB::connection('db1')->select('SELECT * FROM `mbaa`.`inscribe` ORDER BY itime');
		return View::make('static.fdlc.inscribe', array('head_title' => '题字 - MBAA.cn' , 'inscribeList' => $inscribeList));
	}
	
    public function InscribeShow($sid)
	{
	    $story = DB::connection('db1')->select('select * from story where sid = ?', array($sid));
	    $story = (array)$story[0];
	    //$story = DB::select('select * from story where id = ?', array($sid));
		return View::make('static.storyshow', array('head_title' => $story['stitle']." - MBAA.cn" ,'stitle' => $story['stitle'], 'scontent' => $story['scontent'] , 'stime' => $story['stime'] , 'author' => $story['author'] , 'sid' => $story['sid']));
        //return $story['scontent'];
		//return gettype($story);
	}

}
