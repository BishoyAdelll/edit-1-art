<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddDataResource\Pages;
use App\Filament\Resources\AddDataResource\RelationManagers;
use App\Models\AddData;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddDataResource extends Resource
{
    protected static ?string $model = AddData::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->options(User::query()->pluck('code','id'))
                    ->label('code')
                    ->reactive()
                    ->afterStateUpdated(fn(Forms\Set $set,$state)=>$set('name_english',User::find($state)?->name ?? 0))
                    ->required(),
                Forms\Components\TextInput::make('name_arabic')
                    ->maxLength(255),
                Forms\Components\TextInput::make('name_english')
                    ->maxLength(255),
                Forms\Components\TextInput::make('program_name')
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_term_GPA')
                    ->maxLength(255),
                Forms\Components\TextInput::make('total_credits')
                    ->maxLength(255),
                Forms\Components\TextInput::make('GPA')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name_arabic')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name_english')
                    ->searchable(),
                Tables\Columns\TextColumn::make('program_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_term_GPA')
                    ->searchable(),
                Tables\Columns\TextColumn::make('GPA')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_credits')
                    ->searchable(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListAddData::route('/'),
            'create' => Pages\CreateAddData::route('/create'),
            'view' => Pages\ViewAddData::route('/{record}'),
            'edit' => Pages\EditAddData::route('/{record}/edit'),
        ];
    }
}
