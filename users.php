<?php
$users = [];
$users["1"] = ["name" => "Pasha", "email" => "pashacool@gmail.com", "lang" => "en"];
$users["3"] = ["name" => "Тест", "email" => "likachill2005@gmail.com", "lang" => "ru"];
$users["2"] = ["name" => "Anton", "email" => "anton@gmail.com", "lang" => "de"];
$users["5"] = ["name" => "Klara", "email" => "klairmery@gmail.com", "lang" => "de"];
$users["4"] = ["name" => "Тест", "email" => "test@test.com", "lang" => "ua"];
$greetings=["ua"=>"Вітаю","ru"=>"Здравствуйте","en"=>"Hello","fr"=>"Salut","de"=>"Hallo","pl"=>"Hej"]; 

echo "Users:";
echo count($users);
echo "<br/>";
echo ksort($users);//Сортировка
echo "<br/> Макс айди: ";
var_dump(array_key_last($users));
echo "<br/> Мин айди: ";
var_dump(array_key_first($users));
echo "<br/> ПредМин айди: ";
next($users);
var_dump(key($users));
echo "<br/> ПредМакс айди: ";
end($users);
prev($users);
var_dump(key($users));
//array_pop($users); Удалить мин id
echo "<pre>";
print_r($users);
echo "</pre>";

foreach($greetings as $id=>$gr)
{
    if(($users[array_key_first($users)]["lang"] === $users[array_key_last($users)]["lang"])&&($users[array_key_first($users)]["lang"] === $id))
    {
        $first=$gr;
        $last="";
        break;
    }

    if ($users[array_key_first($users)]["lang"] === $id)
        $first=$gr;

    if($users[array_key_last($users)]["lang"] === $id)
        $last=$gr;
}

$message=$first." ".$last;
echo "<script type='text/javascript'>alert('$message');</script>";



//Задание 1
$nameUser = array_count_values(array_column($users,'name'));
for ($i=0; $i <= count($nameUser) ; $i++) { 
	 unset($nameUser[array_search(1, $nameUser)]);
}
print_r($nameUser);

//Задание 2
$languageUser=[];
foreach ($users as $id=>$info)
{
    if(!array_key_exists($info["lang"], $languageUser))
    {
       $languageUser[$info["lang"]] = [$info];
   }
   else
   {
    array_push($languageUser[$info["lang"]],$info);
}
}

//задание 3
$reverse_array=[];
$reverse_array=array_reverse($users, true);

echo '<pre>';
print_r($languageUser);
echo '</pre>';
?>