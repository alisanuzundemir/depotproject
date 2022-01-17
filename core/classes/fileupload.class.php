<?php

/*
 * The MIT License
 *
 * Copyright 2017 Alişan Uzundemir <alisan.uzundemir@hamzagil.com>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Description of fileupload
 *
 * @author Alişan Uzundemir <alisan.uzundemir@hamzagil.com>
 */
class fileupload {
   
    public $allowedExtension = array(
        'png'   => 'image/png',
        'jpe'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'jpg'   => 'image/jpeg',
        'gif'   => 'image/gif',
        'bmp'   => 'image/bmp',
        'ico'   => 'image/vnd.microsoft.icon',
        'tiff'  => 'image/tiff',
        'tif'   => 'image/tiff',
        'svg'   => 'image/svg+xml',
        'svgz'  => 'image/svg+xml',
        'pdf'   => 'application/pdf',
        'odt'   => 'application/vnd.oasis.opendocument.text',
        'ods'   => 'application/vnd.oasis.opendocument.spreadsheet',
        'xls'   => 'application/vnd.ms-excel',
        'xlsx'  => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'docx'  => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    );
    
    public function uploadFile($file){
        $fileExtension = pathinfo($file["name"],PATHINFO_EXTENSION);
        
        if(array_key_exists($fileExtension, $this->allowedExtension)){
            $checkSize = $this->checkFileSize($file);
            if( $checkSize !== FALSE ){
                if(stristr($this->allowedExtension[$fileExtension],"application")){
                    return $this->fileUploads($file);
                }else{
                   return $this->imageUpload($file);
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
        
    }
    
    public function imageUpload($checkedFile){
        
        $image = new Upload( $checkedFile );
        if ( $image->uploaded ) {
            
            $isExploded		= pathinfo($checkedFile['name']);
            $barcode		= str_replace("_"," ", $isExploded['filename']);
            //$img_file_name	= $isExploded['filename'].".".$isExploded['extension'];
            $kripto_img		= makeCrypt($barcode , "e");
            
            $image->file_new_name_body = $kripto_img;
            // orjinal boyuttaki resimi _kayıt et
            $image->Process( hmzPatDir );
            
            if(!$image->processed) { return FALSE; }
            
            if(IMAGE_RESIZE == "TRUE"){

                $image->file_new_name_body = $kripto_img."1024x768";
                /* boyutlu resim olusturma alani */	
                $image->jpeg_quality = 70;
                $image->png_compression = 9;
                $image->image_resize = true;
                //$image->image_ratio_crop = true;
                $image->image_x = 1024;
                $image->image_ratio_y = true;
                $image->Process( hmzPatDir );
                
                if(!$image->processed) { return FALSE; }
                
                $image->file_new_name_body = $kripto_img."375x250";
                /* boyutlu resim olusturma alani */	
                $image->jpeg_quality = 70;
                $image->png_compression = 9;
                $image->image_resize = true;
                //$image->image_ratio_crop = true;
                $image->image_x = 375;
                $image->image_y = 250;

                $image->Process( hmzPatDir );
                
                if(!$image->processed) { return FALSE; }
            }
            
            return $kripto_img.".".$isExploded["extension"];
        }
        
    }
    
    public function fileUploads($checkedFile){
        
        //$newname = makeCrypt($checkedFile["name"] , "e");
        $isExploded		= pathinfo($checkedFile['name']);
        $barcode		= str_replace("_"," ", $isExploded['filename']);
        $kripto_img		= makeCrypt($barcode , "e");
        
        if (move_uploaded_file($checkedFile["tmp_name"], fileDir.$kripto_img.".".$isExploded["extension"])) {
            return $kripto_img.".".$isExploded["extension"];
        } else {
           return FALSE;
        }    
    }
    
    public function checkFileSize($checkedFile){
        
        if($checkedFile['size'] < MAX_FILES_SIZE){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}
