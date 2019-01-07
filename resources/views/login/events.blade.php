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
            <div>

                    <div class="row">
                        <button onclick="actOnEvent(event);" data-event-id="{{ $e->id }}">Like</button>
                        <span id="likes-{{ $e->id }}">{{ $e->like }}</span>
                    </div>


                </form>

            </div>
        </div>

            <!-- end col-6 -->
        </div>

    </div>
    <!-- end container -->
</section>
<script src="js/app.js">
    var updateLikeStats = {
        Like: function (eventId) {
            document.querySelector('#likes-' + eventId).textContent++;
        },

        Unlike: function(eventId) {
            document.querySelector('#likes-' + eventId).textContent--;
        }
    };


    var toggleButtonText = {
        Like: function(button) {
            button.textContent = "Unlike";
        },

        Unlike: function(button) {
            button.textContent = "Like";
        }
    };

    var actOnEvent = function (event) {
        var eventId = event.target.dataset.eventId;
        var action = event.target.textContent;
        toggleButtonText[action](event.target);
        updateLikeStats[action](eventId);
        axios.post('/event/' + eventId + '/like',
            { action: action });
    };

</script>

@endforeach
@include('layouts.footer')