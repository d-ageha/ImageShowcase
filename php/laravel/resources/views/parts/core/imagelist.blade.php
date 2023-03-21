<div class="pure-g">
@foreach ($images as $item)
<div class="pure-u-large-1-4 is-item">
    <img src={{$item.url}} class="pure-img"/>
    <p>{{$item.description}}</p>
</div>
@endforeach
</div>