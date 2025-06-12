<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketWisataResource\Pages;
use App\Filament\Resources\PaketWisataResource\RelationManagers;
use App\Models\PaketWisata;
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

class PaketWisataResource extends Resource
{
    protected static ?string $model = PaketWisata::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationGroup = 'Bussines';
    public static function getPluralModelLabel(): string
    {
        return 'Paket Wisata';
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Paket Wisata')
                    ->description('Lengkapi detail informasi paket wisata di bawah ini.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Upload Gambar')
                            ->directory('paket-wisata')
                            ->image()
                            ->imagePreviewHeight('250')
                            ->maxSize(2048)
                            ->columnSpanFull(),

                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('nama_paket')
                                    ->label('Nama Paket')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('durasi')
                                    ->label('Durasi')
                                    ->required()
                                    ->maxLength(255),
                                
                                Forms\Components\Toggle::make('tambah_harga')
                                    ->label('Tambah Harga?')
                                    ->default(true)
                                    ->reactive(),

                                Forms\Components\TextInput::make('harga_paket')
                                    ->label('Harga Paket')
                                    ->label('Harga Sewa')
    ->prefix('IDR')
    ->mask(RawJs::make(<<<'JS'
        $money($input)
    JS))
    ->numeric() // ini akan mengubah input menjadi angka saat disimpan
    ->stripCharacters(',') // menghapus koma agar tidak error di database
    ->disabled(fn (Get $get) => ! $get('tambah_harga')),
                            ]),

                        Forms\Components\Textarea::make('deskripsi')
                            ->label('Deskripsi')
                            ->rows(5)
                            ->columnSpanFull(),
                    ])
                    ->columns(1)
                    ->collapsible(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular(),
                Tables\Columns\TextColumn::make('nama_paket')
                    ->searchable(),
                Tables\Columns\TextColumn::make('durasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga_paket')
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
            'index' => Pages\ListPaketWisatas::route('/'),
            'create' => Pages\CreatePaketWisata::route('/create'),
            'edit' => Pages\EditPaketWisata::route('/{record}/edit'),
        ];
    }
}
