@extends('layouts.app')

@push('scripts')
     <!-- Google Map js -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgREM8KO8hjfbOC0R_btBhQsEQsnpzFGQ"></script>
     <!-- Validator js -->
     <script src="js/validator.min.js" type="text/javascript"></script>
     <!-- Ready to promote End Here -->     
@endpush
@section('content')
    @include('pages.contact')
@endsection