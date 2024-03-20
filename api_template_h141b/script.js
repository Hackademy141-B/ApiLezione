fetch('http://localhost:8000/api/products')
    .then(response=>response.json())
    .then(data=>{
        const container = document.getElementById('card')
        for (let item of data) {
            let div = document.createElement('div');
            div.innerHTML = `<div class="col-12 col-md-4 rounded-2 shadow m-2">
                                <div class="card m-2" style="width: 18rem;">
                                <img src="${item.image}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">${item.title}</h5>
                                <p class="card-text">${item.price}</p>
                                <p class="card-text">${item.category}</p>
                                </div>
                            </div>
                            </div>`
            container.appendChild(div);
        }
    })
.catch()