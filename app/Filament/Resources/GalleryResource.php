<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationLabel = 'Galeri Foto';
    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Media'; // Grouping agar rapi di sidebar

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Upload Foto')
                    ->description('Masukan judul dan foto untuk ditampilkan di galeri.')
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Judul Foto')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Kegiatan Workshop 2024')
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('gambar')
                            ->label('File Foto')
                            ->image()
                            ->imageEditor() // ✅ Fitur Crop/Rotate gambar bawaan
                            ->directory('galleries')
                            ->required()
                            ->columnSpanFull()
                            ->downloadable(), // Memudahkan admin mendownload ulang jika perlu
                    ])
                    ->columns(1), // Layout 1 kolom agar gambar terlihat lebar/besar
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Preview')
                    ->square() // Membuat thumbnail kotak presisi
                    ->size(100), // Ukuran gambar diperbesar (default 40)

                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->weight('bold') // Font tebal
                    ->limit(50), // Batasi panjang teks jika terlalu panjang

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diunggah')
                    ->date('d M Y')
                    ->sortable()
                    ->color('gray'),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}