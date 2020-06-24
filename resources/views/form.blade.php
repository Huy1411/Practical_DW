@extends("layout")
@section("content")
    <h1>Feedback</h1>
    <form action="" method="post">

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name"/>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="text " name="telephone" class="form-control" placeholder="Telephone "/>
        </div>

        <div class="form-group">
            <textarea type="text"  placeholder="Mời nhập feedback"/>
        </div>
        <div class="form-group">
            <button class="btn btn-danger" type="submit">Submit</button>
        </div>
    </form>
@endsection
