
<html>
<body>
<div>
<?php
$database = array(
    array(
        "username" => "pippo",
        "password" =>"123456", 
        "id" => "1",
        "role" => "guest", //tabella separata
        "name" => "mattia", 
        "surname" => "contini", 
        "email" => "mc@h.it", 
        "address" => "via monte 20", 
        "payment" => "1234123412341234"
    ),
    array(
        "username" => "pluto",
        "password" =>"123456", 
        "id" => "2",
        "role" => "dealer", //tabella separata
        "name" => "matteo", 
        "surname" => "cocco", 
        "email" => "mc@o.it", 
        "address" => "via monte 30", 
        "payment" => "1234123412341234",
        "piva" => "x5za93i"
    )
);

function searchUserIntoFakeDatabase($username, $password, $array) {
   foreach ($array as $user) {
       if ($user["username"] === $username &&
           $user["password"] === $password) {
           return $user;
       }
   }
   return null;
}
$user = searchFor("pluto", "123456", $database);
print $user["email"];
?>
</div>


</body>
</html>