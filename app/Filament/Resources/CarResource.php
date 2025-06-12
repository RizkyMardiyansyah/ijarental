<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\car;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    
    protected static ?string $model = car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Bussines';
    public static function getModelLabel(): string
    {
        return 'Armada';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Armada';
    }


public static function form(Form $form): Form
{
    return $form->schema([
        Section::make('Informasi Armada')
            ->description('Isi data armada secara lengkap dan jelas.')
            ->schema([
                Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Armada')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('kapasitas')
                            ->label('Kapasitas')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('durasi_rental')
                            ->label('Durasi Rental')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('harga_termasuk')
                            ->label('Harga Termasuk')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Toggle::make('tambah_harga')
                            ->label('Tambah Harga?')
                            ->default(true)
                            ->reactive(),
                    
                        Forms\Components\TextInput::make('harga_sewa')
                            ->label('Harga Sewa')
                            ->label('Harga Sewa')
    ->prefix('IDR')
    ->mask(RawJs::make(<<<'JS'
        $money($input)
    JS))
    ->numeric() // ini akan mengubah input menjadi angka saat disimpan
    ->stripCharacters(',') // menghapus koma agar tidak error di database
    ->disabled(fn (Get $get) => ! $get('tambah_harga')),
                    ])
                    ->columns(2),
            ])
            ->columns(1)
            ->collapsible(),

        Section::make('Gambar Armada')
            ->schema([
                FileUpload::make('image')
                    ->label('Upload Gambar')
                    ->directory('armadas')
                    ->image()
                    ->imagePreviewHeight('250')
                    ->maxSize(2048)
                    ->columnSpanFull(),
            ])
            ->columns(1),

        Section::make('Deskripsi')
            ->schema([
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(8)
                    ->columnSpanFull(),
            ])
            ->columns(1),
    ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->label('Gambar')
                ->circular(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('durasi_rental')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_termasuk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_sewa')
                    ->money('idr', true) 
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
