<div class="col-lg-4 mb-5">
  <div class="card h-100 shadow border-0">
      <img class="card-img-top" src="{{$monopattino['image']}}" alt="...">
      <div class="card-body p-4">
          <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{$monopattino['tag']}} = {{$stringa}}</div>
          <a class="text-decoration-none link-dark stretched-link" href="{{route('detail', ['slug' => $monopattino['id']])}}">
              <h5 class="card-title mb-3">{{$monopattino['name']}}</h5>
          </a>
      </div> 
  </div>
</div>