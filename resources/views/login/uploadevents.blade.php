@include('login.loginheader')

<br>
<div class="container">
    <h3>Register a new event</h3>
    <br>
<form action="{{url('/upload')}}" method="post">
    @csrf
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Title</label>
        <div class="col-sm-8">
            <input type="text" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Date</label>
        <div class="col-sm-8">
            <input type="date" name="date">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" >Time</label>
        <div class="col-sm-8">
            <input type="time" name="time">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Venue</label>
        <div class="col-sm-8">
            <input type="text" name="venue">
        </div>

    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Description</label>
        <div class="col-sm-8">
            <textarea  name="description" rows="10"></textarea>
        </div>

    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label" >Member Registration</label>
        <div class="col-sm-8">
            <input type="checkbox" name=register value="yes">
        </div>
    </div>
    <div class="form-group row">
        <div class="input-group control-group increment">
        <label class="col-sm-4 col-form-label" >Attachments(If any available)</label>
        <div class="col-sm-8">
            <input type="file" name=file[] multiple="multiple" >
        </div>
        </div>
    </div>
    <div class="clone hide">
        <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="file" >

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