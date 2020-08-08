<?php
/**
 * Created by PhpStorm.
 * User: Yarmaliuk Mikhail
 * Date: 25.09.2017
 * Time: 9:03
 */

namespace MP\ImageOptimize;

use yii\console\Controller;

/**
 * Class    ImageOptimizeController
 * @package MP\ImageOptimize
 * @author  Yarmaliuk Mikhail
 * @version 1.0
 */
class ImageOptimizeController extends Controller
{
    /**
     * Folders with images for optimizations
     *
     * @var array
     */
    public $folders = [];

    /**
     * Images extensions
     *
     * @var array
     */
    public $imageExtensions = [];

    /**
     * Print log
     *
     * @var bool
     */
    public $log = false;

    /**
     * @var array
     */
    public $optimizerOptions = [];

    /**
     * Optimize images
     *
     * @return void
     */
    public function actionIndex()
    {
       $optimizeService = new ImageOptimizerService($this->folders, $this->imageExtensions, $this->optimizerOptions);
       $optimizeService->log = $this->log;
       $optimizeService->handle();
    }
}