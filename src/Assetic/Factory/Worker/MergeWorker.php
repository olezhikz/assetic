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

/**
 * Adds cache busting code
 *
 * @author Kris Wallsmith <kris.wallsmith@gmail.com>
 */
class MergeWorker implements WorkerInterface
{
    private $separator;

    public function __construct($separator = '-')
    {
        $this->separator = $separator;
    }

    public function process(AssetInterface $asset, AssetFactory $factory)
    {
        if($asset instanceof \Assetic\Asset\AssetReference){
            $asset = clone $asset;
        }
        echo  $asset->getTargetPath(). get_class($asset).PHP_EOL;
//        if($asset instanceof \Assetic\Asset\AssetCollectionInterface){
//            foreach ($asset as $leaf) {
//                echo  $leaf->getTargetPath(). get_class($leaf).PHP_EOL;
//            }
//        }
    }

}
