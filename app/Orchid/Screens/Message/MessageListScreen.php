<?php

namespace App\Orchid\Screens\Message;

use App\Models\Message;
use App\Orchid\Layouts\Message\MessageEditLayout;
use App\Orchid\Layouts\Message\MessageFiltersLayout;
use App\Orchid\Layouts\Message\MessageListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class MessageListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'messages' => Message::filters()
                ->filtersApplySelection(MessageFiltersLayout::class)
                ->defaultSort('id', 'desc')
                ->paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Messages List';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'All registered messages';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {

        return [
            Link::make(__('Edit'))
                ->icon('note')
                ->route('platform.systems.messages.create'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        Return [
        MessageFiltersLayout::class,
            MessageListLayout::class,

            Layout::modal('asyncEditMessageModal', MessageEditLayout::class)
                ->async('asyncGetMessage'),
        ];
    }
}
