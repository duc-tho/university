<?php

// composer dump-autoload

/**
 * Upload file vào public folder có thể tùy chỉnh đường dẫn trong public qua biến $save_path
 * @param file $file
 * @param string $save_path
 * @return string $public_path_of_upload_file
 */
function upload_file($file, $save_path = "/")
{
    return $file->store($save_path, ['disk' => 'public_file']);
}

/**
 * Kiểm tra url link nếu ko xác định thì trả về 'javascript:'
 *
 * @param string $url
 * @return string 'javascript:'
 */
function checkURL($url)
{
    if (
        $url == null ||
        $url == '#' ||
        $url == ''
    ) return 'javascript:';
    else return $url;
}

// Lấy setting
function getSettingValue($settings, $key)
{
    foreach ($settings as $item) if ($item['name'] === $key) return $item['value'];
}

// Lấy menu
function getCategories($categories, $parent_id = 0)
{
    foreach ($categories as $key => $item) {
        if ($item['parent_id'] == $parent_id) {
            if ($parent_id !== 0) {
                foreach ($categories as $parent) {
                    if ($parent['id'] == $item['parent_id']) {
                        $temp = [];
                        if ($parent['child']) {
                            $temp = $parent['child'];
                            array_push($temp, $item);
                            $parent['child'] = $temp;
                        } else {
                            $temp = [];
                            array_push($temp, $item);
                            $parent['child'] = $temp;
                        }
                    }
                }
                unset($categories[$key]);
            }
            getCategories($categories, $item['id']);
        }
    }
}

// Chuyển thởi gian từ db sang DMY
function ConvertDatabaseTimeToDMY($date_str)
{
    return date("d-m-Y", strtotime($date_str));
}
