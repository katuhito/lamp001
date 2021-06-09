<?php

$result = `dir`; //dirコマンド実行

// print mb_convert_encoding($result, 'UTF-8', 'SJIS');
// =>windowsの場合の処理

print $result;


