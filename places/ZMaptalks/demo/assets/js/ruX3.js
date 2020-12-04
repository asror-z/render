/*
*
* start|XakimjonErgashov|2020-10-04
04.10.2020
49 lines js = 98
* */

function setLanguage(data, azimuth) {

    var myLang = {
        "meta": {
            "capitalizeFirstLetter": true
        },
        "v5": {
            "constants": {
                "ordinalize": {
                    "1": "первый",
                    "2": "второй",
                    "3": "третий",
                    "4": "четвёртый",
                    "5": "пятый",
                    "6": "шестой",
                    "7": "седьмой",
                    "8": "восьмой",
                    "9": "девятый",
                    "10": "десятый"
                },
                "direction": {
                    "north": "северном",
                    "northeast": "северо-восточном",
                    "east": "восточном",
                    "southeast": "юго-восточном",
                    "south": "южном",
                    "southwest": "юго-западном",
                    "west": "западном",
                    "northwest": "северо-западном"
                },
                "modifier": {
                    "left": "налево",
                    "right": "направо",
                    "sharp left": "налево",
                    "sharp right": "направо",
                    "slight left": "левее",
                    "slight right": "правее",
                    "straight": "прямо",
                    "uturn": "на разворот"
                },
                "lanes": {
                    "xo": "Держитесь правее",
                    "ox": "Держитесь левее",
                    "xox": "Держитесь посередине",
                    "oxo": "Держитесь слева или справа"
                }
            },
            "modes": {
                "ferry": {
                    "default": "Погрузитесь на паром",
                    "name": "Погрузитесь на паром {way_name}",
                    "destination": "Погрузитесь на паром в направлении {destination}"
                }
            },
            "phrase": {
                "two linked by distance": "{instruction_one}, затем через {distance} {instruction_two}",
                "two linked": "{instruction_one}, затем {instruction_two}",
                "one in distance": "Через {distance} {instruction_one}",
                "name and ref": "{name} ({ref})",
                "exit with number": "съезд {exit}"
            },

            "arrive": {
                "default": {
                    "default": "Вы прибыли в  пункт назначения",
                    "upcoming": "Вы прибываете в  пункт назначения",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}"
                },
                "left": {
                    "default": "Вы прибыли в  пункт назначения, он находится слева",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет слева",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится слева"
                },
                "right": {
                    "default": "Вы прибыли в  пункт назначения, он находится справа",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет справа",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится справа"
                },
                "sharp left": {
                    "default": "Вы прибыли в  пункт назначения, он находится слева сзади",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет слева сзади",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится слева сзади"
                },
                "sharp right": {
                    "default": "Вы прибыли в  пункт назначения, он находится справа сзади",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет справа сзади",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится справа сзади"
                },
                "slight right": {
                    "default": "Вы прибыли в  пункт назначения, он находится справа впереди",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет справа впереди",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится справа впереди"
                },
                "slight left": {
                    "default": "Вы прибыли в  пункт назначения, он находится слева впереди",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет слева впереди",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится слева впереди"
                },
                "straight": {
                    "default": "Вы прибыли в  пункт назначения, он находится перед вами",
                    "upcoming": "Вы прибываете в  пункт назначения, он будет перед вами",
                    "short": "Вы прибыли",
                    "short-upcoming": "Вы скоро прибудете",
                    "named": "Вы прибыли в пункт назначения, {waypoint_name}, он находится перед Вами"
                }
            },

            /*
           *
           * start|XakimjonErgashov|2020-10-06
           41 lines js = 82
           * */

            "continue": {
                "default": {
                    "default": "Двигайтесь {modifier}",
                    "name": "Двигайтесь {modifier} по {way_name:dative}",
                    "destination": "Двигайтесь {modifier} в направлении {destination}",
                    "exit": "Двигайтесь {modifier} на {way_name:accusative}"
                },
                "straight": {
                    "default": "Двигайтесь прямо",
                    "name": "Продолжите движение по {way_name:dative}",
                    "destination": "Продолжите движение в направлении {destination}",
                    "distance": "Двигайтесь прямо {distance}",
                    "namedistance": "Двигайтесь прямо {distance} по {way_name:dative}"
                },
                "sharp left": {
                    "default": "Резко поверните налево",
                    "name": "Резко поверните налево на {way_name:accusative}",
                    "destination": "Резко поверните налево в направлении {destination}",
                    "junction_name": "Резко поверните налево на {junction_name}"
                },
                "sharp right": {
                    "default": "Резко поверните направо",
                    "name": "Резко поверните направо на {way_name:accusative}",
                    "destination": "Резко поверните направо в направлении {destination}",
                    "junction_name": "Резко поверните направо на {junction_name}"
                },
                "slight left": {
                    "default": "Плавно поверните налево",
                    "name": "Плавно поверните налево на {way_name:accusative}",
                    "destination": "Плавно поверните налево в направлении {destination}",
                    "junction_name": "Плавно поверните налево на {junction_name}"
                },
                "slight right": {
                    "default": "Плавно поверните направо",
                    "name": "Плавно поверните направо на {way_name:accusative}",
                    "destination": "Плавно поверните направо в направлении {destination}",
                    "junction_name": "Плавно поверните направо на {junction_name}"
                },
                "uturn": {
                    "default": "Развернитесь",
                    "name": "Развернитесь и продолжите движение по {way_name:dative}",
                    "destination": "Развернитесь в направлении {destination}",
                    "junction_name": "Развернитесь и продолжите движение по {junction_name}"
                }
            },
            "depart": {
                "default": {
                    "default": "Двигайтесь в {direction} направлении",
                    "name": "Двигайтесь в {direction} направлении по {way_name:dative}",
                    "namedistance": "Двигайтесь {distance} в {direction} направлении по {way_name:dative}"
                }
            },

            /*END*/

        }
    }
}


