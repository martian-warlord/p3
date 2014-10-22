<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('paragraphs', function()
{

$paragraphs_routed =  $_GET["numberParagraphs"];  

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($paragraphs_routed);
echo implode('<p>', $paragraphs);
    
});



Route::get('users', function()
{

$users_routed =  $_GET["numberUsers"];

$faker = Faker\Factory::create();

$agento = "";

for ($i=0; $i < $users_routed; $i++) {

 $agento .= $faker->name;


}

return View::make('userz')-> with('success', $agento);



});



// Route::get('retailers/{region}/{name}', function($region, $name) {

//     $query = Table::newQuery();

//     if ($region == 'country')
//     {
//         $query->where('country', $name);
//     }
//     else

//     if ($region == 'city')
//     {
//         $query->where('city', $name);
//     }

//     return View::make('retailers.show')->with('table' => $query->get());

// });





// Route::get('/new', function() {

//     $view  = '<form method="POST">';
//     $view .= 'Title: <input type="text" name="title">';
//     $view .= '<input type="submit">';
//     $view .= '</form>';
//     return $view;

// });

// Route::get('/simple/{squirrel}', function($squirrel)
// {
//     $data['squirrel'] = $squirrel;

//     return View::make('simple', $data);
// });
