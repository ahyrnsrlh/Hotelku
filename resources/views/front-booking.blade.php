@extends('frontlayout')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center" style="background-color: #7C6A46; color: white;">
                    <h2>Room Booking</h2>
                </div>
                <div class="card-body p-4">
                    <!-- Error & Success Messages -->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif

                    <!-- Booking Form -->
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="checkin_date" class="form-label">Check-In Date <span class="text-danger">*</span></label>
                            <input name="checkin_date" type="date" class="form-control checkin-date" />
                        </div>
                        <div class="mb-3">
                            <label for="checkout_date" class="form-label">Check-Out Date <span class="text-danger">*</span></label>
                            <input name="checkout_date" type="date" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="room_id" class="form-label">Available Rooms <span class="text-danger">*</span></label>
                            <select class="form-control room-list" name="room_id"></select>
                            <p class="mt-2">Price: <span class="show-room-price fw-bold text-success"></span></p>
                        </div>
                        <div class="mb-3">
                            <label for="total_adults" class="form-label">Total Adults <span class="text-danger">*</span></label>
                            <input name="total_adults" type="text" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="total_children" class="form-label">Total Children</label>
                            <input name="total_children" type="text" class="form-control" />
                        </div>
                        @if(Session::has('data'))
                        <input type="hidden" name="customer_id" value="{{session('data')[0]->id}}" />
                        @endif
                        <input type="hidden" name="roomprice" class="room-price" value="" />
                        <input type="hidden" name="ref" value="front" />

                        <div class="d-grid">
                            <button type="submit" class="btn text-white" style="background-color: #7C6A46;">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"{{url('admin/booking')}}/available-rooms/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option data-price="'+row.roomtype.price+'" value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.title+'</option>';
                    });
                    $(".room-list").html(_html);

                    var _selectedPrice=$(".room-list").find('option:selected').attr('data-price');
                    $(".room-price").val(_selectedPrice);
                    $(".show-room-price").text(_selectedPrice);

                }
            });
        });

        $(document).on("change",".room-list",function(){
            var _selectedPrice=$(this).find('option:selected').attr('data-price');
            $(".room-price").val(_selectedPrice);
            $(".show-room-price").text(_selectedPrice);
        });

    });
</script>
@endsection
