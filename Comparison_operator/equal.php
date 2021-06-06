<?php
var_dump('3.14' == 3.14000);  //true
var_dump('3.14E2' == 314);  //true
var_dump('0x10' == 16);  //false
var_dump('010' == 8);  //false

var_dump('0b11' == 3);  //false
var_dump('13xyz' == 13);  //true
var_dump('X' == 0);  //true
var_dump('3.14' == '3.14000'); //true
var_dump('3.14E2' == '314');  //true
var_dump('13xyz' == '13');  //false
