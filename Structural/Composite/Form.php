<?php

class Form extends FormElement
{
    protected $elements;

    // 循环所有元素并对它们调用render()， 最后返回Form完整的内容呈现。
    // 从外部来看，这些元素不可见，Form 就像只有一个单一的对象实例
    public function render($indent = 0)
    {
        $formCode = '';

        foreach ($this->elements as $element) {
            $formCode .= $element->render($indent + 1) . PHP_EOL;
        }

        return $formCode;
    }

    // 组合的节点元素也必须FormElement类型
    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
    }
}