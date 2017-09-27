<?php
/**
 * Created by PhpStorm.
 * User: fishing
 * Date: 17-9-27
 * Time: 下午3:59
 */

/**
 * 汇编语言中有一种移位指令叫做循环左移（ROL），现在有个简单的任务，
 * 就是用字符串模拟这个指令的运算结果。对于一个给定的字符序列S，请
 * 你把其循环左移K位后的序列输出。例如，字符序列S=”abcXYZdef”,要求
 * 输出循环左移3位后的结果，即“XYZdefabc”。是不是很简单？OK，搞定它！
 */

/**
 * @param $str
 * @param $n
 * 左旋转字符串
 */
function LeftRotateString($str, $n)
{
    // write code here
    $len = strlen($str);
    ReverseString($str,0,$n-1);
    ReverseString($str,$n,$len-1);
    ReverseString($str,0,$len-1);
}

/**
 * @param string $str
 * @param int $start
 * @param int $end
 * 旋转一个字符串
 */
function ReverseString(string &$str, int $start, int $end) {
    $oldStart = $start;
    $oldEnd = $end;
    while ($start < $end) {
        $temp = $str[$start];
        $str[$start++] = $str[$end];
        $str[$end--] = $temp;
    }
    for ($i = $oldStart; $i <= $oldEnd; $i++)
        echo $str[$i];
    echo "</br>";
}

LeftRotateString("abcdefg",2);
