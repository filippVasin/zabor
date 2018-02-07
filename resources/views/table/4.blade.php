<section class="price-page--price-container">
    <div class="container">
        <div class="row">
            <div class="w-100 text-color-title main-section-title">
                @if($all_table)
                    <?php  $prices = $all_table[5] ?>
                <h2>{{$prices[0]['table_name']}}</h2>
            </div>
        </div>
        <div class="row justify-content-center price-page--table">

            <div class="col-lg-3 col-sm-12 p-0 price-page--table-col">
                <div class="d-flex align-items-center justify-content-center price-page--table-row-title">Высота</div>
                <div class="price-page--table-row-text">
                    <div class="d-flex align-items-center justify-content-center bg-white price-page--table-row">1.5м</div>
                    <div class="d-flex align-items-center justify-content-center bg-blue price-page--table-row">2м</div>
                </div>
            </div>

                @foreach($prices as $price)
                    <div class="col-lg-3 col-sm-12 p-0 price-page--table-col">
                        <div class="d-flex align-items-center justify-content-center price-page--table-row-title">{{ $price['column_name']  }}</div>
                        <div class="price-page--table-row-text">
                            <div class="d-flex align-items-center justify-content-center bg-white price-page--table-row">
                                <?php if($price['price_one'] == ""){
                                    echo '<img src="img/svg/x.svg" alt="svg">';
                                } else {
                                    echo $price['price_one'] .' .руб';
                                }?>
                            </div>

                            <div class="d-flex align-items-center justify-content-center bg-blue price-page--table-row">
                                <?php if($price['price_two'] == ""){
                                    echo '<img src="img/svg/x.svg" alt="svg">';
                                } else {
                                    echo $price['price_two'] .' .руб';
                                }?>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            <div class="price-page--table-bottom">
                <p>*В цену входит материалы + монтаж</p>
            </div>
        </div>
    </div>
</section>

<section class="price-page--price-container">
    <div class="container">
        <div class="row">
            <div class="w-100 text-color-title main-section-title">
                @if($all_table)
                    <?php  $prices = $all_table[6] ?>
                <h2>{{$prices[0]['table_name']}}</h2>
            </div>
        </div>
        <div class="row price-page--table">

            <div class="col-lg-3 col-sm-12 p-0 price-page--table-col">
                <div class="d-flex align-items-center justify-content-center price-page--table-row-title">Высота</div>
                <div class="price-page--table-row-text">
                    <div class="d-flex align-items-center justify-content-center bg-white price-page--table-row">1.5м</div>
                    <div class="d-flex align-items-center justify-content-center bg-blue price-page--table-row">2м</div>
                </div>
            </div>

                @foreach($prices as $price)
                    <div class="col-lg-3 col-sm-12 p-0 price-page--table-col">
                        <div class="d-flex align-items-center justify-content-center price-page--table-row-title">{{ $price['column_name']  }}</div>
                        <div class="price-page--table-row-text">
                            <div class="d-flex align-items-center justify-content-center bg-white price-page--table-row">
                                <?php if($price['price_one'] == ""){
                                    echo '<img src="img/svg/x.svg" alt="svg">';
                                } else {
                                    echo $price['price_one'] .' .руб';
                                }?>
                            </div>

                            <div class="d-flex align-items-center justify-content-center bg-blue price-page--table-row">
                                <?php if($price['price_two'] == ""){
                                    echo '<img src="img/svg/x.svg" alt="svg">';
                                } else {
                                    echo $price['price_two'] .' .руб';
                                }?>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            <div class="price-page--table-bottom">
                <p>*В цену входит материалы + монтаж</p>
            </div>
        </div>
    </div>
</section>