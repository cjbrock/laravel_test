<?php

class Home_Controller extends Base_Controller {

  /*
  |--------------------------------------------------------------------------
  | The Default Controller
  |--------------------------------------------------------------------------
  |
  | Instead of using RESTful routes and anonymous functions, you might wish
  | to use controllers to organize your application API. You'll love them.
  |
  | This controller responds to URIs beginning with "home", and it also
  | serves as the default controller for the application, meaning it
  | handles requests to the root of the application.
  |
  | You can respond to GET requests to "/home/profile" like so:
  |
  |   public function action_profile()
  |   {
  |     return "This is your profile!";
  |   }
  |
  | Any extra segments are passed to the method as parameters:
  |
  |   public function action_profile($id)
  |   {
  |     return "This is the profile for user {$id}.";
  |   }
  |
  */
    //   public function action_index()
    // {
    //   return View::make('home.index', 
public function action_index()
  {    
      $input = File::get( path('app').'wg.json');
      $awesome = json_decode($input, true);
      $gender = key($awesome);
      $style = array_get($awesome, 'Mens');
      $top = array_get($awesome, 'Mens.Tennis Shoes');
      return View::make('home.index')
        ->with('top', $top)
        ->with('style', $style)
        ->with('gender', $gender);
  }
}