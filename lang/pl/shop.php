<?php

return [

    'sidemenu' => [
        'dashboard' => 'Panel',
        'general' => [
            'title' => 'Ogólne',
            'refugees' => [
                'title' => 'Uchodźcy',
                'list' => 'Lista',
                'search' => 'Wyszukaj',
                'add' => 'Dodaj',
            ],
        ],
        'other' => [
            'title' => 'Inne',
            'settings' => 'Ustawienia',
            'help' => 'Centrum pomocy',
            'schedule' => 'Grafik dyżurów',
        ],
    ],
    'topmenu' => [
        'search' => 'Wyszukaj uchodźcy',
        'profile' => 'Profil',
    ],
    'dashboard' => [
        'title' => 'Sklep Półki dobra | Полиці добра',
        'todayvisit' => 'Dzisiejsza liczba wizyt',
        'refugeescount' => 'Liczba zarejestrowanych uchodźców',
        'visitscount' => 'Liczba ponownych wizyt',
        'todaycount' => 'Dzisiejsza liczba zarejestrowanych',
        'stat' => 'Względem wczorajszego dnia',
        'stats' => [
            'title' => 'Statystyki rejestracji i ponownych wizyt (Ostatnie 7 dni)',
            'button' => 'Lista uchodźców',
            'sign' => 'Liczba nowych rejestracji',
            'visit' => 'Liczba ponownych wizyt',
        ],
        'help' => 'Pomoc',
        'helptext' => 'Jeśli masz probem, propozycję bądź pytanie to śmiało pisz na adres:',
    ],

    'settings' => [
        'title' => 'Zmiana hasła',
        'oldpwd' => 'Stare hasło',
        'newpwd' => 'Nowe hasło',
        'repeatnewpwd' => 'Powtórz nowe hasło',
        'button' => 'Zmień hasło',
        'alert' => 'Zamiana hasła zakończyła się pomyślnie!',
    ],

    'profile' => [
        'title' => 'Profil użytkownika',
        'username' => 'Nazwa użytkownika',
        'email' => 'Adres email',
        'firstname' => 'Imię',
        'lastname' => 'Nazwisko',
        'telephone' => 'Numer telefonu',
        'button' => 'Zapisz zmiany',
        'alert' => 'Edytowanie danych użytkownika zakończyło się pomyślnie!',
        'divchecktitle' => 'Ustawienia bez potrzeby zapisywania (Zapisują się automatycznie)',
        'check1' => 'Wyświetlaj cyfrowe dane w tworzeniu uchodźca',
        'check2' => 'Wyświetlaj pytania - podpowiedzi w tworzeniu uchodźca',
        'check3' => 'Pokaż od razu okienko wizyty po wyświetleniu 1 rekordu',
    ],

    'help' => [
        'title' => 'Pomoc',
        'message' => 'Kliknij na wybrany artykuł by zobaczyć szczegóły',
        'article' => 'Osobny artykuł',
        '1' => [
            'title' => 'Jak dodać nowego uchodźcę?',
            '11' => 'Z bocznego menu wybierz Uchodźcy',
            '12' => 'Dodaj',
            '21' => 'Wypełniasz ankietę zgodnie z wytycznymi:',
            '22' => 'Jeśli uchodźca zarejestrował się w 28 dzielnicy: Imię, nazwisko, data urodzenia, informacja o dzieciach, w polu uwagi pisz: "info w 28 dzielnicy",',
            '23' => 'Jeśli uchodźca NIE zarejestrował się w 28 dzielnicy: Imię, nazwisko, data urodzenia, numer telefonu, aktualny adres, informacja o pracy, informacja o chęci pozostania, informacja o dzieciach.',
            '31' => 'Jeśli uchodźca posiada polski dokument tożsamości z warstwą elektroniczną (RFID), to poproś go o niego i postępuj zgodnie z wytycznymi w zakładce',
            '41' => 'Klikasz przycisk "Utwórz" by dodać uchodźcę do systemu.',
            '42' => 'Uwaga! Nie musisz dodawać osobno wizyty - pierwsza wizyta dodaje się automatycznie.',
            '51' => 'Wydaj mapę Rybnika oraz talon na jedzenię i chemię.',
        ],
        '2' => [
            'title' => 'Jak wyszukać uchodźcę?',
            '11' => 'Poproś o dokument tożsamości (Paszport, dowód, Diia (Дія)),',
            '21' => 'Możesz wyszukać na 2 sposoby:',
            '22' => 'Z bocznego menu wybierając Uchodźcy',
            '23' => 'I wyszukujesz dane',
            '24' => 'Bezpośrednio z górnego menu z paska wyszukiwania',
            '31' => 'Wyszukaj daną frazę i wyskoczą ci wyniki wyszukiwania',
            '41' => 'Uchodźcę możesz wyszukać po następujących danych:',
            '42' => 'Cyfrowe dane',
            '51' => 'Wytłumaczenie ikon w opcjach:',
            '52' => 'Zobacz wszystkie dane uchodźcy',
            '53' => '',
        ],
        '3' => [
            'title' => 'Jak edytować dane uchodźcy?',
            '11' => 'lub znajdź go na liście uchodźców',
            '21' => 'Kliknij w ikonę',
            '22' => 'w opcjach',
            '31' => 'Edytuj dane i kliknij przycisk "Zapisz"',
        ],
        '4' => [
            'title' => 'Jak dodać wizytę?',
            '11' => 'Zaznacz powody wizyty (Opcja ubrania jest zaznaczona domyślnie) i kliknij przycisk "Zatwierdź"',
        ],
        '5' => [
            'title' => 'Jak dodać cyfrowe dane uchodźca?',
            '11' => 'Zaznacz odpowiednią opcję i wprowadź dane za pomocą skanera kodów QR lub czytnia kart RFID',
            '21' => 'By zapisać dane kliknij przycisk "Zapisz".',
        ],
        '6' => [
            'title' => 'Jak korzystać z czytnika kart RFID?',
        ],
    ],

    'refugees' => [
        'list' => [
            'title' => 'Lista uchodźców',
            'list' => 'Lista',
            'name' => 'Imię i nazwisko',
            'visits' => 'Ilość wizyt',
            'lastvisit' => 'Ostatnia wizyta - potrzeby',
            'birthdate' => 'Data urodzenia',
            'kids' => 'Dzieci',
            'novisits' => 'Brak wizyt!',
            'norefugees' => 'Brak uchodźców!',
            'food' => 'Jedzenie',
            'detergents' => 'Chemia',
            'clothes' => 'Ubrania',
            'button' => 'Generuj listę',
        ],
        'create' => [
            'title' => 'Dodaj uchodźcę',
            'question' => 'Czy jest zarejestrowany/a w 28 dzielnicy?',
            'checkbox' => 'Wyświetl cyfrowe dane',
            'lastname' => 'Nazwisko',
            'firstname' => 'Imię',
            'birth' => 'Data urodzenia',
            'telephone' => 'Numer telefonu',
            'gender' => [
                'title' => 'Płeć',
                'f' => 'Kobieta',
                'm' => 'Mężczyzna',
            ],
            'address' => 'Adres pobytu w polsce (ulica numer, Miasto)',
            'work' => 'Wykonywana praca',
            'stay' => [
                'title' => 'Chęć pozostania w polsce',
                'yes' => 'Tak',
                'no' => 'Nie',
                'maybe' => 'Może',
                'tdk' => 'Nie wie',
            ],
            'kids' => 'Informacja o dzieciach',
            'remarks' => 'Uwagi',
            'button' => 'Utwórz',
            'alert' => 'Uchodźca został dodany pomyślnie!',
        ],
        'edit' => [
            'title' => 'Edytuj dane uchodźcy',
            'edit' => 'Edytuj',
            'alert' => 'Edytowanie informacji o uchodźcu zakończyło się pomyślnie!',
        ],
        'show' => [
            'editbutton' => 'Edytuj dane uchodźcy',
            'visitbutton' => 'Dodaj wizytę',
            'history' => 'Historia wizyt',
            'title' => 'Informacje o uchodźcu',
        ],
        'alert' => [
            'visit' => 'Wizyta została dodana pomyślnie!',
            'data' => 'Zmiana cyfrowych danych zakończyła się pomyślnie!',
        ],
        'repeating' => [
            'modalvisit' => [
                'title' => '',
                'reason' => 'Powód wizyty',
                'shopvisits' => 'Wszystkie wizyty w sklepie',
            ],
            'modaldata' => [
                'title' => 'Edytuj dane cyfrowe uchodźcy',
            ],
        ],
    ],
];
