<?php

namespace App\Filament\Resources;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Hidden;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            \Filament\Forms\Components\TextInput::make('title')
                ->required()
                ->live()
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', \Str::slug($state))),
            \Filament\Forms\Components\TextInput::make('slug')
                ->readOnly()
                ->required(),
            \Filament\Forms\Components\Select::make('kategoris')
                ->label('Kategori')
                ->relationship('kategoris', 'name')
                ->multiple()
                ->searchable()
                ->preload()
                ->columnSpanFull()
                ->required(),
            \Filament\Forms\Components\FileUpload::make('thumbnail')
                ->directory('thumbnail')
                ->visibility('private')
                ->required(),
            \Filament\Forms\Components\RichEditor::make('content')->required(),
            \Filament\Forms\Components\Hidden::make('user_id')->default(fn () => \Auth::id()),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')->searchable(),
            TextColumn::make('kategoris.name')
        ->label('Kategori')
        ->searchable()
        ->badge(),
        TextColumn::make('created_at')
        ->dateTime()
        ->label("Tanggal Dibuat")
        ->sortable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
