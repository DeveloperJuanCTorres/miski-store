const Toast = Swal.mixin({

    toast: true,

    position: 'top-end',

    showConfirmButton: false,

    timer: 2500,

    timerProgressBar: true,

    background: '#1f1f1f',

    color: '#fff',

    iconColor: '#d4af37',

    customClass: {

        popup: 'luxury-toast'

    },

    didOpen: (toast) => {

        toast.onmouseenter = Swal.stopTimer;

        toast.onmouseleave = Swal.resumeTimer;

    }

});

document.addEventListener('DOMContentLoaded', function () {

    // =========================
    // VARIABLES MODAL
    // =========================
    const modalTitle = document.getElementById('modalTitle');

    const modalCategory = document.getElementById('modalCategory');

    const modalDescription = document.getElementById('modalDescription');

    const modalOfferPrice = document.getElementById('modalOfferPrice');

    const modalOldPrice = document.getElementById('modalOldPrice');

    const modalDiscount = document.getElementById('modalDiscount');

    const quickViewImage = document.getElementById('quickViewImage');

    const thumbnailContainer = document.getElementById('thumbnailContainer');

    const qtyInput = document.getElementById('productQty');

    const btnAddToCart = document.getElementById('btnAddToCart');

    // =========================
    // PRODUCTO ACTUAL
    // =========================
    let currentProductId = null;

    // =========================
    // ABRIR MODAL
    // =========================
    document.addEventListener('click', function(e){

        const button = e.target.closest('.btnQuickView');

        if(!button) return;

        // PRODUCT ID
        currentProductId = button.dataset.id;

        const name = button.dataset.name;

        const price = parseFloat(button.dataset.price);

        const offer = parseFloat(button.dataset.priceoferta);

        const description = button.dataset.description;

        const category = button.dataset.category;

        let images = [];

        try {

            images = JSON.parse(button.dataset.images);

        } catch (e) {

            images = [];

        }

        // =========================
        // TEXTOS
        // =========================
        modalTitle.innerText = name;

        modalCategory.innerText = category;

        modalDescription.innerHTML = description;

        // =========================
        // PRECIOS
        // =========================
        modalOfferPrice.innerText = 'S/ ' + offer.toFixed(2);

        if (price > offer) {

            modalOldPrice.style.display = 'inline-block';

            modalDiscount.style.display = 'inline-block';

            modalOldPrice.innerText = 'S/ ' + price.toFixed(2);

            const discount = Math.round(((price - offer) / price) * 100);

            modalDiscount.innerText = '-' + discount + '%';

        } else {

            modalOldPrice.style.display = 'none';

            modalDiscount.style.display = 'none';

        }

        // =========================
        // IMAGEN PRINCIPAL
        // =========================
        if (images.length > 0) {

            quickViewImage.src = '/storage/' + images[0];

        } else {

            quickViewImage.src = '/images/default.jpg';

        }

        // =========================
        // THUMBNAILS
        // =========================
        thumbnailContainer.innerHTML = '';

        images.forEach((img, index) => {

            const thumb = document.createElement('img');

            thumb.src = '/storage/' + img;

            thumb.classList.add('thumb-image');

            if(index === 0){

                thumb.classList.add('active');

            }

            thumb.addEventListener('click', function () {

                quickViewImage.src = this.src;

                document.querySelectorAll('.thumb-image').forEach(el => {

                    el.classList.remove('active');

                });

                this.classList.add('active');

            });

            thumbnailContainer.appendChild(thumb);

        });

    });

    // =========================
    // CANTIDAD +
    // =========================
    document.getElementById('qtyPlus').addEventListener('click', () => {

        qtyInput.value = parseInt(qtyInput.value) + 1;

    });

    // =========================
    // CANTIDAD -
    // =========================
    document.getElementById('qtyMinus').addEventListener('click', () => {

        let current = parseInt(qtyInput.value);

        if(current > 1){

            qtyInput.value = current - 1;

        }

    });

    // =========================
    // AGREGAR AL CARRITO
    // =========================
    btnAddToCart.addEventListener('click', function(){

        const qty = qtyInput.value;

        fetch('/cart/add', {

            method: 'POST',

            headers: {

                'Content-Type': 'application/json',

                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .content

            },

            body: JSON.stringify({

                product_id: currentProductId,

                qty: qty

            })

        })
        .then(response => response.json())

        .then(data => {

            if(!data.success){
                Toast.fire({
                    icon: 'error',
                    title: data.message
                });
                return;
            }

            if(data.success)
            {                

                // CONTADOR
                document.getElementById('cartCount').innerText = data.count;

                // SUBTOTAL
                document.getElementById('cartSubtotal').innerText =
                    'S/. ' + data.subtotal;

                // CONTENEDOR
                const container = document.getElementById('cartItemsContainer');

                // LIMPIAR
                container.innerHTML = '';

                // ITEMS
                if(data.items.length > 0)
                {
                    data.items.forEach(item => {

                        container.innerHTML += `
                        
                            <div class="d-flex gap-3 p-2 rounded hover-bg-white-5 mb-3"
                                style="background: rgba(255,255,255,0.05);">

                                <img
                                    src="/storage/${item.image}"
                                    class="rounded object-fit-cover"
                                    style="width:64px; height:64px;"
                                />

                                <div class="d-flex flex-column justify-content-center flex-grow-1">

                                    <span class="fw-bold small">
                                        ${item.name}
                                    </span>

                                    <span class="text-gold small">
                                        S/. ${parseFloat(item.price).toFixed(2)}
                                    </span>

                                    <span class="text-variant"
                                        style="font-size:12px;">

                                        Cantidad: ${item.qty}

                                    </span>

                                </div>

                            </div>

                        `;
                    });

                } else {

                    container.innerHTML = `
                    
                        <div class="text-center py-5">
                            <i class="fa-solid fa-cart-shopping fs-1 mb-3 text-secondary"></i>

                            <p class="text-variant mb-0">
                                Tu carrito está vacío
                            </p>
                        </div>

                    `;
                }

                // MENSAJE
                Toast.fire({
                    icon: 'success',
                    title: data.message
                });
            }

        })
        .catch(error => {
            Toast.fire({
                icon: 'error',
                title: 'Ocurrió un error'
            });

            console.log(error);

        });

    });


    // =========================
    // AGREGAR DIRECTO DESDE CARD
    // =========================
    document.addEventListener('click', function(e){

        const button = e.target.closest('.btn-cart-circle');

        if(!button) return;

        const productId = button.dataset.id;

        // EFECTO LOADING
        button.disabled = true;

        fetch('/cart/add', {

            method: 'POST',

            headers: {

                'Content-Type': 'application/json',

                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]')
                    .content

            },

            body: JSON.stringify({

                product_id: productId,

                qty: 1

            })

        })
        .then(response => response.json())

        .then(data => {

            if(!data.success){
                Toast.fire({
                    icon: 'error',
                    title: data.message
                });
                return;
            }

            if(data.success)
            {
                // =========================
                // CONTADOR
                // =========================
                document.getElementById('cartCount').innerText = data.count;

                // =========================
                // SUBTOTAL
                // =========================
                document.getElementById('cartSubtotal').innerText =
                    'S/. ' + data.subtotal;

                // =========================
                // CONTENEDOR
                // =========================
                const container = document.getElementById('cartItemsContainer');

                container.innerHTML = '';

                // =========================
                // ITEMS
                // =========================
                data.items.forEach(item => {

                    container.innerHTML += `
                    
                        <div class="d-flex gap-3 p-2 rounded hover-bg-white-5 mb-3"
                            style="background: rgba(255,255,255,0.05);">

                            <img
                                src="/storage/${item.image}"
                                class="rounded object-fit-cover"
                                style="width:64px; height:64px;"
                            />

                            <div class="d-flex flex-column justify-content-center flex-grow-1">

                                <span class="fw-bold small">
                                    ${item.name}
                                </span>

                                <span class="text-gold small">
                                    S/. ${parseFloat(item.price).toFixed(2)}
                                </span>

                                <span class="text-variant"
                                    style="font-size:12px;">

                                    Cantidad: ${item.qty}

                                </span>

                            </div>

                        </div>

                    `;
                });

                // MENSAJE
                Toast.fire({
                    icon: 'success',
                    title: data.message
                });

                // =========================
                // EFECTO VISUAL
                // =========================
                button.classList.add('added');

                setTimeout(() => {

                    button.classList.remove('added');

                }, 700);
            }

        })
        .catch(error => {
            Toast.fire({
                icon: 'error',
                title: 'Ocurrió un error'
            });
            console.log(error);

        })
        .finally(() => {

            button.disabled = false;

        });

    });

});



document.addEventListener('click', function(e){

    // =========================
    // AUMENTAR
    // =========================
    if(e.target.closest('.btnIncreaseQty'))
    {
        const button = e.target.closest('.btnIncreaseQty');

        updateQty(button.dataset.rowid, 1);
    }

    // =========================
    // DISMINUIR
    // =========================
    if(e.target.closest('.btnDecreaseQty'))
    {
        const button = e.target.closest('.btnDecreaseQty');

        updateQty(button.dataset.rowid, -1);
    }

    // =========================
    // ELIMINAR
    // =========================
    if(e.target.closest('.btnRemoveItem'))
    {
        const button = e.target.closest('.btnRemoveItem');

        removeItem(button.dataset.rowid);
    }

});


// =========================
// UPDATE QTY
// =========================
function updateQty(rowId, change)
{
    const item = document.querySelector(`[data-rowid="${rowId}"]`);

    const qtyText = item.querySelector('.qty-text');

    const itemSubtotal = item.querySelector('.itemSubtotal');

    let qty = parseInt(qtyText.innerText);

    qty += change;

    if(qty < 1) return;

    fetch('/cart/update', {

        method: 'POST',

        headers: {

            'Content-Type': 'application/json',

            'X-CSRF-TOKEN': document
                .querySelector('meta[name="csrf-token"]')
                .content

        },

        body: JSON.stringify({

            rowId: rowId,

            qty: qty

        })

    })
    .then(response => response.json())

    .then(data => {

        if(!data.success){
            Toast.fire({
                icon: 'error',
                title: data.message
            });
            return;
        }

        // =========================
        // CANTIDAD
        // =========================
        qtyText.innerText = data.qty;

        // =========================
        // SUBTOTAL ITEM
        // =========================
        itemSubtotal.innerText =
            'S/. ' + parseFloat(data.item_subtotal).toFixed(2);

        // =========================
        // SUBTOTAL GENERAL
        // =========================
        document.getElementById('cartSubtotalPage').innerText =
            'S/. ' + data.subtotal;

        // =========================
        // TOTAL
        // =========================
        document.getElementById('cartTotalPage').innerText =
            'S/. ' + data.total;

        // =========================
        // COUNT
        // =========================
        document.getElementById('cartCount').innerText =
            data.count;

        // =========================
        // MINI CART
        // =========================
        actualizarMiniCart(data.items);

    });

}


// =========================
// REMOVE ITEM
// =========================
function removeItem(rowId)
{
    fetch('/cart/remove', {

        method: 'POST',

        headers: {

            'Content-Type': 'application/json',

            'X-CSRF-TOKEN': document
                .querySelector('meta[name="csrf-token"]')
                .content

        },

        body: JSON.stringify({

            rowId: rowId

        })

    })
    .then(response => response.json())

    .then(data => {

        document
            .querySelector(`[data-rowid="${rowId}"]`)
            .remove();

        document.getElementById('cartSubtotalPage').innerText =
            'S/. ' + data.subtotal;

        document.getElementById('cartTotalPage').innerText =
            'S/. ' + data.subtotal;

        document.getElementById('cartCount').innerText =
            data.count;

        Toast.fire({

            icon: 'success',

            title: 'Producto eliminado'

        });

    });

}

// =========================
// ACTUALIZAR MINI CART
// =========================
function actualizarMiniCart(items)
{
    const container = document.getElementById('cartItemsContainer');

    // LIMPIAR
    container.innerHTML = '';

    // CONVERTIR A ARRAY
    items = Object.values(items);

    // VACÍO
    if(items.length <= 0)
    {
        container.innerHTML = `
        
            <div class="text-center py-5">

                <i class="fa-solid fa-cart-shopping fs-1 mb-3 text-secondary"></i>

                <p class="text-variant mb-0">
                    Tu carrito está vacío
                </p>

            </div>

        `;

        return;
    }

    // ITEMS
    items.forEach(item => {

        container.innerHTML += `
        
            <div class="d-flex gap-3 p-2 rounded hover-bg-white-5 mb-3"
                style="background: rgba(255,255,255,0.05);">

                <img
                    src="/storage/${item.image}"
                    class="rounded object-fit-cover"
                    style="width:64px; height:64px;"
                />

                <div class="d-flex flex-column justify-content-center flex-grow-1">

                    <span class="fw-bold small">
                        ${item.name}
                    </span>

                    <span class="text-gold small">
                        S/. ${parseFloat(item.price).toFixed(2)}
                    </span>

                    <span class="text-variant"
                        style="font-size:12px;">

                        Cantidad: ${item.qty}

                    </span>

                </div>

            </div>

        `;
    });

}