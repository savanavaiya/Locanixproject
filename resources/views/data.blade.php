<div class="row">
    <div class="col-md-10 p-3">
        <h1 class="mt-0 mb-3">{{ date('d-m-Y', strtotime($serdate)) }} Form Records</h1>
    </div>
    <div class="col-md-2 p-3 text-center">
        <input type="date" name="serarchdata" id="serarchdata" value="{{ $serdate }}" class="form-control" onkeydown="return false">
    </div>
</div>

<div class="row">

    @foreach ($product as $data)
        <!-- Button trigger modal -->

        <div class="col-xxl-3 col-lg-6 col-12 mb-5">
            <div class="card m-auto shadow-lg bg-none rounded" style="width: 24rem;height: 17rem;">
                <div class="card-body p-5" style="padding-right: 15px!important;">
                    <h5 class="card-title mb-4">{{ $data->email }}</h5>
                    <h6 class="card-text" style="font-size: 14px">{{ $data->mobilenumber }}</h6>
                    <button type="button" class="header_button mt-5" data-bs-toggle="modal"
                        data-bs-target="#savan{{ $data->id }}">
                        View Form
                    </button>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="savan{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">{{ $data->email }}</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>
                                <h5>Vehicles Or Equipment</h5>
                            </label>
                            <div class="setcolor">
                                <h6 class="form-control">{{ $data->vehicles }}</h6>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>
                                <h5>Fleet-Size</h5>
                            </label>
                            <div class="setcolor">
                                <h6 class="form-control">{{ $data->fleetsize }}</h6>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>
                                <h5>Looking For</h5>
                            </label>
                            <div class="setcolor">
                                <h6 class="form-control">{{ $data->lookingfor }}</h6>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>
                                <h5>Vehicle Tracking Issue</h5>
                            </label>
                            <div class="setcolor">
                                <h6 class="form-control">{{ $data->vehicletracking }}</h6>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>
                                <h5>Mobile Number</h5>
                            </label>
                            <div class="setcolor">
                                <h6 class="form-control">{{ $data->mobilenumber }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center">
    {{ $product->links() }}
</div>
