<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2'; // Icon diganti agar lebih relevan (gedung kantor)
    protected static ?string $navigationLabel = 'Profil Perusahaan';
    protected static ?string $navigationGroup = 'Pengaturan'; // Opsional: Grouping menu

    /* =========================
       FORM (EDIT SAJA)
    ========================= */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // -- Kolom Kiri: Informasi Utama --
                Group::make()
                    ->schema([
                        Section::make('Identitas Perusahaan')
                            ->description('Informasi umum mengenai perusahaan.')
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->label('Nama Perusahaan')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                Forms\Components\Textarea::make('deskripsi')
                                    ->label('Deskripsi / Tentang Kami')
                                    ->rows(5)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),

                // -- Kolom Kanan: Kontak & Aset --
                Group::make()
                    ->schema([
                        Section::make('Logo & Kontak')
                            ->schema([
                                Forms\Components\FileUpload::make('logo')
                                    ->label('Logo Perusahaan')
                                    ->image()
                                    ->imageEditor()
                                    ->directory('logo')
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email Resmi')
                                    ->email()
                                    ->prefixIcon('heroicon-m-envelope'), // Tambah Icon Amplop

                                Forms\Components\TextInput::make('telepon')
                                    ->label('No. Telepon / HP')
                                    ->tel()
                                    ->prefixIcon('heroicon-m-phone'), // Tambah Icon Telepon

                                Forms\Components\Textarea::make('alamat')
                                    ->label('Alamat Lengkap')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    /* =========================
       TABLE (EDIT ONLY)
    ========================= */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo')
                    ->circular(), // Biar rapi di tabel
                
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Perusahaan')
                    ->weight('bold')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->icon('heroicon-m-envelope')
                    ->copyable(), // Fitur copy email sekali klik

                Tables\Columns\TextColumn::make('telepon')
                    ->label('Kontak'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Ubah Profil'), // Label tombol diperjelas
            ])
            ->bulkActions([]) // Tetap kosong sesuai permintaan
            ->paginated(false); // Opsional: Matikan pagination jika data cuma 1
    }

    /* =========================
       AKSES DIBATASI (TETAP)
    ========================= */
    public static function canCreate(): bool
    {
        return false; 
    }

    public static function canDeleteAny(): bool
    {
        return false; 
    }

    public static function canDelete($record): bool
    {
        return false; 
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'edit'  => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}