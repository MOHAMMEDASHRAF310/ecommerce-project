
<!DOCTYPE html>
<html lang="en">
@include('admin.parts.css')
<style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .text_font{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color{
        color: black;

    }
    .table-style{
        margin: auto;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
        width: 50%;
    }

</style>

<body>
    <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.parts.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.inc.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <!-- this for delete success messages -->
                        <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">x</button>
                        {{session()->get('message')}}

                    </div>
                @endif
                <div class="div_center">
                    <h2 class="text_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input type="text" class="input_color" name='name' placeholder="Add Category"  >
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
                <table class="table-style">
                    <tr>
                        <td>Category Name</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item['category_name']}}</td>
                        <td><a onclick="return confirm('Are you sure to delete {{$item['category_name']}}')" href="{{url('delete_category',$item->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </table>


            </div>
        </div>

        <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.parts.scripts')
    
    </body>
</html>