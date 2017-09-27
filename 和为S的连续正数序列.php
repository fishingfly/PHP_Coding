<?php
/**
 * Created by PhpStorm.
 * User: fishing
 * Date: 17-9-27
 * Time: 下午2:35
 */

/**
 * 和为S的连续正数序列
 * @param $sum
 * @return 打印出符合条件的正数序
 */
function FindContinuousSequence($sum)
{
    // write code here
    if ($sum < 3) return;
    $small = 1;
    $big = 2;
    $mid = ($sum + 1)/2;
    $curSum = $small + $big;
    while($small < $mid) {
        if ($curSum == $sum) {
            printContinuousSequence($small, $big);
        }
        while($curSum > $sum && $small < $mid) {
            $curSum -= $small;
            $small++;
            if($curSum == $sum) {
                printContinuousSequence($small,$big);
            }
        }
        $big++;
        $curSum += $big;
    }
}

function printContinuousSequence(int $small, int $big) {
    for ($i = $small; $i <= $big; $i++) {
        echo $i.",";
    }
    echo "</br>";
}
    FindContinuousSequence(15);

