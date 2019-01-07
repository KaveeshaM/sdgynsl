@include('layouts.header')
<br>
<div class="container">
    <h3>Start a new live streaming</h3>
    <br>
    <form action="{{url('/livestream')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Event Name</label>
            <div class="col-sm-8">
                <input type="text" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Link</label>
            <div class="col-sm-8">
                <input type="text" name="link">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="text" name="email" value="{{Auth::user()->email}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label" >Status</label>
            <div class="col-sm-8">
                <input type="text" name="status">
            </div>
        </div>

        <div class="form-group row">
            <div></div>
            <div class="col-sm-8">
                <input type="submit" name="submit">
            </div>
        </div>
    </form>


</div>