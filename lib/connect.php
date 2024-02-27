<?
$db = mysqli_connect (
    '127.0.0.1:3306', 
    'root',
    '', 
    'hell'
);

if(!$db) 
{
    die ('connect error'); 
}