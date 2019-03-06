<?php
Route::get('/', function () {
    return redirect()->route('/games');
});
Route::get('/', 'GamesController@index');
Route::get('/games', 'GamesController@index');
Route::get('/teams', 'TeamsController@index');
Route::get('/players/{team_id}', 'TeamsController@players');
Route::get('/table', 'TableController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('teams', 'Admin\TeamsController');
    Route::post('teams_mass_destroy', ['uses' => 'Admin\TeamsController@massDestroy', 'as' => 'teams.mass_destroy']);
    Route::resource('leagues', 'Admin\LeaguesController');
    Route::post('leagues_mass_destroy', ['uses' => 'Admin\LeaguesController@massDestroy', 'as' => 'leagues.mass_destroy']);

    Route::resource('dartleagues', 'Admin\DartleaguesController');
    Route::post('dartleagues_mass_destroy', ['uses' => 'Admin\DartleaguesController@massDestroy', 'as' => 'dartleagues.mass_destroy']);
    Route::post('dartleagues/{dartleagueId}', ['uses' => 'Admin\DartleaguesLeagueController@store', 'as' => 'dartleagues.league.store']);
    Route::get('dartleagues/{dartleagueId}/league', ['uses' => 'Admin\DartleaguesLeagueController@create', 'as' => 'dartleagues.league.create']);
    Route::delete('dartleagues/{dartleagueId}/league/{leagueId}', ['uses' => 'Admin\DartleaguesLeagueController@destroy', 'as' => 'dartleagues.league.destroy']);

    Route::resource('players', 'Admin\PlayersController');
    Route::post('players_mass_destroy', ['uses' => 'Admin\PlayersController@massDestroy', 'as' => 'players.mass_destroy']);
    Route::resource('games', 'Admin\GamesController');
    Route::post('games_mass_destroy', ['uses' => 'Admin\GamesController@massDestroy', 'as' => 'games.mass_destroy']);
});
