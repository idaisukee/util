<?php

/*
# year,month,start,finish,title
2015,10,22,19:00,21:30,飯沼

といふ csv から gcal api で扱へる data を吐く．
 */

class Event {

    function __construct($year, $month, $day, $start_time, $finish_time, $title) {

        $start = $year . '-' . $month . '-' . $day . ' ' . $start_time;
        $finish = $year . '-' . $month . '-' . $day . ' ' . $finish_time;

        $this->start = $start;
        $this->finish = $finish;
        $this->title = $title;
        $this->th = $th;
    }
}
