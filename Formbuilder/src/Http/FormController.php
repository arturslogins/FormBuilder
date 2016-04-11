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

    public function getFileContents()
    {
        return style.css;
    }
}

// class StyleController extends Controller
// {
//     public function getFileContents()
//     {
//         return Formbuilder/assets/css/style.css;
//     }
// }
