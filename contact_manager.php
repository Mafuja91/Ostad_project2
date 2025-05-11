<?php
// Contact Manager Application
$name1 = "";
$phone1 = "";

$name2 = "";
$phone2 = "";
$loop = true; 
while($loop){
    
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
    $choice = fgets(STDIN);
    switch(trim($choice)){
        case 1:
            //Add Contact
            if($name1 == ""){
                echo "Enter Name1: ";
                $name = fgets(STDIN);
                echo "Enter Phone Number1: ";
                $phone = fgets(STDIN);
                $name1 = trim($name);
                $phone1 = trim($phone);

            }else if($name2 == ""){
                echo "Enter Name2 ";
                $name = fgets(STDIN);
                echo "Enter Phone Number2: ";
                $phone = fgets(STDIN);
                $name2 = trim($name);
                $phone2 = trim($phone);
            }
            else{
                echo "Contact list is full, try another option.\n";
            }
            break;
        case 2:
            //View Contacts
            if($name1 != "" || $name2 != ""){
                if($name1!='')echo "Contact 1: Name: $name1, Phone: $phone1\n";
                if($name2!='')echo "Contact 2: Name: $name2, Phone: $phone2\n";
                }
                else{
                    echo "No contacts available.\n";
                }
            break;
        case 3:
            //Exit
            echo "Exiting the program. Goodbye!\n";
            $loop = false;
            break;
        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }

}





?>