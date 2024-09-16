<aside class="sidebar" data-sidebar>

    <div class="sidebar-info">

        <figure class="avatar-box">
            <img style=" width: 100%;margin-left: auto;
  margin-right: auto;  border-radius:30%" src="{{asset('assets/images/my-avatar.png')}}"  width="80">
        </figure>

        <div class="info-content">

{{--            <h1 class="name" title="Richard hanrick">{{auth()->user()->name}}</h1>--}}

            <div style="display: grid;grid-template-columns: 1fr 1fr">
                <a href="#" class="title">Demo mode</a>
                <a href="#" class="title">WeItco</a>
            </div>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
            <span>Show more</span>

            <ion-icon name="chevron-down"></ion-icon>
        </button>

    </div>

    <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

            <li class="contact-item">

                <div class="icon-box">
                    <ion-icon name="home-outline"></ion-icon>
                </div>

                <div class="contact-info">

                    <a href="{{route('msrt.index')}}" class="contact-link">Home</a>
                </div>

            </li>     <li class="contact-item">

                <div class="icon-box">
                    <ion-icon name="documents-outline"></ion-icon>
                </div>

                <div class="contact-info">

                    <a href="{{route('msrt.all')}}" class="contact-link">Degrees</a>
                </div>

            </li>


        </ul>

        <div class="separator"></div>



    </div>

</aside>
