<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2016-02-04
 */
namespace Net\Bazzline\Component\ZendExpressiveTemplateAdapter;

use Net\Bazzline\Component\Template\ComplexFileBasedTemplate;

class ComplexFileBasedTemplateAdapter extends ExpressiveTemplateAdapter
{
    public function __construct()
    {
        $this->injectBaseTemplate(new ComplexFileBasedTemplate());
    }
}