<?php

$x = 1;
$y = 0;

if($x === 1) {
    if($y === 1) {
        print '変数$x、&yは1です。';
    } else {
        print '変数&xは１ですが、$yは１ではありません。';
    }
} else {
    print '変数$xは１ではありません。';
}

//　変数&xは１ですが、$yは１ではありません。