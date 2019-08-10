<?php

/*
 * This file is part of the Assetic package, an OpenSky project.
 *
 * (c) 2010-2014 OpenSky Project Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Factory\Worker;

use Assetic\Asset\AssetCollectionInterface;
use Assetic\Asset\AssetInterface;
use Assetic\Factory\AssetFactory;
use Assetic\AssetWriter;
/**
 * Публикация ресурсов в статичные файлы
 *
 * @author Oleg Demidov
 */
class PublicWorker implements WorkerInterface
{
    
    private $sPath ;

    public function __construct( string $sPath)
    {
        $this->sPath = $sPath;
    }

    public function process(AssetInterface $asset, AssetFactory $factory)
    {
        /*
         * Инициируем объект записи в папку web/assets
         */
        $assetWriter = new AssetWriter($this->sPath);
        $assetWriter->writeAsset($asset);
        
    }

}
