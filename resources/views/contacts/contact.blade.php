@extends('layouts.default',['title'=>'Contact'])

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <h2>Get in touch</h2>
                    <p class="text-muted">if you having trouble with this service, please <a href="mailto:feze.mathurin@gmail.com">ask for help</a></p>

                    <form action="#" method="POST">
                        <div class="form-group">
                          <label for="name" class="control-label">Name</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Entrer votre Nom" required="required">
                          
                        </div>
                        <div class="form-group">
                          <label for="email" class="control-label">Email</label>
                          <input type="email" name="email" id="email" class="form-control" placeholder="Entrer votre Email" required="required"> 
                        </div>
                        <div class="form-group">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" name="message" id="message" cols="10" rows="10" required="required"></textarea> 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block"> Submit Enquiry &raquo;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection