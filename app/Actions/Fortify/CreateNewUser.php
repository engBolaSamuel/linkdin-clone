<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'headline' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'current_position' => ['nullable', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // توليد username لاتيني فريد
        $base = Str::slug($input['name'], '-');
        $username = $base;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $base . '-' . $counter++;
        }

        // إنشاء المستخدم
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'headline' => $input['headline'] ?? null,
            'location' => $input['location'],
            'current_position' => $input['current_position'] ?? null,
            'username' => $username,
        ]);

        // ضمان إضافي: لو حصل أي خطأ و username طلع null، نولّد واحد جديد
        if (empty($user->username)) {
            $user->username = Str::slug($user->name) . '-' . $user->id;
            $user->save();
        }

        return $user;
    }
}
