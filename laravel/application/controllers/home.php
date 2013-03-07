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
  public function action_index()
    {
      return View::make('home.index', array(
        'genders' => array(
          array(
            'name' => 'Mens', 
            'items' => array(
              array(
                'name' => 'Dress Shoes', 
                'sizes' => array('Size 8', 'Size 9', 'Size 10', 'Size 11', 'Size 12')
              ),
              array(   
                'name' => 'Tennis Shoes',
                'sizes' =>array('Size 8', 'Size 9', 'Size 10', 'Size 11', 'Size 12')
              ),
              array(    
                'name' => 'Boots',  
                'sizes' =>array('Size 8', 'Size 9', 'Size 10', 'Size 11', 'Size 12')
              )
            )
          )
        )
      ));
    }

    // 'styles' => array(
    //  'dress' => 'Dress Shoes'
    //  'tennis' => 'Tennis Shoes'
    //  'boots' => 'Boots'
    //  )

    // 'sizes' => array(
    //  'sizes' => ['8', '9', '10', '11', '12']
    //  )


}