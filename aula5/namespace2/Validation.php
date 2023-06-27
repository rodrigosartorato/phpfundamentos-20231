<?php

namespace Zend\Library;

class Validation {
    public function data() {
        $data = new \DateTime;
        echo $data->format('Y');
    }
}
