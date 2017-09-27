<?php
/**
 * Created by PhpStorm.
 * User: fishing
 * Date: 17-9-27
 * Time: 下午4:28
 */

/**
 * LL今天心情特别好,因为他去买了一副扑克牌,发现里面居然有2个大王,2个小王(一副牌原本是54张^_^)..
 * .他随机从中抽出了5张牌,想测测自己的手气,看看能不能抽到顺子,如果抽到的话,他决定去买体育彩票,
 * 嘿嘿！！“红心A,黑桃3,小王,大王,方片5”,“Oh My God!”不是顺子.....LL不高兴了,他想了想,决定
 * 大\小 王可以看成任何数字,并且A看作1,J为11,Q为12,K为13。上面的5张牌就可以变成“1,2,3,4,5”
 * (大小王分别看作2和4),“So Lucky!”。LL决定去买体育彩票啦。 现在,要求你使用这幅牌模拟上面的过
 * 程,然后告诉我们LL的运气如何。为了方便起见,你可以认为大小王是0。
 *
 * 先排序
 * 统计0的个数
 * 统计相邻两个数字之间的间隔数
 * 间隔数==0的个数，则是顺子
 * 注意：相邻的两个数字如果是相同的，那这五张牌绝对不可能是顺子
 */


/**
 * @param $numbers
 * @return bool
 * 判断数组中五个值是不是顺子
 */
function IsContinuous(array $numbers)
{
    // write code here
    sort($numbers);
    $arrTemp = array_count_values($numbers);
    $zero_count = $arrTemp['0'];
    $needNum = 0;
    $lastNum = $numbers[$zero_count];
    for ($i = $zero_count + 1; $i < count($numbers); $i++) {
        $nowNum = $numbers[$i];
        if ($nowNum == $lastNum) return false;
        else if ($nowNum - $lastNum > 1) {
            $needNum += ($nowNum - $lastNum - 1);
        }
        $lastNum = $nowNum;
    }
    return $needNum <= $zero_count ? true : false;
}

var_dump(IsContinuous([3,5,6,0,0]));
