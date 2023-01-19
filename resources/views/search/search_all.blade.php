
    @if(count($members) > 0)
        @foreach($members as $member)
            <li class="list-group-item"><a href="{{ url('/shipping/list'.$member->id) }}">{{ $member->first_name }} {{ $member->last_name }}</a></li>
        @endforeach
    @else
        <li class="list-group-item">No Results Found</li>
    @endif
