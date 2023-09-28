@extends('layout.base')

    @section('title_page', 'Home')

    @section('content')


        <div class="contenedor">

            {{-- Contenido historial --}}
            <div class="content-center"></div>
            <div class="content-historial">
                <div class="title-historial"></div>
                <div class="text-title-historial">HISTORIAL</div>
                <div class="text-body-historial">Juan egresó a las 16:00hs<br/>Gonzalo ingresó 15:30hs<br/>Juan ingresó 15:00hs<br/>Federico egresó 14:54hs<br/>Tomas ingresó 14.30hs<br/></div>
            </div>

            {{-- BTN date --}}
            <div class="content-btn-date">
               <a href="#">
                    <div class="head-btn-date"></div>
                    <div class="content-text-btn-date"><span class="text-btn-date-day"> 18 <br/>
                        </span><span class="text-btn-date-monthAge"> SEP <br/> 2023 </span></div>
                </a>
            </div>

            {{-- BTN grandes Ingreso --}}
            <div class="content-btn-in">
                <a href="#">
                    <div class="back-btn-in"></div>
                    <div class="content-icon-btn-in">
                        <div class="sub-content-ico-btn-in">
                            <div class="head-content-icon-btn-in"></div>
                            <div class="text-icon-content-btn-in" style="background-image: url( {{ asset( 'images/mingcute_entrance-fill.svg' ) }} );"></div>

                        </div>
                    </div>
                    <div class="number-btn-in">40</div>
                </a>
            </div>

            {{-- BTN grandes Salida --}}
            <div class="content-btn-out">
                <a href="#">
                    <div class="back-btn-out"></div>
                    <div class="number-btn-out">25</div>
                    <div class="content-icon-btn-out">
                        <div class="sub-content-ico-btn-in">
                            <div class="head-content-icon-btn-out"></div>
                            <div class="text-icon-content-btn-out" style="background-image: url( {{ asset( 'images/mingcute_exit-fill.svg' ) }} );"></div>
                        </div>
                    </div>
                </a>
            </div>


            {{-- BTN + --}}
            <div class="content-btn-plus">
                <a href="#">
                    <div class="head-btn-plus"></div>
                    <div class="text-btn-plus">Ingreso</div>
                    <div class="sign-btn-plus">+</div>
                </a>
            </div>

            {{-- BTN - --}}
            <div class="content-btn-less">
                <a href="#">
                    <div class="head-btn-less"></div>
                    <div class="text-btn-less">Egreso</div>
                    <div class="content-sign-btn-less">
                        <div class="sign-btn-less">-</div>
                        <div class="sign-btn-less">-</div>
                    </div>
                </a>
            </div>


            {{-- BTN Medio --}}
            <div class="btn-historial-visitantes">
                <a href="#">
                    <div class="head-btn-historial-visitantes"></div>
                    <div class="text-btn-historial-visitantes">Historial visitantes</div>
                </a>
            </div>

            <div style="width: 148px; height: 40px; left: 1018px; top: 305px; position: absolute">
                <div style="width: 148px; height: 40px; left: 0px; top: 0px; position: absolute; background: #0073CE; box-shadow: 2px 3px 0px -1px rgba(0, 0, 0, 0.25); border-radius: 20px"></div>
                <div style="width: 134px; height: 40px; left: 7px; top: 10px; position: absolute; text-align: center; color: white; font-size: 14px; font-family: Roboto; font-weight: 500; line-height: 20px; letter-spacing: 0.10px; word-wrap: break-word">Pedir devoluciones</div>
            </div>

            <div class="btn-historial-tarjetas">
                <a href="#">
                    <div class="head-btn-historial-tarjetas"></div>
                    <div class="text-btn-historial-tarjetas">Historial tarjetas</div>
                </a>
            </div>

            {{-- Title --}}
            <div class="content-title">
                <div class="text-title">Portería P1</div>
            </div>

        </div>




    @endsection
