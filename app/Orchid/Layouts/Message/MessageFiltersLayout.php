<?php

namespace App\Orchid\Layouts\Message;

use App\Orchid\Filters\MessageEmailFilter;
use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;

class MessageFiltersLayout extends Selection
{
    /**
     * @return Filter[]
     */
    public function filters(): iterable
    {
        return [
            MessageEmailFilter::class,
        ];
    }
}
