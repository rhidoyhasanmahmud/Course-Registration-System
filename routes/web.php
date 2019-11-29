
<?php


Route::get('/', 'RegistrationFormController@studentlist');
Route::get('/course-registration-form', 'RegistrationFormController@index');
Route::post('form/submit', 'RegistrationFormController@store');
Route::get('/course-add-form', 'CourseRegistrationFormController@index');
Route::post('new-course/submit', 'CourseRegistrationFormController@store');



