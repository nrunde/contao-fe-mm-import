<?php

/**
 * This file is part of ulpr/contao-fe-mm-import.
 *
 * Copyright (c) 2018 Nikolas Runde
 *
 * @package   ulpr/contao-fe-mm-import
 * @author    Nikolas Runde <nikolas.runde@gmail.com>
 * @copyright 2018 Nikolas Runde
 */

namespace Ulpr\ContaoFeMmImportBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Ulpr\ContaoFeMmImportBundle\UlprContaoFeMmImportBundle;

/**
 * Contao Manager plugin.
 */
class Plugin implements BundlePluginInterface
{

    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(UlprContaoFeMmImportBundle::class)
                ->setLoadAfter(
                    [
                        ContaoCoreBundle::class
                    ]
                )
                ->setReplace(['ulpr_fe_metamodels_import'])
        ];
    }
}
