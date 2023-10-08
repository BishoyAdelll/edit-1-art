<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppreciationResource\Pages;
use App\Filament\Resources\AppreciationResource\RelationManagers;
use App\Models\Appreciation;
use App\Models\Subject;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppreciationResource extends Resource
{
    protected static ?string $model = Appreciation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('subject_id')
                    ->required()
                    ->relationship('Subject','name')
                    ->reactive()
                    ->afterStateUpdated(fn(Forms\Set $set,$state)=>$set('subject_code',Subject::find($state)?->code ?? 0)),
                Forms\Components\Select::make('user_id')
                    ->required()
                    ->options(User::query()->pluck('name','id')),
                Forms\Components\TextInput::make('semester')
                    ->maxLength(255),
                Forms\Components\TextInput::make('subject_code')
                    ->required()
                    ->readOnly()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hours')
                    ->maxLength(255),
                Forms\Components\TextInput::make('quality_point')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('semester')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hours')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quality_point')
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
            'index' => Pages\ListAppreciations::route('/'),
            'create' => Pages\CreateAppreciation::route('/create'),
            'view' => Pages\ViewAppreciation::route('/{record}'),
            'edit' => Pages\EditAppreciation::route('/{record}/edit'),
        ];
    }
}
