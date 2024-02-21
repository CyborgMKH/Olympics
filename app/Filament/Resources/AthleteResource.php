<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AthleteResource\Pages;
use App\Filament\Resources\AthleteResource\RelationManagers;
use App\Models\Athlete;
use App\Models\Country;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class AthleteResource extends Resource
{
    protected static ?string $model = Athlete::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('image')
                            ->collection('athlete')
                            ->required()
                            ->image(),
                        TextInput::make('name')
                            ->reactive()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            })
                            ->required(),
                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->unique(Athlete::class, 'slug', ignoreRecord: true)
                            ->required(),
                        Textarea::make('biography')
                            ->required(),
                        DatePicker::make('dob')
                            ->required(),
                        TextInput::make('medal_gold')
                            ->numeric()
                            ->required(),
                        TextInput::make('medal_silver')
                            ->numeric()
                            ->required(),
                        TextInput::make('Participations')
                            ->numeric()
                            ->required(),
                        TextInput::make('first_game')
                            ->required(),
                        Select::make('country_id')
                            ->label('Country')
                            ->options(Country::pluck('name', 'id')->toArray())
                            ->required(),

                        Select::make('games')
                            ->relationship('games', 'name')
                            ->multiple()
                            ->preload(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                SpatieMediaLibraryImageColumn::make('image')->collection('athlete')->circular(),
                TextColumn::make('dob'),
                TextColumn::make('country.name'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAthletes::route('/'),
            'create' => Pages\CreateAthlete::route('/create'),
            'edit' => Pages\EditAthlete::route('/{record}/edit'),
        ];
    }
}
