jQuery(function() {
    (!function(){
        "use strict"
    
        const SELECTOR_FILLTO = `[data-pb-fillto]`;
        const SELECTOR_TOTAL_PRICE = `#totalPrice`;
        const DATA_FILLTO = `pb-fillto`;
        const FILLTO_VALUE_DATA = `pb-content`;
        const DATA_STORAGE_KEY = `pb-storage`;
        
        const shopping = (jQuery, {
            getStorageValue: function(key) {
                return JSON.parse(localStorage.getItem(key)) ?? [];
            },
            setStorageValue: function(key, list){
                let items = this.getStorageValue(key);
                items.push(list);
                return localStorage.setItem(key, JSON.stringify(items));
            },
            updateStorageValue: function(key, list){
                return localStorage.setItem(key, JSON.stringify(list));
            },
            init_cart_list: function() {
                let list = this.getStorageValue('cart');
                let $area = $('#printCartList');
                let total = 0;

                $area.html(false);
                $(list).each(function(k, elt) {

                    $area.append(`
                        <li class="list-group-item list-group-item-action d-flex">
                            <span class="text-danger fw-bold px-2">${this.quantity} </span> 
                                ${this.libele}
                            <span class="text-danger fw-bold px-2">${this.price} FCFA</span> 
                            <span class="btn btn-light delCartItem" data-ar-id="${this.id}" data-pb-storage="cart">
                                <i class="mdi mdi-trash-can-outline"></i>
                            </span>
                        </li>
                  `);

                  total += this.price * this.quantity;
                });

                $('#printCartTotalPrice').text(total);

                this.rmFunction();
                
            },
            rmFunction: function(callback = ()=>{}) {
                $('.delCartItem').each( (k, elt) => {
                    $(elt).click(() => {
                        this.removeFromListPrinted($(elt).data(DATA_STORAGE_KEY), $(elt).data('ar-id'));
                        callback(elt);
                    })
                });
            },
            init_ui: function() {
                $('#printCartTotal').text(this.getStorageValue('cart').length);
                $('#printWishlistTotal').text(this.getStorageValue('wishlist').length);
                $('#printCompareTotal').text(this.getStorageValue('compare').length);
                this.init_cart_list();

            },
            removeFromListPrinted: function(key, index) {

                let lists = this.getStorageValue(key);

                lists = lists.filter((e) => e.id !== index);

                this.updateStorageValue(key, lists);

                return this.init_ui();
            },
            checkUiState: function() {
                $('.modalUp').each((k, elt) => {
                    let data = this.getStorageValue($(elt).data(DATA_STORAGE_KEY));
                    let id = $(elt).parents('.item').data('ar-id');

                     data.forEach(element => {

                        if (id == element.id) {

                            $(elt).addClass('btn-danger').removeClass('btn-dark').attr('data-bs-toggle',0).attr('checked', 'true');
                        }
                     });
                })
            },
            init: function() {
                
                this.completePage();
                let self = this;
                this.init_ui();
                this.checkUiState()
                
                $('.modalUp').each(function(k, elt) {
                    let $parent = $(elt).parents('.item');
                    let $children = $parent.find(SELECTOR_FILLTO);
                    let dataKey = $(elt).data(DATA_STORAGE_KEY);

                    let arId = $parent.data('ar-id');
        
                    $(elt).on('click', function() {

                        const ITEMS = {
                            id: arId,
                            price: $parent.data('ar-price'),
                            libele: $parent.data('ar-libele'),
                            img: $parent.data('ar-img'),
                            quantity: $parent.find('#quantity').val(),
                            inStock: $parent.data('ar-availability'),
                        }

                        if($(this).hasClass('btn-dark')) {

                            $(this).addClass('btn-danger').removeClass('btn-dark').attr('data-bs-toggle',0);
                        
                            $children.each(function(k, child) {
                                let $target = $($(elt).data('bs-target')).find($(child).data(DATA_FILLTO));
                                $target.is('img') ? $target.attr('src', $(child).data(FILLTO_VALUE_DATA)): $target.text($(child).data(FILLTO_VALUE_DATA));
                            });
                            self.setStorageValue(dataKey, ITEMS);
                            self.init_ui();
                        }else{
                            self.removeFromListPrinted(dataKey, arId);
                            $(this).addClass('btn-dark').removeClass('btn-danger').attr('data-bs-toggle','modal');
                        }
                        
                    });
                });
            },
            completePage: function() {
                
                let total = 0;

                function run(self) {
                    let $table = $('#tvble');
                    let lists = self.getStorageValue($table.data(DATA_STORAGE_KEY));

                    lists.forEach((elt, k) => {
                        $table.append(Utils.AsyncPageTable(elt));
    
                        total += elt.price * elt.quantity;
                    });

                    $(SELECTOR_TOTAL_PRICE).text(total);
                }

                run(this);
                this.rmFunction((elt) => {

                    let $parent = $(elt).parents('tr');  

                    $(SELECTOR_TOTAL_PRICE).text(total -= $parent.find('#trPriceTotal').text());

                    $parent.detach();
                });

                $('.quantity').each(function(k, elt) {

                    let $parent = $(this).parents('tr');

                    $(this).on('change', function() {

                        let __total = $parent.data('ar-price') * $(this).val();

                        let $trPrice = $parent.find('#trPriceTotal');

                        total -= $trPrice.text();

                        $trPrice.text(__total);

                        $(SELECTOR_TOTAL_PRICE).text(total += __total);
                    });
                })

            },
        }).init();
    }())
})