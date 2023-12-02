<header class="max-w-xl">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Manage Courses') }}
    </h2>
</header>

<!-- Add Courses -->
<div class="mb-8">
    <p class="mt-1 text-sm text-gray-600">
        {{ __("Add Courses that you will make Tasks for.") }}
    </p>
    <form class="mt-6">
        <div class="mb-4">
            <x-input-label for="course" :value="__('Course Name')" />
            <x-text-input id="course" name="course" type="text" class="mt-1 block w-full lg:w-1/2" :value="old('course')" required />
        </div>
        <x-primary-button>{{  __('Add Course') }}</x-primary-button>
    </form>
</div>
