@include('login.loginheader')

<br>
<div class="container">
    <form action="{{ url('/members/delete') }}" method="post">
        {{ csrf_field() }}
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">District</th>
                <th scope="col">Division</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col" >Delete</th>
            </tr>
            </thead>
            @if(count($res) > 0)

                <div class="row justify-content-center">
                    @foreach($res as $r)
                        <tbody>
                        @if($r->role=='Dc')
                        @else
                            <tr>

                                <div class="card">
                                    <div class="card-body">
                                        <th scope="row">{{$r->id}}</th>
                                        <td>{{$r->name}}</td>
                                        <td>{{$r->district}}</td>
                                        <td>{{$r->division}}</td>
                                        <td><input type="email"name="email[]"value="{{$r->email}}" hidden>{{$r->email}}</td>
                                        <td>{{$r->role}}</td>
                                        <td>
                                            <div class="form-group row">
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name=delete value="yes">
                                                </div>
                                            </div>
                                        </td>

                                    </div>
                                </div>
                            </tr>
                        @endif
                        @endforeach

                        <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type="submit"name="delete" ></td></tr>
                        </tbody>

                </div>

        </table>
    </form>
</div>


@else
    <h3>No Members Yet</h3>
@endif
<br>
@include('layouts.footer')