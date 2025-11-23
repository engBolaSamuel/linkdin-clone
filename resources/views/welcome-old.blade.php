<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linkdin Clone - مرحبًا</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            <a href="/">
                <h1 class="text-6xl font-bold text-blue-600">EccleLink</h1>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex flex-col items-center space-y-4">
                <p class="text-xl text-gray-600">منصة التوظيف الكنسية الأولى</p>
                <a href="{{ route('login') }}"
                   class="px-8 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                    تسجيل الدخول
                </a>
                <a href="{{ route('register') }}"
                   class="px-8 py-3 border border-blue-600 text-blue-600 rounded-md hover:bg-blue-50 transition">
                    إنشاء حساب جديد
                </a>
            </div>
        </div>

        <div class="mt-10 text-center text-gray-500 text-sm">
            <p>مشروع تعليمي Laravel 12 + Jetstream + Livewire</p>
            <p> بولا زكريا </p>
        </div>
    </div>
</body>
</html>