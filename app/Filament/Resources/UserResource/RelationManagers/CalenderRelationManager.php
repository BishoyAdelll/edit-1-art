<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Models\User;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CalenderRelationManager extends RelationManager
{
    protected static string $relationship = 'Calender';

    public function form(Form $form): Form
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

                            ->maxLength(255),
                        Forms\Components\TextInput::make('user_name')
                            ->label('email')
                            ->required()

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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('user_name')
            ->columns([
                Tables\Columns\TextColumn::make('saturday')

                    ->sortable(),
                Tables\Columns\TextColumn::make('sunday')
                    ->searchable(),
                Tables\Columns\TextColumn::make('monday')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tuesday')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wednesday')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thursday')
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
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
              Tables\Actions\ActionGroup::make([
//                  Tables\Actions\CreateAction::make(),
                  Tables\Actions\EditAction::make(),
                  Tables\Actions\DeleteAction::make(),
              ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
