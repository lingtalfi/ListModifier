<?php


namespace ListModifier\RequestModifier;


interface RequestModifierInterface
{

    public function addSortItem($column, $dir);

    public function addSearchItem($operator, $value);


    /**
     * @return array of column => dir
     */
    public function getSortItems();

    /**
     * @return array of todo...
     */
    public function getSearchItems();

}