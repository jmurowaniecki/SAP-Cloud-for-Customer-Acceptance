<?php

use \Codeception\Step\Argument\PasswordArgument;

class Users_Created_CorrectlyCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function checkLoginPage(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('SAP SE. All rights reserved');
    }

    public function tryLoginUserProcess(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('sap-alias', $_ENV['USER_USERNAME_USR']);
        $I->fillField('sap-password', new PasswordArgument($_ENV['USER_PASSWORD_USR']));
        $I->click('#LOGIN_LINK');
        $I->waitForElement('.sapClientBaseControlsSimpleVLayout', 10);
        $I->see('Calendário da equipe');
    }

    public function tryLoginUserDeveloper(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->fillField('sap-alias', $_ENV['USER_USERNAME_DEV']);
        $I->fillField('sap-password', new PasswordArgument($_ENV['USER_PASSWORD_DEV']));
        $I->click('#LOGIN_LINK');
        $I->waitForElement('.sapClientBaseControlsSimpleVLayout', 10);
        $I->dontSee('Calendário da equipe');
    }
}
