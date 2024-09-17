<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Degrees Inquiry</title>

    <!--
      - favicon
    -->
    <link rel="shortcut icon" href="{{asset('./assets/images/logo.png')}}" type="image/x-icon">

    <!--
      - custom css link
    -->
    <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>


<!--
  - #MAIN
-->

<main>



    @include('msrt.sidebar')

    <!--
      - #main-content
    -->
    <div class="main-content">








        <article class="about  active" data-page="about">


            <!--
              - service
            -->

            <section class="service">


                <ul class="service-list" style="    grid-template-columns: 1fr;">

                    @if(isset($degrees))
                        <section class="testimonials">

                            <h3 class="h3 testimonials-title">New Degree Inquiry</h3>

                            <ul class="testimonials-list  "style="grid-template-columns: 1fr 1fr;
  display: grid;">

                                @if(isset($degrees))
                                    @foreach($degrees as $degree)
                                        <li class="testimonials-item">
                                            <div class="content-card" data-testimonials-item>

                                                <figure class="testimonials-avatar-box">
                                                    <img src="{{asset('assets/images/degree.png')}}"  width="60"
                                                         data-testimonials-avatar>
                                                </figure>

                                                <h4 class="h4 testimonials-item-title" data-testimonials-title>{{$degree->fullName}}</h4>

                                                <div class="testimonials-text" data-testimonials-text>
                                                    <p>
                                                        Receive At : {{jalali($degree->created_at)->format('Y/m/d H:i:s') }}
                                                    </p>

                                                        <h5 class="h5"> student Number : {{$degree->stNumber}}</h5>
                                                        <h5 class="h5"> National code : {{$degree->nationalCode}}</h5>
                                                        <h5 class="h5">Degree : {{$degree->grade}}</h5>
                                                        <h5 class="h5">major : {{$degree->major}}</h5>
                                                        <h5 class="h5">status : {{$degree->status}}</h5>
                                                        <h5 class="h5">tracking : {{$degree->tracking}}</h5>

                                                    <br>
                                                    <div style="display:grid ;grid-template-columns: 1fr  1fr">
                                                        <form enctype="multipart/form-data"
                                                              action="{{route('degreeStatusChange' , $degree->id)}}"
                                                              method="post" class="form" data-form>

                                                            {{csrf_field()}}
                                                            <div class="input-wrapper">
                                                                <input type="text"  style="width: auto" name="debt" class="form-input" placeholder="debt if needed"
                                                                       value=""
                                                                       data-form-input>

                                                                <select style="background-color:#1e1e1f;width: auto" name="status" class="form-input" data-form-input>

                                                                        <option
                                                                            value="free"
                                                                            selected
                                                                             >
                                                                            degree is free
                                                                        </option>
                                                                    <option
                                                                            value="debt"
                                                                            selected
                                                                             >
                                                                            degree has debt
                                                                        </option>

                                                                </select>


                                                            </div>




                                                            <button style="width:100%" class="form-btn" type="submit" data-form-btn>
                                                                <ion-icon name="checkmark"></ion-icon>
                                                                <span>save</span>
                                                            </button>

                                                        </form>


                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                        <!--
                                          - testimonials modal
                                        -->

                                        <div class="modal-container" data-modal-container>

                                            <div class="overlay" data-overlay></div>

                                            <section class="testimonials-modal">

                                                <button class="modal-close-btn" data-modal-close-btn>
                                                    <ion-icon name="close-outline"></ion-icon>
                                                </button>

                                                <div class="modal-img-wrapper">
                                                    <figure class="modal-avatar-box">
                                                        <img src="{{asset('/assets/images/avatar-1.png')}}"  width="80" data-modal-img>
                                                    </figure>

                                                </div>

                                                <div class="modal-content">

                                                    <h4 class="h3 modal-title" data-modal-title>{{$degree->FullName}}</h4>



                                                    <div data-modal-text>
                                                        <p>
                                                            Receive At : {{jalali($degree->created_at)->format('Y/m/d H:i:s') }}
                                                        </p>
                                                        <div style="grid-template-columns: 1fr  1fr">
                                                            <h5 class="h5"> student Number : {{$degree->stNumber}}</h5>
                                                            <h5 class="h5"> National code : {{$degree->nationalCode}}</h5>
                                                            <h5 class="h5">Degree : {{$degree->grade}}</h5>
                                                            <h5 class="h5">major : {{$degree->major}}</h5>
                                                            <h5 class="h5">status : {{$degree->status}}</h5>
                                                            <h5 class="h5">tracking : {{$degree->tracking}}</h5>

                                                        </div>
                                                    </div>

                                                </div>

                                            </section>

                                        </div>




                                    @endforeach
                                @endif

                            </ul>

                        </section>
                    @endif






                </ul>

            </section>






        </article>





    </div>


</main>


<!--
  - custom js link
-->
<script src="{{asset('/assets/js/script.js')}}"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
