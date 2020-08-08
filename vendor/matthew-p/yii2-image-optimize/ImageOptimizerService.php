<?php
/**
 * Created by PhpStorm.
 * User: Yarmaliuk Mikhail
 * Date: 25.09.2017
 * Time: 11:18
 */

namespace MP\ImageOptimize;

use Yii;
use ImageOptimizer\OptimizerFactory;
use yii\base\ErrorException;

/**
 * Class    ImageOptimizerService
 * @package MP\ImageOptimize
 * @author  Yarmaliuk Mikhail
 * @version 1.0
 */
class ImageOptimizerService
{
    const IMAGE_JPG  = 'jpg';
    const IMAGE_PNG  = 'png';
    const IMAGE_JPEG = 'jpeg';

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
     * @var \ImageOptimizer\Optimizer|NULL
     */
    private $optimizer = NULL;

    /**
     * Print log
     *
     * @var bool
     */
    public $log = false;

    /**
     * ImageOptimizerService constructor.
     *
     * @param array $folders
     * @param array $imageExtensions
     * @param array $optimizerOptions
     *
     * @return void
     */
    public function __construct(array $folders = [], array $imageExtensions = [self::IMAGE_JPG, self::IMAGE_PNG, self::IMAGE_JPEG], array $optimizerOptions = [])
    {
        // Set memory limit
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 0);

        $this->folders         = $folders;
        $this->imageExtensions = $imageExtensions;

        $factory         = new OptimizerFactory($optimizerOptions);
        $this->optimizer = $factory->get();
    }

    /**
     * Optimize images
     *
     * @return void
     */
    public function handle()
    {
        if (!empty($this->imageExtensions) && !empty($this->folders)) {
            foreach ($this->folders as $key => $folder) {
                $options = [];

                if (is_array($folder)) {
                    $options = $folder;
                    $folder  = $key;
                }

                $this->optimizeFolder($folder, $options);
            }
        }
    }

    /**
     * Optimize folder
     *
     * @param string $folder
     * @param array  $options
     *
     * @return void
     */
    public function optimizeFolder($folder, array $options = [])
    {
        $path = Yii::getAlias(rtrim($folder, " \t\n\r\0\x0B/"));

        if (!$this->checkExeclude($folder, $options)) {
            return;
        }

        if (is_dir($path)) {
            $folders = array_filter(glob($path . '/*'), 'is_dir');
            $images  = glob($path . '/*.{' . implode(',', $this->imageExtensions) . '}', GLOB_BRACE);

            // Optimize image in folder
            foreach ($images as $image) {
                $this->optimizeImage($image);
            }

            // Optimize folders
            foreach ($folders as $f) {
                $this->optimizeFolder($f, $options);
            }
        } elseif (is_file($path) && file_exists($path)) {
            $this->optimizeImage($path);
        }
    }

    /**
     * Optimize image
     *
     * @param string $pathToImage
     */
    public function optimizeImage($pathToImage)
    {
        if ($this->log) {
            echo PHP_EOL . 'Optimize: ' . $pathToImage;
        }

        try {
            $this->optimizer->optimize(Yii::getAlias($pathToImage));
        } catch (ErrorException $e) {
            if ($this->log) {
                echo PHP_EOL . 'Failed optimize: ' . $pathToImage;
            }
        }
    }

    /**
     * Check execlude folder/file
     *
     * @param string $path
     * @param array  $options
     *
     * @return bool
     */
    private function checkExeclude($path, array $options)
    {
        if (isset($options['execlude'])) {
            foreach ($options['execlude'] as $execludeFolder) {
                $execludeFolder = rtrim($execludeFolder, " \t\n\r\0\x0B/");
                $path           = rtrim($path, " \t\n\r\0\x0B/");

                if (stripos(Yii::getAlias($execludeFolder), Yii::getAlias($path)) !== false) {
                    return false;
                }
            }
        }

        return true;
    }
}