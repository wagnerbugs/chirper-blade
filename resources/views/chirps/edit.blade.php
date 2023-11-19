<x-app-layout>
    <div class="mx-auto max-w-2xl p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="message">{{ old('message', $chirp->message) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('message')" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
