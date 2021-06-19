<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/owl.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/countdown.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/wow.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/viewport.jquery.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/zoomsl.min.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/nice-select.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/main.js')}}"></script>
<script src="{{asset('Frontend/assets/templates/basic/js/dev.js')}}"></script>

<script>
    'use strict';
    (function($) {
        var product_id = 0;
        /*
        ==========TRIGGER NECESSARY FUNCTIONS==========
         */
        background();
        backgroundColor();
        triggerOwl();
        getCompareData();
        getCartData();
        getCartTotal();
        getWishlistData();
        getWishlistTotal();

        /* COUNTDOWN FUNCTION FOR OFFERS */
        var countDown = $(".countdown");
        $.each(countDown, function(i, v) {
            $(v).countdown({
                date: $(v).data('countdown'),
                offset: +6,
                day: 'Day',
                days: 'Days'
            })
        });


        /*
        ==========PRODUCT QUICK VIEW ON MODAL==========
         */
        $(document).on('click', '.quick-view-btn', function() {
            var modal = $('#quickView');
            product_id = $(this).data('product');
            $.ajax({
                url: "https://script.viserlab.com/visermart/quick-view",
                method: "get",
                data: {
                    id: $(this).data('product')
                },
                success: function(response) {
                    modal.find('.modal-body').html(response);
                    background();
                    backgroundColor();
                    triggerOwl();
                }
            });
            modal.modal('show');
        });

        /*
        ==========QUANTITY BUTTONS FUNCTIONALITIES==========
        */
        $(document).on("click", ".qtybutton", function() {
            var $button = $(this);
            $button.parent().find('.qtybutton').removeClass('active')
            $button.addClass('active');
            var oldValue = $button.parent().find("input").val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find("input").val(newVal);
        });

        /*
        ==========FUNCTIONALITIES BEFORE ADD TO CART==========
        */

        /*------VARIANT FUNCTIONALITIES-----*/
        $(document).on('click', '.attribute-btn', function() {
            var btn = $(this);
            var ti = btn.data('ti');
            var count_total = btn.data('attr_count');
            var discount = btn.data('discount');
            product_id = btn.data('product_id');
            var attr_data_size = btn.data('size');
            var attr_data_color = btn.data('bg');
            var attr_arr = [];
            var base_price = parseFloat(btn.data('base_price'));
            var extra_price = 0;
            btn.parents('.attr-area:first').find('.attribute-btn').removeClass('active');
            btn.addClass('active');

            if (btn.data('type') == 2 || btn.data('type') == 3) {
                $.ajax({
                    url: "https://script.viserlab.com/visermart/product/get-image-by-variant",
                    method: "GET",
                    data: {
                        'id': btn.data('id')
                    },
                    success: function(data) {
                        if (!data.error) {
                            btn.parents('.product-details-wrapper').find('.variant-images').html(data);
                            triggerOwl();
                        }
                    }
                });
            }

            if ($(document).find('.attribute-btn.active').length == count_total) {
                var activeAttributes = $(document).find('attribute-btn.active');
                $(document).find('.attribute-btn.active').each(function(key, attr) {
                    extra_price += parseFloat($(attr).data('price'));
                    var id = $(attr).data('id');
                    attr_arr.push(id.toString());
                });
                var attr_id = JSON.stringify(attr_arr.sort());
                var data = {
                    attr_id: attr_id,
                    product_id: product_id
                }
                if (ti == 1) {
                    $.ajax({
                        url: "https://script.viserlab.com/visermart/product/get-stock-by-variant",
                        method: "GET",
                        data: data,
                        success: function(data) {
                            $('.stock-qty').text(`${data.quantity}`);
                            $('.product-sku').text(`${data.sku}`);
                            if (data.quantity > 1) {
                                $('.stock-status').addClass('badge--success').removeClass('badge--danger');
                            } else {
                                $('.stock-status').removeClass('badge--success').addClass('badge--danger');
                                notify('error', 'Sorry! Your requested amount of quantity isn\'t available in our stock');
                            }
                        }
                    });
                }
            }

            if (extra_price > 0) {
                base_price += extra_price;
                $('.price-data').text(base_price.toFixed(2));
                $('.special_price').text(base_price.toFixed(2) - discount);

            } else {
                $('.price-data').text(base_price.toFixed(2));
                $('.special_price').text(base_price.toFixed(2) - discount);
            }

        });


        /*
        ==========FUNCTIONALITIES AFTER ADD TO CART==========
        */

        /*------ADD TO CART-----*/
        $(document).on('click', '.cart-add-btn', function(e) {
            var product_id = $(this).data('id');
            var attributes = $('.attribute-btn.active');
            var output = '';
            attributes.each(function(key, attr) {
                output += `<input type="hidden" name="selected_attributes[]" value="${$(attr).data('id')}">`
            });
            $('.attr-data').html(output);

            var quantity = $('input[name="quantity"]').val();
            var attributes = $("input[name='selected_attributes[]']").map(function() {
                return $(this).val();
            }).get();

            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": "3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9",
                },
                url: "https://script.viserlab.com/visermart/add_to_cart",
                method: "POST",
                data: {
                    product_id: product_id,
                    quantity: quantity,
                    attributes: attributes
                },
                success: function(response) {
                    if (response.success) {
                        getCartData();
                        getCartTotal();
                        notify('success', response.success);
                    } else {
                        notify('error', response);
                    }
                }
            });

        });

        /*------REMOVE PRODUCTS FROM CART-----*/
        $(document).on('click', '.remove-cart', function(e) {
            var btn = $(this);
            var id = btn.data('id');

            var parent = btn.parents('.cart-row');
            var subTotal = parseFloat($('#cartSubtotal').text());
            var thisPrice = parseFloat(parent.find('.total_price').text());


            var url = 'https://script.viserlab.com/visermart/remove_cart_item' + '/' + id;
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": "3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9"
                },
                url: url,
                method: "POST",
                success: function(response) {
                    if (response.success) {
                        notify('success', response.success);
                        parent.hide(300);

                        if (thisPrice) {
                            $('#cartSubtotal').text((subTotal - thisPrice).toFixed(2));
                        }
                        getCartData();
                        getCartTotal();
                    } else {
                        notify('error', response.error);
                    }
                }
            });
        });


        /*------REMOVE APPLIED COUPON FROM CART-----*/
        $(document).on('click', '.remove-coupon', function(e) {
            var btn = $(this);
            var url = 'https://script.viserlab.com/visermart/remove_coupon';
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": "3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9"
                },
                url: url,
                method: "POST",
                success: function(response) {
                    if (response.success) {
                        notify('success', response.success);
                        getCartData();

                        $('.coupon-amount-total').hide('slow');
                        $('input[name=coupon_code]').val('')
                    }
                }
            });
        });

        /*
        ==========WISHLIST FUNCTIONALITIES==========
        */

        /* ADD TO WISHLIST */
        $(document).on('click', '.add-to-wish-list', function() {
            var product_id = $(this).data('id');
            var products = $(`.add-to-wish-list[data-id="${product_id}"]`);
            var data = {
                product_id: product_id
            }
            if ($(this).hasClass('active')) {
                notify('error', 'Already in the wishlist');
            } else {
                $.ajax({
                    url: "https://script.viserlab.com/visermart/add_to_wishlist",
                    method: "get",
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            getWishlistData();
                            getWishlistTotal();

                            $.each(products, function(i, v) {
                                if (!$(v).hasClass('active')) {
                                    $(v).addClass('active');
                                }
                            });
                            notify('success', response.success);

                        } else if (response.error) {
                            notify('error', response.error);
                        } else {
                            notify('error', response);
                        }
                    }
                });
            }
        });

        /* REMOVE FROM WISHLIST */
        $(document).on('click', '.remove-wishlist', function(e) {
            var id = $(this).data('id');
            var pid = $(this).data('pid');
            var url = 'https://script.viserlab.com/visermart/wishlist/remove' + '/' + id;
            var page = $(this).data('page');
            var parent = $(this).parent().parent();
            $.ajax({
                url: url,
                method: "get",
                success: function(response) {
                    if (response.success) {
                        getWishlistData();
                        getWishlistTotal();
                        notify('success', response.success);
                    } else {
                        notify('error', response.error);
                    }
                }
            }).done(function() {
                if (pid) {
                    var products = $(`.add-to-wish-list[data-id="${pid}"]`);
                    $.each(products, function(i, v) {
                        if ($(v).hasClass('active')) {
                            $(v).removeClass('active');
                        }
                    });
                }
                if (page == 1) {

                    if (id == 0) {
                        $('.cart-table-body').html(`
                                <tr>
                                    <td colspan="100%">
                                        Your wishlist is empty                                    </td>
                                </tr>
                            `);
                        $('.remove-all-btn').hide(300);
                    } else {
                        parent.hide(300);
                    }
                }
            });

        });

        //ADD TO Compare
        $(document).on('click', '.add-to-compare', function() {
            var product_id = $(this).data('id');
            var products = $(`.add-to-compare[data-id="${product_id}"]`);

            var data = {
                product_id: product_id
            }

            if ($(this).hasClass('active')) {
                notify('error', 'Already in the comparison list');
            } else {
                $.ajax({
                    url: "https://script.viserlab.com/visermart/add_to_compare",
                    method: "get",
                    data: data,
                    success: function(response) {
                        if (response.success) {
                            getCompareData();
                            $.each(products, function(i, v) {
                                if (!$(v).hasClass('active')) {
                                    $(v).addClass('active');
                                }
                            });
                            notify('success', response.success);
                        } else {
                            notify('error', response.error);
                        }
                    }
                });
            }
        });


    })(jQuery)

    function getCompareData() {
        $.ajax({
            url: "https://script.viserlab.com/visermart/get_compare_data",
            method: "get",
            success: function(response) {
                $('.compare-count').text(response.total);
            }
        });
    }

    function getWishlistData() {
        $.ajax({
            url: "https://script.viserlab.com/visermart/get_wishlist_data",
            method: "get",
            success: function(response) {
                $('.wish-products').html(response);
            }
        });
    }

    function getWishlistTotal() {
        $.ajax({
            url: "https://script.viserlab.com/visermart/get_wishlist_total",
            method: "get",
            success: function(response) {
                $('.wishlist-count').text(response);
            }
        });
    }

    function getCartTotal() {
        $.ajax({
            url: "https://script.viserlab.com/visermart/get_cart-total",
            method: "get",
            success: function(response) {
                $('.cart-count').text(response);
            }
        });
    }

    function getCartData() {
        $.ajax({
            url: "https://script.viserlab.com/visermart/get_cart",
            method: "get",
            success: function(response) {
                $('.cart--products').html(response);
            }
        });
    }

    function backgroundColor() {
        var customBg2 = $('.product-single-color');
        customBg2.css('background', function() {
            var bg = ('#' + $(this).data('bg'));
            return bg;
        });
    }

    function background() {
        var img = $('.bg_img');
        img.css('background-image', function() {
            var bg = ('url(' + $(this).data('background') + ')');
            return bg;
        });
    };


    function submitUserForm() {
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">Captcha field is required.</span>';
            return false;
        }
        return true;
    }

    function verifyCaptcha() {
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
</script>

<!-- iziToast -->
<link rel="stylesheet" href="{{asset('Admin/assets/admin/css/iziToast.min.css')}}">
<script src="{{asset('Admin/assets/admin/js/iziToast.min.js')}}"></script>

<!-- SweetAlert2 -->
<script src="{{asset('Admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('Admin/plugins/toastr/toastr.min.js')}}"></script>




<script>
    @if(Session::has('message'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.warning("{{ session('warning') }}");
    @endif
  </script>



<script>
    "use strict";

    function notify(status, message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        } else {

            console.log(message);
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }
    }

    function notifyOne(status, message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>


<script>
    'use strict';
    (function($) {
        //ADD TO CART
        $(document).on('click', '.subscribe-btn', function() {
            var email = $('input[name="email"]').val();

            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": "3zjFDxlLszqv3ROCMbLeg6j98CrmohK2QqoirEu9",
                },
                url: "https://script.viserlab.com/visermart/subscribe",
                method: "POST",
                data: {
                    email: email
                },
                success: function(response) {
                    if (response.success) {
                        notify('success', response.success);
                    } else {
                        notify('error', response);
                    }
                }
            });

        });
    })(jQuery)
</script>


<script>
    (function($) {

        $("input[type='checkbox'][name='brand']").on('click', function() {
            var brand = [];
            var min = $('input[name="min_price"]').val();
            var max = $('input[name="max_price"]').val();

            if ($('#all-brand').is(':checked')) {
                $("input[type='checkbox'][name='brand']").not(this).prop('checked', false);
            }
            $('.brand-filter input:checked').each(function() {
                brand.push(parseInt($(this).attr('value')));
            });

            var category_id = $(document).find('.filter-category li a.active').data('id');
            getFilteredData(brand, min, max, category_id);

        });

        function getFilteredData(brand, min = null, max = null, category_id = null, perpage = `15`) {
            $("#overlay, #overlay2").fadeIn(300);
            $.ajax({
                url: "https://script.viserlab.com/visermart/products/filter",
                method: "get",
                data: {
                    'brand': brand,
                    'perpage': perpage,
                    'min': min,
                    'max': max,
                    'category_id': category_id
                },
                success: function(result) {
                    $('.ajax-preloader').addClass('d-none');
                    $('.page-main-content').html(result);

                }
            }).done(function() {
                setTimeout(function() {
                    $("#overlay, #overlay2").fadeOut(300);
                }, 500);
            });
        }


        $(document).on('change', '.product-page-per-view select', function() {
            var perpage = $(this).val();
            var brand = [];

            var min = $('input[name="min_price"]').val();
            var max = $('input[name="max_price"]').val();

            $('.brand-filter input:checked').each(function() {
                brand.push(parseInt($(this).attr('value')));
            });
            var category_id = $(document).find('.filter-category li a.active').data('id');
            getFilteredData(brand, min, max, category_id, perpage);
        });

        $("#slider").slider({
            range: true,
            min: 0.00,
            max: 15000.00,
            values: [0.00, 15000.00],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                $('input[name=min_price]').val(ui.values[0]);
                $('input[name=max_price]').val(ui.values[1]);
            },
            change: function() {
                var brand = [];
                var min = $('input[name="min_price"]').val();
                var max = $('input[name="max_price"]').val();
                $('.brand-filter input:checked').each(function() {
                    brand.push(parseInt($(this).attr('value')));
                });

                var category_id = $(document).find('.filter-category li a.active').data('id');
                getFilteredData(brand, min, max, category_id)
            }
        });


        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        $('.filter-category li a').on('click', function() {

            $(document).find('.filter-category li a').removeClass('active');
            $(this).addClass('active');
            var category_id = $(this).data('id');
            var brand = [];
            var min = $('input[name="min_price"]').val();
            var max = $('input[name="max_price"]').val();

            $('.brand-filter input:checked').each(function() {
                brand.push(parseInt($(this).attr('value')));
            });

            getFilteredData(brand, min, max, category_id);

        });

    })(jQuery)
</script>