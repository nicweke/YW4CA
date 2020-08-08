<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'YW4CA')
<img src="{{asset('assets/img/logo/5.png')}}" style="width: 80%; height:auto; margin-bottom:2px;" class="logo" alt="YW4CA logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>


    
