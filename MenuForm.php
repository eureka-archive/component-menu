<?php

/**
 * Copyright (c) 2010-2016 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Menu;

/**
 * Class to set menu form.
 *
 * @author  Romain Cottard
 * @version 1.0.0
 */
class MenuForm
{
    /**
     * @var string $name
     */
    private $template = '';

    /**
     * @var array $params
     */
    private $params  = '';

    /**
     * BreadcrumbItem constructor.
     *
     * @param string $template
     * @param array  $params
     */
    public function __construct($template = '', $params = array())
    {
        $this->setTemplate($template);
        $this->setParams($params);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set template
     *
     * @param  string $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Set params.
     *
     * @param  array $params
     * @return $this
     */
    public function setParams($params = array())
    {
        $this->params = $params;

        return $this;
    }
}
