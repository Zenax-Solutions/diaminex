<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SapphireResource\Pages;
use App\Filament\Resources\SapphireResource\RelationManagers;
use App\Models\Sapphire;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SapphireResource extends Resource
{
    protected static ?string $model = Sapphire::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Gemstones';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\TextInput::make('tagline')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535),
                Forms\Components\FileUpload::make('model_path')
                    ->label('3D Model')
                    ->maxSize(2024)
                    ->required(),
                Forms\Components\FileUpload::make('gallery_images')
                    ->label('Gallery Images')
                    ->multiple()
                    ->image()
                    ->panelLayout('grid')
                    ->image(), // Allows multiple image uploads
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->readOnly()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_published')
                    ->label('Publish Status')
                    ->default(false),
                Forms\Components\RichEditor::make('long_description')
                    ->label('Long Description')
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tagline')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50),
                Tables\Columns\BooleanColumn::make('is_published')
                    ->label('Published'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated')
                    ->date(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_published')
                    ->options([
                        true => 'Published',
                        false => 'Unpublished',
                    ])
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
            'index' => Pages\ListSapphires::route('/'),
            'create' => Pages\CreateSapphire::route('/create'),
            'edit' => Pages\EditSapphire::route('/{record}/edit'),
        ];
    }
}
