<?php

class MemberController extends BaseController {

	public function MemberList()
	{
	    
	    $memberList = DB::connection('zenkr.hz')->select('SELECT * FROM `mbaa`.`mlist` ORDER BY priority');
		return View::make('static.member', array('head_title' => '成员 - MBAA.cn' , 'memberList' => $memberList));
	}
	
    public function MemberShow($sid)
	{
	    $story = DB::connection('zenkr.hz')->select('select * from story where sid = ?', array($sid));
	    $story = (array)$story[0];
	    //$story = DB::select('select * from story where id = ?', array($sid));
		return View::make('static.storyshow', array('head_title' => $story['stitle']." - MBAA.cn" ,'stitle' => $story['stitle'], 'scontent' => $story['scontent'] , 'stime' => $story['stime'] , 'author' => $story['author'] , 'sid' => $story['sid']));
        //return $story['scontent'];
		//return gettype($story);
	}

}
