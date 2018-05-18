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


Route::get('/DailyRentReport', ['as' => 'DailyRentReport', 'uses' => 'DailyRentReportController@getDailyRentReport']);

Route::get('/sales', ['as' => 'sales', 'uses' => 'salesController@getSales']);


Route::namespace('newCtrl')->group(function () {


    Route::get('/ReceiveContainer', ['as' => 'ReceiveContainer', 'uses' => 'ContainerController@getReceiveContainer']);


    Route::get('/DeliverContainer', ['as' => 'DeliverContainer', 'uses' => 'ContainerController@getDeliverContainer']);


    Route::get('/ClientStatement', ['as' => 'ClientStatement', 'uses' => 'ClientController@getClientStatement']);

    Route::get('/BranchReport', ['as' => 'BranchReport', 'uses' => 'BranchController@getBranchReport']);

    Route::get('/clients', ['as' => 'clients', 'uses' => 'ClientController@getClients']);

    Route::get('/ShowContract', ['as' => 'ShowContract', 'uses' => 'ContractController@getShowContract']);


    Route::get('test-a/{id}', 'ContractController@test');

    Route::get('test2-a', 'ContractController@test2');


    Route::get('/CommissionReport', ['as' => 'CommissionReport', 'uses' => 'ReportsController@getCommissionReport']);


    Route::get('/EmptyingReport', ['as' => 'EmptyingReport', 'uses' => 'ReportsController@getEmptyingReport']);

// Client
    Route::get('/AddClient', ['as' => 'AddClient', 'uses' => 'ClientController@getClientAdd']);
    Route::post('/storeClient', ['as' => 'client.store', 'uses' => 'ClientController@storeClient']);

    Route::get('/ClientPayment', ['as' => 'ClientPayment', 'uses' => 'ClientController@getClientPayment']);
    Route::post('/storeClientPaymentTransaction', ['as' => 'client_payment_transaction.store', 'uses' => 'ClientController@storeClientPaymentTransaction']);


//  employee
    Route::get('/AddWorker', ['as' => 'AddWorker', 'uses' => 'WorkerController@getAddWorker']);
    Route::post('/storeEmployee', ['as' => 'employee.store', 'uses' => 'WorkerController@storeEmployee']);

//  Branch
    Route::get('/AddBranch', ['as' => 'AddBranch', 'uses' => 'BranchController@getAll']);
    Route::get('/editBranch/{id}', ['as' => 'branch.edit', 'uses' => 'BranchController@editBranch']);
    Route::post('/deleteBranch', ['as' => 'branch.delete', 'uses' => 'BranchController@deleteBranch']);
    Route::post('/updateBranch', ['as' => 'branch.update', 'uses' => 'BranchController@updateBranch']);
    Route::post('/store-branch', ['as' => 'branch.store', 'uses' => 'BranchController@storeBranch']);

//  Container
    Route::get('/AddContainer', ['as' => 'AddContainer', 'uses' => 'ContainerController@addContainer']);
    Route::post('/storeContainer', ['as' => 'container.store', 'uses' => 'ContainerController@storeContainer']);

    Route::get('/EmptyingContainer', ['as' => 'EmptyingContainer', 'uses' => 'ContainerController@getEmptyingContainer']);
    Route::post('/storeContainerTransaction', ['as' => 'container_transaction.store', 'uses' => 'ContainerController@storeContainerTransaction']);

    Route::get('/SearchContainer', ['as' => 'SearchContainer', 'uses' => 'ContainerController@getSearchContainer']);

    Route::get('/ContainerReport', ['as' => 'ContainerReport', 'uses' => 'ContainerController@getContainerReport']);



//  User
    Route::get('/AddUser', ['as' => 'AddUser', 'uses' => 'UserController@getAddUser']);
    Route::post('/storeUser', ['as' => 'user.store', 'uses' => 'UserController@storeUser']);


//  Truck
    Route::get('/AddTruck', ['as' => 'AddTruck', 'uses' => 'TruckController@getAddTruck']);
    Route::post('/storeTruck', ['as' => 'truck.store', 'uses' => 'TruckController@storeTruck']);


//  Contract
    Route::get('/AddContract', ['as' => 'AddContract', 'uses' => 'ContractController@getAddContract']);
    Route::post('/storeContract', ['as' => 'contract.store', 'uses' => 'ContractController@storeContract']);

//  Rent
    Route::get('/Rent', ['as' => 'Rent', 'uses' => 'RentController@getRent']);
    Route::post('/storeRentContract', ['as' => 'rentContract.store', 'uses' => 'RentController@storeRentContract']);
    Route::post('/storeRentCash', ['as' => 'rentCash.store', 'uses' => 'RentController@storeRentCash']);

    Route::post('/ajax-get-client-contracts', ['as' => 'ajax.get-client-contracts', 'uses' => 'RentController@getClientContracts']);
    Route::post('/ajax-get-containers-numbers', ['as' => 'ajax.get-containers-numbers', 'uses' => 'RentController@getContainersNumbers']);
    Route::post('/getContractTripDays', ['as' => 'ajax.get-contract-trip_days', 'uses' => 'RentController@getContractTripDays']);


//  Spending
    Route::get('/addSpending', ['as' => 'AddSpending', 'uses' => 'SpendingController@getAddSpending']);
    Route::post('/storeSpending', ['as' => 'spending.store', 'uses' => 'SpendingController@storeSpending']);

//  Spending Transaction
    Route::get('/DailyPayment', ['as' => 'DailyPayment', 'uses' => 'SpendingController@getDailyPayment']);
    Route::post('/StoreSpendingTransaction', ['as' => 'spendingTransaction.store', 'uses' => 'SpendingController@StoreSpendingTransaction']);


});