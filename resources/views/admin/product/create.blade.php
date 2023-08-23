@extends('admin.layouts.master')
@section('title','Category List')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 offset-8">
                        <a href="{{route('product#list')}}"><button class="btn bg-dark text-white my-3">List</button></a>
                    </div>
                </div>
                <div class="col-lg-6 offset-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Your Pizza</h3>
                            </div>
                            <hr>
                            <form action="{{route('product#create')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Name</label>
                                    <input id="cc-pament" name="pizzaName" value="{{old('pizzaName')}}" type="text" class="form-control @error('pizzaName') is-invalid @enderror mb-2" aria-required="true" aria-invalid="false" placeholder="Enter Pizza Name...">
                                    @error('pizzaName')
                                        <div class="is-invalid">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Category</label>
                                    <select name="pizzaCategory" value="{{old('pizzaCategory')}}" class="form-control  @error('pizzaCategory') is-invalid @enderror">
                                        <option value="">Choose your category</option>
                                        @foreach ($categories as $c )
                                            <option value="{{ $c->id }}">{{$c->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('pizzaCategory')
                                        <div class="is-invalid">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Description</label>
                                    <textarea name="pizzaDescription" class="form-control  @error('pizzaDescription') is-invalid @enderror" cols="30" rows="10" placeholder="Enter Description">{{ old('pizzaDescription') }}</textarea>
                                    @error('pizzaDescription')
                                        <div class="is-invalid">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Image</label>
                                    <input type="file" name="pizzaImage" value="{{old('pizzaImage')}}" class="form-control  @error('pizzaImage') is-invalid @enderror" id="">
                                    @error('pizzaImage')
                                        <div class="is-invalid">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Waiting Time</label>
                                    <input type="number" name="pizzaWaitingTime" value="{{old('pizzaWaitingTime')}}" class="form-control  @error('pizzaWaitingTime') is-invalid @enderror" placeholder="Enter Waiting Time...">
                                    @error('pizzaWaitingTime')
                                        <div class="is-invalid">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Price</label>
                                    <input id="cc-pament" name="pizzaPrice" value="{{old('pizzaPrice')}}" type="text" class="form-control @error('pizzaPrice') is-invalid @enderror mb-2" aria-required="true" aria-invalid="false" placeholder="Enter Pizza Price...">
                                    @error('pizzaPrice')
                                        <div class="is-invalid">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Create</span>
                                        {{-- <span id="payment-button-sending" style="display:none;">Sending…</span> --}}
                                        <i class="fa-solid fa-circle-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
