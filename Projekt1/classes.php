<?php
//Ez lesz az ős osztály
class Forms{
    protected $uName;
    protected $uPass;
    protected $uNameErr;
    protected $uPassErr;
    
}
//Login űrlap validálásához létrehozott osztály
class LoginCheck extends Forms{

}

//Regisztrációs űrlap validálásához létrehozott osztály
class RegCheck extends Forms{

}
?>