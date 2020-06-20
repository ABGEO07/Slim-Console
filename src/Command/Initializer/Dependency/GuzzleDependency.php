<?php

/**
 * Slim Framework (https://slimframework.com)
 *
 * @license https://github.com/slimphp/Slim-Console/blob/0.x/LICENSE.md (MIT License)
 */

namespace Slim\Console\Command\Initializer\Dependency;

use Slim\Console\Command\Initializer\Profiles\blank\DependencyVersions;

/**
 * Guzzle PSR-7 Dependency.
 *
 * @package Slim\Console\Command\Initializer\Dependency
 * @author Temuri Takalandze <me@abgeo.dev>
 */
class GuzzleDependency extends Dependency
{
    public const NAME = 'Guzzle';

    /**
     * @var array<string>
     */
    protected $packages = [
        'guzzlehttp/psr7'                  => DependencyVersions::GUZZLE_PSR_7,
        'http-interop/http-factory-guzzle' => DependencyVersions::HTTP_FACTORY_GUZZLE,
    ];
}
