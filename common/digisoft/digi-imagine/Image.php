<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace digi\imagine;

use Yii;
use Imagine\Image\Box;

/**
 * @author Ahmed Sharaf <sharaf.developer@gmail.com>
 */
class Image extends \yii\imagine\BaseImage {
    
    /**
     * Best fit (proportionally resize to fit in specified width/height)
     * @param string $filename
     * @param int $width
     * @param int $height
     * @return ManipulatorInterface
     */
    public static function bestFit($filename, $width, $height) {
        $img = static::getImagine()->open(Yii::getAlias($filename));
        //$width and $img->resize($img->getSize()->widen($width));
        //$height and $img->resize($img->getSize()->heighten($height));
        // If it already fits, there's nothing to do
        $originalWidth = $img->getSize()->getWidth();
        $originalHeight = $img->getSize()->getHeight();
        $fitWidth = $fitHeight = 0;

        if ($originalWidth <= $width && $originalHeight <= $height)
            return $img;

        // Determine aspect ratio
        $aspectRatio = $originalHeight / $originalWidth;

        // Make width fit into new dimensions
        if ($originalWidth > $width) {
            $fitWidth = $width;
            $fitHeight = $fitWidth * $aspectRatio;
        } else {
            $fitWidth = $originalWidth;
            $fitHeight = $originalHeight;
        }

        // Make height fit into new dimensions
        if ($fitHeight > $height) {
            $fitHeight = $height;
            $fitWidth = $fitHeight / $aspectRatio;
        }

        $img->resize(new Box($fitWidth, $fitHeight));
        return $img;
    }
    
    /**
     * Fit to width (proportionally resize to specified width)
     * @param string $filename
     * @param int $width
     * @return ManipulatorInterface
     */
    public static function fitWidth($filename, $width) {
        $img = static::getImagine()->open(Yii::getAlias($filename));
        return $img->resize($img->getSize()->widen($width));
    }
    
    /**
     * Fit to height (proportionally resize to specified height)
     * @param string $filename
     * @param int $height
     * @return ManipulatorInterface
     */
    public static function fitHeight($filename, $height) {
        $img = static::getImagine()->open(Yii::getAlias($filename));
        return $img->resize($img->getSize()->heighten($height));
    }
}
