<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Students Section  --}}
            <section class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
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
            </section>

            {{-- Courses Section  --}}
            <section class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Manage Courses') }}
                    </h2>
                </div>

                <!-- Add Courses -->
                <div class="mb-8">
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Add Courses that you will make Tasks for.") }}
                    </p>
                    <form class="mt-6">
                        <div class="mb-4">
                            <x-input-label for="course" :value="__('Course Name')" />
                            <x-text-input id="course" name="course" type="text" class="mt-1 block w-1/2" :value="old('course')" required />
                        </div>
                        <x-primary-button>{{  __('Add Course') }}</x-primary-button>
                    </form>
                </div>
            </section>

            {{-- Tasks Section  --}}
            <section class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Manage Tasks') }}
                    </h2>
                </div>

                <!-- Assign Tasks -->
                <div class="mb-8">
                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Add Tasks for the Courses you added.") }}
                    </p>
                    <form method="post" action="#" class="mt-6">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="task" :value="__('Task Name')" />
                            <x-text-input id="task" name="task" type="text" class="w-1/2" :value="old('task')" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="deadline" :value="__('Select Course')" />
                            <select id="course" name="course" class="border-gray-300 focus:border-gray-900 focus:ring-indigo-500 rounded-md shadow-sm w-1/2">
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
                            <x-text-input id="deadline" name="deadline" type="date" class="mt-1 block w-1/2" :value="old('deadline')" required />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Task Description')" />
                            <textarea id="description" name="description" class="border-gray-300 focus:border-gray-900 focus:ring-indigo-500 rounded-md shadow-sm w-1/2" required>{{ old('description') }}</textarea>
                        </div>

                        <div class="flex items-center">
                            <x-primary-button>
                                {{ __('Add Task') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
