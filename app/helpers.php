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
