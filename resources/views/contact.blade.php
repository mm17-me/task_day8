<!DOCTYPE html>
<html>

@extends('layouts.pages')

@section('content')

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <div class="img-box">
        <img src="{{ asset('assets/images/contact-bg.jpg') }}" alt="">
      </div>
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        {{ __('messages.formTitle') }}
        </h2>
<br>
        @if (Session::has('sentSuccessfully'))
          <p class="alert alert-success">{{ Session::get('sentSuccessfully') }}</p>
        @endif

      </div>
      <div class="">
        <div class="row">
          <div class="col-md-7 mx-auto">
            <form action="{{ route('sendMail') }}" method="POST">
              @csrf
                <div class="contact_form-container">
                    <div>
                        <div>
                          <input type="text" name="fullname" placeholder="{{ __('messages.fullname') }}" />
                        </div>
                    
                      <div>
                        <input type="email" name="email" placeholder="{{ __('messages.email') }} " />
                      </div>
                      
                      <div>
                        <input type="text" name="phone" placeholder="{{ __('messages.phone') }}" />
                      </div>

                      <div>
                        <input type="text" name="subject" placeholder="{{ __('messages.subject') }}" />
                      </div>

                      <div class="">
                        <input type="text" name="mess" placeholder="{{ __('messages.message') }}" class="message_input" />
                      </div>

                      <div class="btn-box ">
                        <button type="submit">
                        {{ __('messages.sendButton') }}
                        </button>
                      </div>

                    </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


@endsection

</html>