@extends('layouts.plantillaKontaktua')

@section('title', 'JOLASA')

@section('content')

    <div class="contJolasAzalpena relative overflow-hidden text-[#0BD904] mt-6">
        <div id="titulua" class="z-0 absolute bottom-0 text-justify overflow-hidden after:absolute after:left-0 after:right-0 after:top-0 after:pointer-events-none">
            <div id="azalpenaContent" class="absolute">
                <p class="text-center my-5 text-white font-medium">ENERGIA ARRISKUAN</p>

                <p class="my-5">2073. urtea da, eta planetako baliabide fosilak ia agortuta daude. Urteak dira zentral konbentzionaletatik elektrizitatea sortzea ezinezkoa dela, eta energia berriztagarriak dira elektrizitatea sortzeko ardatz nagusia.</p>

                <p class="my-5">Lur planetako bizitza etsaigoa da, eta etengabe jasaten dira zibilizazio estralurtarren erasoak, energia berriztagarriei buruzko ezagutza handia lapurtzen saiatzen direnak, beste planeta batzuetara eraman ahal izateko.</p>

                <p class="my-5">CIFP Txurdinaga zentroa izan da Lurrean izandako azken erasoaren gertalekua. Estralurtar talde batek zentroari eraso dio, urteetan energia berriztagarriari buruz garatutako ezagutza guztia xurgatzeko asmoz, eta, horren ondorioz, zentroko sistema guztiak deskonektatu egin dira.</p>

                <p class="my-5">Planetaren egungo bizigarritasun-baldintzekin, ezinezkoa da 2 ordu baino gehiago bizirik mantentzea, zentroan dauden energia-sistemak berrezartzen ez badira. Horregatik, zuk eta energia berriztagarriko aditu-taldeak zentroko energia-sorkuntza guztia berriro martxan jarriko duen eta pertsona guztien bizitza salbatu ahal izango den zeregin batzuk konpondu behar dituzue.</p>
            </div>
        </div>
        <div class="z-50 botoiaHasiDiv flex flex-col justify-center items-center h-full m-0 invisible">
            <p class="md:mx-auto text-3xl font-semibold">Misioa hasteko prest?</p>
            <a href="" id="bottone1" class="md:mx-auto text-[#010440]"><strong>HASI</strong></a>
        </div>
    </div>



    <style>
        .contJolasAzalpena {
            height: 70vh;
        }

        #titulua {
            width: 18em;
            height: 50em;
            left: 50%;
            margin-left: -9em;
            font-size: 350%;
            transform-origin: 50% 100%;
            transform: perspective(300px) rotateX(25deg);
        }

        #azalpenaContent {
            top: 100%;
            animation: scroll 100s linear 1;
        }

        @keyframes scroll {
            0% {
                top: 100%;
            }
            50% {
                opacity: 1;
            }
            80% {
                opacity: 0.1;
            }
            100% {
                top: -100%;
                opacity: 0;
            }
        }

        @media (max-width: 768px) {
            #titulua {
                font-size: 250%;
            }
        }

        @media (max-width: 640px) {
            #titulua {
                font-size: 150%;
            }
        }

        #titulua:after {
            content: ' ';
            bottom: 60%;
            background-image: linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
        }

        .botoiaHasiDiv {
            position: static;
            animation: botoia 30s linear 68s;
        }

        @keyframes botoia {
            0% {
                visibility: hidden;
                opacity: 0;
            }
            1% {
                visibility: visible;
                opacity: 0;
            }
            15% {
                visibility: visible;
                opacity: 1;
            }
            100% {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>

    <script>
        window.onload = function() {
            setTimeout(function() {
                let titulua = document.querySelector('#titulua');
                titulua.style.display = 'none';
            }, 90000);

            setTimeout(function() {
                let botoiaHasiDiv = document.querySelector('.botoiaHasiDiv');
                botoiaHasiDiv.style.visibility = 'visible';
            }, 68000);
        }
    </script>

@endsection
