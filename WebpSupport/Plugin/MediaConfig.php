<?php
/**
 * Copyright © Funky Squid Labs Ltd. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace FunkySquid\WebpSupport\Plugin;

class MediaConfig
{
    /**
     * Add webp extension to the list of allowed image extensions
     *
     * @param \Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $subject
     * @param array $result
     * @return array
     */
    public function afterGetAllowedExtensions(\Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $subject, array $result)
    {
        $result[] = 'webp';
        return $result;
    }

    /**
     * Add webp extension to the list of allowed image mime types
     *
     * @param \Magento\Framework\File\Mime $subject
     * @param array $result
     * @return array
     */
    public function afterGetExtensions(\Magento\Framework\File\Mime $subject, array $result)
    {
        $result['webp'] = 'image/webp';
        return $result;
    }
}
