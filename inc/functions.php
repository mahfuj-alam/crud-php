<?php
define('DB_Name','\\laragon\\www\\php\\crud-php\\data\\data.txt');
function seed(){

    $data = array(
        array(
            'id'=> 1,
            'fname'=>'Jamal',
            'lname'=>'Ahmed',
            'class'=>7,
            'Roll'=>10,
            
        ),
        array(
            'id'=> 2,
            'fname'=>'Kamal',
            'lname'=>'Ahmed',
            'class'=>7,
            'Roll'=>11,
            
        ),
        array(
            'id'=> 3,
            'fname'=>'Kholil',
            'lname'=>'Ahmed',
            'class'=>7,
            'Roll'=>9,
            
        ),
        array(
            'id'=> 4,
            'fname'=>'Kartik',
            'lname'=>'Chandra',
            'class'=>7,
            'Roll'=>5,
            
        ),
        array(
            'id'=> 5,
            'fname'=>'Stephen',
            'lname'=>'Smith',
            'class'=>7,
            'Roll'=>15,
            
        ),
    );
    $serializedData= serialize($data);
    file_put_contents(DB_Name, $serializedData, LOCK_EX);
}
function generateReport(){
    $serializedData = file_get_contents(DB_Name);
    $students = unserialize($serializedData);
    ?>

    <table>
        <tr>
            <th>ID No.</th>
            <th>Roll</th>
            <th>Name</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
        <?php 
        foreach ($students as $student) {
            ?>
            <tr>
                 <td><?php printf("%s", $student['id']);?></td>
                 <td><?php printf("%s", $student['Roll']);?></td>
                <td><?php printf("%s %s", $student['fname'], $student['lname']);?></td>
                <td><?php printf("%s", $student['class']);?></td>
                <td><?php printf('<a href="/crud-php/index.php?task=edit&id=%s">Edit</a> | <a href="/crud-php/index.php?task=delete&id=%s">Delete</a>',$student['id'],$student['id']);?></td>
            
            </tr>
           <?php
        }
        
        ?>
    </table>
    <?php
}
