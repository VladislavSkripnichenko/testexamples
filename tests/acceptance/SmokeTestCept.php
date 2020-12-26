<?php

use Codeception\Util\HttpCode;

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('http://form/');
$I->seeResponseCodeIs(HttpCode::OK);
$I->see('Sign in to Site'); // ! Тут часть фразы с вашей главной

$params = [
    ['username' => 'davert', 'password' => 'qwerty', 'answer' => 'Incorrect'],
    ['username' => 'test', 'password' => '123', 'answer' => 'Correct'],
];

foreach ($params as $param){
    $I->fillField('username', $param['username']);
    $I->fillField('password',  $param['password']);
    $I->click('button');
    $I->see($param['answer']);
}
