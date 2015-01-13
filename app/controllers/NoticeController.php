<?php

class NoticeController extends BaseController {

	public function NoticeList()
	{
	    
	    $noticeList = DB::connection('db1')->select('SELECT * FROM `mbaa`.`story` ORDER BY sid DESC  LIMIT 50');
		return View::make('static.story', array('head_title' => '故事 - MBAA.cn' , 'storyList' => $noticeList));
	}
	
    public function NoticeShow($nid)
	{
	    $notice = DB::connection('db1')->select('select * from notice where nid = ?', array($nid));
	    $notice = (array)$notice[0];
        return View::make('static.noticeshow', array('head_title' => $notice['ntitle']." - MBAA.cn" ,'ntitle' => $notice['ntitle'], 'ncontent' => $notice['ncontent']));
	}

}
