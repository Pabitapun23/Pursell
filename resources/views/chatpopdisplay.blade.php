@foreach($chats as $chat)
@if($chat->sender_id == Auth::user()->id)
<div class="d-flex flex-row justify-content-end mb-4">
    <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
        <p class="small mb-0 ">
            {{$chat->message}}
        </p>
    </div>
    @if (Auth::user()->profileimg == null)
    <img src="{{ URL::asset('/images/user.png') }}" alt="avatar 3" class="rounded-circle ms-3" alt="avatar" class="rounded-circle ms-3" style="width:50px;height:50px;object-fit:cover;">
    @else
    <img src="/postimage/{{Auth::user()->profileimg}}" alt="avatar 3" class="rounded-circle ms-3" alt="avatar" class="rounded-circle ms-3" style="width:50px;height:50px;object-fit:cover;">

    @endif
</div>
@else
<div class="d-flex flex-row justify-content-start mb-4">
    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="avatar 1" style="width: 45px; height: 100%;">
    <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
        <p class="small mb-0 ">
            {{$chat->message}}
        </p>
    </div>
</div>
@endif
@endforeach