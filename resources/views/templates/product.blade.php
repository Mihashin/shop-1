<div class="card h-100">

    <a href="#"><img class="card-img-top" src="{{asset('uploads/thumb/'.$one->picture)}}" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#">{{$one->name}}</a>
        </h4>
        <div class="col-sm-6">
        <h5>$24.99</h5>
        </div>
        <div class="col-sm-6"></div>
        <p class="card-text">{{ $one->dateOfEvent }}</p>

    </div>
    <div class="card-footer">

        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        <a href="#html" id="good-{{$one->id}}-{{$one->price}}" class="btn btn-sm btn-primary btn-cart addCart"> <span class="glyphicon glyphicon-list"></span> Add to cart </a>
    </div>
</div>