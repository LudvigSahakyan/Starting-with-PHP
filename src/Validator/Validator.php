<?php


namespace PHPInitiation\Validator;


class Validator
{

    protected function post($variableName, $flag = null, $regexp = null)
    {
        $regexp = FILTER_VALIDATE_REGEXP === $flag ? ["options" => ["regexp" => $regexp]] : null;
        $flag = $flag ? $flag : FILTER_DEFAULT;
        return filter_input(INPUT_POST, $variableName, $flag, $regexp);

    }


}