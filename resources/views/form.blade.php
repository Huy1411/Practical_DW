@extends("layout")
@section("content")
    <h1>Feedback</h1>
    <form action="" method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name"/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email"/>
        </div>
        <div class="form-group">
            <label>Telephone</label>
            <input type="text " name="telephone" class="form-control" placeholder="Telephone "/>
        </div>
        <div class="form-group">
            <label>Feedback</label>
            <textarea name="feedback" class="form-control " placeholder="Feedback"></textarea>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
