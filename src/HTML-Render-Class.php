<?php
/*
HTML-Render(v1.0) by itsHesamHoseini
*/
class htmlFunc{
    public string $path;
    public function RenderHTML(string $html){
        $file_name=$this->path;
        if(empty($file_name))
            (header('Content-type: text/html;charset=utf-8') || print($html) );
        else
            (file_put_contents($file_name, $html) && print("File Rendered! *$file_name*"));
    }
    public function MakePage(bool $doctype=false , array $attributes=[],string $value){
        $attr='';
        foreach($attributes as $key=>$attribute)
            $attr.=" $key='$attribute'";
        return "<". ($doctype == true ? '!DOCTYPE ' : '') ."html"."$attr>$value</"."html".">";
    }
    function __construct(string $file_name=''){
        $this->path=$file_name;
    }
    public function Is_tag_allowed($tag_name){
        switch($tag_name){
            case 'meta':
            case 'br':
            case 'hr':
            case 'img':
            case 'input':
            case 'link':
            case 'area':
            case 'base':
            case 'col':
            case 'command':
            case 'embed':
            case 'keygen':
            case 'param':
            case 'source':
            case 'audio':
            case 'track':
            case 'video':
                return false;
                break;
            default:
                return true;
                break;
        }
        return true;
    }
    /*public function GetTime(){
            return date('Y/m/d H:i:s]');
    }
    public function logger($kind_of_error){
        echo GetTime() . "$kind_of_error";
    }*/
    public function AddTag($tag_name,string $value='',array $attributes=[]){
        $attr='';
        foreach($attributes as $key=>$attribute)
            $attr.=" $key='$attribute'";
        if($this->Is_tag_allowed($tag_name))
            return "<".$tag_name."$attr>$value</".$tag_name.">";
        else
            return "<".$tag_name."$attr>";
    }
}
?>
