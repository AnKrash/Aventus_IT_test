<?php
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
aliqua. Vitae tortor condimentum lacinia quis. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero nunc.
 Eget duis at tellus at urna condimentum mattis. Mauris in aliquam sem fringilla ut morbi tincidunt. 
 Congue eu consequat ac felis donec. Ac tincidunt vitae semper quis lectus nulla at volutpat diam.
  Morbi leo urna molestie at elementum eu facilisis sed. Neque viverra justo nec ultrices dui. 
  Viverra adipiscing at in tellus .';

$result = explode(' ', $text);
foreach ($result as $key => $value) {
    $num = $key + 1;

    if (($num % 15) == 0) {
        $result[$key] = 'Fifteen';
    } else if (($num % 3) == 0) {
        $result[$key] = 'Three';
    } elseif (($num % 5) == 0) {
        $result[$key] = 'Five';
    }
}

file_put_contents('text.txt',implode(' ', $result)) ;
