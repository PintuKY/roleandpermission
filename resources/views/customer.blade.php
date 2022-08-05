<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <!--Add Customer Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/addcustomer" method="post" enctype="multipart/form-data" id="customer-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer First Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="first_name">
                                    @if ($errors->has('first_name'))
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    @endif
                                    @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="last_name">
                                    @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Address1</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="address1">
                                    @error('address1')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Address2</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="address2">
                                    @error('address2')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer City</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="city">
                                    @error('city')
                                        <div class=text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Landmark</label>
                                    <input type="text" class="form-control" id="landmark" name="landmakr">
                                    @error('landmakr')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Post Office</label>
                                    <input type="text" class="form-control" id="post_office" name="post_office">
                                    @error('post_office')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Area Pin Code</label>
                                    <input type="text" class="form-control" id="pincode" name="pincode">
                                    @error('pincode')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Country</label>
                                    <input type="text" class="form-control" id="country" name="country">
                                    @error('country')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer State</label>
                                    <input type="text" class="form-control" id="state" name="state">
                                    @error('state')
                                        <div class=text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </form>
        </div>
    </div> -->



    <div class="container" style="margin-top:70px;">
        <div class="card">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if (session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }}
            </div>
            @endif            
            <div class="card-header">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right;">
                   <a href="/customers/form" style="color: white;"> Add New Customer</a>
                </button>
                <div class="card-title">
                    <h3>List Customers</h3>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First NAme</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address1</th>
                            <th scope="col">Pin Code</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer_list as $customer)
                        <tr>
                            <th scope="row">{{$customer->id}}</th>
                            <td>{{$customer->first_name}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address1}}</td>
                            <td>{{$customer->pincode}}</td>
                            <td>{{$customer->country}}</td>
                            <td>{{$customer->state}}</td>
                            <td>
                                <a href="/customer/edit/{{ $customer->id}}"><i class="btn btn-success" style="height: 28px; margin-bottom: 3px; width: 58px; padding: 2px;">edit</i></a>&nbsp;&nbsp;
                                <a href="/customer/view/{{ $customer->id}}"><i class="btn btn-info" style="height: 28px; margin-bottom: 3px; width: 58px; padding: 2px;">view</i></a>&nbsp;&nbsp;
                                <a href="/customer/delete/{{ $customer->id}}"><i class="btn btn-danger" style="height: 28px; margin-bottom: 3px; width: 58px; padding: 2px;">delete</i></a>
							</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination">
            {!! $customer_list->links() !!}
        </div>
        
        
    </div>
    <!-- JavaScript Bundle with Popper -->
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
<script>
$(document).ready(function() {

    function edit(data) {
        console.log(data);
		$.ajax({
			url: '/edit',
			type: 'post',
			dataType: 'json',
			data: {designation_id: data},
			success: function(json) {
				console.log(json);
				
			}
		});
	}
});
</script>