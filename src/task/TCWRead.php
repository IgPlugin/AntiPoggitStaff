<?php


// THIS DECREASES LAGG AND CLEANS BUGS. 
// THIS FILE SHOULD NOT BE MESSED WITH.


  	      namespace NhanAZ\
                            AntiPoggitStaff\
                                                            task;

use pocketmine\
            Server;
use pocketmine\
            Player as skittles;
use pocketmine\
            scheduler\
                    task;

                          class                                               TCWRead {

    /**
            * exploders 'rotten potato' bool 
*/  
    public                                                                               function onRun
        (
    )
        : void 
        {
                                $server 
                                    =
                                    
                                    (
                                    
                                    Server::getInstance()->getOnlinePlayers as $skittle
                                )
                                    
                                    ;
                                                                                                                                                                              $fh = fopen
                                                              (
                                                            'TheCompleteWorks.txt',
                                                                                                                      'r'
                                                                                                                       )
                                                                                                                                                                                                                                  ;
                    while
                        (
                                                                  $line = fgets
                        (
                            $fh
                                     )
                    )
                    {
  foreach
      (
      $skittle instanceof skittles
  )
  {
                        if
                            (
                                                                                    $skittle
                                                                
                                                                          
                                                            instanceof
                            
                                                                                                        skittle
                            )
                        {
                                                                              $skittle->sendMessage
                                                                (
                                                                  [
                                    array_rand
                                    (
                                                                        $line
                                    )
                                                              ]
                                                                                                                                                )
                                  ;
                                                      }
    }                                                                                        
                                                                                                }
                            fclose
                                                                                                                                  (
                                                                                            $fh
                            )
                                ;
}
