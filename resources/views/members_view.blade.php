@include('login.loginheader')

<br>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<br>
<div class="container">
    <form action="" method="post">
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
            </tr>
            </thead>
            @if(count($res) > 0)

                <div class="row justify-content-center">
                    @foreach($res as $r)
                        <tbody>
                        @if($r->role=='admin')
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

                                    </div>
                                </div>
                            </tr>
                        @endif
                        @endforeach

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