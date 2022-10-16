
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block w-100" style="position: absolute; top:43px">
    <div class="row justify-content-between">
        <div class="col">

            <strong>{{ $message }}</strong>
        </div>
        <div class="col-auto">

            <button type="button" class="close rounded py-0 px-2" style="border:none;  color: green;font-weight:600"  data-dismiss="alert" style="position: relative; right: 0px">×</button>    
        </div>
    </div>
</div>
@endif
  
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block w-100" style="position: absolute; top:43px">
    <div class="row justify-content-between">
        <div class="col">

            <strong>{{ $message }}</strong>
        </div>
        <div class="col-auto">

            <button type="button" class="close rounded py-0 px-2" style="border:none; color: red;font-weight:600 "  data-dismiss="alert" style="position: relative; right: 0px">×</button>    
        </div>
    </div>
</div>
@endif
   
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block w-100" style="position: absolute; top:43px">
    <div class="row justify-content-between">
        <div class="col">

            <strong>{{ $message }}</strong>
        </div>
        <div class="col-auto">

            <button type="button" class="close rounded py-0 px-2" style="border:none; color: yellow;font-weight:600 "  data-dismiss="alert" style="position: relative; right: 0px">×</button>    
        </div>
    </div>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block w-100" style="position: absolute; top:43px">
    <div class="row justify-content-between">
        <div class="col">

            <strong>{{ $message }}</strong>
        </div>
        <div class="col-auto">

            <button type="button" class="close rounded py-0 px-2" style="border:none;  color: blue;font-weight:600"  data-dismiss="alert" style="position: relative; right: 0px">×</button>    
        </div>
    </div>
</div>
@endif
  
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
@endif --}}

{{-- @php
    // dd(session()->all());
@endphp
@if(isset($error))
  <div class="alert alert-danger  w-100" style="position: absolute; top:60px">
      {{ $error }} <span class="float-end tutup" style="cursor: pointer;"> x </span>
  </div>
@endif --}}
{{-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Check the following errors :(
</div>
@endif
@if (Session::has('error'))

<div class="alert alert-danger mt-2">{{ Session::get('error') }} 
</div>

@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif --}}
@push('script')
    <script>
        $(document).ready(function() {
       
        $('.close').click(function(e){
            e.preventDefault();
            $(".alert").css('display', 'none');
        });
       });
    </script>
@endpush