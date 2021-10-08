<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        sleep(5);
        $I->amOnPage('/sample-todo-app/');
        sleep(2);
        $I->checkOption('/html/body/div/div/div/ul/li[4]/input');
        sleep(2);
        $I->checkOption('/html/body/div/div/div/ul/li[5]/input');
    }
}