@extends('layouts.plantilla')

@section('title', 'JOLASA')

@section('content')

    {{-- Letras de star wars intro --}}
    {{-- <div class="intro-container mx-auto">
        <div class="crawl-text">
            <p class="textoStarWars">
                Estamos en el año 2073 y los recursos fósiles del planeta están prácticamente agotados, hace años que no es posible generar electricidad a partir de centrales convencionales y las energías renovables son el eje principal de la generación de electricidad.
                La vida en el planeta tierra es hostil y continuamente se sufren ataques de civilizaciones extraterrestres, que tratan de robarnos nuestro alto conocimiento en energías renovables para poder llevarlo a otros planetas.
                El centro CIFP Txurdinaga ha sido el escenario del último ataque registrado en la Tierra. Un grupo de extraterrestres ha atacado el centro, con el objetivo de absorber todo el conocimiento desarrollado durante años en energía renovable y como consecuencia de ello todos los sistemas del centro se han desconectado.
                Con las condiciones actuales de habitabilidad del planeta, es imposible mantenernos con vida más de 2 horas si no se restablecen los sistemas energéticos que tenemos en el centro. Por eso, nuestro equipo de expertos en energía renovable tiene que resolver una serie de retos que pondrá en marcha nuevamente toda la generación de energía del centro y podremos salvar la vida de todas las personas.
            </p>
        </div>
    </div>

    <style>
        .textoStarWars {
            font-family: 'Star Jedi', sans-serif;
            font-size: 1.5em;
            color: #fff;
            text-align: justify;
            text-justify: inter-word;
            line-height: 1.5em;
            margin: 0;
            padding: 0;
        }
        .intro-container {
            perspective: 1000px;
            overflow: hidden;
            position: relative;
            /* height: 200px; */
            height: 50vh;
            width: 80%;
        }

        .crawl-text {
            position: absolute;
            top: 100%;
            width: 100%;
            animation: crawl 10s linear infinite;
            text-align: center;
        }

        @keyframes crawl {
            0% {
                top: 100%;
            }
            100% {
                top: -110%;
            }
        }
    </style> --}}

    <div class="prueba">

        <div id="titles"><div id="titlecontent">

            <p class="center my-5">Title</p>

            <p class="my-5">Estamos en el año 2073 y los recursos fósiles del planeta están prácticamente agotados, hace años que no es posible generar electricidad a partir de centrales convencionales y las energías renovables son el eje principal de la generación de electricidad.</p>

            <p class="my-5">La vida en el planeta tierra es hostil y continuamente se sufren ataques de civilizaciones extraterrestres, que tratan de robarnos nuestro alto conocimiento en energías renovables para poder llevarlo a otros planetas.</p>

            <p class="my-5">El centro CIFP Txurdinaga ha sido el escenario del último ataque registrado en la Tierra. Un grupo de extraterrestres ha atacado el centro, con el objetivo de absorber todo el conocimiento desarrollado durante años en energía renovable y como consecuencia de ello todos los sistemas del centro se han desconectado.</p>

            <p class="my-5">Con las condiciones actuales de habitabilidad del planeta, es imposible mantenernos con vida más de 2 horas si no se restablecen los sistemas energéticos que tenemos en el centro. Por eso, nuestro equipo de expertos en energía renovable tiene que resolver una serie de retos que pondrá en marcha nuevamente toda la generación de energía del centro y podremos salvar la vida de todas las personas.</p>
        </div>
    </div>

    <style>
        .prueba {
            position: relative;
            height: 70vh;
            overflow: hidden;
        }

        #titles {
            position: absolute;
            width: 18em;
            height: 50em;
            bottom: 0;
            left: 50%;
            margin-left: -9em;
            font-size: 350%;
            text-align: justify;
            overflow: hidden;
            transform-origin: 50% 100%;
            transform: perspective(300px) rotateX(25deg);
        }

        #titlecontent {
            position: absolute;
            top: 100%;
            animation: scroll 100s linear 4s infinite;
        }

        @keyframes scroll {
            0% {
                top: 100%;
            }
            100% {
                top: -170%;
            }
        }

        #titles p.center {
            text-align: center;
        }

        #titles:after {
            position: absolute;
            content: ' ';
            left: 0;
            right: 0;
            top: 0;
            bottom: 60%;
            background-image: linear-gradient(top, rgba(0,0,0,1) 0%, transparent 100%);
            pointer-events: none;
        }
    </style>

@endsection
