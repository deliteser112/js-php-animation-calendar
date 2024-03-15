@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Event</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('events.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Event Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="start_time">Start Time</label>
                            <input type="time" name="start_time" id="start_time" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="end_time">End Time</label>
                            <input type="time" name="end_time" id="end_time" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection