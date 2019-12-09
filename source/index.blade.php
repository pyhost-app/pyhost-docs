@extends('_layouts.documentation')

@section('content')
<section class="container max-w-6xl mx-auto px-6">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div>
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Deploy Django sites on your own server <br class="hidden sm:block"> without touching the command line</p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a target="_blank" href="https://pyhost.io" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">About PyHost</a>
            </div>
        </div>
    </div>
</section>
@endsection
