<header class="max-w-xl" id="assign-student">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Manage Students') }}
    </h2>
</header>

<!-- Assign Students -->
<div class="mb-8">
    <p class="mt-1 text-sm text-gray-600">
        {{ __("Assign Students to your classroom.") }}
    </p>
    <form class="mt-6" action="/dashboard/add-student" method="POST">
        @csrf
        <div class="mb-4">
            <x-input-label for="email" :value="__('Student Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full lg:w-1/2" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" />
            <x-auth-session-status :status="session('success')" />
        </div>
        <x-primary-button>{{  __('Assign Student') }}</x-primary-button>
    </form>
</div>
