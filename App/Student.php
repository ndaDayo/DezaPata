<?php

namespace App;

use App\Command\AddSaltCommand;
use App\Command\AddWaterCommand;

class Student
{
    public function main()
    {
        $addSalt = new AddSaltCommand();
        $addWater = new AddWaterCommand();

        $beaker = new Beaker(100, 0);
        $beaker1 = new Beaker(0, 10);

        $addSalt->setBeaker($beaker);
        $addSalt->execute();

        $addWater->setBeaker($beaker1);
        $addWater->execute();
    }
}