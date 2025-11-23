<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" dir="rtl">
        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg text-right">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">إنشاء حساب جديد</h1>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- الاسم الكامل -->
                <div>
                    <x-label for="name" value="الاسم الكامل" />
                    <x-input id="name" class="block mt-1 w-full !text-right placeholder:text-right" 
                             type="text" name="name" :value="old('name')" required autofocus 
                             autocomplete="name" placeholder="فلان الفلاني" dir="auto" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <!-- البريد الإلكتروني -->
                <div class="mt-4">
                    <x-label for="email" value="البريد الإلكتروني" />
                    <x-input id="email" class="block mt-1 w-full text-left placeholder:text-left" 
                             type="email" name="email" :value="old('email')" required 
                             autocomplete="username" placeholder="example@domain.com" dir="ltr" />
                    <x-input-error for="email" class="mt-2" />
                </div>

                <!-- كلمة المرور -->
                <div class="mt-4">
                    <x-label for="password" value="كلمة المرور" />
                    <x-input id="password" class="block mt-1 w-full" type="password" 
                             name="password" required autocomplete="new-password" dir="ltr" />
                    <x-input-error for="password" class="mt-2" />
                </div>

                <!-- تأكيد كلمة المرور -->
                <div class="mt-4">
                    <x-label for="password_confirmation" value="تأكيد كلمة المرور" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" 
                             name="password_confirmation" required autocomplete="new-password" dir="ltr" />
                    <x-input-error for="password_confirmation" class="mt-2" />
                </div>

                <!-- العنوان الوظيفي -->
                <div class="mt-4">
                    <x-label for="headline" value="العنوان الوظيفي (Headline)" />
                    <x-input id="headline" class="block mt-1 w-full !text-right placeholder:text-right" 
                             type="text" name="headline" :value="old('headline')" required 
                             placeholder="مطور Laravel | خبير Full Stack" dir="auto" />
                    <x-input-error for="headline" class="mt-2" />
                </div>

                <!-- الموقع الجغرافي -->
                <div class="mt-4">
                    <x-label for="location" value="الموقع الجغرافي" />
                    <x-input id="location" class="block mt-1 w-full !text-right placeholder:text-right" 
                             type="text" name="location" :value="old('location')" required 
                             placeholder="القاهرة، مصر" dir="auto" />
                    <x-input-error for="location" class="mt-2" />
                </div>

                <!-- الوظيفة الحالية -->
                <div class="mt-4">
                    <x-label for="current_position" value="الوظيفة الحالية (اختياري)" />
                    <x-input id="current_position" class="block mt-1 w-full !text-right placeholder:text-right" 
                             type="text" name="current_position" :value="old('current_position')" 
                             placeholder="مثال: Senior PHP Developer في XYZ" dir="auto" />
                </div>

                <div class="flex items-center justify-between mt-8">
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                        لديك حساب بالفعل؟ تسجيل الدخول
                    </a>

                    <x-button type="submit" class="px-8">
                        إنشاء الحساب
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>