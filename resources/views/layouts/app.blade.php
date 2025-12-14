<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solusi Koneksi Infrastruktur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-gold': '#DAA520', // Warna emas tombol/teks 
                        'custom-dark': '#2D2D2D', // Warna teks judul
                        'custom-cream': '#FEFDF5', // Background navbar
                        'custom-border': '#E5DCC5', // Border navbar
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'], // Font standar yang bersih
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Helper untuk efek fade pada gambar samping */
        .fade-mask-left {
            mask-image: linear-gradient(to right, transparent, black 40%);
            -webkit-mask-image: linear-gradient(to right, transparent, black 40%);
        }
        .fade-mask-right {
            mask-image: linear-gradient(to left, transparent, black 40%);
            -webkit-mask-image: linear-gradient(to left, transparent, black 40%);
        }
    </style>
</head>
<body class="bg-white text-gray-800">
        <div class="pb-[7vh]">

            @include('partials.navbar')
        </div>

    <main >
        @yield('content')
    </main>
            @include('partials.footer')

</body>
</html>