## Feature

# plugings
- THEME by hasnayeen/themes
- ROLE ACCES by bezhansalleh-filament-shield
- PROFILE EDITOR by jao paulo leite Nascimento
- IMPERSONATE by Joseph Szobody
- EXCEL EXPORT by Dennis Koch

# filament doc
- Notifications database
- User Management



## Installation

1. Clone Project:

```bash
 git clone https://github.com/RizkyMardiyansyah/mard.git mardsoft
```
2. Copy .env.example into .env

3. Create DB and Configuration in .env

4. Migrate:

```bash
 php artisan migrate
```

5. Crete Link:

```bash
php artisan storage:link
```

6. create user

```bash
php artisan make:filament-user
```


## Send Notification

2. Create Observer:

```bash
 php artisan make:observer ObserverName --model=ModelName
```
3. Configurate Observer app\Observers\ObserverName.php

```php

    use Filament\Notifications\Actions\Action;
    use Filament\Notifications\Notification;



    public function created(Model $Model): void
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
                ->url(ModelResource::getUrl('edit', ['record' => $Model->id]))
                
        ])
        ->sendToDatabase($recepient); 

        
    }

```

4. Connect to Model app\Models\ModelName.php

```php

#[ObservedBy([OrderObserver::class])]

```



## Excel Export

1. Configurate in ModelResource

```php
->bulkActions([
    TablesExportBulkAction::make()->exports([                    
        ExcelExport::make('form')
            ->fromForm()
            ->withFilename(date('Y-m-d') . ' - Orders'),
        ]),
    ]);
```