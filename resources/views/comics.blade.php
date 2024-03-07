@extends('layouts.main')

@section('title', 'Comics')

@section('jumbo')
    @include('includes.jumbo')
@endsection

@section('main')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($items as $item)
                    <div class="col">
                        <div class="film-card">
                            <img src="{{ $item['thumb'] }}" alt="">
                            <figcaption>{{ $item['title'] }}</figcaption>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button>
            <h5>LOAD MORE</h5>
        </button>
    </section>
@endsection
