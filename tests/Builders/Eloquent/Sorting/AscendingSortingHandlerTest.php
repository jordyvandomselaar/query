<?php

namespace OneMustCode\Query\Tests\Builders\Eloquent\Sorting;

use OneMustCode\Query\Builders\Eloquent\Sorting\AscendingSortingHandler;
use OneMustCode\Query\Sorting\Ascending;

/**
 * @covers OneMustCode\Query\Builders\Eloquent\Sorting\AscendingSortingHandler
 */
class AscendingSortingHandlerTest extends AbstractSortingTest
{
    protected function getSortingHandler()
    {
        return new AscendingSortingHandler();
    }

    protected function getSorting()
    {
        return new Ascending('foo');
    }

    protected function getDirection()
    {
        return Ascending::DIRECTION;
    }

    protected function getOrder()
    {
        return [
            'column' => $this->getSorting()->getField(),
            'direction' => 'asc'
        ];
    }
}