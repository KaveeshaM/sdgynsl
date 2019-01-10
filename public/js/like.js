$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var eventId=0;

$('.like').on('click',function (event) {
event.preventDefault();
eventId=event.target.parentNode.dataset['eventid'];
var isLike = event.target.previousElementSibling ==null;

$.ajax({
    method:'POST',
    url:urlLike,
    data:{isLike: isLike,eventId:eventId, _token:$(this).data('token'),}
})
    
    .done(function () {
        event.target.innertext=isLike? event.target.innertext=='Like' ? 'You like this event' : 'Like' : event.target.innertext=='Dislike' ? 'You dont like this event ': 'Dislike';
        if(isLike){
            event.target.nextElementSibling.innertext= 'Dislike'
        }else {
            event.target.nextElementSibling.innertext= 'Like'
        }
        
    })
});
