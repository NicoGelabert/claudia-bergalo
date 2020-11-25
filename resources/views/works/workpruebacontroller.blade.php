@foreach ($trabajos as $trabajo)
<div class="songs-list">
    <div class="songs-number">01</div>
    <div class="songs-image track-image">
        <a href="file:///C:/Claudia%20Bergalo/Package-HTML/HTML/demo-music-custom.html#" class="track-list" data-track="{{$trabajo->url}}" data-poster="/storage/images/mezcladito/cuentosxcontar.jpg" data-title="Cuentos por contar" data-singer="Narración">
        <img src="/storage/images/mezcladito/cuentosxcontar.jpg" alt="Cuentos por contar"><span><i class="icon-play"></i></span></a>
    </div>
    <div class="songs-name track-name">Cuentos por contar<br><span>Narración</span></div>
    <div class="songs-time">04:04</div>
</div>
@endforeach