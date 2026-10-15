//This is a review of the first lessons on php
<?php
$name = "Laracasts";
$cost = 25;
$categories = ["testing", "PHP", "JavaScript"];

$business = [
    'name' => 'Laracasts',
    'cost' => 15,
    'categories' => ["testing", "PHP", "JavaScript"],
];

if (($business['cost'] > 99)){
    echo "The cost is too expensive";
}

foreach ($business['categories'] as $category){
    echo $category . "<br>";
}

function register($user){
    //Create the new user record
    //Log the user in after registration
    //Return the newly registered user
    //Redirect user to the homepage
}
?>