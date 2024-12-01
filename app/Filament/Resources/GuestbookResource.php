<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuestbookResource\Pages;
use App\Filament\Resources\GuestbookResource\RelationManagers;
use App\Models\Guestbook;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuestbookResource extends Resource
{
    protected static ?string $model = Guestbook::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('email')
                    ->email()
                    ->required(),
                Textarea::make('message')
                    ->rows(10)
                    ->cols(20)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email'),
                TextColumn::make('message')->wrap(),
            ])
            ->filters([
                //
            ])
            ->defaultSort('name', 'ASC')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListGuestbooks::route('/'),
            'create' => Pages\CreateGuestbook::route('/create'),
            'edit' => Pages\EditGuestbook::route('/{record}/edit'),
        ];
    }
}
