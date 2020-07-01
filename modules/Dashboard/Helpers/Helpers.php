<?php
if (!function_exists('get_directories')) {
    function get_directories($path){
        $directories = [];
        $items = scandir($path);
        foreach ($items as $item) {
            if($item == '..' || $item == '.')
                continue;
            if(is_dir($path.'/'.$item))
                $directories[] = $item;
        }
        return $directories;
    }
}


if (!function_exists('config_menu_merge')) {
    function config_menu_merge(){
        $menu = get_directories(base_path('modules'));
        $activeMenu = [];
        foreach ($menu as $key => $value) {
            $urlPath = $value.'/Config/menu.php';
            if (file_exists(base_path('modules') . '/' . $urlPath)) {
                $activeMenu[] = require(base_path('modules') . '/' . $urlPath);
            }
        }
        $activeMenu = collect($activeMenu)->sortBy('sort')->toArray();
        return $activeMenu;
    }
}

function slug($string, $options = array())
{
    //Bản đồ chuyển ngữ
    $slugTransliterationMap = array(
        'á' => 'a',
        'à' => 'a',
        'ả' => 'a',
        'ã' => 'a',
        'ạ' => 'a',
        'â' => 'a',
        'ă' => 'a',
        'Á' => 'A',
        'À' => 'A',
        'Ả' => 'A',
        'Ã' => 'A',
        'Ạ' => 'A',
        'Â' => 'A',
        'Ă' => 'A',
        'ấ' => 'a',
        'ầ' => 'a',
        'ẩ' => 'a',
        'ẫ' => 'a',
        'ậ' => 'a',
        'Ấ' => 'A',
        'Ầ' => 'A',
        'Ẩ' => 'A',
        'Ẫ' => 'A',
        'Ậ' => 'A',
        'ắ' => 'a',
        'ằ' => 'a',
        'ẳ' => 'a',
        'ẵ' => 'a',
        'ặ' => 'a',
        'Ắ' => 'A',
        'Ằ' => 'A',
        'Ẳ' => 'A',
        'Ẵ' => 'A',
        'Ặ' => 'A',
        'đ' => 'd',
        'Đ' => 'D',
        'é' => 'e',
        'è' => 'e',
        'ẻ' => 'e',
        'ẽ' => 'e',
        'ẹ' => 'e',
        'ê' => 'e',
        'É' => 'E',
        'È' => 'E',
        'Ẻ' => 'E',
        'Ẽ' => 'E',
        'Ẹ' => 'E',
        'Ê' => 'E',
        'ế' => 'e',
        'ề' => 'e',
        'ể' => 'e',
        'ễ' => 'e',
        'ệ' => 'e',
        'Ế' => 'E',
        'Ề' => 'E',
        'Ể' => 'E',
        'Ễ' => 'E',
        'Ệ' => 'E',
        'í' => 'i',
        'ì' => 'i',
        'ỉ' => 'i',
        'ĩ' => 'i',
        'ị' => 'i',
        'Í' => 'I',
        'Ì' => 'I',
        'Ỉ' => 'I',
        'Ĩ' => 'I',
        'Ị' => 'I',
        'ó' => 'o',
        'ò' => 'o',
        'ỏ' => 'o',
        'õ' => 'o',
        'ọ' => 'o',
        'ô' => 'o',
        'ơ' => 'o',
        'Ó' => 'O',
        'Ò' => 'O',
        'Ỏ' => 'O',
        'Õ' => 'O',
        'Ọ' => 'O',
        'Ô' => 'O',
        'Ơ' => 'O',
        'ố' => 'o',
        'ồ' => 'o',
        'ổ' => 'o',
        'ỗ' => 'o',
        'ộ' => 'o',
        'Ố' => 'O',
        'Ồ' => 'O',
        'Ổ' => 'O',
        'Ỗ' => 'O',
        'Ộ' => 'O',
        'ớ' => 'o',
        'ờ' => 'o',
        'ở' => 'o',
        'ỡ' => 'o',
        'ợ' => 'o',
        'Ớ' => 'O',
        'Ờ' => 'O',
        'Ở' => 'O',
        'Ỡ' => 'O',
        'Ợ' => 'O',
        'ú' => 'u',
        'ù' => 'u',
        'ủ' => 'u',
        'ũ' => 'u',
        'ụ' => 'u',
        'ư' => 'u',
        'Ú' => 'U',
        'Ù' => 'U',
        'Ủ' => 'U',
        'Ũ' => 'U',
        'Ụ' => 'U',
        'Ư' => 'U',
        'ứ' => 'u',
        'ừ' => 'u',
        'ử' => 'u',
        'ữ' => 'u',
        'ự' => 'u',
        'Ứ' => 'U',
        'Ừ' => 'U',
        'Ử' => 'U',
        'Ữ' => 'U',
        'Ự' => 'U',
        'ý' => 'y',
        'ỳ' => 'y',
        'ỷ' => 'y',
        'ỹ' => 'y',
        'ỵ' => 'y',
        'Ý' => 'Y',
        'Ỳ' => 'Y',
        'Ỷ' => 'Y',
        'Ỹ' => 'Y',
        'Ỵ' => 'Y'
    );

    //Ghép cài đặt do người dùng yêu cầu với cài đặt mặc định của hàm
    $options = array_merge(array(
        'delimiter' => '-',
        'transliterate' => true,
        'replacements' => array(),
        'lowercase' => true,
        'encoding' => 'UTF-8'
    ), $options);

    //Chuyển ngữ các ký tự theo bản đồ chuyển ngữ
    if ($options['transliterate']) {
        $string = str_replace(array_keys($slugTransliterationMap), $slugTransliterationMap, $string);
    }

    //Nếu có bản đồ chuyển ngữ do người dùng cung cấp thì thực hiện chuyển ngữ
    if (is_array($options['replacements']) && !empty($options['replacements'])) {
        $string = str_replace(array_keys($options['replacements']), $options['replacements'], $string);
    }

    //Thay thế các ký tự không phải ký tự latin
    $string = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $string);

    //Chỉ giữ lại một ký tự phân cách giữa 2 từ
    $string = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', trim($string, $options['delimiter']));

    //Chuyển sang chữ thường nếu có yêu cầu
    if ($options['lowercase']) {
        $string = mb_strtolower($string, $options['encoding']);
    }

    //Trả kết quả
    return $string;
}

function upload_multi_file($name,$old){
    echo '<br>';
    echo '<input type="file" name="'.$name.'[]" id="file-1" value="'.$old.'" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />';
    echo '<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Chọn hình ảnh&hellip;</span></label>';

}

function upload_file($name,$old, $label = NULL){
    echo '<br>';
    echo '<input type="file" name="'.$name.'" id="file-1" value="'.$old.'" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />';
    echo '<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>';
    if(empty($label)){
        echo 'Chọn hình ảnh&hellip;';
    }else{
        echo $label;
    }
    echo '</span></label>';
}
