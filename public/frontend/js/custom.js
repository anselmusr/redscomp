$(document).ready(function () {

    loadcart();
    loadwishlist();

    function loadcart() {
        $.ajax({
            type: "GET",
            url: "/load-cart-count",
            success: function (response) {
                $('.cart-count').html();
                $('.cart-count').html(response.count);
            }
        });
    }

    function loadwishlist() {
        $.ajax({
            type: "GET",
            url: "/load-wishlist-count",
            success: function (response) {
                $('.wishlist-count').html();
                $('.wishlist-count').html(response.count);
            }
        });
    }

    $('.addToCartBtn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                swal(response.status);
                loadcart();
            }
        });

    });

    $('.addToWishlist').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "/add-to-wishlist",
            data: {
                'product_id': product_id,
            },
            success: function (response) {
                swal(response.status);
                loadwishlist()
            }
        });

    });

    $('.increment-btn').click(function (e) {
        e.preventDefault();

        // var inc_value = $('.qty-input').val();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            //$('.qty-input').val(value);
            $(this).closest('.product_data').find('.qty-input').val(value);
        }

    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        //var dec_value = $('.qty-input').val();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            //$('.qty-input').val(value);
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.delete-cart-item').click(function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'prod_id': prod_id,
            },
            success: function (response) {
                //window.location.reload()
                swal("", response.status, "success").then(function () {
                    location.reload();
                });
            }
        });
    });

    $('.remove-wishlist-item').click(function (e) {
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "delete-wishlist-item",
            data: {
                'prod_id': prod_id,
            },
            success: function (response) {
                //window.location.reload()
                swal("", response.status, "success").then(function () {
                    location.reload();
                });
            }
        });


    });

    $('.changeQuantity').click(function (e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();
        data = {
            'prod_id': prod_id,
            'prod_qty': qty,
        }

        $.ajax({
            method: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {
                window.location.reload();

            }
        });

    });

    //ini ketika provinsi tujuan di klik maka akan eksekusi perintah yg kita mau
    //name select nama nya "provinve_id" kalian bisa sesuaikan dengan form select kalian
    $('select[name="province_id"]').on('change', function () {
        // kita buat variable provincedid untk menampung data id select province
        let provinceid = $(this).val();
        //kita cek jika id di dpatkan maka apa yg akan kita eksekusi
        if (provinceid) {
            // jika di temukan id nya kita buat eksekusi ajax GET
            jQuery.ajax({
                // url yg di root yang kita buat tadi
                url: "/city/" + provinceid,
                // aksion GET, karena kita mau mengambil data
                type: 'GET',
                // type data json
                dataType: 'json',
                // jika data berhasil di dapat maka kita mau apain nih
                success: function (data) {
                    // jika tidak ada select dr provinsi maka select kota kososng / empty
                    $('select[name="city_id"]').empty();
                    $('select[name="city_id"]').append('<option value="">-- Select City --</option>');

                    // jika ada kita looping dengan each
                    $.each(data, function (key, value) {
                        // perhtikan dimana kita akan menampilkan data select nya, di sini saya memberi name select kota adalah kota_id
                        $('select[name="city_id"]').append('<option value="' + value.city_id + '" namecity="' + value.type + ' ' + value.city_name + '">' + value.type + ' ' + value.city_name + '</option>');


                    });


                    $('select[id="ekspedisi"]').empty();
                    $('select[id="ekspedisi"]').append('<option value="">-- Select Courier ---</option>', '<option value="jne">JNE</option>', '<option value="tiki">TIKI</option>', '<option value="pos">POS INDONESIA</option>');

                    $('select[name="layanan"]').empty();
                    $('select[name="layanan"]').append('<option value="">-- Select Shipping Cost --</option>');

                }
            });
        } else {
            $('select[name="city_id"]').empty();
        }

        var nameprov = $("#province_id option:selected").attr("nameprovince");
        // menampilkan hasil nama provinsi ke input id nama_provinsi
        $("#show_province").val(nameprov);

    });

    //memberikan action ketika select name kota_id di select
    //memberikan action ketika select name kota_id di select
    $('select[name="city_id"]').on('change', function () {
        // membuat variable namakotaku untyk mendapatkan atribut nama kota
        var namecity = $("#city_id option:selected").attr("namecity");
        // menampilkan hasil nama provinsi ke input id nama_provinsi
        $("#show_city").val(namecity);
    });

    $('select[name="courier"]').on('change', function () {
        // kita buat variable untuk menampung data data dari  inputan

        // name city_origin di dapat dari input text name city_origin
        let origin = $("input[name=city_origin]").val();
        // name kota_id di dapat dari select text name kota_id
        let destination = $("select[name=city_id]").val();
        // name kurir di dapat dari select text name kurir
        let courier = $("select[name=courier]").val();
        // name weight di dapat dari select text name weight
        let weight = $("input[name=weight]").val();
        // alert(courier);
        if (courier) {
            jQuery.ajax({
                url: "/origin=" + "39" + "&destination=" + destination + "&weight=" + weight + "&courier=" + courier,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('select[name="layanan"]').empty();
                    $('select[name="layanan"]').append('<option value="">-- Select Shipping Cost --</option>');
                    // ini untuk looping data result nya
                    $.each(data, function (key, value) {
                        // ini looping data layanan misal jne reg, jne oke, jne yes
                        $.each(value.costs, function (key1, value1) {
                            // ini untuk looping cost nya masing masing
                            // silahkan pelajari cara menampilkan data json agar lebi paham
                            $.each(value1.cost, function (key2, value2) {
                                $('select[name="layanan"]').append('<option value="' + value1.service + '-' + value1.description + '-' + value2.value + '">' + value1.service + '-' + value1.description + '-' + value2.value + '</option>');
                            });
                        });
                    });
                }
            });
        } else {
            $('select[name="layanan"]').empty();
        }
    });

    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete your account?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
});
