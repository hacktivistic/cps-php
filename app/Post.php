<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ref', 'user_id', 'title', 'post_text',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function getUser()
    {
        return User::find($this->user_id);
    }

    public function getContent()
    {

        // The Regular Expression filter
        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
        $data = $this->post_text;

        // Check if there is a url in the text
        if(preg_match($reg_exUrl, $data, $url)) {
            // make the urls hyper links
            $txt = preg_replace($reg_exUrl, "<a href=\"{$url[0]}\">{$url[0]}</a> ", $data);
        } else {
            $txt = $data;
        }

        return $txt;
    }
}
