<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing Ago Format with Object Oriented PHP by Geoff Maguda</title>
</head>
<body>
    
    <?php

       include "classLibrary/agoClass.php";

               date_default_timezone_set('Africa/Lusaka');
                
               /* In real times just use time() function only without - 200. 
                  i have included that for demonstrating purposes

                  $uploadTimeStamp represents the current timestamp in which your article etc. was uploaded
                   200 is how many seconds have passed since upload and you can try changing the number
               */
                $uploadTimeStamp = time() - 90;



                // object creation

                 $agoObject = new GetAgo();

                $agoFormat = $agoObject->getAgoMethod($uploadTimeStamp);
               echo $agoFormat;





    ?>





</body>
</html>