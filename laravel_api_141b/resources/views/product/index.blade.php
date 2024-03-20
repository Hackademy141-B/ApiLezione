<x-layout>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center bg-success">
            <div class="col-12 col-md-4 m-3">
                <h1 class="text-center">
                    Tutti i prodotti
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 m-2 d-flex justify-content-center">
                <a href="{{route('productSorting', 'asc')}}" class="btn btn-primary m-2">Asc</a>
                <a href="{{route('productSorting', 'desc')}}" class="btn btn-primary m-2">Desc</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-4 rounded-2 shadow m-3">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{$product['id']}}</th>
                            <td>{{$product['title']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['category']}}</td>
                            <td>
                                <a href="{{route('detailProduct', ['id'=>$product['id']])}}" class="btn btn-primary">Dettaglio prodotto</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>