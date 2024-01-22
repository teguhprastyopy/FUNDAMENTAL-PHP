<?php
$nilai = 75;
$absen = 75;

// if ($nilai >= 75 && $absen >= 75) echo "halah";

if ($nilai >= 75 && $absen >= 75){
    echo "aman saja" . PHP_EOL;
} 
else if($nilai < 60 && $absen < 60) {
    echo "nilai mu kurang" . PHP_EOL;
}
else {
    echo "gk usah sekolah, capek capek in ibu guru aja". PHP_EOL;
}

if ($nilai >= 75 && $absen >= 75) :
    echo "aman saja". PHP_EOL;
elseif ($nilai < 60 && $absen < 60) :
    echo "nilai mu kurang". PHP_EOL;
else :
    echo "gk usah sekolah, capek capek in ibu guru aja". PHP_EOL;
endif;

