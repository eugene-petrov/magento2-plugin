<?php

declare(strict_types=1);

namespace Snippet\Plugin\Plugin\Frontend;

use Magento\Theme\Block\Html\Header;
use Magento\Framework\Phrase;

class ModifyHeader
{
    /**
     * @param Header $subject
     * @param callable $proceed
     * @param array ...$args
     *
     * @return Phrase
     */
    public function aroundGetWelcome(Header $subject, callable $proceed, ...$args): Phrase
    {
        // @todo: implement something here
        return $proceed(...$args);
    }

    /**
     * @param Header $subject
     * @param string|null $result
     *
     * @return string
     */
    public function afterGetWelcome(Header $subject, string $result = null): string
    {
        if (empty($result)) {
            return $result;
        }

        return '(' . $result . ')';
    }
}
