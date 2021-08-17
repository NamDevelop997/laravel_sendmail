
@php 
    $ma_sp='';
    $price='';
    foreach ($data as $key){
        $ma_sp = $key['ma_sp'];
        $price = $key['price'];
    }
@endphp

<h1>Đặt hàng thành công sản phẫm mã: {{$ma_sp}}</h1>
<p>Price: {{$price}}</p>