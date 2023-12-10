<header class="max-w-xl" id="add-task">
    <h2 class="text-lg font-medium text-gray-900">
        {{ __('Manage Tasks') }}
    </h2>
</header>

<!-- Assign Tasks -->
<div class="mb-8">
    <p class="mt-1 text-sm text-gray-600">
        {{ __("Add Tasks for the Courses you added.") }}
    </p>
    <form method="post" action="#" class="mt-6">
        @csrf
        <div class="mb-4">
            <x-input-label for="task" :value="__('Task Name')" />
            <x-text-input id="task" name="task" type="text" class="w-full lg:w-1/2" :value="old('task')" required />
        </div>

        <div class="mb-4">
            <x-input-label for="deadline" :value="__('Select Course')" />
            <select id="course" name="course" class="border-gray-300 focus:border-gray-900 focus:ring-indigo-500 rounded-md shadow-sm w-full lg:w-1/2">
                {{--                                @foreach($courses as $course)--}}
                <option value="#">{{ __('Course 1') }}</option>
                <option value="#">{{ __('Course 1') }}</option>
                <option value="#">{{ __('Course 1') }}</option>
                <option value="#">{{ __('Course 1') }}</option>
                {{--                                @endforeach--}}
            </select>
        </div>

        <div class="mb-4">
            <x-input-label for="deadline" :value="__('Deadline')" />
            <x-text-input id="deadline" name="deadline" type="date" class="mt-1 block w-full lg:w-1/2" :value="old('deadline')" required />
        </div>

        <div class="mb-4">
            <x-input-label for="description" :value="__('Task Description')" />
            <textarea id="description" name="description" class="border-gray-300 focus:border-gray-900 focus:ring-indigo-500 rounded-md shadow-sm w-full lg:w-1/2" required>{{ old('description') }}</textarea>
        </div>

        <div class="flex items-center">
            <x-primary-button>
                {{ __('Add Task') }}
            </x-primary-button>
        </div>
    </form>
</div>
