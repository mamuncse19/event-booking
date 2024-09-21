@extends('admin.layouts.master')
@section('title')
Event
@endsection
@section('head-nav')
<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{route('dashboard')}}">Dashboard</a>
    <span class="breadcrumb-item active">Event List</span>
</nav>
@endsection
@section('MainContent')
<div class="card pd-20 pd-sm-40 mg-b-50">
    <h6 class="card-body-title">Event List
        <a href="{{route('event.create')}}" class="btn btn-sm btn-success product-create-btn">Create New Event</a>
    </h6>

    <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap table-bordered">
            <thead>
                <tr>
                    <th class="wd-10p text-center">Sl No.</th>
                    <th class="wd-25p">Name</th>
                    <th class="wd-10p text-center">Date</th>
                    <th class="wd-10p text-center">Total Seat</th>
                    <th class="wd-10p text-center">Available Seat</th>

                </tr>
            </thead>
            <tbody>
                @if(!$eventInfo->isEmpty())
                <?php $sl = 0; ?>
                @foreach($eventInfo as $event)
                <tr>
                    <td class="text-center">{{ ++$sl }}</td>
                    <td>{{ $event->name }}</td>
                    <td class="text-center">{{ $event->date->format('j M, Y, g:i a') }}</td>
                    <td class="text-center">{{ $event->total_seats }}</td>
                    <td class="text-center">{{ $event->available_seats }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5">There is no event created yet</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div><!-- table-wrapper -->
</div><!-- card -->
@endsection
