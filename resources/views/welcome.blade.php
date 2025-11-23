<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EccleLink - منصة التوظيف الكنسية الأولى</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">

    <div class="min-h-screen flex flex-col justify-center items-center px-4">

        <!-- اللوجو -->
        <div class="mb-8">
            <h1 class="text-6xl md:text-7xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-700 drop-shadow-lg">
                EccleLink
            </h1>
        </div>

        <!-- النص الترحيبي -->
        <div class="text-center mb-10">
            <p class="text-2xl md:text-4xl font-bold text-gray-800">
                منصة التوظيف الكنسية الأولى
            </p>
            <p class="text-lg md:text-xl text-gray-600 mt-4">
"لِكَيْ يَرَوْا أَعْمَالَكُمُ الْحَسَنَةَ، وَيُمَجِّدُوا أَبَاكُمُ الَّذِي فِي السَّمَاوَاتِ"            </p>
        </div>

        <!-- الأزرار -->
        <div class="flex flex-col sm:flex-row gap-6">
            <a href="{{ route('login') }}"
               class="px-10 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold text-lg rounded-xl hover:from-blue-700 hover:to-indigo-700 transform hover:scale-105 transition shadow-lg">
                تسجيل الدخول
            </a>

            <a href="{{ route('register') }}"
               class="px-10 py-4 border-2 border-blue-600 text-blue-600 font-semibold text-lg rounded-xl hover:bg-blue-50 transform hover:scale-105 transition shadow-lg">
                إنشاء حساب جديد
            </a>
        </div>

        <!-- الفوتر -->
        <div class="mt-16 text-center text-gray-500 text-sm">
            <p>مشروع تعليمي • Laravel 12 + Jetstream + Livewire</p>
            <p class="mt-1">بولا زكريا © {{ date('Y') }}</p>
        </div>

    </div>
</body>
</html>