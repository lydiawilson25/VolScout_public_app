<?php

class EntriesController extends BaseController {

# Handles "GET asdf" request
	public function getIndex()
	{
		Log::info('asfasfds');
		return View::make('home')->with('entries', Entry::all());
	}

# Handles "POST asdf"  request
	public function postIndex()
	{
		Log::info('2323232');
		$entry = array(
				'username' => Input::get('frmName'),
				'email'    => Input::get('frmEmail'),
				'comment'  => Input::get('frmComment'),
			      );
		Entry::create($entry);
		return Redirect::to('asdf');
	}

}
