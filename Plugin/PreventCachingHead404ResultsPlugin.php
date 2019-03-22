<?php

namespace Magic42\PreventHead404Cache\Plugin;

use Magento\Framework\App\PageCache\Kernel;
use Magento\Framework\App\Request\Http as RequestHttp;
use Magento\Framework\App\Response\Http as ResponseHttp;

class PreventCachingHead404ResultsPlugin
{
    /**
     * @var RequestHttp
     */
    protected $request;

    /**
     * PreventCachingHeadRequestsPlugin constructor.
     * 
     * @param RequestHttp $request
     */
    public function __construct(RequestHttp $request)
    {
        $this->request = $request;
    }

    /**
     * Prevent caching HEAD requests that return a 404 result
     *
     * @param Kernel       $subject
     * @param callable     $proceed
     * @param ResponseHttp $response
     *
     * @return void
     */
    public function aroundProcess(Kernel $subject, callable $proceed, ResponseHttp $response)
    {
        if ($this->request->isHead() && $response->getHttpResponseCode() == 404) {
            return;
        }

        return $proceed($response);
    }
}
