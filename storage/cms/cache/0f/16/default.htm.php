<?php 
class Cms5ba28a98c993b049979150_e358889e43b7c27a387d915548c70f51Class extends Cms\Classes\LayoutCode
{
public function onStart(){
	$lookups = \Worcbox\StaticData\Models\Lookup::all();
	foreach($lookups as $lookup) {
		$this[str_replace(".", "_", $lookup->code)] = ['key' => $lookup->key, 'value' => $lookup->value];
	}
}
}
