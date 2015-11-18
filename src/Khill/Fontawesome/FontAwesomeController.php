<?php

namespace Khill\Fontawesome;
use Illuminate\Routing\Controller as BaseController;

class FontAwesomeController extends BaseController
{
    public function home()
    {
        return View::make('fontawesome::home');
    }
}
