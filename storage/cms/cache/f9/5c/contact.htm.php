<?php 
class Cms5bb0943cbf155213451078_1ba1137afa4bc4afd683148e95b5eed0Class extends Cms\Classes\PageCode
{
public function onConfirm(){
	if (Request::isMethod('post')) {
		$data = Input::all();
		$rules = [
			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'body' => 'required',
			
		];
		$messages = [
			'required' => 'حقل إلزامى',
			'email' => 'البريد الإلكترونى غير صحيح'
		];
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            throw new October\Rain\Exception\ValidationException($validator);
        }

		$params = Input::all();
        Illuminate\Support\Facades\Mail::sendTo('syaq.app@gmail.com', 'worcbox.syaq.contact::mail.message', $params);
	}
}
}
