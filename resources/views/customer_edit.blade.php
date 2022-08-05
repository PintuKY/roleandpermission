<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 60px;">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Edit Customer</h3>
                </div>
            </div>
            <div class="card-body">
                <form action="{{url('customer/update',$data->id)}}" method="post" enctype="multipart/form-data" id="customer-form">
                    @csrf
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer First Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->first_name }}" name="edit_first_name">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Last Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->last_name }}" name="edit_last_name">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->phone }}" name="edit_phone">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Address1</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->address1 }}" name="edit_address1">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Address2</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->address2 }}" name="edit_address2">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer City</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->city }}" name="edit_city">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Landmark</label>
                                <input type="text" class="form-control" id="landmark" value="{{ $data->landmakr }}" name="edit_landmakr">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Post Office</label>
                                <input type="text" class="form-control" id="post_office" value="{{ $data->post_office }}" name="edit_post_office">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Area Pin Code</label>
                                <input type="text" class="form-control" id="pincode" value="{{ $data->pincode }}" name="edit_pincode">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer Country</label>
                                <input type="text" class="form-control" id="country" value="{{ $data->country }}" name="edit_country">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Customer State</label>
                                <input type="text" class="form-control" id="state" value="{{ $data->state }}" name="edit_state">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>