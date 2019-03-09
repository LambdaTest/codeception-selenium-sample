<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        sleep(5);
        $I->amOnPage('/');
        $I->attachFile('//*[@id="myfile"]', 'sample.jpeg');
         $I->click('//*[@id="submit"]');
    }
}