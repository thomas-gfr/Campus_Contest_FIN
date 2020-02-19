<?php


if(!isset($_COOKIE['first_connection']))
{
echo 'first connection ';
setcookie('first_connection',60,'./first_connection');
}
else
{
    echo "re mec !";
}

?>