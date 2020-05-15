<?php

namespace RenokiCo\LaravelHealthchecks\Test\Http\Controllers;

use RenokiCo\LaravelHealthchecks\Http\Controllers\HealthcheckController;
use Illuminate\Http\Request;

class TestFailingController extends HealthcheckController
{
    public function registerHealthchecks(Request $request)
    {
        $this->addHealtcheck('test1', function (Request $request) {
            return true;
        });

        $this->addHealtcheck('test2', function (Request $request) {
            return false;
        });

        $this->addHealtcheck('test3', function (Request $request) {
            return false;
        });
    }
}