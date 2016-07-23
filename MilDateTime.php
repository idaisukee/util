<?php

class MilDateTime
{

     

    function __construct($str)
    {
        $this->str = $str;
        $this->four_letters_array = explode(' ', $this->str);
        $this->year_str = $this->four_letters_array[0];
        $this->month_date_str = $this->four_letters_array[1];
        $this->mil_time_str = $this->four_letters_array[2];

        $this->month_str = $this->month_date_str[0] . $this->month_date_str[1];
        $this->date_str  = $this->month_date_str[2] . $this->month_date_str[3];

        $this->hour_str = $this->mil_time_str[0] . $this->mil_time_str[1];
        $this->min_str = $this->mil_time_str[2] . $this->mil_time_str[3];
        $this->sec_str = '00';

        $this->sql_format = $this->year_str . '-' . $this->month_str . '-' . $this->date_str . ' ' . $this->hour_str . ':' . $this->min_str . ':' . $this->sec_str;
       
    }

    
}