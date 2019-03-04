<?php
//セピア調にするパラメータを受け取る
$param = $_REQUEST['param'];

//アウトプット画像のファイル名指定
$output_file = date('YmdHis').'_output.jpg';

//ImageMagickで加工
exec('convert input.jpg -sepia-tone '.$param.'% '.$output_file);

//作成画像のパス返却
$response = array(
    'request_param' => $param,
    'output_file' => $output_file
);
echo json_encode($response);