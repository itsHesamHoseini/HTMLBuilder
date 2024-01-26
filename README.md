# HTMLBuilder
HTML Renderer is a library tool for writing and displaying HTML codes faster with PHP


you have NOT git? install it:
```bash
sudo apt-get update
sudo apt-get install git
```

Using Lib
```sh
git clone 'https://github.com/itsHesamHoseini/HTMLBuilder.git'
cd 'HTMLBuilder/src';
```


use project in your source :

```php
<?php
include('MakeHtmlClass.php');
$html=new htmlFunc(/* You can write here the name of the html file in which you want to save the project */);
$html->RenderHTML(
    $html->MakePage(true,[],$html->AddTag('head',
        $html->AddTag('title','Hello').
        $html->AddTag('meta','twitter_photo_link',['ref'=>'twitter','link'=>'https://salam.ir/1.jpg'])
                    ).
            $html->AddTag('body',
                $html->AddTag('h1','Hello',['id'=>'12','class'=>'hello','style'=>'text-align:center;']).
                $html->AddTag('h2','World',['id'=>'13','class'=>'Worlds','style'=>'text-align:right;']).
                $html->AddTag('h3','!',['id'=>'14','class'=>'Guys','style'=>'text-align:left;'])
            )
    )
);
?>
```
# About Functions!
```php
<?php
/*The AddTag function helps you create a new html tag.
This function has 3 inputs, and the first input is the name of the tag, the second input is the value of the tag, and the third input, which is an array, is the name of the attributes of the tag, as in the example above.
Note: The second and third parameters can be empty!*/
$html->AddTag (*tag_name*,*value of tag ( can be empty )* , attributes of tags ( must be array and can be empty));
```
---------------------------
```php
/*This function also has 3 inputs and the first input has a boolean value to add the !DOCTYPE expression to the html
The second parameter is the attributes of the html tag and the third parameter is the value of the <html> tag*/
$html->MakePage(true,
['lang'=>'fa'],
'<head></head><body></body>' /* or $html->AddTag('head').$html->AddTag('body');*/
);
```

