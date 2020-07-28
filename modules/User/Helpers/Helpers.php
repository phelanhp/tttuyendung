<?php

function ConvertDateTimeToSave($date){
    return date('Y-m-d', strtotime($date));
}

function ConvertDateTimeToShow($date){
    return date('d-m-Y', strtotime($date));
}

/**
 * @param $array
 * @param $attribute
 * @param int $sort
 *
 * @return mixed
 */
function sortArrayByAttribute($array, $attribute, $sort = SORT_ASC){
	if (!empty($array)){
		foreach ($array as $key => $row){
			$attribute_array[$key] = $row[$attribute];
		}
		array_multisort($attribute_array, $sort, $array);
	}
	return $array;
}