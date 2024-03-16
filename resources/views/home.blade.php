@extends('layouts.landingpage.main')

@section('container')
    <div class="mx-auto max-w-2xl py-32">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            <div
                class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Show all my posts. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0"
                        aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                Welcome to <span class="text-cyan-600">My Blog!</span>
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">
                This blog contains information about <span class="font-semibold">Riandalis</span>, his writings about
                anything,
                as
                well as my stories.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Go to all posts
                </a>
            </div>
        </div>
    </div>
@endsection()
