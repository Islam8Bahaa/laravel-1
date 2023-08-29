<?php

use Illuminate\Http\Response;
use App\Http\Controllers\Post;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


class Task
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at
    ) {
    }
}

$tasks = [
    new Task(
        1,
        'Buy groceries',
        'Task 1 description',
        'Task 1 long description',
        false,
        '2023-03-01 12:00:00',
        '2023-03-01 12:00:00'
    ),
    new Task(
        2,
        'Sell old stuff',
        'Task 2 description',
        null,
        false,
        '2023-03-02 12:00:00',
        '2023-03-02 12:00:00'
    ),
    new Task(
        3,
        'Learn programming',
        'Task 3 description',
        'Task 3 long description',
        true,
        '2023-03-03 12:00:00',
        '2023-03-03 12:00:00'
    ),
    new Task(
        4,
        'Take dogs for a walk',
        'Task 4 description',
        null,
        false,
        '2023-03-04 12:00:00',
        '2023-03-04 12:00:00'
    ),
];

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () use($tasks) {
    return view('index' ,[
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}' , function ($id) use ($tasks) {
    $task = collect($tasks)->firstWhere('id' , $id);
    // This abort is used to send a meesage the the page is not found
    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('show' , ['task' => $task]);

})->name('tasks.show');


// Route::get('/hello' , function(){
//     return 'Hello';
// });
// // Giving a Route a sepcific name
// Route::get('/welc' , function(){
//     return 'me';
// })->name('islam');

// Route::get('/hallo',function ()  {
//     return redirect()->route('islam');
// });

Route::fallback( function(){
    return 'This is the home page'; // 404 Not Found Error Page
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('post/edit/{post}' , [Post::class,'edit'])->middleware('can:update,post');
