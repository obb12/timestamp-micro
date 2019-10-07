<?php
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('greeting');
});
$router->get('/api/timestamp[/{timestamp}]', function ($timestamp = null) use ($router) {

    try {
    $date = Carbon::parse($timestamp)->utc();
} catch (\Exception $e) {
  if (!is_numeric($timestamp)) {
    return response()->json(['error' => 'Invalid Date']);

  }
$date = Carbon::createFromTimestamp($timestamp)->utc(); 


}
    return response()->json(['utc' => $date->toRfc7231String(), 'unix' => $date->timestamp]);

});
