<?php
class ArabicDate {
 private $timestamp;
 private $morning;
 private $engHour;
 private $engDate;
 private $engMonth;
 private $engYear;
 private $bangDate;
 private $bangMonth;
 private $bangYear;
 private $bn_months = array("রবি.সানি", "জমা.আউ", "জমা.সানি", "রজব","শা’বান", "রমজান", "শাওয়াল", "জিলক্বদ", "জিলহজ্ব","মহরম", "সফর", "রবিিআউ.");
 private $bn_month_dates = array(29,30,29,30,30,29,29,30,29,30,29,29);
 private $bn_month_middate = array(28,27,28,27,27,25,24,23,21,21,19,18); 
 private $lipyearindex = 3;
 function __construct( $timestamp, $hour = 6 ) {
 $this->BanglaDate( $timestamp, $hour );
 }
 function BanglaDate( $timestamp, $hour = 6 ) {
 $this->engDate = date( 'd', $timestamp );
 $this->engMonth = date( 'm', $timestamp );
 $this->engYear = date( 'Y', $timestamp );
 $this->morning = $hour;
 $this->engHour = date( 'G', $timestamp );
 //calculate the bangla date
 $this->calculate_date();
 //now call calculate_year for setting the bangla year
 $this->calculate_year();
 //convert english numbers to Bangla
 $this->convert();
 }
 function set_time( $timestamp, $hour = 6 ) {
 $this->BanglaDate( $timestamp, $hour );
 }
private function calculate_date() { 
 $this->bangDate = $this->engDate - $this->bn_month_middate[$this->engMonth - 1];
 if ($this->engHour < $this->morning) 
 $this->bangDate -= 1;
 
 if (($this->engDate <= $this->bn_month_middate[$this->engMonth - 1]) || ($this->engDate == $this->bn_month_middate[$this->engMonth - 1] + 1 && $this->engHour < $this->morning) ) {
 $this->bangDate += $this->bn_month_dates[$this->engMonth - 1];
 if ($this->is_leapyear() && $this->lipyearindex == $this->engMonth) 
 $this->bangDate += 1;
 $this->bangMonth = $this->bn_months[$this->engMonth - 1];
 }
 else{
 $this->bangMonth = $this->bn_months[($this->engMonth)%12]; 
 }
 }
function is_leapyear() {
 if ( $this->engYear % 400 == 0 || ($this->engYear % 100 != 0 && $this->engYear % 4 == 0) )
 return true;
 else
 return false;
 }
 function calculate_year() {
 $this->bangYear = $this->engYear - 579;
 if (($this->engMonth < 4) || (($this->engMonth == 4) && (($this->engDate < 14) || ($this->engDate == 14 && $this->engHour < $this->morning))))
 $this->bangYear -= 1;
 }
 function bangla_number( $int ) {
 $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
 $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
 $converted = str_replace( $engNumber, $bangNumber, $int );
 return $converted;
 }
 function convert() {
 $this->bangDate = $this->bangla_number( $this->bangDate );
 $this->bangYear = $this->bangla_number( $this->bangYear );
 }
 function get_date() {
 return array($this->bangDate, $this->bangMonth, $this->bangYear);
 }
}
function ARdate($time)
{
$bn = new ArabicDate($time);
 $output = $bn->get_date();
 $ReadyDate = "$output[0] $output[1] $output[2]";
 return $ReadyDate;
}
?>