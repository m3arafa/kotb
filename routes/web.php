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

//Route::get('/', function () {
//    return view('main/main');
//
//});

Route::get('/', ['as' => 'KotbElkhalig', 'uses' => 'MainController@getKotbElkhalig']);


Route::get('/RenewRegister', ['as' => 'RenewRegister', 'uses' => 'DailyController@getRenewRegister']);

Route::get('/IncomeSave', ['as' => 'IncomeSave', 'uses' => 'IncomeSavecontroller@getIncomeSave']);

Route::get('/DailyPayment', ['as' => 'DailyPayment', 'uses' => 'DailyPaymentcontroller@getDailyPayment']);


Route::get('/DailyRentReport', ['as' => 'DailyRentReport', 'uses' => 'DailyRentReportController@getDailyRentReport']);

Route::get('/sales', ['as' => 'sales', 'uses' => 'salesController@getSales']);


// Spending
Route::get('/addSpending', ['as' => 'AddSpending', 'uses' => 'SpendingController@getAddSpending']);
Route::post('/storeSpending', ['as' => 'spending.store', 'uses' => 'SpendingController@storeSpending']);


Route::namespace('newCtrl')->group(function () {


    Route::get('/SearchContainer', ['as' => 'SearchContainer', 'uses' => 'ContainerController@getSearchContainer']);

    Route::get('/ReceiveContainer', ['as' => 'ReceiveContainer', 'uses' => 'ContainerController@getReceiveContainer']);

    Route::get('/EmptyingContainer', ['as' => 'EmptyingContainer', 'uses' => 'ContainerController@getEmptyingContainer']);

    Route::get('/ClientPayment', ['as' => 'ClientPayment', 'uses' => 'ClientController@getClientPayment']);

    Route::get('/DeliverContainer', ['as' => 'DeliverContainer', 'uses' => 'ContainerController@getDeliverContainer']);

    Route::get('/AddContract', ['as' => 'AddContract', 'uses' => 'ContractController@getAddContract']);

    Route::get('/ContainerReport', ['as' => 'ContainerReport', 'uses' => 'ContainerController@getContainerReport']);


    Route::get('/ClientStatement', ['as' => 'ClientStatement', 'uses' => 'ClientController@getClientStatement']);

    Route::get('/BranchReport', ['as' => 'BranchReport', 'uses' => 'BranchController@getBranchReport']);

    Route::get('/clients', ['as' => 'clients', 'uses' => 'ClientController@getClients']);

    Route::get('/ShowContract', ['as' => 'ShowContract', 'uses' => 'ContractController@getShowContract']);




    Route::get('test-a/{id}', 'ContractController@test');

    Route::get('test2-a', 'ContractController@test2');


    Route::get('/CommissionReport', ['as' => 'CommissionReport', 'uses' => 'ReportsController@getCommissionReport']);

    Route::get('/Rent', ['as' => 'Rent', 'uses' => 'RentController@getRent']);

    Route::get('/EmptyingReport', ['as' => 'EmptyingReport', 'uses' => 'ReportsController@getEmptyingReport']);

// Client
    Route::get('/AddClient', ['as' => 'AddClient', 'uses' => 'ClientController@getClientAdd']);
    Route::post('/storeClient', ['as' => 'client.store', 'uses' => 'ClientController@storeClient']);

//  employee
    Route::get('/AddWorker', ['as' => 'AddWorker', 'uses' => 'WorkerController@getAddWorker']);
    Route::post('/storeEmployee', [ 'as' => 'employee.store', 'uses' => 'WorkerController@storeEmployee']);

//  Branch
    Route::get('/AddBranch', ['as' => 'AddBranch', 'uses' => 'BranchController@getAll']);
    Route::get('/editBranch/{id}', ['as' => 'branch.edit', 'uses' => 'BranchController@editBranch']);
    Route::post('/deleteBranch', ['as' => 'branch.delete', 'uses' => 'BranchController@deleteBranch']);
    Route::post('/updateBranch', ['as' => 'branch.update', 'uses' => 'BranchController@updateBranch']);
    Route::post('/store-branch', ['as' => 'branch.store', 'uses' => 'BranchController@storeBranch']);

//  Container
    Route::get('/AddContainer', ['as' => 'AddContainer', 'uses' => 'ContainerController@addContainer']);
    Route::post('/storeContainer', ['as' => 'container.store', 'uses' => 'ContainerController@storeContainer']);

//  User
    Route::get('/AddUser', ['as' => 'AddUser', 'uses' => 'UserController@getAddUser']);
    Route::post('/storeUser', ['as' => 'user.store', 'uses' => 'UserController@storeUser']);


//    Truck
    Route::get('/AddTruck', ['as' => 'AddTruck', 'uses' => 'TruckController@getAddTruck']);
    Route::post('/storeTruck', ['as' => 'truck.store', 'uses' => 'TruckController@storeTruck']);


});