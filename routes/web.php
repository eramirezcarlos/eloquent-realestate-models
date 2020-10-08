<?php

use Illuminate\Support\Facades\Route;


use App\Role;
use App\User;
use App\Comment;
use App\Language;
use App\PropertyPurposeTranslation;
use App\PropertyPurpose;

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

Route::get('/insert', function () {
    //return view('welcome');

    echo "Insert role";

    DB::insert('insert into role(name, slug) values(?,?)',['contratista','contratista-purchase']);



});

Route::get('/retrieve', function () {
    //return view('welcome');

    echo "retrieve role";

    $result = DB::select('select * from role where role_id = ?',[4]);

    print_r( $result );


});

Route::get('/findwhere',function(){

    $roles = Role::where('role_id',4)->orderBy('role_id','ASC')->take(1)->get();

    print_r( $roles );


});

Route::get('/findmore',function(){

//    $roles = Role::findOrFail(1);
//
//    return $roles;

$roles = Role::where('slug','=', 'administrator')->firstOrFail();

return $roles;

});

//Elloquent retrieve data

Route::get('/basicinsert',function(){

    $role = new Role;

    $role->name = 'maintenance';
    $role->slug = 'maintenance-purchase';

    $role->save();

});

Route::get('/basicupdate',function(){

    $role = Role::find(6);


    $role->name = 'person';
    $role->slug = 'personita';

    $role->save();

});

Route::get('/create',function(){

    Role::create(['name'=>'testuser', 'slug'=>'testuk']);

});

Route::get('/update',function(){

    Role::where('role_id',6)->update(['name'=>'Person', 'slug'=>'Personita']);

});


Route::get('/delete',function(){

    $post = Role::find(7);

    $post->delete();
});

Route::get('/delete2',function(){

    $count = Role::destroy([6]);
    echo "Resultado ".$count;

});

Route::get('/deletewhere',function(){

    $borrado = Role::where('role_id',5)->delete();

    echo "registros borrados ".$borrado;

});

//deleting data soft delete
Route::get('/softdelete',function(){

    Role::find(11)->delete();

});

//retrieving from details tables
//users of the role from parent to show details
Route::get('/role/{id}/users',function($id){

    $users =  Role::find($id)->user;

    foreach( $users as $user ){
        echo $user->name.'<br/>';
    }

});

//inverse
Route::get('/user/{id}/role',function($id){

    echo  User::find($id)->role->name;

});


Route::get('/comment/{id}/user',function($id){

    $user = Comment::find($id)->user;
    echo $user->name;


});

Route::get('/user/{id}/comments',function($id){

    $comments = User::find($id)->comment;

    print_r( $comments );

});
//many to may relationships
Route::get('/language/{id}/purposes',function($id){

    echo "lenguaje es " . $id;

    $translation = PropertyPurpose::find($id)->propertyPurposeLanguage();




});

