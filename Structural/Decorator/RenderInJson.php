<?php

// Json 实体类呈现Json格式
class RenderInJson extends Decorator
{
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        return json_encode($output);
    }
}