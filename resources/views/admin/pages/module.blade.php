@extends('admin.main')
       
@section('title', 'Agenda')


@section('customcss')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@endsection

@section('content')
<input type="text" name="daterange" value="01/01/2015 1:30 PM" />
 


                            <!-- form-modal end -->

@endsection

@section('customscripts')
 <script src="{{ mix('js/agenda.js', '/admin') }}" type="text/javascript"></script>	

<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 5,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });
});
</script>
@endsection
