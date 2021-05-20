<?php
declare(strict_types=1);


echo "Exercise 1 starts here:";
// Added a parameter to the function.
function new_exercise($x) {
    $block = "<br/><hr><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

new_exercise(2);

// The first index is 0
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise(3);

// Changed the "quote" tags to the appropriate ones

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);


new_exercise(4);
// Added the "&" character in the foreach syntax

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);



new_exercise(5);

// Added a max length of 1 too the array
$arr = [];
/*for ($letter = 97; $letter <= 122; $letter++) {

    array_push($arr, chr($letter));

}*/
/*for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
}*/

for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}


print_r($arr);




new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];
$arr[] = randomGenerate($arr,5);
var_dump($arr);

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ",$params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        $name = randomHeroName() . "-" . randomHeroName();
        array_push($arr, $name);
    }

    return $arr;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, count($hero_firstnames)-1)];


    return $randname;
}

echo "Here is the name: " . combineNames();



new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
//Make date() --> idate() to return the date as an integer
echo copyright(idate('Y'));



new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith <br>';

    }
    return 'No access<br>';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!




new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        //var_dump(strpos($link, $unacceptable));
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }

    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');



new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

//from here on you can change the code

for($i=0; $i <= count($areTheseFruits)+1; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}

var_dump($areTheseFruits);//do not change this