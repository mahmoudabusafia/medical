<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/style.css/normlize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/style.css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/assets/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="website icon" type="png" href="{{ asset('assets/web/assets/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Lobster&family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;700&family=Work+Sans:wght@200;300;400;500;800&family=Yeseva+One&display=swap"
        rel="stylesheet">
        <title>Appointments</title>
</head>

<body>
@include('web.header')
<div class="landing">
    <h1>Book an Appointment</h1>
    <div></div>
</div>
<div class="appointments">
    <div class="container flex">
        <div class="appointment-form">
            <h2>Book an Appointment</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, quas ullam voluptatibus asperiores
                autem fuga? Nesciunt perferendis amet eos? Quod voluptate, cupiditate voluptatibus nemo itaque
                voluptatem sunt ad rerum odio.</p>
            <form action="{{ route('appointments.store') }}" method="post">
                @csrf
                <input class="in" type="text" placeholder="Name" name="Name" maxlength="25" required value="{{ Auth::user()->name }}"readonly>
                <input class="in" type="email" name="email" placeholder="Email" required value="{{ Auth::user()->email }}" readonly>
                <input class="in input-date"  placeholder="Date" onfocus="(this.type='date')" type="text" required name="date" style="width: calc(100% - 2px);">
                <select name="doctor_id" id="doctors" class="a" required style="width: calc(100% - 2px);">
                    <option value="">choose doctor...</option>
                    @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name . ' - '.$doctor->specialization }} </option>
                    @endforeach
                </select>
                <select name="time" id="time" class="a" required style="width: calc(100% - 2px); display: none">

                </select>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message"  maxlength="100"  required></textarea>
                <button type = "submit">Submit</button>
            </form>
        </div>
        <div class="Schedule">
            <h2>Schedule Hours</h2>
            <div class="time-dates">
                <div>Monday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Tuesday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Wednesday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Thursday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Friday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Saturday</div>
                <span>09:00 AM - 07:00 PM</span>
                <div>Sunday</div>
                <span>09:00 AM - 07:00 PM</span>
            </div>
            <div class="emergency">
                <i class="ri-phone-line"></i>
                <div class="info">
                    <h4>EMERGENCY</h4>
                    <span>(+972) 432-678-123</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map">
    <div class="container">
        <iframe src="https://www.google.com/maps/d/embed?mid=1B1lAsUpYFg82Je7XN1_cxRPf1UU&hl=en_US&ehbc=2E312F"
                width="640" height="480"></iframe>
    </div>
</div>
<div class="repeated-contact">
    <div class="container">
        <h3>get in touch</h3>
        <h2>contact</h2>
        <div class="info">
            <div class="box">
                <i class="ri-phone-line"></i>
                <h4>EMERGENCY</h4>
                <span>(+972) 432-678-123</span>
                <span>(+972) 432-678-123</span>
            </div>
            <div class="box">
                <i class="ri-map-pin-line"></i>
                <h4>LOCATION</h4>
                <p>Palestine - Gaza</p>
                <p>9876 Some country</p>
            </div>
            <div class="box">
                <i class="ri-mail-line"></i>
                <h4>EMAIL</h4>
                <span>Medicalcare@gmil.com</span>
                <span>myebstudios@gmail.com</span>
            </div>
            <div class="box">
                <i class="ri-time-line"></i>
                <h4>WORKING HOURS</h4>
                <span>Mon-Sat 09:00-20:00</span>
                <span>Sunday Emergency only</span>
            </div>
        </div>
    </div>
</div>
<!-- start footer -->
@include('web.footer')
<!-- end footer -->
<script src="{{ asset('assets/web/assets/js/form.js') }}"></script>
<script>
    // Get references to the select menus
    const firstSelect = document.getElementById('doctors');
    const secondSelect = document.getElementById('time');

    // Add event listener to first select menu
    firstSelect.addEventListener('change', function() {
        const selectedOption = firstSelect.value;
        $.ajax({
            url: '{{ route('doctor.id') }}', // Replace with the actual path to your PHP script
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            dataType : 'json',
            data: {id: selectedOption}, // Send the JavaScript value to PHP as an object
            success: function (response) {
                let result;
                let s = JSON.parse(response.data.appointments)
                secondSelect.style.display = 'block';
                result = `<option value=" ">Appointment Time</option>`;
                    for (let i = 0; i < s.length; i++) {
                        result += `<option value="${s[i]}">${s[i]}</option>>`
                    }

                    secondSelect.innerHTML = result;
            },
            error: function (xhr, status, error) {
                // Handle any errors that occurred during the request
                console.error(error);
            }
        })

    });
</script>
</body>

</html>
