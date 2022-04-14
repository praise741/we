<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MoviesResource\Pages;
use App\Filament\Resources\MoviesResource\RelationManagers;
use App\Models\genre;
use App\Models\Movies;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class MoviesResource extends Resource
{
    protected static ?string $model = Movies::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('cover')
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\MarkdownEditor::make('description')
                ->toolbarButtons([
                    'attachFiles',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'edit',
                    'italic',
                    'link',
                    'orderedList',
                    'preview',
                    'strike',
                ]),
                Forms\Components\DatePicker::make('releaseyear'),
                Forms\Components\TextInput::make('runningtime')
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                ->options([
                    'HD' => 'HD',
                    'MP4' => 'MP4',

                ])
                ->default('draft')
                ->disablePlaceholderSelection(),
                Forms\Components\TextInput::make('age')
                    ->maxLength(255),
                Forms\Components\Select::make('genre')
                ->label('genre')
                ->options(genre::all()->pluck('name', 'name')),

                Forms\Components\TextInput::make('type')
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover')->rounded(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('releaseyear')
                    ->date(),
                Tables\Columns\TextColumn::make('runningtime'),
                Tables\Columns\TextColumn::make('quality'),
                Tables\Columns\TextColumn::make('age'),
                Tables\Columns\TextColumn::make('genre'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('link'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListMovies::route('/'),
            'create' => Pages\CreateMovies::route('/create'),
            'edit' => Pages\EditMovies::route('/{record}/edit'),
        ];
    }
}
