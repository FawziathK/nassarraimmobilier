<?php 
namespace Synext\Helpers;

use Exception;
use DateTime;
class Helpers{

    public static function checkFile($file_name,$file_size){
        $file_size_max = 3097152;
        $file_type = ['jpg', 'png', 'jpeg'];
        $file_ext = strtolower(substr(strchr($file_name, '.'), 1));
        if($file_size <= $file_size_max) {
            if (in_array($file_ext, $file_type)) {
                return $file_name;
            }
        }
        return false;
    }
    public static function uploadFile($file_name,$tempfile,$path){
        if($file_name){
            if(!file_exists($path)){ 
                try{
                    move_uploaded_file($tempfile, $path);
                    return true;
                }catch(Exception $e){
                    throw new Exception('ERROR UPLOADS');
                }
            }
        }

    }

    public static function uploadsFile($file_name,$file_size,$file_tmp,$destination,$img_name=null){

        $file_name = self::checkFile($file_name,$file_size);
        $path = $destination.$file_name;
        $upload = self::uploadFile($file_name,$file_tmp,$path);
        $name = explode('.',$file_name)[0];
        //ATTENSION VARIABLE SUPER GLOBAL
        if($img_name != null){
            $single_img_name = $img_name;
            $tmp_extension = explode('.',$file_name)[1];
            $new_path = $destination.$single_img_name.'.'.$tmp_extension;
            rename($path,$new_path);
            $file_name = $single_img_name.'.'.$tmp_extension;
            $name = $single_img_name;
            if($tmp_extension === 'png'){
                //imagepng(self::resizeImage($new_path,480,597),$new_path);
                //imagedestroy($new_path);
            }else{
                //imagejpeg(self::resizeImage($new_path,480,597),$new_path);
                //imagedestroy($new_path);
            }
        }else{
            $tmp_extension = explode('.',$file_name)[1];
            if($tmp_extension === 'png'){
                //imagepng(self::resizeImage($path,480,597),$path);
                //imagedestroy($new_path);
            }else{
                //imagejpeg(self::resizeImage($path,480,597),$path);
                //imagedestroy($new_path);
            }
        }
        return [$upload,$name,$file_name];
    }

    public static function resizeImage($file, $w, $h, $crop=FALSE) {
        list($width, $height) = getimagesize($file);
        $r = $width / $height;
        if ($crop) {
            if ($width > $height) {
                $width = ceil($width-($width*abs($r-$w/$h)));
            } else {
                $height = ceil($height-($height*abs($r-$w/$h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            $newheight = $h;
            $newwidth = $w;
        }
        if(explode('.',$file)[1] === 'png'){
            $src = imagecreatefrompng($file);
        }else{
            $src = imagecreatefromjpeg($file);
        }
        
        //imagecreatefrompng()
        $dst = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    
        return $dst;
    }

    public static function getExtrait(string $content, int $limit = 12)
    {
        if (strlen($content) <= $limit) {
            return $content;
        }

        return substr($content, 0, $limit).'..';
    }
    
    public static function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}

