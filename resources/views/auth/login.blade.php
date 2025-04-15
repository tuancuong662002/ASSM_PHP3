<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden px-6 py-8">
        <h2 class="text-2xl font-semibold text-center text-gray-800 dark:text-white mb-6">
            {{ __('Đăng nhập tài khoản') }}
        </h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Mật khẩu')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-300">{{ __('Ghi nhớ đăng nhập') }}</span>
                </label>

                @if (Route::has('password.request'))
                <a class="text-sm text-indigo-600 hover:underline dark:text-indigo-400"
                    href="{{ route('password.request') }}">
                    {{ __('Quên mật khẩu?') }}
                </a>
                @endif
            </div>

            <div class="flex items-center justify-center">
                <x-primary-button class="w-full justify-center py-2">
                    {{ __('Đăng nhập') }}
                </x-primary-button>
            </div>
        </form>

        <div class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
            Chưa có tài khoản?
            <a href="{{ route('register') }}" class="text-indigo-600 hover:underline dark:text-indigo-400">
                Đăng ký ngay
            </a>
        </div>
    </div>
</x-guest-layout>