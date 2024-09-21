@extends('admin.layouts.master')
@section('title')
New Event
@endsection
@section('head-nav')
<nav class="breadcrumb sl-breadcrumb">
    <h5 class="active">Create New Event</h5>
</nav>
@endsection
@section('MainContent')
<div class="row row-sm mg-b-50">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4 mg-b-20">
            <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label class="col-sm-3 form-control-label">Name: <span class="tx-danger">*</span></label>
                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input type="text" name="name" class="form-control" placeholder="Enter event name" autocomplete="off" required>
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div><!-- row -->
            <div class="row mg-t-20">
                <label class="col-sm-3 form-control-label">Description: <span class="tx-danger">*</span></label>
                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <textarea type="text" name="description" class="form-control" placeholder="Enter event description" autocomplete="off" rows="4" cols="50" required></textarea>
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                </div>
            </div>
            <div class="row mg-t-20">
                <label class="col-sm-3 form-control-label">Event Date & Time: <span class="tx-danger">*</span></label>
                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input type="datetime-local" name="date" class="form-control" required>
                    <span class="text-danger">{{ $errors->first('date') }}</span>
                </div>
            </div>
            <div class="row mg-t-20">
                <label class="col-sm-3 form-control-label">Total Seat: <span class="tx-danger">*</span></label>
                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input type="number" name="total_seats" min="1" class="form-control" placeholder="Enter total number of seats" required>
                    <span class="text-danger">{{ $errors->first('total_seats') }}</span>
                </div>
            </div>

            <div class="form-layout-footer mg-t-30 text-center">
                <button type="submit" class="btn btn-info mg-r-5 cursor-pointer">Create Event</button>
            </div><!-- form-layout-footer -->
        </form>
        </div><!-- card -->
    </div> <!-- col-8 -->
</div>
@endsection
