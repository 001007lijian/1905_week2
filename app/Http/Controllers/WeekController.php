<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekController extends Controller
{
    //加密的
    public function ascii()
    {
        $char = 'hello world';
        $length = strlen($char);     //长度；
        // echo $length;die;
        $pass = "";
        for($i=0;$i<$length;$i++){
            echo $char[$i] . '>>>' . ord($char[$i]);echo '</br>';
            $ord = ord($char[$i]) + 3;
            $chr = chr($ord);
            echo $char[$i] . '>>>' . $ord .'>>>' .  $char;echo '<hr>';
            $pass .= $chr;
        }
        echo '</br>';     echo $pass; 
    }
    //解密的
    public function dec()
    {
        $enc = 'khoor#zruog';
        echo '密文:' . $enc;echo '<hr>';
        $length = strlen($enc);        //长度

        $str = "";
        for($i=0;$i<$length;$i++)
        {
            $ord = ord($enc[$i]) -3;
            $chr = chr($ord);
            echo $ord . '>>>' .$chr; echo '</br>';
            $str .=$chr;
        }
        echo '解密为:' .$str;
    }
}
