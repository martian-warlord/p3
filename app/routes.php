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

Route::get('/home', function()
{
	return View::make('home');
});

Route::get('paragraphs', function()
{


if ( isset($_GET["numberParagraphs"]))

	{

		if (is_numeric($_GET["numberParagraphs"])) 
			{

				$paragraphs_routed =  $_GET["numberParagraphs"];  
				$generator = new Badcow\LoremIpsum\Generator();
				$lorem_paragraphs = "";

					if ($paragraphs_routed > 10)
						{
						$paragraphs_routed = 10;
						}

					if ($paragraphs_routed < 1)
						{
						return View::make('neednumber');
						}


				for ($i=0; $i < $paragraphs_routed; $i++)
					{
					$paragraphs = $generator->getParagraphs(1);
					$lorem_paragraphs .= implode('<p>', $paragraphs);
					$lorem_paragraphs .= '</p>';
					}

				return View::make('para')-> with('success', $lorem_paragraphs);
			}

					return View::make('neednumber');
	} 


});



Route::get('users', function()
{


if ( isset($_GET["numberUsers"])) 

	{
		if (is_numeric($_GET["numberUsers"])) 
			{

			$users_routed =  $_GET["numberUsers"];
			$faker = Faker\Factory::create();
			$agento = '';


				if ($users_routed > 10)
					{
					$users_routed = 10;
					}

				if ($users_routed < 1)
					{
					return View::make('neednumber');
					}



			for ($i=0; $i < $users_routed; $i++) 
				{
				$agento .= '<p>';
				$agento .= $faker->name;
				$agento .= '</br>';
				$agento .= $faker->company;
				$agento .= '</br>';
				$agento .= $faker->bs;
				$agento .= '</br>';
				$agento .= $faker->address;
				$agento .= '</p>';
				}
			return View::make('userz')-> with('success', $agento);
			} 
				
				return View::make('neednumber');		
					
	} 


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
