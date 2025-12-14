<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Tables;
use Filament\Resources\Resource;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationLabel = 'Layanan';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Master Data'; // Opsional: untuk grouping di sidebar

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                // -- Kolom Kiri (Konten Utama) --
                Group::make()
                    ->schema([
                        Section::make('Informasi Layanan')
                            ->description('Masukan detail utama mengenai layanan ini.')
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->label('Nama Layanan')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(), // Agar input nama mengambil lebar penuh section

                                Forms\Components\Textarea::make('deskripsi')
                                    ->label('Deskripsi Lengkap')
                                    ->rows(5)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]), // Mengambil 2 bagian dari 3 kolom grid

                // -- Kolom Kanan (Media & Harga) --
                Group::make()
                    ->schema([
                        Section::make('Media & Harga')
                            ->schema([
                                Forms\Components\FileUpload::make('gambar')
                                    ->label('Foto Layanan')
                                    ->image()
                                    ->imageEditor() // Fitur crop
                                    ->directory('services')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('harga')
                                    ->label('Harga')
                                    ->numeric()
                                    ->prefix('Rp')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]), 
            ])
            ->columns(3); // Total Grid Layout adalah 3 kolom
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->disk('public')
                    ->circular() // Tampilan bulat terlihat lebih modern 
                    ->stacked(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'), // Menebalkan font nama

                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR', locale: 'id_ID') // Format uang Indonesia yang rapi
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->date('d M Y') // Format tanggal yang lebih mudah dibaca
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true), // Tersembunyi default, bisa dimunculkan user
            ])
            ->defaultSort('created_at', 'desc') // Urutan default data terbaru di atas
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}