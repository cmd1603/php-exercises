 <?php

 // Set the default timezone
 // date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = ('Sunday');

 switch($dayOfWeek) {
     case 'Monday':
         echo '1';
         break;
     case 'Tuesday':
         echo '2';
         break;
     case 'Wednesday':
         echo '3';
         break;
     case 'Thursday':
         echo '4';
         break;
     case 'Friday':
         echo '5';
         break;
     case 'Saturday':
         echo '6';
         break;
     case 'Sunday':
         echo '7' ;
         break;                                                    
 }