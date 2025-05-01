<?php
if (isset($_POST['imgBase64'])) {
    $data = $_POST['imgBase64'];
    $data = str_replace('data:image/jpeg;base64,', '', $data);
    $data = str_replace(' ', '+', $data);
    $imgData = base64_decode($data);
    $directory = 'images/';
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
    $filename = $directory . 'photo_' . time() . '.jpg';
    file_put_contents($filename, $imgData);
}
?>