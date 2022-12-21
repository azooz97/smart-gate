@props(['back'])
<header class="header">
    <div class="row">

        {{--      <div class="col-auto px-0">--}}
        {{--          <button class="menu-btn btn btn-40 btn-link" type="button">--}}
        {{--              <span class="material-icons">menu</span>--}}
        {{--          </button>--}}
        {{--      </div>--}}

        @if($back)
            <div class="col-auto px-0">
                <button class="menu-btn btn btn-40 btn-link back-btn" type="button">
                    <span class="material-icons">keyboard_arrow_left</span>
                </button>
            </div>
        @endif


      <div class="text-left col align-self-center">
          <a href="/" class="navbar-brand">
              <h5 class="mb-0">School Name</h5>
          </a>
      </div>


      <div class="ml-auto col-auto pl-0">

{{--          <button type="button" class="btn btn-link btn-40 colorsettings">--}}
{{--              <span class="material-icons">color_lens</span>--}}
{{--          </button>--}}

          <a  class="btn btn-40 btn-link" >
              <span class="material-icons">notifications_none</span>
              <span class="counter"></span>
          </a>

          <a class="avatar avatar-30 shadow-sm rounded-circle ml-2">
              <figure class="m-0 background">
                  <img src="img/user.png" alt="">
              </figure>
          </a>

      </div>
  </div>
</header>
