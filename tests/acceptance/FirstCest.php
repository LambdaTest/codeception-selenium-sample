<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        sleep(5);
        $I->amOnPage('/');
        $I->fillField('//*[@id="user_login"]', "nikhil");
        $I->fillField('//*[@id="user_pass"]', "nik@1234");
        $I->click('//*[@id="wp-submit"]');
        sleep(5);
        $I->attachFile('//*[@type="file"]', 'sample.jpeg');
        sleep(5);
         
    }
}
