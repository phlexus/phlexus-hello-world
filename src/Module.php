<?php declare(strict_types=1);

namespace Phlexus\Modules\HelloWorld;

use Phlexus\Module as PhlexusModel;

class Module extends PhlexusModel
{
    public function getHandlersNamespace()
    {
        return 'Phlexus\Modules\HelloWorld\Controllers';
    }
}
