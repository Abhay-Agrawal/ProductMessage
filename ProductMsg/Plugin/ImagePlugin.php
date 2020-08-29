<?php
namespace Abhay\ProductMsg\Plugin;

class ImagePlugin
{
    public $helper;

    public function __construct(
        \Abhay\ProductMsg\Helper\Data $helper
    ) {
        $this->helper = $helper;
    }
    public function afterGetProductDetailsHtml($subject, $result)
    {
      $enable=$this->helper->isEnabled();
      $imgmsg=$this->helper->ImgMsg();
      if ($enable)
      {
        $result = "<div class='message'>{$imgmsg}</div>";
        return $result;
      } else {
        return $result;
      }
    }
}
