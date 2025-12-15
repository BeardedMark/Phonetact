@extends('layouts.app')

@section('page')
    <header>
        @include('partials.header')
    </header>

    <main class="over-x-hidden">
        <div class="pad-y-lgr">
            <section>
                <div class="container">
                    <div class="row g-5">
                        <div class="col col-12 col-lg-4 d-none d-lg-block">
                            @component('pages.components.sidemenu')
                            @endcomponent
                        </div>
    
                        <div class="col col-12 col-lg">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        @include('partials.footer')
    </footer>
@endsection
