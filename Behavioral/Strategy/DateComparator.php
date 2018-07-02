<?php

// 日期策略
class DateComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        if ($aDate == $bDate) {
            return 0;
        } else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}