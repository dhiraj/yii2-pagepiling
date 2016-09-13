<?php
/**
 * AssetBundle.php
 * @author Dhiraj Gupta
 * @link http://traversient.com
 */

namespace traversient\yii\pagepiling;

/**
 * Class AssetBundle
 * @package dhiraj\yii\pagepiling
 */
class AssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@bower/pagepiling.js';

    /**
     * @inherit
     */
    public $css = [
        'jquery.pagepiling.css',
    ];

    public $js = [
        'jquery.pagepiling.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}