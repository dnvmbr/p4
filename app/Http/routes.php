<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';
});

Route::get('/courses', 'CourseController@getIndex');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/courses/create', 'CourseController@getCreate');
    Route::post('/courses/create', 'CourseController@getPost');

    Route::get('/courses/edit', 'CourseController@getEdit');
    Route::post('/courses/edit', 'CourseController@postEdit');

    Route::get('/courses/{title?}/add', 'CourseController@getAdded');
    Route::get('/courses/{title?}/remove', 'CourseController@getRemoved');


    Route::get('/', 'DashController@getIndex');
});


Route::get('/courses/{title?}', 'CourseController@getShow');

# Login form
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

# Logout form
Route::get('/logout', 'Auth\AuthController@getLogout');

# Registration form
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');


Route::get('/test',function(){
    // $userCourses = \App\Course::whereHas('users', function($query)
    // {
    //     $query->where('user_id', '=', \Auth::id());
    // })->get();
    // $requirements = \App\Requirement::all();
    //
    // $satisfied_requirements = []; // array to keep track of satisfied requirements
    // $count = 0;
    // $total_hours_for_this_requirement = null;
    // $hours_completed = 0;
    // $reamaining_hours = 0;
    //
    //
    // foreach ($userCourses as $userCourse) {
    //     $course = \App\Course::where('id','=',$userCourse->id)->with('requirements')->first();
    //     foreach($course->requirements as $requirement){
    //         $satisfied_requirements[$count]['requirement_name'] = $requirement->requirement_name;
    //         $satisfied_requirements[$count]['course_hours'] = $course->course_hours;
    //         $satisfied_requirements[$count]['course_id'] = $course->id;
    //         $count++;
    //     }
    // }
    //
    // foreach ($requirements as $requirement) {
    //
    //     $find = array_search($requirement->requirement_name, $satisfied_requirements);
    //     $hours_completed = $satisfied_requirements[$find]['course_hours'];
    //     $total_hours_for_this_requirement = $requirement->requirement_hours;
    //     $reamaining_hours = $total_hours_for_this_requirement - $hours_completed;
    // }
    // dump($satisfied_requirements);

});
