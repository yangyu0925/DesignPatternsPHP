<?php

class InputElement extends FormElement
{
    // 返回HTML
    public function render($indent = 0)
    {
        return str_repeat('  ', $indent) . '<input type="text" />';
    }
}