<?php
declare(strict_types=1);

namespace Phlexus\Modules\HelloWorld\Controllers;

use Phalcon\Mvc\Controller;

final class IndexController extends Controller
{
    public function indexAction() : string
    {
        return 'Hello world';
    }
}
