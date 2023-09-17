<?php
$number = rand(1,100);
while(true){

    $user_input = readline("Enter a number: ");

    if($user_input > $number){
        printf("Try a lower number. \n");
    }else if($user_input < $number){
        printf("Try a bigger number.\n");
    }else{
        printf("Congrats! You guesed it right!");
        break;
    }
}
?>