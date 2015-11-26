<?php

/*
# year,month,day,frame,subject,th
2015,10,22,2,mp2,1

といふ csv から gcal api で扱へる data を吐く．
 */

function start($frame) {
    if ($frame === '1')
        $output = '08:45';
    if ($frame === '2')
        $output =  '10:30';
    if ($frame === '3')
        $output =  '13:00';
    if ($frame === '4')
        $output =  '14:45';
    if ($frame === '5')
        $output = '16:30';
    return $output;
}

function finish($frame) {
    $start_str = '1000-10-10 ' . start($frame);
    $start = new DateTime($start_str);
    $finish = $start->add(DateInterval::createFromDateString('1hour 30min'));
    $output = $finish->format('H:i');
    return $output;
}


class Lecture {

    public $year;
    public $month;
    public $day;
    public $frame;
    public $subject;
    public $th;

    public $start;
    public $finish;

    
    function setYear($year) {
        $this->year = $year;
    }

    function setMonth($month) {
        $this->month = $month;
    }

    function setDay($day) {
        $this->day = $day;
    }

    function setFrame($frame) {
        $this->frame = $frame;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }

    function setTh($th) {
        $this->th = $th;
    }

    function __construct($year, $month, $day, $frame, $subject, $th) {
        $start_time = start($frame);
        $finish_time = finish($frame);

        $start = $year . '-' . $month . '-' . $day . ' ' . $start_time;
        $finish = $year . '-' . $month . '-' . $day . ' ' . $finish_time;

        $this->start = $start;
        $this->finish = $finish;
        $this->suject = $subject;
        $this->th = $th;
    }
}
