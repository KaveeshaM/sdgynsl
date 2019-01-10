@include('login.loginheader')

<br>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<br>
<div class="container">
    <form action="{{ url('/dc/delete') }}" method="post">
        {{ csrf_field() }}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">District</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No</th>
                <th scope="col" >Delete</th>
            </tr>
            </thead>
            @if(count($res) > 0)

                <div class="row justify-content-center">
                    @foreach($res as $r)
                        <tbody>
                        @if($r->role=='Dc')
                            <tr>

                                <div class="card">
                                    <div class="card-body">
                                        <td>{{$r->district}}</td>
                                        <td>{{$r->name}}</td>
                                        <td><input type="email"name="email[]"value="{{$r->email}}" hidden>{{$r->email}}</td>
                                        <td>{{$r->contact_no}}</td>
                                        <td>
                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name=delete[] value="{{$r->email}}">
                                                </div>
                                            </div>
                                        </td>

                                    </div>
                                </div>
                            </tr>
                        @endif
                        @endforeach

                        <tr><td></td><td></td><td></td><td></td><td><input type="submit"name="update" ></td></tr>
                        </tbody>

                </div>

        </table>
    </form>
</div>


@else
    <h3>No District Coordinators enrolled at the moment</h3>
@endif
<br>
@include('layouts.footer')