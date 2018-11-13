<?php 
class Cms5ba28ab51c6c3741740450_8ba0b76ad88aadeff914e55fedd97e40Class extends Cms\Classes\PageCode
{
public function onEnd(){
	if (Auth::check()){
		if (Illuminate\Support\Facades\Session::has('order')) {
			return Redirect::to('confirm');
		} else {
			return Redirect::to('/');
		}
	} 
}
}
