<?php

namespace Phouch\HTTP\Options;

class Get extends OptionsAbstract
{
    public function __construct($options = null)
    {
        $this->_method = 'GET';
        parent::__construct($options);
    }
}
