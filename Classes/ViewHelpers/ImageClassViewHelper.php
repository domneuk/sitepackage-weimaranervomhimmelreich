<?php

namespace  Domneuk\Weimaranervomhimmelreich\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ImageClassViewHelper extends AbstractViewHelper
{

    protected $escapeOutput = false;

    public function initializeArguments()
    {
        $this->registerArgument('position', 'array', 'The position object of the image');
    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $position = $arguments['position'];

        return 'col-md-'.($position['vertical'] === 'above' || $position['vertical'] === 'below' || ($position['vertical'] === 'intext' && !$position['noWrap']) ? 12 : 9);
    }
}
