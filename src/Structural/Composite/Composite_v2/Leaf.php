<?php

namespace DesignPatterns\Stuctural\Composite_v2;

/**
 * "Лист"
 * Компонент, который не содержит в себе другие компоненты.
 * @class Leaf
 */
class Leaf extends Component
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return "Leaf";
    }
}