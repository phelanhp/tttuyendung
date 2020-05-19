<?php

function ConvertDateTimeToSave($date){
    return date('Y-m-d', strtotime($date));
}

function ConvertDateTimeToShow($date){
    return date('d-m-Y', strtotime($date));
}
