<?php

namespace Yandex\Metrica\Management\Models;

use Yandex\Metrica\Management\Models\Informer;
use Yandex\Common\Model;

class Site2 extends Model
{
    protected $site = null;

    protected $domain = null;

    protected $propNameMap = [
        'site' => 'site',
        'domain' => 'domain',
    ];

    /**
     * @return null
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param null $site
     * @return Site2
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * @return null
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param null $domain
     * @return Site2
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }
}
