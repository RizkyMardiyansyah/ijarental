<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Bussines';
    protected static ?int $navigationSort = 3;
    public static function getModelLabel(): string
    {
        return 'Artikel';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Artikel';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make('Informasi Artikel')
                            ->schema([
                                Forms\Components\TextInput::make('judul')
                                    ->label('Judul Artikel')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\DateTimePicker::make('published_at')
                                    ->label('Tanggal Publish')
                                    ->default(Carbon::now())
                                    ->disabled()
                                    ->dehydrated(),
    
                                Forms\Components\Hidden::make('penulis')
                                    ->default(fn () => Auth::user()?->name)
                                    ->dehydrated(),
    
                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Thumbnail')
                                    ->image()
                                    ->imagePreviewHeight('120')
                                    ->directory('thumbnails')
                                    ->maxSize(2048)
                                    ->columnSpanFull()
                                    ->nullable(),
                            ])
                            ->columns(2),
    
                        Forms\Components\Section::make('Konten')
                            ->schema([
                                Forms\Components\RichEditor::make('konten')
                                    ->label('Isi Artikel')
                                    ->required()
                                    ->columnSpanFull()
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'bulletList', 'orderedList', 'link',
                                        'h2', 'h3', 'blockquote', 'codeBlock',
                                        'undo', 'redo'
                                    ])
                                    ->extraAttributes(['style' => 'min-height: 300px']),
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->searchable(),                
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
