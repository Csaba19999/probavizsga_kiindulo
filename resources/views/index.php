<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Szakdolgozat2022</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="./css/kezdooldal.css">
    <link rel="stylesheet" href="./css/szerkezet.css">
    <link rel="stylesheet" href="./css/dashboard.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/Ajax.js"></script>
    <script src="./js/szakdoga.js" type="module"></script>
    <script src="./js/szakdogak.js" type="module"></script>
    
</head>
<main>
<x-app-layout>
    <header>
        <h2>
            Számalk-Szalézi technikum és Szakgimnázium 2020-2022 évfolyam szoftverfejlesztőinek szakdolgozatai
        </h2>
    </header>

    <div class="tablazat-doboz">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                    <div class="szakdolgozatoklistazasa">
                        Admin oldal
                        <div class="listaadmin">
                            <div class="fejlec">
                                <div class="szakdogacime">Szakdolgozat címe</div>
                                <div class="tagok">Készítők neve</div>
                                <div class="githublink">GitHub link</div>
                                <div class="oldallink">Szakdolgozat elérhetősége</div>
                                <div class="gombok"></div>
                            </div>
                            <div class="lista-elem even">
                                <div class="szakdogacime-elem"></div>
                                <div class="tagok-elem"></div>
                                <div class="githublink-elem"><a href=""></a> </div>
                                <div class="oldallink-elem"><a href=""></a></div>
                                <div class="gombok-elem">
                                    <input class="gomb" type="button" value="módosít">
                                    <input class="gomb" type="button" value="törlés">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ujadat">
                        <form>
                            <div style="display:none"><input type="text" id="id"></div>
                            <div class="sor"><label for="szakdoga_nev">Szakdolgozat címe</label><input type="text" id="szakdoga_nev"></div>
                            <div class="sor"><label for="tagokneve">Készítők neve</label><input type="text" id="tagokneve"></div>
                            <div class="sor"><label for="oldallink">Az oldal elérhetősége </label><input type="text" id="oldallink"></div>
                            <div class="sor"><label for="githublink"> GitHub elérhetőség</label><input type="text" id="githublink"></div>
                            <div class="gomb"><button id="uj">Új</button>
                                <button id="modosit">Módosít</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</main>