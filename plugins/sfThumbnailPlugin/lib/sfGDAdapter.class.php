
<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2007 Fabien Potencier <fabien.potencier@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfGDAdapter provides a mechanism for creating thumbnail images.
 * @see http://www.php.net/gd
 *
 * @package    sfThumbnailPlugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @author     Benjamin Meynell <bmeynell@colorado.edu>
 */

class sfGDAdapter
{

  protected
    $sourceWidth,
    $sourceHeight,
    $sourceMime,
    $maxWidth,
    $maxHeight,
    $scale,
    $inflate,
    $quality,
    $source,
    $thumb;

  /**
   * List of accepted image types based on MIME
   * descriptions that this adapter supports
   */
  protected $imgTypes = array(
    'image/jpeg',
    'image/pjpeg',
    'image/png',
    'image/gif',
  );

  /**
   * Stores function names for each image type
   */
  protected $imgLoaders = array(
    'image/jpeg'  => 'imagecreatefromjpeg',
    'image/pjpeg' => 'imagecreatefromjpeg',
    'image/png'   => 'imagecreatefrompng',
    'image/gif'   => 'imagecreatefromgif',
  );

  /**
   * Stores function names for each image type
   */
  protected $imgCreators = array(
    'image/jpeg'  => 'imagejpeg',
    'image/pjpeg' => 'imagejpeg',
    'image/png'   => 'imagepng',
    'image/gif'   => 'imagegif',
  );

  public function __construct($maxWidth, $maxHeight, $scale, $inflate, $crop, $quality, $options)
  {
    if (!extension_loaded('gd'))
    {
      throw new Exception ('GD not enabled. Check your php.ini file.');
    }
    $this->maxWidth = $maxWidth;
    $this->maxHeight = $maxHeight;
    $this->scale = $scale;
    $this->inflate = $inflate;
    $this->crop = $crop;
    $this->quality = $quality;
    $this->options = $options;
  }

  public function loadFile($thumbnail, $image)
  {
    $imgData = @GetImageSize($image);

    if (!$imgData)
    {
      throw new Exception(sprintf('Could not load image %s', $image));
    }

    if (in_array($imgData['mime'], $this->imgTypes))
    {
      $loader = $this->imgLoaders[$imgData['mime']];
      if(!function_exists($loader))
      {
        throw new Exception(sprintf('Function %s not available. Please enable the GD extension.', $loader));
      }

      $this->source = $loader($image);
      $this->sourceWidth = $imgData[0];
      $this->sourceHeight = $imgData[1];
      $this->sourceMime = $imgData['mime'];
      $thumbnail->initThumb($this->sourceWidth, $this->sourceHeight, $this->maxWidth, $this->maxHeight, $this->scale, $this->inflate, $this->crop);

      $this->thumb = imagecreatetruecolor($thumbnail->getThumbWidth(), $thumbnail->getThumbHeight());
      imagealphablending($this->source, false);
      imagesavealpha($this->source, true);
      if ($imgData[0] == $this->maxWidth && $imgData[1] == $this->maxHeight)
      {
        $this->thumb = $this->source;
      }
      else
      {
        if($this->crop)
        {
          if($thumbnail->getThumbWidth()/$thumbnail->getThumbHeight() > $imgData[0]/$imgData[1])
          {
            //print 'PPPP<br>';
            $w = $imgData[0];
            $h = floor(($thumbnail->getThumbHeight()*$imgData[0])/$thumbnail->getThumbWidth());
            $x = 0;
            $y = floor(($imgData[1] - $h)/2);
          }
          else
          {
            //print 'PPPP2<br>';
            $h = $imgData[1];
            $w = floor(($thumbnail->getThumbWidth()*$imgData[1])/$thumbnail->getThumbHeight());
            $y = 0;
            $x = floor(($imgData[0] - $w)/2);
          }
        }
        else
        {
          $w = $imgData[0];
          $h = $imgData[1];
          $x = 0;
          $y = 0;
        }
        //print $x.' '.$y.' '.$w.' '.$h.'<br>';
        
        imagecopyresampled($this->thumb, $this->source, 0, 0, $x, $y, $thumbnail->getThumbWidth(), $thumbnail->getThumbHeight(), $w, $h);
      }

      return true;
    }
    else
    {
      throw new Exception(sprintf('Image MIME type %s not supported', $imgData['mime']));
    }
  }

  public function loadData($thumbnail, $image, $mime)
  {
    if (in_array($mime,$this->imgTypes))
    {
      $this->source = imagecreatefromstring($image);
      $this->sourceWidth = imagesx($this->source);
      $this->sourceHeight = imagesy($this->source);
      $this->sourceMime = $mime;
      $thumbnail->initThumb($this->sourceWidth, $this->sourceHeight, $this->maxWidth, $this->maxHeight, $this->scale, $this->inflate, $this->crop);

      $this->thumb = imagecreatetruecolor($thumbnail->getThumbWidth(), $thumbnail->getThumbHeight());
      if ($this->sourceWidth == $this->maxWidth && $this->sourceHeight == $this->maxHeight)
      {
        $this->thumb = $this->source;
      }
      else
      {
        imagecopyresampled($this->thumb, $this->source, 0, 0, 0, 0, $thumbnail->getThumbWidth(), $thumbnail->getThumbHeight(), $this->sourceWidth, $this->sourceHeight);
      }

      return true;
    }
    else
    {
      throw new Exception(sprintf('Image MIME type %s not supported', $mime));
    }
  }

  public function save($thumbnail, $thumbDest, $targetMime = null)
  {
    if($targetMime !== null)
    {
      $creator = $this->imgCreators[$targetMime];
    }
    else
    {
      $creator = $this->imgCreators[$thumbnail->getMime()];
    }

    if ($creator == 'imagepng' || $creator == 'imagegif')
    {
      print $creator."<br>";
      imagealphablending($this->thumb, false);
      imagesavealpha($this->thumb, true);
    }
    if ($creator == 'imagejpeg')
    {
      imagejpeg($this->thumb, $thumbDest, $this->quality);
    }
    else
    {
      $creator($this->thumb, $thumbDest);
    }
  }

  public function toString($thumbnail, $targetMime = null)
  {
    if ($targetMime !== null)
    {
      $creator = $this->imgCreators[$targetMime];
    }
    else
    {
      $creator = $this->imgCreators[$thumbnail->getMime()];
    }

    ob_start();
    $creator($this->thumb);

    return ob_get_clean();
  }

  public function toResource()
  {
    return $this->thumb;
  }

  public function freeSource()
  {
    if (is_resource($this->source))
    {
      imagedestroy($this->source);
    }
  }

  public function freeThumb()
  {
    if (is_resource($this->thumb))
    {
      imagedestroy($this->thumb);
    }
  }

  public function getSourceMime()
  {
    return $this->sourceMime;
  }

}
