<x-guest-layout>
    <form method="POST" action="{{ route('otp.verify') }}">
        @csrf

        <!-- Hidden Email Field -->
        <input type="hidden" name="email" value="{{ session('email') }}">

        <!-- Email Information -->
        <div class="mb-4">
            <p class="text-yellow-500">
                {{ __('An OTP has been sent to your email address:') }} <strong class="italic text-gray-400">{{ session('email') }}</strong>
            </p>
        </div>

        <!-- OTP Input -->
        <div>
            <x-input-label for="otp" :value="__('OTP')" />
            <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" required autofocus />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Verify OTP') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>