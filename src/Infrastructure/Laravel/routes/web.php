<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Dymecki\HexagonalDemo\Domain\Model\User\User;
use Dymecki\HexagonalDemo\Infrastructure\Persistence\InMemory\UserInMemoryRepository;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return 'Home';
});

Route::get('/user', function (Request $request) {
    echo 'User';

    $user = User::register(
        $request->get('Name'),
        $request->get('E-mail')
    );

    var_dump($user);
});

Route::post('/user', function (Request $request) {
    $user = User::register(
        $request->get('Name'),
        $request->get('E-mail')
    );

    (new UserInMemoryRepository)->save($user);

    return sprintf('%s', $user);
});


