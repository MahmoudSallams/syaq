$(function () {
    var selectObject = {
        id: 0,
        name: "",
        price: 0,
        priceExtra: 0,
        days: 0,
        daysFast: 0,
        min: 0,
        step: 0,
        priceHiQ: 0,
        priceFast: 0,
        count: 0,
        quantity: 0,
        pricetype: "0",
        qualitytype: "0",
        total: 0

    };
   
    
    var step = 0;
    $('.sy-products a').click(function () {
        $('.sy-products a').removeClass('active');
        $ele = $(this);
        $(this).addClass('active');
		$('body,html').scrollTop($('#sy-cart').offset().top - 15);
        selectObject.id = +$ele.data('id');
        selectObject.days = +$ele.data('days');
        selectObject.daysFast = +$ele.data('days-fast');
        selectObject.price = +$ele.data('price');
        selectObject.priceExtra = +$ele.data('extra-price');
        selectObject.priceHiQ = +$ele.data('price-hi-q');
        selectObject.priceFast = +$ele.data('price-fast');
        selectObject.min = +$ele.data('min');
        selectObject.step = +$ele.data('step');
        selectObject.count = selectObject.min;
        selectObject.quantity = 1;
        $('#sy-input-type').val(selectObject.id)
        calcTotal();
    });
    
    //  if(sessionStorage.getItem("item")){
    //     o = JSON.parse(sessionStorage.getItem('item'));
    //     console.log(o);
    //     console.log('.sy-products a[data-id="'+o.id+'"]');
    // 	$('.sy-products a[data-id="'+o.id+'"]').click();
    //     // selectObject = JSON.parse(sessionStorage.getItem('item'))
    //     // calcTotal();
    // }

    $('.sy-counter.count button').click(function () {
        if ($(this).data('key') === 'min') {
            selectObject.count -= selectObject.step;
            if (selectObject.count < selectObject.min) {
                selectObject.count = selectObject.min
            }
        } else {
            selectObject.count += selectObject.step;
        }
        calcTotal();
    });
    $('.sy-counter.quantity button').click(function () {
        if ($(this).data('key') === 'min') {
            selectObject.quantity--;
            if (selectObject.quantity <= 0) {
                selectObject.quantity = 1;
            }
        } else {
            selectObject.quantity++;
        }
        calcTotal();
    });

    function calcTotal() {
        var total = 0;
        var itemPrice = +selectObject.price;
        itemPrice += (selectObject.count - selectObject.min) / selectObject.step * selectObject.priceExtra;
        itemPrice += selectObject.pricetype == 1 ? +selectObject.priceFast : 0;
        itemPrice += selectObject.qualitytype == 1 ? +selectObject.priceHiQ : 0;
        total = itemPrice * selectObject.quantity;
        $('.sy-price').text("SR " + total);
        $('.sy-counter.count span').text(selectObject.count);
        $('.sy-counter.quantity span').text(selectObject.quantity);
        $('#sy-input-word-count').val(selectObject.count);
        $('#sy-input-quantity').val(selectObject.quantity);
        $('.sy-days').text((selectObject.pricetype == 1 ? selectObject.daysFast : selectObject.days) + "يوم");
        selectObject.total = total;
        $('#sy-total-price').text("SR " + total)

    }
    $('[name="express"]').change(function () {
        selectObject.pricetype = $(this).val();
        console.log(selectObject.pricetype);
        calcTotal();
    });
    $('[name="high_quality"]').change(function () {
        selectObject.qualitytype = $(this).val();
        console.log(selectObject.qualitytype);
        calcTotal();
    });


    $('#sy-next').click(function () {
        if (step === 0) {
            if (selectObject.count > 0) {
                $('.sy-items-box').addClass("hidden");
                $('.sy-data-box').removeClass("hidden");
                $('body,html').scrollTop(0);
                step++;
            }
        } else if (step === 1) {
            // sessionStorage.setItem("item", JSON.stringify(selectObject));
            $('#sy-form').submit();
//            $('.sy-data-box').addClass("hidden");
//            $('.sy-user-box').removeClass("hidden");
//            step++;
        } else if (step === 2) {
            step++;
        }
        $('.sy-wizard-item').removeClass('active');
        $('.sy-wizard-item:eq(' + step + ')').addClass('active');
    });

});