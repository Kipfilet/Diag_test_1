<?php

    $shorter = 0;
    $taller = 0;
    $total_length = 0;

    for($i = 0; $i <= 4; $i++)
    {
        //asks for the length 
        $length[$i] = readline("Geef lengte op (in cm):", );
        
        //checks if said input is lower than 50 cm or is above 210 cm
        if($length[$i] > 49 && $length[$i] < 209)
        {
            //checks if the height is above or below 170 cm. Also saves if a height is exactly 170 cm
            if ($length[$i] < 170)
            {
                $shorter++; 
                $total_length += $length[$i];  
            }
            else if ($length > 170)
            {
                $taller++;
                $total_length += $length[$i];  
            }
        }
        else 
        {
            echo ("De lengte valt buiten de range, probeer het opnieuw \n");
            $length[$i] = 0;
            $i--; 
        }

    }

    //calculates the average height
    $average = ($total_length / 5);
    
    //shows how many people are taller, shorter or equal to 170 cm
    echo("Er zijn " . $taller . " langer dan 170 cm. \n" );
    echo("Er zijn " . $shorter . " korter dan 170 cm. \n" );
    
    //shows the average height
    echo("De gemiddelde lengte is " . $average . " cm. \n");


?>