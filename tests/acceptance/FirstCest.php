<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        sleep(5);
        $I->amOnPage('/selenium-playground/todo-app/');
        sleep(2);
        $I->checkOption("//input[@name='li4']");
        sleep(2);
        $I->checkOption("//input[@name='li5']");
    }
}