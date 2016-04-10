<?php

namespace Formbuilder\Http;

use App\Http\Controllers\Controller;

/**
 *
 */
class FormController extends Controller
{

    public function getFormBuilder()
    {
        return View('formbuilder::formbuilder_home');
    }
}
