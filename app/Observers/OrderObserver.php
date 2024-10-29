<?php

namespace App\Observers;

use App\Filament\Resources\OrderResource;
use App\Models\order;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Container\Attributes\Auth;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     */
    public function created(order $order): void
    {
        $recepient=User::all();
        Notification::make()
        ->title('New Order')
        ->success()
        ->body('New Order Created, waiting to proccess')
        ->actions([
            Action::make('View')
                // ->button()
                ->color('primary')
                ->markAsRead()
                ->url(OrderResource::getUrl('edit', ['record' => $order->id]))
                
        ])
        ->sendToDatabase($recepient); 

        
    }

    /**
     * Handle the order "updated" event.
     */
    public function updated(order $order): void
    {
        //
    }

    /**
     * Handle the order "deleted" event.
     */
    public function deleted(order $order): void
    {
        //
    }

    /**
     * Handle the order "restored" event.
     */
    public function restored(order $order): void
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     */
    public function forceDeleted(order $order): void
    {
        //
    }
}
