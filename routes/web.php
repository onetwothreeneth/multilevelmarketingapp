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

Route::get('/', function () {
    return redirect()->route('dashboard');
});
 


Route::group(['middleware' => ['web'],'namespace'  => 'Member'],function(){ 

    Route::group(['middleware'     => ['member_guest']],function(){
 
        Route::get('/',                                            'Authentication@index'                                       )->name('member.auth.login');
        Route::post('/check',                                      'Authentication@check'                                       )->name('member.auth.check');

    });  

    Route::group(['middleware'     => ['member_user']],function(){

        Route::get('/dashboard',                                   'Dashboard@index'                                            )->name('member.dashboard');
        Route::get('/logout',                                      'Authentication@logout'                                      )->name('member.auth.logout');


        Route::group(['prefix'     => 'invites'],function(){
            Route::get('/',                                        'Invites@index'                                               )->name('member.invites.tree'); 
            Route::get('/table/edit',                              'Invites@edit'                                                )->name('member.invites.edit');  
            Route::any('/table/add',                               'Invites@add_invite'                                          )->name('member.invites.add');  
        });  

        Route::group(['prefix'     => 'earnings'],function(){
            Route::get('/',                                        'Earnings@index'                                              )->name('member.earnings');  
        });  

        Route::group(['prefix'     => 'withdrawal'],function(){
            Route::get('/',                                        'Withdrawal@index'                                            )->name('member.withdrawal');  
            Route::post('/add',                                    'Withdrawal@add'                                              )->name('member.withdrawal.request');  
            Route::get('/invoices',                                'Withdrawal@invoices'                                         )->name('member.withdrawal.invoices');  
        });  

        Route::group(['prefix'     => 'freaccounts'],function(){
            Route::get('/',                                        'Free@index'                                                  )->name('member.freeaccounts');    
        });  

    });  

});  

Route::group(['prefix' => 'admin','middleware' => ['web'],'namespace'  => 'Admin'],function(){ 

    Route::group(['middleware'     => ['admin_guest']],function(){
 
        Route::get('/',                                            'Authentication@index'                                       )->name('admin.auth.login');
        Route::post('/check',                                      'Authentication@check'                                       )->name('admin.auth.check');

    });  

	Route::group(['middleware'     => ['admin_user']],function(){

    	Route::get('/dashboard',                                   'Dashboard@index'                                            )->name('admin.dashboard');
    	Route::get('/logout',                                      'Authentication@logout'                                      )->name('admin.auth.logout');

		Route::group(['prefix'     => 'wallet'],function(){
    		Route::get('/',                                        'Wallet@index'                                               )->name('admin.wallet.history');
    		Route::get('/reload',                                  'Wallet@reload'                                              )->name('admin.wallet.reload');
		});  

		Route::group(['prefix'     => 'bills-payments'],function(){
    		Route::get('/',                                        'Bills@index'                                                )->name('admin.bills.logs'); 
		}); 

		Route::group(['prefix'     => 'affiliates'],function(){
    		Route::get('/',                                        'Affiliate@index'                                            )->name('admin.affiliates.list'); 
    		Route::get('/mass',                                    'Affiliate@mass'                                             )->name('admin.affiliates.mass'); 
    		Route::post('/mass/save',                              'Affiliate@masssave'                                         )->name('admin.affiliates.masssave'); 
    		Route::get('/delete/{id}',                             'Affiliate@delete'                                           )->name('admin.affiliates.delete'); 
    		Route::get('/edit/{id}',                               'Affiliate@edit'                                             )->name('admin.affiliates.edit'); 
    		Route::post('/update/{id}',                            'Affiliate@update'                                           )->name('admin.affiliates.update'); 
    		Route::get('/new',                                     'Affiliate@new'                                              )->name('admin.affiliates.new'); 
    		Route::post('/new/save',                               'Affiliate@savenew'                                          )->name('admin.affiliates.savenew'); 
    		Route::get('/invite',                                  'Affiliate@invite'                                           )->name('admin.affiliates.invite'); 
    		Route::get('/table/{id}',                              'Affiliate@table'                                            )->name('admin.affiliates.table'); 
		}); 

		Route::group(['prefix'     => 'earnings'],function(){
    		Route::get('/',                                        'Earnings@index'                                             )->name('admin.earnings.logs');  
		}); 

		Route::group(['prefix'     => 'withdrawal'],function(){
            Route::get('/',                                        'Withdrawal@index'                                           )->name('admin.withdrawal.request');  
            Route::post('/update/{id}',                            'Withdrawal@update'                                          )->name('admin.withdrawal.request.update');  
		}); 

		Route::group(['prefix'     => 'settings'],function(){
            Route::get('/commission',                              'Settings@commission'                                        )->name('admin.settings.commission');  
            Route::post('/commission/save',                        'Settings@com_save'                                          )->name('admin.settings.commission.save');  
    		Route::get('/account',                                 'Settings@account'                                           )->name('admin.settings.account');  
		}); 

	});   
    	
});  
