<?php

    // Retrieving Json Data
    $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");

    $data = json_decode($jsonData, true);

    // Counting the number of days in the Json File
    foreach($data as $key => $value){
        $days_count = count($value)-1;
        $days_count_prev = $days_count - 1;
    }

    $total_confirmed = 0;
    $total_recovered = 0;
    $total_deaths = 0;
        
        // Total Cases Calculation
    foreach($data as $key => $value){

        $total_confirmed = $total_confirmed + $value[$days_count]['confirmed'];
        $total_recovered = $total_recovered + $value[$days_count]['recovered'];
        $total_deaths = $total_deaths + $value[$days_count]['deaths'];
    }

    foreach($data as $d=>$v){
        if(strcmp($d, "India")){
             $days = count($v)-1;
             $days_prev = $days- 1;
            // echo $v[$days]['confirmed']." ".$v[$days]['recovered']." ".$v[$days]['deaths']."<br>";
        }
    }

    $ind_total_confirmed = 0;
    $ind_total_recovered = 0;
    $ind_total_deaths = 0;

    // india Total Cases Calculation
    foreach($data as $d => $v){
       $i = count($data["India"]) - 1; 
    $ind_total_confirmed = $data["India"][$i]['confirmed'];
    $ind_total_recovered = $data["India"][$i]['recovered'];
    $ind_total_deaths    = $data["India"][$i]['deaths'];
    
    }


        foreach($data as $dd=>$va){
        if(strcmp($dd, "China")){
             $days_c = count($va)-1;
             $days_pre = $days_c- 1;
            // echo $v[$days]['confirmed']." ".$v[$days]['recovered']." ".$v[$days]['deaths']."<br>";
        }
    }

    $ch_total_confirmed = 0;
    $ch_total_recovered = 0;
    $ch_total_deaths = 0;

    // india Total Cases Calculation
    foreach($data as $dd => $va){
       $c = count($data["China"]) - 1; 
    $ch_total_confirmed = $data["China"][$c]['confirmed'];
    $ch_total_recovered = $data["China"][$c]['recovered'];
    $ch_total_deaths    = $data["China"][$c]['deaths'];
    
    }


                foreach($data as $ddd=>$val){
        if(strcmp($ddd, "Afghanistan")){
             $days_co = count($val)-1;
             $days_press = $days_co- 1;
            // echo $v[$days]['confirmed']." ".$v[$days]['recovered']." ".$v[$days]['deaths']."<br>";
        }
    }

    $a_total_confirmed = 0;
    $a_total_recovered = 0;
    $a_total_deaths = 0;

    // india Total Cases Calculation
    foreach($data as $ddd => $val){
       $a = count($data["Afghanistan"]) - 1; 
    $a_total_confirmed = $data["Afghanistan"][$a]['confirmed'];
    $a_total_recovered = $data["Afghanistan"][$a]['recovered'];
    $a_total_deaths    = $data["Afghanistan"][$a]['deaths'];
    
    }

                // if(strcmp($d, "India")){
        // $ind_total_confirmed = $ind_total_confirmed + $v[$days]['confirmed'];
        // $ind_total_recovered = $ind_total_recovered + $v[$days]['recovered'];
        // $ind_total_deaths = $ind_total_deaths + $v[$days]['deaths'];
        
        // }


        // echo "Confirmed: $total_confirmed<br>";
    // echo "Recovered: $total_recovered<br>";
    // echo "Deaths   : $total_deaths<br>";


// foreach($data as $d=>$v){
    //     if(strcmp($d, "India")){
    //         foreach($v as $c){
    //             $days=count($v)-1;
    //             $days_prev=$days-1;
    //             echo implode("",$c)."<br>";    
    //         }
    //     }
    // }
?>