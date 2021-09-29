<?php

declare(strict_types=1);

namespace Snippet\Plugin\Plugin\Frontend;

use Magento\Theme\Block\Html\Breadcrumbs;

class ModifyBreadcrumbs
{
    /**
     * @param Breadcrumbs $subject
     * @param string $crumbName
     * @param array $crumbInfo
     *
     * @return array
     */
    public function beforeAddCrumb(Breadcrumbs $subject, string $crumbName, array $crumbInfo): array
    {
        $crumbInfo['label'] = '(' . __($crumbInfo['label']) . ')';

        return [$crumbName, $crumbInfo];
    }
}
