<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->click('#toggleButton');
    }
}
?>