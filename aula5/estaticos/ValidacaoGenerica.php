<?php

class ValidacaoGenerica {

    static public function validaEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    static public function validaURL($string) {
        return filter_var($string, FILTER_VALIDATE_URL);
    }   
}

