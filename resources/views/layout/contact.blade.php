@extends('layout.app')

@section('contact')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <p class="hunt-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <form action="{{url(store)}}" method="post">

                @crsf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" name="fname" id="inputFirstName" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" name="lname"id="inputLastName" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control"name="email" id="inputEmail" required>
                </div>

                <input type="submit" class="btn btn-primary" value="add new">
            </form>
        </div>
    </div>
</div>
@endsection

