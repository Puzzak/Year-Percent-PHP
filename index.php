<?php
    $startsec=strtotime("01-01-".date("Y"));
    $nextyear=intval(date("Y")) + 1;
    $endsec=strtotime("01-01-".$nextyear);
    $totalsec=$endsec - $startsec;
    $nowsec=time() - $startsec;
    $percentsec=($nowsec/$totalsec)*100;
    $round=round($percentsec, 3, PHP_ROUND_HALF_UP);
    $outperc="".$round."% of ".date("Y")." passed";
    echo $round."% of this year is done(or roughly ".percentsec."%)!";
 ?>
