<!-- 
Create a script to construct the following pattern, using nested for loop. Go to the editor

*  
* *  
* * *  
* * * *  
* * * * *

 -->
<?php
    #variable $i in the for loop determines how many lines we print the asterisk. 
    for ($i=1; $i <= 5; $i++) {

        #variable $count_per_line determines number of asterisks to be printed in each line and we initialise the value to 1 because each line must at least have one print.
        $count_per_line = 1;

        while($count_per_line <= $i){
            echo '*';

            #We increment the count per line 
            $count_per_line++;
        } 
        
        #we add a break tag after each loop of variable $i to make the next print show in a new line
        echo '<br>';
    }
?>