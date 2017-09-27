<?php
/**
 * Created by PhpStorm.
 * User: fishing
 * Date: 17-9-27
 * Time: 下午3:13
 */

/**
 *
 * 题目描述
输入一个递增排序的数组和一个数字S，在数组中查找两个数，
是的他们的和正好是S，如果有多对数字的和等于S，输
出两个数的乘积最小的。
 */

/**
 * @param $array
 * @param $sum
 * 和为S的两个数字
 */

function FindNumbersWithSum($array, $sum)
{
    // write code here
    $len = count($array);
    if ($len < 2) return;
    $small = $array[0];
    $big = $array[$len - 1];
    $mid = $sum/2;
    $curSum = $small + $big;
    while($small < $big && $small < $mid) {
        if ($curSum == $sum) {
            printContinuousSequence($small, $big);
        }
        while ($curSum > $sum && $small < $big) {
            $curSum -= $big;
            $big--;
            $curSum += $big;
            if ($curSum == $sum) {
                printContinuousSequence($small, $big);
            }
        }
        //处理和小于s
        $curSum -= $small;
        $small++;
        $curSum += $small;
    }

}

function printContinuousSequence(int $small, int $big) {
    echo $small.",".$big;
    echo "</br>";
}

FindNumbersWithSum([1],8);
