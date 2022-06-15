<?php
function seed($fileName){

    $data = array(
        array(
            'fname'=>'Jamal',
            'lname'=>'Ahmed',
            'class'=>7,
            'Roll'=>10,
            
        ),
        array(
            'fname'=>'Kamal',
            'lname'=>'Ahmed',
            'class'=>7,
            'Roll'=>11,
            
        ),
        array(
            'fname'=>'Kholil',
            'lname'=>'Ahmed',
            'class'=>7,
            'Roll'=>9,
            
        ),
        array(
            'fname'=>'Kartik',
            'lname'=>'Chandra',
            'class'=>7,
            'Roll'=>5,
            
        ),
        array(
            'fname'=>'Stephen',
            'lname'=>'Smith',
            'class'=>7,
            'Roll'=>15,
            
        ),
    );
    $serializedData= serialize($data);
    file_put_contents($fileName, $serializedData, LOCK_EX);
}


?>