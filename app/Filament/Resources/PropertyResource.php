<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertyResource\Pages;
use App\Filament\Resources\PropertyResource\RelationManagers;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('room')
                    ->numeric()
                    ->required(),
                    TextInput::make('bathroom')
                        ->numeric()
                        ->required(),
                    TextInput::make('garage')
                        ->numeric()
                        ->required(),
                    TextInput::make('surface')
                        ->numeric()
                        ->required(),
                    DatePicker::make('yearOfBuild')
                        ->required()
                        ->maxDate(now()),
                    TextInput::make('description')
                        ->required(),
                    TextInput::make('adresse')
                        ->required(),
                     Checkbox::make('status')
                         ,
                    TextInput::make('price')
                        ->required()
                        ->numeric(),
                    FileUpload::make('picture1')
                        ->image()
                        ->required(),
                    FileUpload::make('picture2')
                        ->image()
                        ->required(),
                    FileUpload::make('picture3')
                        ->image()
                        ->required(),
                    FileUpload::make('picture4')
                        ->image()
                        ->required(),
                    FileUpload::make('picture5')
                        ->image()
                        ->required(),
                    FileUpload::make('picture6')
                        ->image()
                        ->required(),
                    Select::make('city_id')
                        ->relationship('city', 'name')
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            TextInput::make('name')]),
                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->preload()
                        ->createOptionForm([
                            TextInput::make('name')]),
            ]
            )
        ;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('picture1')
                    ->width(80)
                    ->height(80),
                TextColumn::make('room'),
                TextColumn::make('bathroom'),
                TextColumn::make('garage'),
                TextColumn::make('yearOfBuild')->date(),
                TextColumn::make('description')->limit(10),
                TextColumn::make('adresse'),
                TextColumn::make('price'),
                TextColumn::make('city.name'),
                TextColumn::make('category.name'),
                CheckboxColumn::make('status')


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
        ];
    }
}
