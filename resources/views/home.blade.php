@extends('layouts.main')

@section('title', 'Home')

@section('jumbo')
    @include('includes.jumbo')
@endsection

@section('main')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($items as $index => $item)
                    <div class="col">
                        <a href="{{ route('comics'), $index }}">
                            <div class="film-card">
                                <img src="{{ $item['thumb'] }}" alt="">
                                <figcaption>{{ $item['title'] }}</figcaption>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <button>
            <h5>LOAD MORE</h5>
        </button>
    </section>
@endsection
