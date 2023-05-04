<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trustbuy</title>
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="java/sweetalert-dev.js"></script>
    <script type="text/javascript" src="java/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="head" id="head"></div>
        <script type="text/javascript">
    $(document).ready(function() {
                header="id=header";
                    $.ajax({
                url:"header.php",
                 type:"GET",
                 data:header,
                 contentType:false,
                 cache:false,
                 crossDomain:true,
                 processData:false,
                 beforeSend:function(data){
                 },
                 success:function(data){
                   //$('.welcome').hide();
                    $('.head').show();
                    $('.head').html(data);
                 },
                 error:function(){
                    //alert('error typing to processData');
                 }

                })
        
    })

    </script>


    
    <div class="container-fluid p-5 justify-content-center align-items-center bg-warning ">
    <h2 class="lead fw-bolder text-center display-4">Checkout Stations</h2>
    </div>
        
    <div class="row my-5 justify-content-around align-items-center">

<div class="col-md-8">

     <!-- accordion -->

<div class="accordion" id="chapters">

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                Lagos
            </button>
        </h2>

        <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
            <div class="accordion-body">
                <ul>
                    <li><p><u>FESTAC HUB</u></p><span>Gmi F/F 11 Goldmoore Plaza Plot 2151 Block 39a Apple</span><br><span>+2349087792932</span></li>
                </ul>
                 <ul>
                    <li><p><u>LAGOS ISLAND  HUB</u></p><span>Block L, Shop 2, 2nd Floor, Opp Tinubu Square Waterfront</span><br><span>+2349087792932</span></li>
                </ul>

                   <ul>
                    <li><p><u>IkORODU HUB</u></p><span>Trade Center Complex, 2nd Floor 22 Anyangburen Road By Ojubode Bus Stop Beside Polaris Bank Ikorodu</span><br><span>+2349087792932</span></li>
                </ul>
                   <ul>
                    <li><p><u>IKEjA CARGO HUB</u></p><span>Royal Bed Estate, 1 Afolabi Aina Street By New Alade Market</span><br><span>+2349087792932</span></li>
                </ul>
                   <ul>
                    <li><p><u>IKEjA  HUB</u></p><span>41, Oritshe Street Off Balogun Bus Stop, Awolowo Ikeja</span><br><span>+2349087792932</span></li>
                </ul>
                   <ul>
                    <li><p><u>APAPA HUB</u></p><span>1st Floor, Cancer Block, Eleganza Complex, Commercial Road Apapa</span><br><span>+2349087792932</span></li>
                </ul>
                  <ul>
                    <li><p><u>YABA HUB</u></p><span>62 Old Yaba Road, off Adekunle .Yaba</span><br><span>+2349087792932</span></li>
                </ul>
                  <ul>
                    <li><p><u>LEKKI HUB</u></p><span>Plot 15, Termex Building Ikate</span><br><span>+234906000654</span></li>
                </ul>
                   <ul>
                    <li><p><u>ABRAHAM ADESANYA HUB</u></p><span>Block J House 14b 12 Boulevard Abraham Adesanya Estate</span><br><span>+234906000654</span></li>
                </ul>

            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-2">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-2" aria-expanded="true" aria-controls="chapter-2">
                Delta
            </button>
        </h2>

        <div id="chapter-2" class="accordion-collapse collapse show" aria-labelledby="heading-2" data-bs-parent="#chapters">
            <div class="accordion-body">
                 <ul>
                    <li><p><u>WARRI HUB</u></p><span>Shop 34 Judith Opp St. Mary's Junction Off Airport Road</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-3">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-3" aria-expanded="true" aria-controls="chapter-3">
                Ogun
            </button>
        </h2>

        <div id="chapter-3" class="accordion-collapse collapse show" aria-labelledby="heading-3" data-bs-parent="#chapters">
            <div class="accordion-body">
              <ul>
                    <li><p><u>YHARAH LOGISTICS</u></p><span>No 4 ,Law Castle Flat 3 Second Floor Agboole Aro Omida Rd Opposite Fidelity Bank Abeokuta</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-4">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-4" aria-expanded="true" aria-controls="chapter-4">
                Abuja
            </button>
        </h2>

        <div id="chapter-4" class="accordion-collapse collapse show" aria-labelledby="heading-4" data-bs-parent="#chapters">
            <div class="accordion-body">
                  <ul>
                    <li><p><u>Abuja HUB</u></p><span>Mb 11, Cappador Mall, No 4 Labito Cresecent Wuse 2 Abuja</span><br><span>+2349087792932</span></li>
                </ul>

                   <ul>
                    <li><p><u>WUYE HUB</u></p><span>Suite B7 Boya Place</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-5">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="true" aria-controls="chapter-5">
                Kwara
            </button>
        </h2>

        <div id="chapter-5" class="accordion-collapse collapse show" aria-labelledby="heading-5" data-bs-parent="#chapters">
            <div class="accordion-body">
           <ul>
                    <li><p><u>ILORIN HUB</u></p><span> 112 , umaru  Audi Road , Suite 2 Gbose Mall, Beside Access Bank & Oxygenation Lounge Tanke Junction Gra Illorin</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-6">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-6" aria-expanded="true" aria-controls="chapter-6">
                Oyo
            </button>
        </h2>

        <div id="chapter-6" class="accordion-collapse collapse show" aria-labelledby="heading-6" data-bs-parent="#chapters">
            <div class="accordion-body">
                    <ul>
                    <li><p><u>Dugbe Ibadan HUB</u></p><span>Suite 6, Golden Age Plaza-No 16, Magazine Road, Jericho</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-7">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-7" aria-expanded="true" aria-controls="chapter-">
                Rivers
            </button>
        </h2>

        <div id="chapter-7" class="accordion-collapse collapse show" aria-labelledby="heading-7" data-bs-parent="#chapters">
            <div class="accordion-body">
                  <ul>
                    <li><p><u>PORTHARCOURT HUB</u></p><span> Suite 24 , Ejike Plaza- No 24, Old Ada Road, Artillery</span><br><span>+2348063720786</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-8" aria-expanded="true" aria-controls="chapter-8">
                Kaduna
            </button>
        </h2>

        <div id="chapter-8" class="accordion-collapse collapse show" aria-labelledby="heading-8" data-bs-parent="#chapters">
            <div class="accordion-body">
             <ul>
                    <li><p><u>KADUNA HUB</u></p><span>Suite 4, Block C, No 4 Sabr Plaza , Rafi Close Opp. ABC Transport</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-9">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-9" aria-expanded="true" aria-controls="chapter-">
                Edo
            </button>
        </h2>

        <div id="chapter-9" class="accordion-collapse collapse show" aria-labelledby="heading-9" data-bs-parent="#chapters">
            <div class="accordion-body">
              <ul>
                    <li><p><u>BENIN HUB</u></p><span>100b Sapele Road Opposite Itohan  Grammer School Benin City</span><br><span>+2349087792932</span></li>
                </ul>
            </div>
        </div>
    </div>



</div>



</div>

</div>







    <script src="./bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>