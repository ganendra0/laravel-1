<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-slate-800">
                <div class="card-body">
                    <form action="{{ route('tweets.update', $tweet->id) }}" method="post">
                        @csrf
                        @method('put')
                        <textarea name="content" class="textarea textarea-bordered w-full" rows="3">{{ $tweet->content }}</textarea>
                        <input type="submit" value="Edit" class="btn btn-primary">
                    </form>
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                </div>
            </div>
    </x-slot>
</x-app-layout>
