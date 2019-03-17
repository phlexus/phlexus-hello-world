<?php declare(strict_types=1);

namespace Phlexus\Modules\HelloWorld;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phlexus\Module as PhlexusModel;

class Module extends PhlexusModel
{
    /**
     * @return string
     */
    public function getHandlersNamespace() : string
    {
        return 'Phlexus\Modules\HelloWorld\Controllers';
    }

    /**
     * Registers an autoloader related to the module.
     *
     * @param DiInterface $di
     */
    public function registerAutoloaders(DiInterface $di = null)
    {
        $namespaces = [
            $this->getHandlersNamespace() => __DIR__ . '/controllers/',
        ];

        $loader = new Loader();
        $loader->registerNamespaces($namespaces);
        $loader->register();
    }
}
