@extends('layouts.master')
@extends('layouts.calendarEventLayout')
@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$calendar_event->id}}</p>
                </div>
                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$calendar_event->name}}</p>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <p class="form-control-static">{{$calendar_event->description}}</p>
                </div>
                <div class="form-group">
                    <label for="start">Location</label>
                    <p class="form-control-static">{{$calendar_event->location}}</p>
                </div>
                    <div class="form-group">
                     <label for="start">START</label>
                     <p class="form-control-static">{{$calendar_event->eventstart}}</p>
                </div>
                    <div class="form-group">
                     <label for="end">END</label>
                     <p class="form-control-static">{{$calendar_event->eventend}}</p>
                </div>

            </form>



            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>

        </div>
    </div>


@endsection
