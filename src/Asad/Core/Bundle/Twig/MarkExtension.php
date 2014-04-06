<?php
namespace Asad\Core\Bundle\Twig;

class MarkExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('checkmark', array($this, 'checkMarkFilter'), array('is_safe' => array('html'))),
        );
    }

    public function checkMarkFilter($input)
    {
        return $input ? '&#10004;' : '&#10008;';
    }

    public function getName()
    {
        return 'mark_extension';
    }
}