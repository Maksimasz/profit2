<?php


namespace App;


class View
{
    use Magic;

    protected $data = [];

    /**
     * @param $template
     * @return string
     */
    public function render($template)
    {
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}