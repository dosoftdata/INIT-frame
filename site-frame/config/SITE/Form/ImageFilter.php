<?php
/**
 * Created by PhpStorm.
 * User: DoSoft
 * Date: 12/7/2015
 * Time: 11:59 PM
 */
/*
// +-----------------------------------+
// |        Image Filter v 1.0         |
// |      http://www.SysTurn.com       |
// +-----------------------------------+
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the ISLAMIC RULES and GNU Lesser General Public
//   License either version 2, or (at your option) any later version.
//
//   ISLAMIC RULES should be followed and respected if they differ
//   than terms of the GNU LESSER GENERAL PUBLIC LICENSE
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the license with this software;
//   If not, please contact support @ S y s T u r n .com to receive a copy.
*/
namespace SITE\Form;


class ImageFilter {
    private static $instance,
        $colorA = 7944996, #R  G  B
        $colorB = 16696767, #79 3B 24
        $arA = [], #FE C5 BF
        $arB = [];
    protected  static $_fileExtension = ['jpeg','png','jpg','pdf','pps','psd','ppt'],
        $_fileSize = 2097152;#2MB max file size
    #Prevent direct object initialize
    private function __construct(){}
    /**
     * singleton method used to access the object
     * @access public
     * @return
     */
    public static function singleton(){
        if( !isset( self::$instance ) ){
            $obj = __CLASS__;
            self::$instance = new $obj;
        }
        return self::$instance;
    }
    /**
     * prevent cloning of the object: issues an E_USER_ERROR if this is attempted
     */
    public function __clone(){
        trigger_error( 'Cloning the Image filter is not permitted', E_USER_ERROR );
    }
    #
    public static function GetScore($image){
        $x = 0;
        $y = 0;
        $img = self::_GetImageResource($image, $x, $y);
        if (!$img)
            return false;
        $score = 0;
        $xPoints = array($x / 8, $x / 4, ($x / 8 + $x / 4), $x - ($x / 8 + $x / 4), $x - ($x / 4), $x - ($x / 8));
        $yPoints = array($y / 8, $y / 4, ($y / 8 + $y / 4), $y - ($y / 8 + $y / 4), $y - ($y / 8), $y - ($y / 8));
        $zPoints = array($xPoints[2], $yPoints[1], $xPoints[3], $y);
        for ($i = 1; $i <= $x; $i++) {
            for ($j = 1; $j <= $y; $j++) {
                $color = imagecolorat($img, $i, $j);
                if ($color >= 7944996 && $color <= 16696767) {
                    $color = array(
                        'R' => ($color >> 16) & 0xFF,
                        'G' => ($color >> 8) & 0xFF,
                        'B' => $color & 0xFF);
                    if ($color['G'] >= self::$arA['G'] && $color['G'] <= self::$arB['G'] && $color['B'] >=
                        self::$arA['B'] && $color['B'] <= self::$arB['B']
                    ) {
                        if ($i >= $zPoints[0] && $j >= $zPoints[1] && $i <= $zPoints[2] && $j <= $zPoints[3]) {
                            $score += 3;
                        } elseif ($i <= $xPoints[0] || $i >= $xPoints[5] || $j <= $yPoints[0] || $j >= $yPoints[5]) {
                            $score += 0.10;
                        } elseif ($i <= $xPoints[0] || $i >= $xPoints[4] || $j <= $yPoints[0] || $j >= $yPoints[4]) {
                            $score += 0.40;
                        } else {
                            $score += 1.50;
                        }
                    }
                }
            }
        }
        imagedestroy($img);
        $score = sprintf('%01.2f', ($score * 100) / ($x * $y));
        if ($score > 100)
            $score = 100;
        return $score;
    }
    #
    private static function _GetImageResource($image, &$x, &$y){
        $info = GetImageSize($image);
        $x = $info[0];
        $y = $info[1];
        switch ($info[2]) {
            case IMAGETYPE_GIF:
                return @ImageCreateFromGif($image);
            case IMAGETYPE_JPEG:
                return @ImageCreateFromJpeg($image);
            case IMAGETYPE_PNG:
                return @ImageCreateFromPng($image);
            default:
                return false;
        }
    }

    public static function validDsFile($name){
        $imageExtension = self::getExtension($name);
        if (in_array($imageExtension, self::$_validExtention)) {
            return true;
        } else {
            return false;
        }
    }
    #
    protected static function getExtension($str){
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }
    #
    private static function ImageFilter(){
        self::$arA['R'] = (self::$colorA >> 16) & 0xFF;
        self::$arA['G'] = (self::$colorA >> 8) & 0xFF;
        self::$arA['B'] = self::$colorA & 0xFF;
        self::$arB['R'] = (self::$colorB >> 16) & 0xFF;
        self::$arB['G'] = (self::$colorB >> 8) & 0xFF;
        self::$arB['B'] = self::$colorB & 0xFF;
    }
    #
    private static function GetScoreAndFill($image, $outputImage){
        $x = 0;
        $y = 0;
        $img = self::_GetImageResource($image, $x, $y);
        if (!$img)
            return false;
        $score = 0;
        $xPoints = array($x / 8, $x / 4, ($x / 8 + $x / 4), $x - ($x / 8 + $x / 4), $x - ($x / 4), $x - ($x / 8));
        $yPoints = array($y / 8, $y / 4, ($y / 8 + $y / 4), $y - ($y / 8 + $y / 4), $y - ($y / 8), $y - ($y / 8));
        $zPoints = array($xPoints[2], $yPoints[1], $xPoints[3], $y);
        for ($i = 1; $i <= $x; $i++) {
            for ($j = 1; $j <= $y; $j++) {
                $color = imagecolorat($img, $i, $j);
                if ($color >= self::colorA && $color <= self::colorB) {
                    $color = array(
                        'R' => ($color >> 16) & 0xFF,
                        'G' => ($color >> 8) & 0xFF,
                        'B' => $color & 0xFF);
                    if ($color['G'] >= self::$arA['G'] && $color['G'] <= self::$arB['G'] && $color['B'] >=
                        self::$arA['B'] && $color['B'] <= self::$arB['B']
                    ) {
                        if ($i >= $zPoints[0] && $j >= $zPoints[1] && $i <= $zPoints[2] && $j <= $zPoints[3]) {
                            $score += 3;
                            imagefill($img, $i, $j, 16711680);
                        } elseif ($i <= $xPoints[0] || $i >= $xPoints[5] || $j <= $yPoints[0] || $j >= $yPoints[5]) {
                            $score += 0.10;
                            imagefill($img, $i, $j, 14540253);
                        } elseif ($i <= $xPoints[0] || $i >= $xPoints[4] || $j <= $yPoints[0] || $j >= $yPoints[4]) {
                            $score += 0.40;
                            imagefill($img, $i, $j, 16514887);
                        } else {
                            $score += 1.50;
                            imagefill($img, $i, $j, 512);
                        }
                    }
                }
            }
        }
        imagejpeg($img, $outputImage);
        imagedestroy($img);
        $score = sprintf('%01.2f', ($score * 100) / ($x * $y));
        if ($score > 100)
            $score = 100;
        return $score;
    }
} 