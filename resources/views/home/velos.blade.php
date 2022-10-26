<section class="cycle_section ">
    <div class="container">
        <div class="cycle_heading">
            <h2>
                Feature Cycles
            </h2>
        </div>


        <div class="cycle_container">
            @foreach($velo as $velos)
            <div class="box" >
                <div class="box-content">
                    <div class="img-box">
                        <img height="300px" width="200px" src="velo/{{$velos->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <div class="text">
                            <h6>
                                {{$velos->velo_name}}
                            </h6>
                            @if($velos->discount_price!= null)
                            <h5 style="color: red">
                                <span>DT</span> {{$velos->discount_price}}
                            </h5>

                                <h5 style="text-decoration: line-through;color: blue">
                                    <span>DT</span> {{$velos->price}}
                                </h5>
                            @else
                                <h5 style="color: blue">
                                    <span>DT</span> {{$velos->price}}
                                </h5>

                            @endif

                        </div>
                        <div class="like">
                            <h6>
                                Like
                            </h6>
                            <div class="star_container">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-box">
                    <form  action="{{url('add_cart', $velos->id)}}" method="Post">
                        @csrf

                        <div class="col-md-4">
                            <input type="number"name="quantity" value="1" min="1" style="width: 100%">
                            <input class="btn btn-primary" type="submit" value="ADD TO CART" >
                        </div>


                    </form>
                    <a  style="background-color: #ffa600" href="{{url('velo_details', $velos->id)}}"><i class="fa fa-eye" aria-hidden="true"></i>
                        View
                    </a>
                </div>

            </div>
            @endforeach


        </div>
        <span style="padding-top: 20px">
                {!!$velo->withQueryString()->links()!!}
            </span>

    </div>
</section>
