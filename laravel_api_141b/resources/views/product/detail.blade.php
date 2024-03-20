<x-layout>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center bg-success">
            <div class="col-12 col-md-4 m-3">
                <h1 class="text-center">
                    Dettaglio prodotto {{$product['title']}}
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 rounded-2 shadow m-3 d-flex justify-content-center">
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{$product['image']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$product['title']}}</h5>
                      <h5>Prezzo</h5>
                      <p class="card-text">{{$product['price']}}</p>
                      <h5>Categoria</h5>
                      <a href="{{route('productByCategory', ['categorySelected'=>$product['category']])}}">{{$product['category']}}</a>
                      <h5>Descrizione</h5>
                      <p class="card-text">{{$product['description']}}</p>
                      
                      <a href="{{route('indexProducts')}}" class="btn btn-primary">Torna indietro</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>