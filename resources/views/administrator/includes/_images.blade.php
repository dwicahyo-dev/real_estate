@if($src)
{{-- @foreach ($src as $item) --}}
{{-- <img src="{{ Storage::url('photos/'.$item->name) }}" class="img img-responsive img-thumbnail"> --}}
<img src="{{ Storage::url($path. $src->name) }}" class="img img-responsive img-thumbnail">
{{-- @endforeach --}}
@else
<img src="{{ asset('assets/img/news/img01.jpg') }}" class="img img-responsive img-thumbnail">
@endif

{{-- @foreach ($src as $item)
    <li>{{ $item->name }}</li>
@endforeach --}}

{{-- <div class="gallery">
    <div class="gallery-item" data-image="assets/img/news/img05.jpg" data-title="Image 1"></div>
    <div class="gallery-item" data-image="assets/img/news/img08.jpg" data-title="Image 2"></div>
    <div class="gallery-item" data-image="assets/img/news/img04.jpg" data-title="Image 3"></div>
    <div class="gallery-item" data-image="assets/img/news/img11.jpg" data-title="Image 4"></div>
    <div class="gallery-item" data-image="assets/img/news/img02.jpg" data-title="Image 5"></div>
    <div class="gallery-item" data-image="assets/img/news/img05.jpg" data-title="Image 6"></div>
    <div class="gallery-item" data-image="assets/img/news/img03.jpg" data-title="Image 7"></div>
    <div class="gallery-item gallery-more" data-image="assets/img/news/img02.jpg" data-title="Image 8">
        <div>+2</div>
    </div>
    <div class="gallery-item gallery-hide" data-image="assets/img/news/img11.jpg" data-title="Image 9"></div>
</div> --}}

{{-- <div class="gallery gallery-fw" data-item-height="500">
    <div class="gallery-item" data-image="{{ asset('assets/img/news/img05.jpg') }}" data-title="dsad"></div>
</div> --}}

{{-- <img src="{{ asset('dist/img/news/img01.jpg') }}" class="img img-responsive img-thumbnail"> --}}
{{-- <img src="{{ asset('assets/img/news/img01.jpg') }}" class="img img-responsive img-thumbnail"> --}}