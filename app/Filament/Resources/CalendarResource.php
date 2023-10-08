<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CalendarResource\Pages;
use App\Filament\Resources\CalendarResource\RelationManagers;
use App\Models\Calendar;
use App\Models\Grade;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CalendarResource extends Resource
{
    protected static ?string $model = Calendar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->options(User::query()->pluck('name','id'))
                            ->label('name')->required()->reactive()
                            ->afterStateUpdated(fn(Forms\Set $set,$state)=>[
                                $set('user_code',User::find($state)?->code ?? 0),
                                $set('user_name',User::find($state)?->email ?? 0),
                                ])
//                            ->afterStateUpdated(fn(Forms\Set $set,$state)=>$set('user_name',User::find($state)?->email ?? 0))
//                            ->relationship('User','name')
//                            ->required()
                        ,
                        Forms\Components\TextInput::make('user_code')
                            ->required()
                            ->readOnly()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('user_name')
                            ->label('email')
                            ->required()
                            ->readOnly()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('batch')
                            ->required()
                            ->maxLength(255),
                    ])->columnSpan(6),
                    Forms\Components\Section::make()
                    ->schema([


                        Forms\Components\RichEditor::make('saturday')
                            ->required()
                            ->maxLength(65535)
                            ,
                        Forms\Components\RichEditor::make('sunday')
                            ->required()
                            ->maxLength(65535)
                            ,
                        Forms\Components\RichEditor::make('monday')
                            ->required()
                            ->maxLength(65535)
                            ,
                        Forms\Components\RichEditor::make('tuesday')
                            ->required()
                            ->maxLength(65535)
                            ,
                        Forms\Components\RichEditor::make('wednesday')
                            ->required()
                            ->maxLength(65535)
                            ,
                        Forms\Components\RichEditor::make('thursday')
                            ->required()
                            ->maxLength(65535)
                            ,
                    ])->columnSpan(6)



            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user_name')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('batch')
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
            'index' => Pages\ListCalendars::route('/'),
            'create' => Pages\CreateCalendar::route('/create'),
            'view' => Pages\ViewCalendar::route('/{record}'),
            'edit' => Pages\EditCalendar::route('/{record}/edit'),
        ];
    }
}
