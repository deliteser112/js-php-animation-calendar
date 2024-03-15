@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Weekly Calendar View</div>

                <div class="card-body">
                    <div class="row">
                        @foreach ($days as $day)
                            <div class="col-md-2">
                                <h4>{{ $day->format('l') }}</h4>
                                <p>{{ $day->format('F j, Y') }}</p>
                                @foreach ($events->where('date', $day->format('Y-m-d')) as $event)
                                    <div>{{ $event->name }}</div>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection