<?php
namespace ISPagerPro;

abstract class View
{
    protected $pager;

    public function link($title, $current_page = 1)
    {
        return "<a href='{$this->pager->getCurrentPagePath()}?".
        "{$this->pager->getCounterParam()}={$current_page}".
        "{$this->pager->getParameters()}' font-family='Arial' font-size='250%'>{$title}</a>";
    }
    abstract public function render(Pager $pager);
}