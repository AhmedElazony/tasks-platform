<header class="max-w-xl">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Manage Students') }}
    </h2>
</header>

<!-- Assign Students -->
<div class="mb-8">
    <p class="mt-1 text-sm text-gray-600">
        {{ __("Assign Students to your classroom.") }}
    </p>
    <form class="mt-6">
        <div class="mb-4">
            <x-input-label for="email" :value="__('Student Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-1/2" :value="old('email')" required />
        </div>
        <x-primary-button>{{  __('Assign Student') }}</x-primary-button>
    </form>
</div>
