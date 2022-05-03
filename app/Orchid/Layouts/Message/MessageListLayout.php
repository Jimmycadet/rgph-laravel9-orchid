<?php

namespace App\Orchid\Layouts\Message;

use App\Models\Message;
use Illuminate\Support\Str;
use Orchid\Platform\Models\Role;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Repository;
use Orchid\Screen\TD;

class MessageListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'messages';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
//            TD::make('name', __('Name'))
//                ->sort()
//                ->cantHide()
//                ->filter(Input::make())
//                ->render(function (Message $message) {
//                    return Link::make($message->name)
//                        ->route('platform.systems.messages.edit', $message->id);
//                }),
            TD::make('name', __('Name'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Message $message) {
                    return new Persona($message->presenter());
                }),

//            TD::make('email', __('Email'))
//                ->sort()
//                ->cantHide()
//                ->filter(Input::make())
//                ->render(function (Message $message) {
//                    return ModalToggle::make($message->email)
//                        ->modal('asyncEditMessageModal')
//                        ->modalTitle('Email')
//                        ->method('saveMessage')
//                        ->asyncParameters([
//                            'message' => $message->id,
//                        ]);
//                }),

            TD::make('email', __('Email'))
                ->sort()
                ->cantHide()
                ->width(10)
                ->filter(Input::make())
                ->render(function (Message $message) {
                    return ModalToggle::make($message->email)
                        ->modal('asyncEditMessageModal')
                        ->modalTitle($message->presenter()->title())
                        ->method('saveMessage')
                        ->asyncParameters([
                            'message' => $message->id,
                        ]);
                }),

            TD::make('comments', 'Comments')
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->width('400')
                ->render(function (Message $message) {
                    return Str::limit($message->comments, 200);
                }),

            TD::make('created_at', __('Last create'))
                ->sort()
                ->width(100)
                ->render(function (Message $message) {
                    return $message->created_at->toDateTimeString();
                }),

            TD::make('updated_at', __('Last edit'))
                ->sort()
                ->width(100)

                ->render(function (Message $message) {
                    return $message->updated_at->toDateTimeString();
                }),
        ];
    }
}
