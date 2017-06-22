<?php


namespace ListModifier\RequestModifier;


class RequestModifier implements RequestModifierInterface
{

    private $sortItems;
    private $searchItems;


    public function __construct()
    {
        $this->sortItems = [];
        $this->searchItems = [];
    }

    public function addSortItem($column, $dir)
    {
        $this->sortItems[$column] = $dir;
        return $this;
    }

    public function addSearchItem($operator, $value)
    {
        $this->searchItems[] = [$operator, $value];
        return $this;
    }

    public function getSortItems()
    {
        return $this->sortItems;
    }

    public function getSearchItems()
    {
        return $this->searchItems;
    }
}


