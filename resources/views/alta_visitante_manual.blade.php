@extends('layout.base')

    @section('title_page', 'Formulario alta vistante')

    @section('content')

        <div class="content_all">
            <div class="header-sub-title"></div>
            <div class="text-sub-title">Ingresar visitante</div>
            <div class="content-icon-scan">
                <div class="icon-scan" style="background-image: url( {{ asset( 'images/tabler_scan.svg' ) }} );"></div>
            </div>

            {{-- Cuerpo del form --}}
            <div class="body-form"></div>

            {{-- BTN-ok-circle --}}
            <a href="#">
                <div class="btn-scan-dni">
                    <div class="btn-scan-dni-icon" style="background-image: url( {{ asset( 'images/el_ok-circle.svg' ) }} );"></div>
                </div>
            </a>


            <div type="button" class="back-btn-home-circle"></div> {{--Background BTN home --}}
            <div class="back-btn-cancel-circle"></div> {{--Background BTN cancel --}}

            {{--icon BTN cancel --}}
            <a href="#">
                <div class="content-icon-btn-cancel">
                    <div class="icon-btn-cancel" style="background-image: url( {{ asset( 'images/material-symbols_cancel-outline.svg' ) }} );"></div>
                </div>
            </a>

            {{--icon BTN home --}}
            <a href="#">
                <div class="content-icon-btn-home">
                    <div class="icon-btn-home" style="background-image: url( {{ asset( 'images/iconamoon_home-bold.svg' ) }} );"></div>
                </div>
            </a>

            {{--icon BTN arrow-back --}}
            <a href="/home">
                <div class="content-btn-arrow-back">
                    <div class="head-btn-arrow-back"></div>
                    <div class="content-icon-btn-arrow-back">
                        <div class="contetnt-int-icon-btn-arrow-back">
                            <div class="icon-btn-arrow-back" style="background-image: url( {{ asset( 'images/mdi_arrow-down-thin-circle-outline.svg' ) }} );"></div>
                        </div>
                    </div>
                </div>
            </a>

            {{--Inpusts Form --}}
            <input type="text" class="input-form-alta-v-name">
            <input type="text" class="input-form-alta-v-lastname">
            <input type="text" class="input-form-alta-v-doc">
            <input type="text" class="input-form-alta-v-dato-contact">

            {{-- Labels Form --}}
            <div class="labels-input-name">Nombre</div>
            <div class="labels-input-lastname">Apellido</div>
            <div class="labels-input-doc">Documento</div>
            <div class="labels-input-dato-contact">Dato de contacto</div>

            <div class="text-title-form">Escanear DNI o ingresar los datos del visitante manualmente.</div>

            <div class="content-title">
                <div class="text-title">Portería P1</div>
            </div>
        </div>




    @endsection
