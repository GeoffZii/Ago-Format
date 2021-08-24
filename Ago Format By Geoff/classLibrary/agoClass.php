<?php


   // get time ago class
    class GetAgo{

        // get time ago method
            public function getAgoMethod($timestamp){
                
                            date_default_timezone_set('Africa/Lusaka');
                            
                            $stamp = time() - $timestamp;
                                $endword = ["sec","min","hour","day","week","month","year"];
                            

                                    switch($stamp){
                                    case $stamp < 60 && $stamp >1 :
                                    
                                        if($stamp != 1) { $endword[0].="s"; }
                                                    $output = "$stamp $endword[0]";
                                                            
                                                return $output." ago";
                                        break;
                                    
                                    case $stamp >=60 && $stamp < 3600 :
                                                        $stamp = $stamp/60;
                                                        $stamp = round($stamp);
                                            if($stamp == 1){ $output = "a $endword[1]";}
                                                elseif($stamp > 1)  {$endword[1].="s"; 
                                                                    $output = "$stamp $endword[1]";}
                                                        
                                                return $output." ago";
                                                break;
                                    
                                    
                                        case $stamp >=3600 && $stamp < 86400 :
                                                        $stamp = $stamp/3600;
                                                        $stamp = round($stamp);
                                                if($stamp == 1){ $output = "an $endword[2]";}
                                                
                                                elseif($stamp > 1)  {$endword[2].="s"; 
                                                                    $output = "$stamp $endword[2]";}
                                                        
                                                
                                                return $output." ago";
                                                break;
                                                
                                        case $stamp >=86400 && $stamp < 604800 :
                                                        $stamp = $stamp/86400;
                                                        $stamp = round($stamp);
                                                if($stamp == 1){ $output = "a $endword[3]";}
                                                elseif($stamp > 1)  {$endword[3].="s"; 
                                                                    $output = "$stamp $endword[3]";}
                                                        
                                                
                                                
                                                return $output." ago";
                                                break;
                                                
                                        case $stamp >=604800 && $stamp < 2630880 :
                                                        $stamp = $stamp/604800;
                                                        $stamp = round($stamp);
                                                if($stamp == 1){ $output = "a $endword[4]";}
                                            
                                                elseif($stamp > 1)  {$endword[4].="s"; 
                                                                    $output = "$stamp $endword[4]";}
                                                        
                                            return $output." ago";	
                                            break;
                                        case $stamp >=2630880 && $stamp < 31570560 :
                                                        $stamp = $stamp/2630880;
                                                        $stamp = round($stamp);
                                                if($stamp == 1){ $output = "a $endword[5]";}
                                                elseif($stamp > 1)  {$endword[5].="s"; 
                                                                    $output = "$stamp $endword[5]";}
                                                        
                                                
                                                return $output." ago";
                                                break;
                                        case $stamp >=31570560 :
                                                        $stamp = $stamp/31570560;
                                                        $stamp = round($stamp);
                                                if($stamp == 1){ $output = "a $endword[6]";}
                                                elseif($stamp > 1)  {$endword[6].="s"; 
                                                                    $output = "$stamp $endword[6]";}
                                                        
                                                
                                            return $output." ago";	
                                                break;
                                    
                                    }

                            }
         }

?>