<?php
// echo "echo statement"."second echo statement <br>";



// $name ="Sami";
// $age = 19;
// $speaksenglish =true;
// $persentage = 90.89;


// echo ($name."<br>" . $age ."<br>" .$speaksenglish ."<br>"   .  $persentage); 

// echo( var_dump($age) . "<br>");
// echo( var_dump($speaksenglish) . "<br>");
// echo( var_dump($name) . "<br>");
// echo( var_dump($persentage) . "<br>");

// if($age <20 ){
//     if($speakingenglish = false){

//         echo "$zulq ki shadi nh hogi";
//     }else {
//         echo "mh hogi kbi bh";
//     }
// }
// else{
//     echo"hojaigi";
// }

// $time1 = "8:30PM";

// if($time1 >= "4:30AM" && $time1 <= "6:00AM"){
//     echo "its time to perform the Nmz e faajar";

// }elseif($time1 >="1:30PM" && $time1 <= "3:30PM"){
//    echo"its time to perform the Nmz e Duhr";

// }elseif($time1 >="4:00PM" && $time1 <= "6:45PM"){
//    echo"its time to perform the Nmz e Asar";

// }elseif($time1 >="7:00PM" && $time1 <= "7:30PM"){
//    echo"its time to perform the Nmz e Maghrib";

// }elseif($time1 >="8:30PM" && $time1 <= "12:00AM"){
//     echo"its time to perform the Nmz e Isha";

// }else{
//     echo"No time for praying";
// }

$time = strtotime( "5:00PM");

switch(strtotime ($time)){
    case(strtotime ($time) >="4:30AM" && strtotime($time) <= "6:00AM");
    echo "its time to perform nmz e fjr";
    break;
}
switch($time){
    case (strtotime ($time) >="1:30PM" && strtotime($time) <= "4:00PM");
    echo "its time to perform nmz e duhr";
    break;
}
switch($time){
    case (strtotime ($time) >="4:00PM" && strtotime($time) <= "7:00PM");
    echo "its time to perform nmz e Asr";
    break;
}
switch($time){
    case (strtotime ($time) >="7:30PM" && strtotime($time) <= "8:00PM");
    echo "its time to perform nmz e Maghrib";
    break;
}
switch($time){
    case (strtotime ($time) >="8:30PM" && strtotime($time) <= "12:00PM");
    echo "its time to perform nmz e Isha";
    break;
    // default:
    // echo "ap 7 k nh ho";
}


?>
