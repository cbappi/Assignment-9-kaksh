@extends('Layout.master')

@section('content')

    {{-- @include('Component.takecare') --}}



    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2>Contact Us</h2>
          <form id="contactForm" action="#">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4">Submit</button>
          </form>
        </div>
      </div>
    </div>



    </body>
    </html>























@endsection
