<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@include('login.loginheader')
@foreach($events as $e)
<section class="section1">
    <div class="container clearfix">
        <div class="content col-lg-12 col-md-12 col-sm-12 clearfix">
            <div class="general-title text-center">
                <h3>{{$e->title}}</h3>

                <hr>
            </div>
            <div class="divider"></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="he-wrap tpl2">
                    <img src="img/office.png" alt="" class="img-responsive">

                </div>
            </div>
            <!-- he wrap -->
        </div>
            <!-- end col-6 -->

        <div>
            <ul class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <li><p>Date : {{$e->date}}</p></li>
                <li><p>Time : {{$e->time}}</p></li>
                <li><p>Venue : {{$e->venue}}</p></li>
            </ul>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p>{{$e->description}}</p>
            </div>
            <div >
                <a href="#" class="like" >
                    {{Auth::user()->likes()->where('event_id',$e->id)->first()? Auth::user()->likes()->where('event_id',$e->id)->first()->like==1? 'You have liked this post':'Like' : 'Like'}}
                </a>
                <a href="#" class="like" >
                    {{Auth::user()->likes()->where('event_id',$e->id)->first()? Auth::user()->likes()->where('event_id',$e->id)->first()->like==0? 'You dont like this post':'Dislike' : 'Dislike'}}
                </a>
            </div>
        </div>

            <!-- end col-6 -->
        </div>

    </div>
    <!-- end container -->
</section>

<script src="{{asset('/js/like.js')}}" ></script>
<script type="text/javascript">
    var token='{{Session::token()}}';
    var urlLike='{{route('like')}}'
</script>

@endforeach
@include('layouts.footer')