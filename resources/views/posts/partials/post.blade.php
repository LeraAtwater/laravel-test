{{-- $key is the index number --}}
    {{-- break is to tell the loop to stop at certain index # --}}
    {{-- @break($key == 2) --}}
    {{-- render after certain key --}}
    {{-- @continue($key == 1) --}}
  @if ($loop->even)
    <div><h2>{{ $key }}. {{ $post['title'] }}</h2></div>
  @else
  <div style="background-color: silver"><h2>{{ $key }}. {{ $post['title'] }}</h2></div>
  @endif