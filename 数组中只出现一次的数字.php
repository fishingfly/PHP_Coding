<?php
/**
 * Created by PhpStorm.
 * User: fishing
 * Date: 17-9-21
 * Time: 上午9:50
 */
function FindNumsAppearOnce($array) {
    // write code here
    // return list, 比如[a,b]，其中ab是出现一次的两个数字
    //异或所有数字
    $len = count($array);
    if ($len == 0) return -1;
    $result = $array[0];
    for($i = 1; $i < $len; $i++) {
        $result ^= $array[$i];
    }
    $pos = findBitOne($result);
    $a = 0;
    $b = 0;
    for($i = 0; $i < $len; $i++) {
        echo IsBitOne($array[$i],$pos-1).",".$array[$i].PHP_EOL;
        if (IsBitOne($array[$i],$pos-1)) {
            $a ^= $array[$i];
        }  else {
            $b ^= $array[$i];
        }
    }
    $arr = ['a'=> $a,'b'=>$b];
    return $arr;
}

/**
 * 找出这个数字二进制位中最高位为1的位置
 * @param int value
 * @return int
 */

function findBitOne(int $value) {
    $result = 0;
    while ($value != 0) {
        $result++;
        $value = $value >> 1;
    }
    return $result;
}

/**
 * 判断数字的第$pos位是不是1
 * @param int $value
 * @return bool
 */

function IsBitOne(int $value, int $pos) {
    $value = $value >> $pos;
    return $value&1;
}


    $data = [1,2,3,4,5,2,3,4,5,6];
    var_dump(FindNumsAppearOnce($data));
