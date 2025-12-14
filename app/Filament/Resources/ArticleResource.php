<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationLabel = 'Artikel';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper'; // Icon diganti agar lebih pas (koran/artikel)
    protected static ?string $navigationGroup = 'Konten'; // Grouping menu

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // -- Kolom Kiri: Editor Konten --
                Group::make()
                    ->schema([
                        Section::make('Konten Artikel')
                            ->schema([
                                Forms\Components\TextInput::make('judul')
                                    ->label('Judul Artikel')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Masukkan judul menarik...')
                                    ->live(onBlur: true), // Berguna jika nanti mau auto-generate slug

                                Forms\Components\RichEditor::make('konten')
                                    ->label('Isi Artikel')
                                    ->required()
                                    ->toolbarButtons([
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'undo',
                                    ]) // Membatasi tombol agar toolbar tidak terlalu penuh
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]), // Lebar 2/3

                // -- Kolom Kanan: Media & Gambar --
                Group::make()
                    ->schema([
                        Section::make('Gambar Utama')
                            ->schema([
                                Forms\Components\FileUpload::make('gambar')
                                    ->label('Cover Artikel')
                                    ->image()
                                    ->imageEditor() // Fitur crop
                                    ->directory('articles')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]), // Lebar 1/3
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Cover')
                    ->square()
                    ->size(60),

                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->weight('bold')
                    ->description(fn (Article $record): string => \Illuminate\Support\Str::limit(strip_tags($record->konten), 50)) // Menampilkan cuplikan isi di bawah judul
                    ->wrap(), 

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Terbit')
                    ->date('d M Y')
                    ->sortable(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}