<!-- FILEPATH: /Users/ahmetbarut/Sites/paste-app-api/resources/views/paste/show.blade.php -->

@extends('layouts.app')

@push('head')
    <link rel="stylesheet" href="{{ asset('prism/prism.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('prism/prism.js') }}"></script>
    <script src="{{ asset('prism/line-numbers.js') }}"></script>
    <script>
        window.Prism = window.Prism || {};
        window.Prism.manual = true;

        document.getElementById('copy-btn').addEventListener('click', function() {
            const el = document.createElement('textarea');
            el.value = document.querySelector('pre').innerText;
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            this.innerText = 'Kopyalandı';
            setTimeout(() => {
                this.innerText = 'Kopyala';
            }, 3000);
        });
    </script>
@endpush

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200 min-h-[70vh]">
                <div class="flex flex-row justify-end">
                    <button id="copy-btn" class="bg-blue-400 rounded p-2 text-white hover:bg-blue-500 transition-all">
                        Kopyala
                    </button>
                </div>

                <div class="mt-6 text-gray-500" >
                    <pre class="language- line-numbers">
                        {{ $paste->content }}
                    </pre>
                </div>
            </div>
        </div>
    </div>
@endsection
